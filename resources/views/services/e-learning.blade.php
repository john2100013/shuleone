<!-- resources/views/services/e-learning.blade.php -->
@extends('layouts.service-detail')

@php
$service_title = 'E-Learning';
$video_thumbnail = asset('assets/images/e-learning-thumbnail.jpg');
$video_caption = 'A kiosk point set up in a campus hall with a board on top of ShuleOne on a dim room in a comical show';
$icon_class = 'fa-laptop';
$service_description = 'Learning beyond the classroom! Our e-learning platform provides access to high-quality educational resources, live classes, and interactive content. With personalized learning paths, students can learn at their own pace, ensuring a deeper understanding of concepts.';
@endphp

@section('service_specific_content')
<!-- E-Learning Features -->
<div class="row mb-5">
    <div class="col-md-4 mb-4">
        <div class="feature-card p-4 rounded-4 shadow-sm text-center h-100">
            <div class="icon-wrapper mb-3">
                <i class="fas fa-video fa-2x text-primary"></i>
            </div>
            <h4>Live Virtual Classes</h4>
            <p>Interactive online classes with real-time teacher interaction and student participation.</p>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="feature-card p-4 rounded-4 shadow-sm text-center h-100">
            <div class="icon-wrapper mb-3">
                <i class="fas fa-book fa-2x text-primary"></i>
            </div>
            <h4>Digital Resources</h4>
            <p>Access to e-books, videos, simulations, and other multimedia learning materials.</p>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="feature-card p-4 rounded-4 shadow-sm text-center h-100">
            <div class="icon-wrapper mb-3">
                <i class="fas fa-tasks fa-2x text-primary"></i>
            </div>
            <h4>Interactive Assessments</h4>
            <p>Engaging quizzes, assignments, and tests with immediate feedback.</p>
        </div>
    </div>
</div>
<div class="row mb-5">
    <div class="col-md-4 mb-4">
        <div class="feature-card p-4 rounded-4 shadow-sm text-center h-100">
            <div class="icon-wrapper mb-3">
                <i class="fas fa-user-graduate fa-2x text-primary"></i>
            </div>
            <h4>Personalized Learning</h4>
            <p>Adaptive content that adjusts to each student's learning pace and style.</p>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="feature-card p-4 rounded-4 shadow-sm text-center h-100">
            <div class="icon-wrapper mb-3">
                <i class="fas fa-users fa-2x text-primary"></i>
            </div>
            <h4>Collaborative Learning</h4>
            <p>Group activities, discussions, and projects to promote peer learning.</p>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="feature-card p-4 rounded-4 shadow-sm text-center h-100">
            <div class="icon-wrapper mb-3">
                <i class="fas fa-chart-bar fa-2x text-primary"></i>
            </div>
            <h4>Progress Tracking</h4>
            <p>Detailed analytics on student performance with customized reports.</p>
        </div>
    </div>
</div>

<!-- Benefits Section -->
<div class="row mb-5">
    <div class="col-12">
        <div class="benefits-section p-4 rounded-4 shadow-sm border border-1">
            <h3 class="mb-4">Benefits of Our E-Learning Platform</h3>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Learn at your own pace and schedule</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Access from anywhere with internet connection</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Immediate feedback on assessments</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Reduced learning costs</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Continuous updates to learning materials</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Connect with teachers and peers virtually</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
