@extends('layouts.main')

@section('title', 'Contact Us')

@section('body-class', 'contact-page')

@section('content')
    <section class="contact-hero-section" style="padding-top: 120px; background-color: #f8f9fa;">
        <div class="container py-5">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="display-4 fw-bold mb-4">Contact Us</h1>
                    <p class="lead mb-5">Have questions? We're here to help. Reach out to our team today.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="contact-info p-4 bg-white shadow-sm rounded">
                        <h3 class="mb-4">Contact Information</h3>

                        <div class="d-flex mb-3">
                            <div class="icon-box me-3">
                                <i class="fas fa-map-marker-alt text-primary"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Address</h5>
                                <p class="mb-0">123 Business Centre, Nairobi, Kenya</p>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="icon-box me-3">
                                <i class="fas fa-phone-alt text-primary"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Phone</h5>
                                <p class="mb-0">+254 700 123 456</p>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="icon-box me-3">
                                <i class="fas fa-envelope text-primary"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Email</h5>
                                <p class="mb-0">info@shuleone.com</p>
                            </div>
                        </div>

                        <div class="social-media mt-4">
                            <h5 class="mb-3">Follow Us</h5>
                            <div class="d-flex">
                                <a href="#" class="me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                                <a href="#" class="me-3"><i class="fab fa-twitter fa-lg"></i></a>
                                <a href="#" class="me-3"><i class="fab fa-instagram fa-lg"></i></a>
                                <a href="#" class="me-3"><i class="fab fa-linkedin-in fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-form p-4 bg-white shadow-sm rounded">
                        <h3 class="mb-4">Send us a message</h3>
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject">
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map-section py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center mb-4">Find Us</h3>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63920.614421577835!2d36.78495491835224!3d-1.2999190622648141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11655c311541%3A0x9dd769ac1c01c607!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2sus!4v1613664663194!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
