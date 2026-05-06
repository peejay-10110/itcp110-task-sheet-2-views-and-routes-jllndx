@extends('layouts.app')

@section('title', 'Experience - Juliana de Jesus')

@section('content')
<!-- Page Banner -->
<div class="page-banner">
    <div class="page-banner-content">
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span>/</span>
            <span>Experience</span>
        </div>
        <h1 class="page-title">My <span class="highlight">Journey</span></h1>
        <div class="divider"></div>
    </div>
</div>

<section class="section">
    <span class="section-tag">✦ Professional Path</span>
    <h2 class="section-heading">Work <span class="highlight">Experience</span></h2>
    <div class="divider"></div>

    <div class="exp-grid">
        <!-- Experience 1 -->
        <div class="exp-card card">
            <div class="exp-card-header">
                <div>
                    <div class="exp-role">Student Assistant</div>
                    <div class="exp-company">Registrar's Office</div>
                    <div class="exp-period">2023 — Work Immersion</div>
                </div>
                <div class="exp-icon">📋</div>
            </div>
            <div class="exp-desc">
                Assisted in document processing, encoding student records, and providing frontline services to students and faculty.
            </div>
        </div>

        <!-- Experience 2 -->
        <div class="exp-card card">
            <div class="exp-card-header">
                <div>
                    <div class="exp-role">Student Assistant</div>
                    <div class="exp-company">Office of the Assistant Director for Administration and Finance — KALAHI SIDSS</div>
                    <div class="exp-period">2025</div>
                </div>
                <div class="exp-icon">📊</div>
            </div>
            <div class="exp-desc">
                Supported administrative and financial operations, assisted in report preparation, and coordinated office tasks under KALAHI SIDSS program.
            </div>
        </div>
    </div>
</section>

<section class="section">
    <span class="section-tag">🎓 Leadership & Involvement</span>
    <h2 class="section-heading">Organizations <span class="dot"></span> Affiliations</h2>
    <div class="divider"></div>

    <div class="exp-grid">
        <!-- Organization 1 -->
        <div class="exp-card card">
            <div class="exp-card-header">
                <div>
                    <div class="exp-role">Assistant Publication Officer</div>
                    <div class="exp-company">TEST APPELCOM</div>
                    <div class="exp-period">A.Y. 2024 — 2025</div>
                </div>
                <div class="exp-icon">📰</div>
            </div>
            <div class="exp-desc">
                Assisted in managing publication materials, content creation, and documentation for organization events and announcements.
            </div>
        </div>

        <!-- Organization 2 -->
        <div class="exp-card card">
            <div class="exp-card-header">
                <div>
                    <div class="exp-role">Member</div>
                    <div class="exp-company">TEST</div>
                    <div class="exp-period">2024 — Present</div>
                </div>
                <div class="exp-icon">🤝</div>
            </div>
            <div class="exp-desc">
                Actively participated in organization activities, meetings, and contributed to team projects and initiatives.
            </div>
        </div>
    </div>
</section>

@endsection