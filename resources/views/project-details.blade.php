@extends('layouts.app')
@section('title', 'Project Details')
@section('content')
<div class="row">
    <div class="col-auto">
        <img src="{{ $project['image'] }}" class="img-fluid mb-4 mb-md-0" alt="...">
    </div>
    <div class="col">
        <h2 class="mb-4">{{ $project['title'] }}</h2>
        <p>{{ $project['description'] }}</p>
        <p>
            <a href="{{ $project['github_link'] }}" class="btn btn-secondary" target="_blank">Github</a>
            <a href="{{ $project['demo_link'] }}" class="btn btn-primary" target="_blank">Live Demo</a>
        </p>
    </div>
</div>
<div>
    <a href="/projects" class="d-block mt-2 mt-lg-3 text-decoration-none">&laquo; All Projects</a>
</div>
@endsection