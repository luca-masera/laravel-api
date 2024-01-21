<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Front-end', 'Back-end', 'Full Stack'];

        foreach ($types as $el) {
            $newType = new Type();
            $newType->name = $el;
            $newType->slug = Str::slug($el, '-');
            $newType->save();
        }


    }
}
