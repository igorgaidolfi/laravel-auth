@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Modifica un progetto</h1>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('admin.projects.update', $project->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titolo"
                    required value="{{old('title') ?? $project->title}}">
            </div>
            <div class="form-group mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="URL"
                    value="{{old('img') ?? $project->img}}">
            </div>
            <div class="form-group mb-3">
                <label for="content" class="form-label">Contenuto</label>
                <textarea class="form-control" name="content" id="content" rows="3" placeholder="Contenuto"
                    required>{{old('content') ?? $project->content}}
                </textarea>
            <button class="btn btn-success mt-3" type="submit">Salva</button>
            </div>
        </form>
@endsection