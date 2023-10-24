@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="row">
    <div class="col-auto text-center mx-auto order-md-1 mb-4">
        <img src="{{ asset($biodata['image']) }}" alt="..." class="d-block figure-img img-fluid rounded"
            style="width:300px;">
    </div>
    <div class="col order-md-0">
        <p class="lead mb-0">
            Hi, I'm <strong>{{ $biodata['name'] }}</strong>. I'm a {{ $biodata['designation'] }}. I have
            {{ $biodata['experience'] }} of experience in Web Development.
        </p>
        <p>
            <a href="mailto:{{ $biodata['email'] }}" class="btn btn-primary mt-3">Contact Me</a>
        </p>

        <h2 class="mt-5 mb-4 border-bottom py-2">Skills</h2>
        @foreach($biodata['skills'] as $skill)
        <div class="mb-3">
            <h5 class="fw-bold">{{ $skill['name'] }}</h5>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: <?= $skill['level'] ?>"
                    aria-valuenow="{{ $skill['level'] }}" aria-valuemin="0" aria-valuemax="100">
                    {{ $skill['level'] }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endsection