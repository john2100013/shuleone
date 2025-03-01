<!-- resources/views/services/school-erp.blade.php -->
@extends('layouts.service-detail')

@php
$service_title = 'School ERP System';
$video_thumbnail = asset('assets/images/erp-demo-thumbnail.jpg');
$video_caption = 'A kiosk point set up in a campus hall with a board on top of ShuleOne on a dim room in a comical show';
$icon_class = 'fa-school';
$service_description = 'We simplify school administration with our powerful ERP system. From student enrollment to attendance tracking, fee management, and performance analysis, our solution streamlines operations—allowing schools to focus on what matters most: education.';
@endphp

@section('service_specific_content')
<!-- Additional content specific to School ERP -->
<div class="row mb-5">
    <div class="col-md-4 mb-4">
        <div class="feature-card p-4 rounded-4 shadow-sm text-center h-100">
            <div class="icon-wrapper mb-3">
                <i class="fas fa-users fa-2x text-primary"></i>
            </div>
            <h4>Student Management</h4>
            <p>Comprehensive student records, enrollment tracking, and demographic analysis.</p>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="feature-card p-4 rounded-4 shadow-sm text-center h-100">
            <div class="icon-wrapper mb-3">
                <i class="fas fa-calendar-check fa-2x text-primary"></i>
            </div>
            <h4>Attendance System</h4>
            <p>Automated attendance tracking with reports and SMS notifications for parents.</p>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="feature-card p-4 rounded-4 shadow-sm text-center h-100">
            <div class="icon-wrapper mb-3">
                <i class="fas fa-money-bill-wave fa-2x text-primary"></i>
            </div>
            <h4>Fee Management</h4>
            <p>Streamlined fee collection, payment tracking, and automated reminders.</p>
        </div>
    </div>
</div>
<div class="row mb-5">
    <div class="col-md-4 mb-4">
        <div class="feature-card p-4 rounded-4 shadow-sm text-center h-100">
            <div class="icon-wrapper mb-3">
                <i class="fas fa-chart-line fa-2x text-primary"></i>
            </div>
            <h4>Performance Analytics</h4>
            <p>Comprehensive reporting on student performance with visual analytics.</p>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="feature-card p-4 rounded-4 shadow-sm text-center h-100">
            <div class="icon-wrapper mb-3">
                <i class="fas fa-chalkboard-teacher fa-2x text-primary"></i>
            </div>
            <h4>Teacher Portal</h4>
            <p>Dedicated interfaces for teachers to manage classes, assignments, and grades.</p>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="feature-card p-4 rounded-4 shadow-sm text-center h-100">
            <div class="icon-wrapper mb-3">
                <i class="fas fa-mobile-alt fa-2x text-primary"></i>
            </div>
            <h4>Parent Mobile App</h4>
            <p>Keep parents informed with real-time updates on attendance, grades, and events.</p>
        </div>
    </div>
</div>
@endsection
