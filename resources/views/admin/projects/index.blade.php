@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Lista Posts</h1>
        <table class="table">
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->title }}</td>
                        <td class="d-flex justify-content-end align-items-center">
                            <a href="{{ route('admin.projects.show', $project->slug) }}" class="btn btn-success ">Mostra</a>

                            <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="cancel-button">Elimina</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                <a href="{{ route('admin.projects.create', $project->slug) }}" class="btn btn-success ">Crea</a>

            </tbody>
        </table>
    </section>
    @include('partials.modal_delete');
@endsection
