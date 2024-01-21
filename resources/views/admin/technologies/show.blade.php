@extends('layouts.app')
@section('content')
    <section class="container">

        <h1>{{ $technology->name }}</h1>
        @if ($technology->projects)
        @endif
        <ul>
            @forelse ($technology->projects as $project)
                <li>{{ $project->title }}</li>
            @empty
                <li>No posts</li>
            @endforelse

        </ul>

        <a href="{{ route('admin.technologies.edit', $technology->slug) }}" class="btn btn-success ">Modifica</a>
    </section>
@endsection
