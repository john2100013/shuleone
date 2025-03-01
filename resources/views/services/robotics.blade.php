<!-- resources/views/services/robotics.blade.php -->
@extends('layouts.service-detail')

@php
$service_title = 'Robotics';
$video_thumbnail = asset('assets/images/robotics-thumbnail.jpg');
$video_caption = 'A kiosk point set up in a campus hall with a board on top of ShuleOne on a dim room in a comical show';
$icon_class = 'fa-robot';
$service_description = 'Hands-on learning meets innovation! Our robotics program allows students to design, build, and program robots, fostering critical thinking and teamwork. Through engaging projects, we empower learners to develop real-world engineering and programming skills.';
@endphp

@section('service_specific_content')
<!-- Program Features -->
<div class="row mb-5">
    <div class="col-md-4 mb-4">
        <div class="feature-card p-4 rounded-4 shadow-sm text-center h-100">
            <div class="icon-wrapper mb-3">
                <i class="fas fa-cogs fa-2x text-primary"></i>
            </div>
            <h4>Robot Construction</h4>
            <p>Hands-on experience building robots from components and understanding mechanical principles.</p>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="feature-card p-4 rounded-4 shadow-sm text-center h-100">
            <div class="icon-wrapper mb-3">
                <i class="fas fa-microchip fa-2x text-primary"></i>
            </div>
            <h4>Circuit Design</h4>
            <p>Learn about electronic components and create circuits that power robotic functions.</p>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="feature-card p-4 rounded-4 shadow-sm text-center h-100">
            <div class="icon-wrapper mb-3">
                <i class="fas fa-code fa-2x text-primary"></i>
            </div>
            <h4>Programming Skills</h4>
            <p>Develop coding abilities to control robot behavior, sensors, and motors.</p>
        </div>
    </div>
</div>
<div class="row mb-5">
    <div class="col-md-4 mb-4">
        <div class="feature-card p-4 rounded-4 shadow-sm text-center h-100">
            <div class="icon-wrapper mb-3">
                <i class="fas fa-project-diagram fa-2x text-primary"></i>
            </div>
            <h4>Problem-Solving</h4>
            <p>Face engineering challenges that require creative solutions and critical thinking.</p>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="feature-card p-4 rounded-4 shadow-sm text-center h-100">
            <div class="icon-wrapper mb-3">
                <i class="fas fa-users fa-2x text-primary"></i>
            </div>
            <h4>Team Collaboration</h4>
            <p>Work together in groups to design, build, and test robotic projects.</p>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="feature-card p-4 rounded-4 shadow-sm text-center h-100">
            <div class="icon-wrapper mb-3">
                <i class="fas fa-trophy fa-2x text-primary"></i>
            </div>
            <h4>Robotics Competitions</h4>
            <p>Opportunities to participate in local and national robotics challenges.</p>
        </div>
    </div>
</div>

<!-- Technologies Used Section -->
<div class="row mb-5">
    <div class="col-12">
        <div class="technologies-section p-4 rounded-4 shadow-sm border border-1">
            <h3 class="mb-4">Technologies & Equipment</h3>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="tech-item d-flex align-items-center">
                        <div class="tech-icon me-3">
                            <i class="fas fa-microchip fa-2x text-primary"></i>
                        </div>
                        <div class="tech-info">
                            <h5>Arduino</h5>
                            <p class="mb-0">Open-source electronics platform for beginners and advanced users.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="tech-item d-flex align-items-center">
                        <div class="tech-icon me-3">
                            <i class="fas fa-robot fa-2x text-primary"></i>
                        </div>
                        <div class="tech-info">
                            <h5>LEGO Mindstorms</h5>
                            <p class="mb-0">Robotics kit that combines LEGO bricks with programmable hardware.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="tech-item d-flex align-items-center">
                        <div class="tech-icon me-3">
                            <i class="fas fa-laptop-code fa-2x text-primary"></i>
                        </div>
                        <div class="tech-info">
                            <h5>Raspberry Pi</h5>
                            <p class="mb-0">Single-board computers for advanced programming and control.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="tech-item d-flex align-items-center">
                        <div class="tech-icon me-3">
                            <i class="fas fa-cog fa-2x text-primary"></i>
                        </div>
                        <div class="tech-info">
                            <h5>Sensors & Actuators</h5>
                            <p class="mb-0">Various components for robot perception and movement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
