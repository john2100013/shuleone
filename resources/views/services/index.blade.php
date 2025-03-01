@extends('layouts.main')

@section('content')
<section class="services-hero">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Our Services</h1>
                <p class="lead">Comprehensive educational technology solutions to transform your learning experience</p>
            </div>
        </div>
    </div>
</section>

<section class="services-list">
    <div class="container">
        <div class="row">
            @foreach($services as $service)
            <div class="col-md-6 mb-4">
                <div class="service-card">
                    <div class="service-image">
                        <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="img-fluid">
                    </div>
                    <div class="service-content">
                        <h3>{{ $service['title'] }}</h3>
                        <p>{{ $service['description'] }}</p>
                        <a href="{{ route($service['route']) }}" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="why-choose-us">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2>Why Choose ShuleOne?</h2>
                <p class="lead">We are committed to providing innovative educational solutions</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="feature-item text-center">
                    <div class="feature-icon">
                        <i class="bi bi-stars"></i>
                    </div>
                    <h3>Quality Education</h3>
                    <p>Our programs are designed by education experts to ensure the highest quality learning experience.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="feature-item text-center">
                    <div class="feature-icon">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                    <h3>Innovative Approach</h3>
                    <p>We leverage the latest technologies and methodologies to make learning effective and engaging.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="feature-item text-center">
                    <div class="feature-icon">
                        <i class="bi bi-person-check"></i>
                    </div>
                    <h3>Expert Support</h3>
                    <p>Our team of experienced educators and technical experts provide ongoing support throughout your journey.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2>What Our Clients Say</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"The coding classes have transformed our school's technology curriculum. Students are now excited about learning programming!"</p>
                    </div>
                    <div class="testimonial-author">
                        <h4>John Smith</h4>
                        <p>Principal, Westside High School</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"The School ERP system has streamlined our administrative processes and improved communication with parents."</p>
                    </div>
                    <div class="testimonial-author">
                        <h4>Jane Doe</h4>
                        <p>Administrator, Sunshine Elementary</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"E-Learning has allowed our students to continue their education uninterrupted, even during challenging times."</p>
                    </div>
                    <div class="testimonial-author">
                        <h4>Robert Johnson</h4>
                        <p>Director, Education Forward Institute</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-cta">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Ready to Transform Your Education Experience?</h2>
                <p>Contact us today to learn more about our services and how we can help you achieve your educational goals.</p>
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get in Touch</a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    /* Services Page Styles */
    .services-hero {
        padding: 120px 0 60px;
        background-color: #f9f9f9;
    }

    .services-hero h1 {
        color: #d84078;
        margin-bottom: 20px;
    }

    .services-list {
        padding: 60px 0;
    }

    .service-card {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        height: 100%;
        transition: transform 0.3s;
    }

    .service-card:hover {
        transform: translateY(-5px);
    }

    .service-image img {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }

    .service-content {
        padding: 20px;
    }

    .service-content h3 {
        color: #333;
        margin-bottom: 15px;
    }

    .service-content .btn {
        background-color: #d84078;
        border-color: #d84078;
        margin-top: 15px;
    }

    .service-content .btn:hover {
        background-color: #c13567;
        border-color: #c13567;
    }

    /* Why Choose Us Section */
    .why-choose-us {
        padding: 60px 0;
        background-color: #f9f9f9;
    }

    .feature-item {
        padding: 30px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        height: 100%;
    }

    .feature-icon {
        font-size: 48px;
        color: #d84078;
        margin-bottom: 20px;
    }

    /* Testimonials Section */
    .testimonials {
        padding: 60px 0;
    }

    .testimonial-card {
        background-color: #fff;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        height: 100%;
    }

    .testimonial-content {
        font-style: italic;
        position: relative;
        padding: 0 20px;
    }

    .testimonial-content:before {
        content: '"';
        font-size: 60px;
        color: #f1f1f1;
        position: absolute;
        left: -15px;
        top: -20px;
    }

    .testimonial-author {
        margin-top: 20px;
        padding-top: 20px;
        border-top: 1px solid #eee;
    }

    .testimonial-author h4 {
        margin-bottom: 5px;
        color: #d84078;
    }

    .testimonial-author p {
        margin: 0;
        color: #777;
    }

    /* Contact CTA */
    .contact-cta {
        background-color: #fff5f5;
        padding: 60px 0;
    }

    .contact-cta h2 {
        color: #d84078;
        margin-bottom: 20px;
    }

    .contact-cta .btn {
        background-color: #d84078;
        border-color: #d84078;
        margin-top: 20px;
    }

    .contact-cta .btn:hover {
        background-color: #c13567;
        border-color: #c13567;
    }
</style>
@endsection
