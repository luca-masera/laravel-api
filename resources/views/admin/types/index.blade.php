@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Lista Type</h1>
        <table class="table">
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <td>{{ $type->name }}</td>
                        <td class="d-flex justify-content-end align-items-center">
                            <a href="{{ route('admin.types.show', $type->slug) }}" class="btn btn-success ">Mostra</a>

                            <form action="{{ route('admin.types.destroy', $type->slug) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="cancel-button">Elimina</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                <a href="{{ route('admin.types.create', $type->slug) }}" class="btn btn-success ">Crea un nuovo tipo</a>

            </tbody>
        </table>
    </section>
    @include('partials.modal_delete');
@endsection
