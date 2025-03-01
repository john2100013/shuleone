@extends('layouts.main')

@section('title', 'Blog')
@section('body-class', 'blog-page')

@section('content')
<!-- Blog Section -->
<div class="container py-5">
    <h1 class="text-center mb-5 fw-bold">OUR BLOG</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Blog Post 1 -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                <img src="{{ asset('assets/images/Group 194.png') }}" alt="Blog post image" class="card-img-top">
                <div class="card-body p-4">
                    <div class="small text-muted mb-2">22 July 2025 • 4 min</div>
                    <h5 class="card-title fw-bold mb-3">Upcoming Event</h5>
                    <p class="card-text text-secondary">Remote work has drastically improved my design skills by giving me the freedom to experiment, focus, and learn at my own pace.</p>
                </div>
            </div>
        </div>

        <!-- Blog Post 2 -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                <img src="{{ asset('assets/images/Group 194.png') }}" alt="Blog post image" class="card-img-top">
                <div class="card-body p-4">
                    <div class="small text-muted mb-2">22 July 2025 • 4 min</div>
                    <h5 class="card-title fw-bold mb-3">Upcoming Event</h5>
                    <p class="card-text text-secondary">Remote work has drastically improved my design skills by giving me the freedom to experiment, focus, and learn at my own pace.</p>
                </div>
            </div>
        </div>

        <!-- Blog Post 3 -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                <img src="{{ asset('assets/images/Group 194.png') }}" alt="Blog post image" class="card-img-top">
                <div class="card-body p-4">
                    <div class="small text-muted mb-2">22 July 2025 • 4 min</div>
                    <h5 class="card-title fw-bold mb-3">Upcoming Event</h5>
                    <p class="card-text text-secondary">Remote work has drastically improved my design skills by giving me the freedom to experiment, focus, and learn at my own pace.</p>
                </div>
            </div>
        </div>

        <!-- Blog Post 4 -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                <img src="{{ asset('assets/images/Group 194.png') }}" alt="Blog post image" class="card-img-top">
                <div class="card-body p-4">
                    <div class="small text-muted mb-2">22 July 2025 • 4 min</div>
                    <h5 class="card-title fw-bold mb-3">Upcoming Event</h5>
                    <p class="card-text text-secondary">Remote work has drastically improved my design skills by giving me the freedom to experiment, focus, and learn at my own pace.</p>
                </div>
            </div>
        </div>

        <!-- Blog Post 5 -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                <img src="{{ asset('assets/images/Group 194.png') }}" alt="Blog post image" class="card-img-top">
                <div class="card-body p-4">
                    <div class="small text-muted mb-2">22 July 2025 • 4 min</div>
                    <h5 class="card-title fw-bold mb-3">Upcoming Event</h5>
                    <p class="card-text text-secondary">Remote work has drastically improved my design skills by giving me the freedom to experiment, focus, and learn at my own pace.</p>
                </div>
            </div>
        </div>

        <!-- Blog Post 6 -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                <img src="{{ asset('assets/images/Group 194.png') }}" alt="Blog post image" class="card-img-top">
                <div class="card-body p-4">
                    <div class="small text-muted mb-2">22 July 2025 • 4 min</div>
                    <h5 class="card-title fw-bold mb-3">Upcoming Event</h5>
                    <p class="card-text text-secondary">Remote work has drastically improved my design skills by giving me the freedom to experiment, focus, and learn at my own pace.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Subscription Section -->
    <div class="row mt-5 pt-4">
        <div class="col-12">
            <div class="bg-light rounded-4 p-4 p-md-5">
                <div class="row align-items-center">
                    <div class="col-md-7 mb-4 mb-md-0">
                        <h3 class="fw-bold mb-2">Subscribe to get latest updates</h3>
                        <p class="text-muted mb-0">Your email address</p>
                    </div>
                    <div class="col-md-5">
                        <div class="input-group">
                            <input type="email" class="form-control form-control-lg border-end-0" placeholder="Enter your email">
                            <button class="btn btn-success btn-lg px-4" type="button">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('additional_css')
<style>
    .card {
        transition: all 0.3s ease;
        border-radius: 16px !important;
    }
    .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    .card-img-top {
        height: 220px;
        object-fit: cover;
    }
    .btn-success {
        background-color: #4CAF50;
        border-color: #4CAF50;
    }
    .btn-success:hover {
        background-color: #3e9142;
        border-color: #3e9142;
    }
    .rounded-4 {
        border-radius: 16px !important;
    }
    h1.mb-5 {
        position: relative;
        display: inline-block;
        left: 50%;
        transform: translateX(-50%);
    }
    h1.mb-5:after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background-color: #4CAF50;
    }
    .form-control:focus {
        border-color: #4CAF50;
        box-shadow: 0 0 0 0.25rem rgba(76, 175, 80, 0.25);
    }
</style>
@endsection
