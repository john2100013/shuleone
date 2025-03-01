<!-- resources/views/layouts/service-detail.blade.php -->
@extends('layouts.main')

@section('title', $service_title)

@section('body-class', 'service-detail-page')

@section('content')
<div class="container">
    <!-- Video Demo Section with Exact Specifications -->
    <div class="row my-5">
        <div class="col-12">
            <!-- Custom Video Container with Gradient Border -->
            <div class="position-relative" style="margin-bottom: 2rem;">
                <!-- Gradient border container -->
                <div style="width: 960px; height: 540px; border-radius: 26px; padding: 17px; background: linear-gradient(90deg, #CB2963, #F09439); margin: 0 auto;">
                    <!-- Inner content container -->
                    <div class="position-relative" style="width: 100%; height: 100%; border-radius: 13px; overflow: hidden;">
                        <!-- Video thumbnail and play button -->
                        <div class="position-relative" style="width: 100%; height: 100%;">
                            <img src="{{ $video_thumbnail }}" alt="{{ $service_title }}" style="width: 100%; height: 100%; object-fit: cover;">

                            <!-- Play button -->
                            <div class="position-absolute" style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                <button class="btn rounded-circle" style="width: 80px; height: 80px; background-color: rgba(255, 255, 255, 0.8); display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                    <i class="fas fa-play" style="font-size: 24px; color: #333;"></i>
                                </button>
                            </div>

                            <!-- Caption overlay at bottom -->
                            <div class="position-absolute" style="bottom: 0; left: 0; width: 100%; background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0.4), transparent); padding: 32px; color: white;">
                                <h4 style="font-weight: 600; margin-bottom: 5px;">Daybreak</h4>
                                <p class="mb-0" style="font-size: 14px;">A surfer pulls up in a camper van with a board on top at daybreak on a dirt road in a coastal area</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Additional Content Specific to Each Service -->
    @yield('service_specific_content')

    <!-- CTA Section -->
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h3 class="mb-4">Get Started Today</h3>
            <a href="{{ route('contact') }}" class="btn btn-primary px-4 py-2">Apply Now</a>
        </div>
    </div>
</div>

<style>
/* Custom styles for this page only */
.service-detail-page {
    padding-top: 90px;
}

/* Video player hover effects */
.service-detail-page .btn.rounded-circle:hover {
    transform: scale(1.1);
    background-color: rgba(255, 255, 255, 0.9);
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
}

/* Service box styling */
.service-box {
    background-color: #fff;
    transition: all 0.3s ease;
}

.service-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.service-icon {
    border-radius: 8px;
}

.service-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: #333;
}

.service-description {
    color: #666;
    line-height: 1.7;
}

/* CTA button styling */
.btn-primary {
    padding: 0.5rem 1.5rem;
    border-radius: 30px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

/* Responsive adjustments */
@media (max-width: 992px) {
    .service-detail-page [style*="width: 960px"] {
        width: 100% !important;
        height: auto !important;
        aspect-ratio: 16/9;
    }

    .service-detail-page [style*="width: 100%; height: 100%"] {
        aspect-ratio: 16/9;
    }
}
</style>
@endsection
