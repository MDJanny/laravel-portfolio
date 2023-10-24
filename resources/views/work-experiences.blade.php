@extends('layouts.app')
@section('title', 'Work Experiences')
@section('content')
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
    @foreach ($workExperiences as $workExperience)
    <div class="col">
        <div class="card d-flex flex-row">
            <img src="{{ $workExperience['companyLogo'] }}" alt="..." class="img-fluid" style="max-width: 100px;">
            <div class="card-body">
                <div class="card-title">
                    <h5 class="fw-bold">
                        <a href="{{ $workExperience['companyWebsite'] }}" target="_blank" class="text-decoration-none">
                            {{ $workExperience['companyName'] }}
                        </a>
                    </h5>
                </div>
                <p class="card-text">
                    {{ $workExperience['jobTitle'] }}
                    <br>
                    {{ $workExperience['workPeriod'] }}
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection