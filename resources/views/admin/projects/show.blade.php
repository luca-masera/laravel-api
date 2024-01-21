@extends('layouts.app')
@section('content')
    <section class="container">
        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
        <h1>{{ $project->title }}</h1>
        <a class="badge text-bg-primary"
            href="{{ route('admin.types.show', $project->type->slug) }}">{{ $project->type->name }}</a>
        <p>{{ $project->body }}</p>
        <span>{{ $project->type ? $project->type->name : 'Uncategorized' }}</span>
        <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-success ">Modifica</a>
        @if (count($project->technologies) > 0)
            <div class="mb-3">
                <h4>Tags</h4>
                @foreach ($project->technologies as $technology)
                    <a class="badge rounded-pill text-bg-success"
                        href="{{ route('admin.technologies.show', $technology->slug) }}">{{ $technology->name }}</a>
                @endforeach

            </div>
        @endif
    </section>
@endsection
