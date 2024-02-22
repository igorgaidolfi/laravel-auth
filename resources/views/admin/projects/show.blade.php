@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center my-2">
            <h1>Project {{$project->id}}</h1>
        </div>
        <div>
            <h1>{{$project->title}}</h1>
            <h3>{{$project->slug}}</h3>
            <p>{{$project->content}}</p>
        </div>
@endsection