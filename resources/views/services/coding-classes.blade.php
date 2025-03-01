<!-- resources/views/services/coding-classes.blade.php -->

@extends('layouts.service-detail')

@php
$service_title = 'Coding Classes';
$video_thumbnail = asset('assets/images/coding-class-thumbnail.jpg');
$video_caption = 'A classroom with a computer with children on the first step of operating on a campus way';
$icon_class = 'fa-code';
$service_description = 'We introduce kids to the world of coding through interactive lessons tailored to their age and skill level. Our curriculum covers:';
@endphp

@section('service_specific_content')
<!-- Main Content Section with Card Styling -->
<div class="row mb-5">
    <div class="col-12">
        <div class="card border-0 shadow-sm rounded-4 p-4 mb-5">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <div class="me-3" style="width: 60px; height: 60px; background-color: #fcf1f6; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-code" style="color: #d63384; font-size: 24px;"></i>
                    </div>
                    <h2 class="mb-0" style="color: #333; font-weight: 600;">Coding Classes</h2>
                </div>

                <p class="mb-4" style="color: #555; line-height: 1.6;">
                    We introduce students to the world of coding through interactive lessons tailored to their age and skill level.
                    Our curriculum covers:
                </p>

                <div class="curriculum-overview mt-4">
                    <div class="mb-3">
                        <p style="color: #6c757d;"><span style="color: #d63384; font-weight: 600;">Scratch</span> - A beginner-friendly, block-based coding platform that helps young learners grasp programming concepts through fun, interactive projects.</p>
                    </div>

                    <div class="mb-3">
                        <p style="color: #6c757d;"><span style="color: #d63384; font-weight: 600;">HTML & CSS</span> - The building blocks of web development, teaching students how to create and style their own websites.</p>
                    </div>

                    <div class="mb-3">
                        <p style="color: #6c757d;"><span style="color: #d63384; font-weight: 600;">JavaScript</span> - The language that brings websites to life! Students learn how to add interactivity and animations to web pages.</p>
                    </div>

                    <div class="mb-3">
                        <p style="color: #6c757d;"><span style="color: #d63384; font-weight: 600;">Python for Kids</span> - A simplified approach to one of the world's most popular programming languages, helping children develop problem-solving and logical thinking skills.</p>
                    </div>

                    <div class="mb-3">
                        <p style="color: #6c757d;"><span style="color: #d63384; font-weight: 600;">Android Development</span> - Young learners explore mobile app development, creating their own simple Android applications.</p>
                    </div>

                    <div class="mb-3">
                        <p style="color: #6c757d;"><span style="color: #d63384; font-weight: 600;">Robotics</span> - A blend of coding and engineering, where students design, build, and program robots to perform exciting tasks and challenges.</p>
                    </div>

                    <p class="mt-4" style="color: #555;">With hands-on projects and expert guidance, we empower students with essential digital skills for the future.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 2025 Intakes Section -->
<div class="row mb-5">
    <div class="col-12">
        <h2 class="text-center mb-4" style="color: #333; font-weight: 600;">2025 Intakes</h2>

        <div class="row g-4">
            <!-- Intake Card 1 -->
            <div class="col-md-4" style="padding: 0 31.87px;">
                <div style="width: 365.44px; height: 393.24px; background-color: #F4B767; opacity: 0.70; border-radius: 10.62px; padding: 42.49px 26.56px;">
                    <h3 class="text-center mb-4" style="color: #333; font-weight: 600;">Full-time</h3>

                    <div class="d-flex justify-content-between mb-2">
                        <span style="color: #666; font-weight: 500;">Start date</span>
                        <span style="color: #333;">24th Feb 2025</span>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <span style="color: #666; font-weight: 500;">Duration</span>
                        <span style="color: #333;">24th Feb 2025</span>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <span style="color: #666; font-weight: 500;">Start date</span>
                        <span style="color: #333;">24th Feb 2025</span>
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                        <span style="color: #666; font-weight: 500;">Start date</span>
                        <span style="color: #333;">24th Feb 2025</span>
                    </div>

                    <div class="text-center mt-4">
                        <a href="{{ route('apply') }}" class="btn px-4 py-2" style="border-radius: 30px; font-weight: 500; background-color: #d63384; border-color: #d63384; color: white;">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- Intake Card 2 -->
            <div class="col-md-4" style="padding: 0 31.87px;">
                <div style="width: 365.44px; height: 393.24px; background-color: #F4B767; opacity: 0.70; border-radius: 10.62px; padding: 42.49px 26.56px;">
                    <h3 class="text-center mb-4" style="color: #333; font-weight: 600;">Full-time</h3>

                    <div class="d-flex justify-content-between mb-2">
                        <span style="color: #666; font-weight: 500;">Start date</span>
                        <span style="color: #333;">24th Feb 2025</span>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <span style="color: #666; font-weight: 500;">Duration</span>
                        <span style="color: #333;">24th Feb 2025</span>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <span style="color: #666; font-weight: 500;">Start date</span>
                        <span style="color: #333;">24th Feb 2025</span>
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                        <span style="color: #666; font-weight: 500;">Start date</span>
                        <span style="color: #333;">24th Feb 2025</span>
                    </div>

                    <div class="text-center mt-4">
                        <a href="{{ route('apply') }}" class="btn px-4 py-2" style="border-radius: 30px; font-weight: 500; background-color: #d63384; border-color: #d63384; color: white;">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- Intake Card 3 -->
            <div class="col-md-4" style="padding: 0 31.87px;">
                <div style="width: 365.44px; height: 393.24px; background-color: #F4B767; opacity: 0.70; border-radius: 10.62px; padding: 42.49px 26.56px;">
                    <h3 class="text-center mb-4" style="color: #333; font-weight: 600;">Full-time</h3>

                    <div class="d-flex justify-content-between mb-2">
                        <span style="color: #666; font-weight: 500;">Start date</span>
                        <span style="color: #333;">24th Feb 2025</span>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <span style="color: #666; font-weight: 500;">Duration</span>
                        <span style="color: #333;">24th Feb 2025</span>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <span style="color: #666; font-weight: 500;">Start date</span>
                        <span style="color: #333;">24th Feb 2025</span>
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                        <span style="color: #666; font-weight: 500;">Start date</span>
                        <span style="color: #333;">24th Feb 2025</span>
                    </div>

                    <div class="text-center mt-4">
                        <a href="{{ route('apply') }}" class="btn px-4 py-2" style="border-radius: 30px; font-weight: 500; background-color: #d63384; border-color: #d63384; color: white;">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Get Started Section with Image -->
<div class="row mb-5 align-items-center">
    <div class="col-md-7">
        <h3 style="color: #333; font-weight: 600;">Get Started Today</h3>
        <p style="color: #555; line-height: 1.6;">Class time is dynamic yet of teaching tools built to help instructors build coding labs. Teachers can handout assignments in real time for students to complete and submit.</p>
    </div>
    <div class="col-md-5">
        <img src="{{ asset('assets/images/student.png') }}" alt="Young coder" class="img-fluid rounded-4 shadow-sm">
    </div>
</div>
@endsection
