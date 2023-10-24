@extends('layouts.app')
@section('title', 'Projects')
@section('content')
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
    @foreach ($projects as $project)
    <div class="col">
        <a class="text-decoration-none" href="/projects/{{ $project['id'] }}">
            <div class="card">
                <img src="{{ $project['image'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="card-title">
                        <a href="/projects/{{ $project['id'] }}" class="text-decoration-none">
                            <h5 class="fw-bold">
                                {{ $project['title'] }}
                            </h5>
                        </a>
                    </div>
                    <p class="card-text">{{ substr($project['description'], 0, 100) }}...</p>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection