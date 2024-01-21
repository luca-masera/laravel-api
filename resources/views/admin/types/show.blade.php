@extends('layouts.app')
@section('content')
    <section class="container">

        <h1>{{ $type->name }}</h1>
        <ul>
            @forelse ($type->projects as $project)
                <li>{{ $project->title }}</li>
            @empty
                <li>No posts</li>
            @endforelse

        </ul>

        <a href="{{ route('admin.types.edit', $type->slug) }}" class="btn btn-success ">Modifica</a>
    </section>
@endsection
