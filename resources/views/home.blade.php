@extends('layouts.main')

@section('title', 'Best ERP & Software Solutions for Schools in Kenya')

@section('body-class', 'index-page')

@section('content')
    <!-- Banner Slides Section-->
    <div id="educationSlider" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#educationSlider" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#educationSlider" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#educationSlider" data-bs-slide-to="2"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url('assets/images/2a710ea439cb095b9ce450eb0bd22505.png');">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="slide-heading">Quality Education By Any Means Necessary.</h1>
                                <p class="slide-subtitle">Empowering minds for a brighter future</p>
                                <button class="btn btn-started btn-lg text-white">Get Started</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url('assets/images/steptodown.com712764.jpg');">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="slide-heading">Inspiring Tomorrow's Leaders Today</h1>
                                <p class="slide-subtitle">Creating pathways to success</p>
                                <button class="btn btn-started btn-lg text-white">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url('assets/images/steptodown.com637562.jpg');">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="slide-heading">Building Strong Foundations</h1>
                                <p class="slide-subtitle">Every child deserves quality education</p>
                                <button class="btn btn-started btn-lg text-white">Join Us</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Centered Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#educationSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#educationSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Services Slides Section-->
    <div class="container mt-5">
        <h2 class="services-title-services fw-bold">Services</h2>
        <div class="carousel-container-services">
            <div class="carousel-controls-services">
                <button class="carousel-control-services" id="prevBtn">&#8249;</button>
                <button class="carousel-control-services" id="nextBtn">&#8250;</button>
            </div>
            <div class="carousel-inner-services" id="carousel">
                <div class="carousel-item-services">
                    <div class="card-services">
                        <img src="assets/images/Group 189.png" alt="School ERP">
                        <div class="card-body-services">
                            <h5 class="card-title-services">School ERP Systems</h5>
                            <p class="card-text-services">Shuleone school management software helps traditional and online schools manage scheduling, attendance, payments, and virtual classrooms.</p>
                            <a href="#" class="btn-learn-more-services">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-services">
                    <div class="card-services">
                        <img src="assets/images/Group 193.png" alt="Coding Classes">
                        <div class="card-body-services">
                            <h5 class="card-title-services">Coding Classes</h5>
                            <p class="card-text-services">Helping schools manage scheduling, attendance, payments, and virtual classrooms.</p>
                            <a href="#" class="btn-learn-more-services">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-services">
                    <div class="card-services">
                        <img src="assets/images/Group 194.png" alt="Robotics">
                        <div class="card-body-services">
                            <h5 class="card-title-services">Robotics</h5>
                            <p class="card-text-services">School management software for managing scheduling, attendance, and more.</p>
                            <a href="#" class="btn-learn-more-services">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-services">
                    <div class="card-services">
                        <img src="assets/images/Group 189.png" alt="Robotics">
                        <div class="card-body-services">
                            <h5 class="card-title-services">Robotics</h5>
                            <p class="card-text-services">School management software for managing scheduling, attendance, and more.</p>
                            <a href="#" class="btn-learn-more-services">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-services">
                    <div class="card-services">
                        <img src="assets/images/Group 189.png" alt="Robotics">
                        <div class="card-body-services">
                            <h5 class="card-title-services">Robotics</h5>
                            <p class="card-text-services">School management software for managing scheduling, attendance, and more.</p>
                            <a href="#" class="btn-learn-more-services">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Section-->
    <div class="card-container-youtube">
        <div class="card card-container-youtube-card">
            <div class="card-container-youtube-video-container">
            <iframe
            class="card-container-youtube-iframe"
            src="https://www.youtube.com/embed/WTeKMIaxICM?autoplay=1&mute=1"
            title="YouTube video"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
            </iframe>
            <div class="card-container-youtube-gradient"></div>
            <div class="card-container-youtube-overlay-text">
                <h3 class="card-container-youtube-title">Daybreak</h3>
                <p class="card-container-youtube-description">A surfer pulls up in a camper van with a board on top at daybreak on a dirt road in a coastal area</p>
            </div>
            </div>
            <div class="card-body card-container-youtube-body">
            <h2 class="card-container-youtube-heading">Description</h2>
            <p class="card-container-youtube-text">Graphs displaying your performance for metrics like follower evolution, average engagement rate per post and reach and impressions to give you the insights.</p>
            <a href="#" class="card-container-youtube-link">
                Request Demo <span class="card-container-youtube-arrow">→</span>
            </a>
            </div>
        </div>
    </div>

    <!-- Module Section-->
<div class="container text-center mt-5">
    <h2 class="services-title-services fw-bold">Our Modules</h2>

    <!-- First row of modules -->
    <div class="row g-4">
        <div class="col-md-3">
            <div class="module-card p-3">
                <i class="fas fa-user-graduate module-icon"></i>
                <h5 class="module-title">Admissions</h5>
                <p>Manage student registrations, admissions, and related processes effortlessly.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="module-card bg-white p-3">
                <i class="fas fa-dollar-sign module-icon"></i>
                <h5 class="module-title">Finance</h5>
                <p>Handle fee payments, expenses, refunds, and financial reporting seamlessly.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="module-card bg-white p-3">
                <i class="fas fa-chart-line module-icon"></i>
                <h5 class="module-title">Exam Analysis</h5>
                <p>Analyze exam results, track student progress, and generate detailed performance reports.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="module-card bg-white p-3">
                <i class="fas fa-comments module-icon"></i>
                <h5 class="module-title">Communications</h5>
                <p>Send SMS alerts, emails, and manage communication between parents, teachers, and students.</p>
            </div>
        </div>
    </div>

    <!-- Second row of modules -->
    <div class="row g-4 mt-3">
        <div class="col-md-3">
            <div class="module-card bg-white p-3">
                <i class="fas fa-laptop module-icon"></i>
                <h5 class="module-title">E-learning</h5>
                <p>Host online classes, share educational content, and manage virtual learning environments.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="module-card bg-white p-3">
                <i class="fas fa-user-tie module-icon"></i>
                <h5 class="module-title">HR/Payroll</h5>
                <p>Manage staff details, payroll, and performance records with ease.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="module-card bg-white p-3">
                <i class="fas fa-clipboard-check module-icon"></i>
                <h5 class="module-title">Attendance</h5>
                <p>Monitor student and staff attendance through biometric or manual registers.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="module-card bg-white p-3">
                <i class="fas fa-calendar-alt module-icon"></i>
                <h5 class="module-title">Timetabling</h5>
                <p>Organize school timetables for classes, exams, and events effortlessly.</p>
            </div>
        </div>
    </div>

    <!-- Third row of modules -->
    <div class="row g-4 mt-3">
        <div class="col-md-3">
            <div class="module-card bg-white p-3">
                <i class="fas fa-book module-icon"></i>
                <h5 class="module-title">Library</h5>
                <p>Manage library books, track borrowing, and organize the digital library collection.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="module-card bg-white p-3">
                <i class="fas fa-boxes module-icon"></i>
                <h5 class="module-title">Inventory</h5>
                <p>Monitor and control school inventory, from textbooks to sports equipment, with real-time tracking.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="module-card bg-white p-3">
                <i class="fas fa-flask module-icon"></i>
                <h5 class="module-title">Virtual Labs</h5>
                <p>Engage students in practical, science-based learning with virtual labs.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="module-card bg-white p-3">
                <i class="fas fa-cogs module-icon"></i>
                <h5 class="module-title">Admin</h5>
                <p>Manage overall system settings, user roles, permissions, and configurations.</p>
            </div>
        </div>
    </div>
</div>
@endsection
