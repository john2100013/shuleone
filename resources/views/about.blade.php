@extends('layouts.main')

@section('title', 'About Us')

@section('content')
<!-- Vision Section -->
<!-- Vision Section -->
<section class="vision-section">
    <div class="vision-container position-relative">
        <!-- Background Image -->
        <img src="{{ asset('assets/images/happychildren-hero.png') }}" alt="Happy children raising hands in classroom" class="img-fluid w-100">

        <!-- Overlay with Purple Gradient -->
        <div class="vision-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-5">
                        <div class="vision-content text-white">
                            <h1 class="fw-bold mb-4">Our Vision</h1>
                            <p class="vision-text">
                                "A future where every school runs efficiently, and every child learns with innovation, supported by smart management and engaging digital education."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.vision-section {
    margin-bottom: 0;
}

.vision-container {
    height: 500px;
    overflow: hidden;
}

.vision-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.vision-overlay {
    background: linear-gradient(90deg, rgba(98, 0, 128, 0.85) 0%, rgba(98, 0, 128, 0.65) 70%, rgba(98, 0, 128, 0.4) 100%);
    padding: 60px 0;
}

.vision-content h1 {
    font-size: 2.5rem;
    margin-bottom: 1.5rem;
}

.vision-text {
    font-size: 1.1rem;
    line-height: 1.6;
    max-width: 500px;
}

@media (max-width: 768px) {
    .vision-container {
        height: 400px;
    }

    .vision-content h1 {
        font-size: 2rem;
    }

    .vision-text {
        font-size: 1rem;
    }
}
</style>
<!-- Mission Section -->

<!-- Mission Section -->
<section class="mission-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row align-items-center">
                    <!-- Image Column -->
                    <div class="col-md-6">
                        <div class="mission-image-container position-relative">
                            <img src="{{asset('assets/images/happychildren-hero.png') }}" alt="Happy children singing" class="img-fluid w-100 rounded" style="display: block; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                        </div>
                    </div>

                    <!-- Text Column -->
                    <div class="col-md-6">
                        <div class="mission-content ps-md-4">
                            <h3 class="text-primary fw-bold mb-3">Mission</h3>
                            <p>
                                "To simplify school management and transform learning through innovative technology, including ERP, e-learning, coding, robotics, and a powerful Learning Management System."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.mission-section {
    padding: 70px 0;
}

.mission-content h3 {
    color: #4B0082;
    font-size: 1.5rem;
}

.mission-content p {
    color: #555;
    line-height: 1.6;
}

.mission-image-container {
    margin-bottom: 20px;
}

@media (max-width: 767px) {
    .mission-content {
        padding-top: 20px;
        padding-left: 0 !important;
    }
}
</style>


<!-- Values Section -->
<!-- Values Section -->
<section class="values-section py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-4">OUR VALUES</h2>
        <div class="row g-4">
            <!-- Integrity Card -->
            <div class="col-md-4">
                <div class="card h-100 border-1 rounded-4 overflow-hidden" style="border-color: #E83E8C;">
                    <img src="{{ asset('assets/images/Group 189.png') }}" alt="Empty classroom" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-2">Integrity</h5>
                        <p class="card-text text-muted" style="font-size: 0.9rem;">
                            Upholding honesty and strong moral principles in all we do.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Excellence Card -->
            <div class="col-md-4">
                <div class="card h-100 border-1 rounded-4 overflow-hidden" style="border-color: #E83E8C;">
                    <img src="{{ asset('assets/images/Group 193.png') }}" alt="Empty classroom" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-2">Excellence</h5>
                        <p class="card-text text-muted" style="font-size: 0.9rem;">
                            Striving for the highest academic and personal achievements.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Innovation Card -->
            <div class="col-md-4">
                <div class="card h-100 border-1 rounded-4 overflow-hidden" style="border-color: #E83E8C;">
                    <img src="{{ asset('assets/images/Group 194.png') }}" alt="Empty classroom" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-2">Innovation</h5>
                        <p class="card-text text-muted" style="font-size: 0.9rem;">
                            Encouraging creativity, technology use, and problem-solving.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.values-section .card {
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    transition: transform 0.2s;
}

.values-section .card:hover {
    transform: translateY(-5px);
}

.values-section .card-title {
    color: #000;
    font-size: 1.2rem;
}

.values-section h2 {
    color: #333;
    letter-spacing: 0.5px;
}

@media (max-width: 767px) {
    .values-section .row {
        gap: 1.5rem !important;
    }
}
</style>
@endsection

@section('additional_css')
<style>
    .vision-content {
        display: flex;
        align-items: center;
    }

    .mission-image-container {
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .card {
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    @media (max-width: 768px) {
        .vision-content {
            padding: 30px 15px !important;
        }
    }
</style>
@endsection
