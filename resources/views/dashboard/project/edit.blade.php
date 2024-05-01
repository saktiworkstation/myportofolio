@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit projects</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/projects/{{ $project->id }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" required autofocus value="{{ old('title', $project->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Publihed Date</label>
                <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url"
                    required autofocus value="{{ old('url', $project->url) }}">
                @error('url')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="description" type="hidden" name="description"
                    value="{{ old('description', $project->description) }}">
                <trix-editor input="description"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Edit projects</button>
        </form>
    </div>
@endsection
