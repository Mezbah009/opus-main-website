@extends('front.layouts.app')

@section('content')


<style>
    .job-card {
        height: 100%;
    }
    .job-title {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        height: 3rem; /* Adjust height based on the desired number of lines */
    }

    .view-details-btn {
        background-color: #0E72B4;
        color: #FFFFFF;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none; /* Ensures the button appears as a button and not a link */
    }
    .view-details-btn:hover {
        background-color: #0D4472; /* Optional: Darken the color on hover for better UX */
    }
</style>

<div class="contact-bg" style="background-image: url('{{ asset("front-assets/img/jobs.jpg") }}');">
    <h2>Jobs</h2>
    <div class="line">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<div class="container mt-5 pt-4">
    <div class="row align-items-end mb-4">
        <div>
            <div class="section-title text-center text-md-start">
                <h4 class="title mb-4">Find the perfect jobs</h4>
                <p class="text-muted mb-0 para-desc">Join us and contribute to the enterprise market’s disruption! Join us; we’ll give you a fantastic opportunity to grow and learn while being a part of a fun team and experience.</p>
                <h6><strong>Email: hr@opus-bd.com</strong></h6>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row">
        @foreach ($jobs as $job)
        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div class="card job-card border-0 bg-light rounded shadow">
                <div class="card-body p-4">
                    <span class="badge rounded-pill view-details-btn float-md-end mb-3 mb-sm-0">{{ $job->job_type }}</span>
                    <h5 class="job-title">{{ $job->designation }}</h5>
                    <div class="mt-3">
                        <span class="text-muted d-block">Post Date: &nbsp <i class="fa fa-calendar" aria-hidden="true"></i> {{ $job->start_date }} &nbsp&nbsp</span>
                        <span class="text-muted d-block">Last Submission Date: &nbsp<i class="fa fa-calendar" aria-hidden="true"></i> {{ $job->end_date }} &nbsp&nbsp
                        </span>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('job.show', ['slug' => $job->slug]) }}" class="view-details-btn">View Details</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        @endforeach
    </div><!--end row-->
</div>
<br><br><br>


@endsection
