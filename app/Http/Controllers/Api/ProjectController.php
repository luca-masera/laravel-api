<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{

    public function index(Request $request)
    {
        $typeId = $request->query('type');

        if ($typeId) {
            $projects = Project::where('type_id', $typeId)->paginate(4);

        } else {
            $projects = Project::paginate(4);
        }

        return response()->json(
            [
                'success' => true,
                'results' => $projects
            ]
        );
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->with(['technologies', 'type'])->first();
        return response()->json(
            [
                'success' => true,
                'results' => $project
            ]
        );

    }

}
