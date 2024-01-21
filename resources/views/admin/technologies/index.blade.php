@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Lista technology</h1>
        <table class="table">
            <tbody>
                @foreach ($technologies as $technology)
                    <tr>
                        <td>{{ $technology->name }}</td>
                        <td class="d-flex justify-content-end align-items-center">
                            <a href="{{ route('admin.technologies.show', $technology->slug) }}"
                                class="btn btn-success ">Mostra</a>

                            <form action="{{ route('admin.technologies.destroy', $technology->slug) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button technology="submit" class="cancel-button">Elimina</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                <a href="{{ route('admin.technologies.create', $technology->slug) }}" class="btn btn-success ">Crea un nuovo
                    tipo</a>

            </tbody>
        </table>
    </section>
    @include('partials.modal_delete');
@endsection
