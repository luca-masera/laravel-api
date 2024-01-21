@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Create Projects</h1>
        <form action="{{ route('admin.projects.store') }}" enctype="multipart/form-data" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    required maxlength="200" value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type_id">Select Types</label>
                <select class="form-control @error('type_id') is-invalid @enderror" name="type_id" id="type_id">
                    <option value="">Select Type</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}"{{ old('type_id') == $type->id ? 'selected' : '' }}>
                            {{ $type->name }}</option>
                    @endforeach
                </select>
                @error('type_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="body">Body</label>
                <textarea type="text" class="form-control @error('body') is-invalid @enderror" name="body" id="body"
                    cols="30" row="5" value="{{ old('body') }}">
                </textarea>

                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="nb-3">
                <div class="form-group">
                    <h6>Select Technology</h6>
                    @foreach ($technologies as $technology)
                        <div class="form-check @error('technologies') is-invalid @enderror">
                            <input type="checkbox" class="form-check-input" name="technologies[]"
                                value="{{ $technology->id }}"
                                {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                {{ $technology->name }}
                            </label>
                        </div>
                    @endforeach
                    @error('technologies')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <img id="uploadPreview" width="100" src="https://picsum.photos/200/300">
            </div>

            <div class="mb-3">
                <label for="image">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                    id="image" value="{{ old('image') }}">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Invia</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </section>
@endsection
