@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center my-2">
            <h1>Projects</h1>
            <div>
                <a href="{{route('admin.projects.create')}}" class="btn btn-primary">Add project</a>
            </div>
        </div>
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Slug</th>
                        <th>Page</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $proj)
                    <tr>
                        <td>{{$proj->id}}</td>
                        <td>{{$proj->title}}</td>
                        <td>{{$proj->slug}}</td>
                        <td>{{Str::limit($proj->content, 25, '...');}}</td>
                        <td>
                            <a href="{{route('admin.projects.show', ['project' => $proj->id])}}" class="btn btn-info">More</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection