@extends('layouts.app')
@section('title', 'About — Juliana de Jesus')

@section('content')
<div class="page-banner">
  <div class="page-banner-content">
    <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span>/</span> About</p>
    <span class="section-tag">— Get to know me</span>
    <h1 class="page-title">About <span class="highlight">Me</span></h1>
  </div>
</div>

<div class="section">
  <div class="about-layout">

    <!-- Photo -->
    <div>
      <img
    src="{{ asset('images/juliana.jpg') }}"
    alt="Juliana de Jesus"
        class="about-photo"
        onerror="this.style.background='linear-gradient(135deg,rgba(255,45,120,0.3),rgba(216,27,96,0.2))';this.style.minHeight='360px';this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 280 360%22%3E%3Ctext x=%22140%22 y=%22190%22 font-size=%22100%22 text-anchor=%22middle%22%3E%3C/text%3E%3C/svg%3E'"
      />
      <div style="margin-top:1.5rem;display:flex;flex-direction:column;gap:0.6rem;">
        <a href="{{ route('contact') }}" class="btn btn-primary" style="justify-content:center;"> Let's Work Together</a>
        <a href="{{ route('skills') }}" class="btn btn-outline" style="justify-content:center;"> See My Skills</a>
      </div>
    </div>

    <!-- Text content -->
    <div>
      <span class="section-tag">— My story</span>
      <h2 class="section-heading">Hello, I'm <span class="dot">Juliana</span> 🌸</h2>
      <div class="divider"></div>

      <p style="color:var(--text-muted);margin-bottom:1.5rem;line-height:1.8;">
        I'm a 20-year-old College Student from Taguig City, Philippines.
        I study at Technological University of the Philippines - Taguig.
      </p>
      <p style="color:var(--text-muted); margin-bottom:2rem; line-height:1.8;">
  My front-end approach balances <strong style="color:var(--text-main);">clean, semantic code</strong> with 
  <strong style="color:var(--text-main);">delightful user interactions</strong>. Whether I'm building a responsive interface,
  optimizing performance, or bringing a design to life with motion, I focus on creating experiences that feel
  seamless, accessible, and a joy to use.
</p>

      <!-- Quick facts -->
      <div style="margin-bottom:2rem;">
        <h3 style="font-family:'Fredoka One',cursive;font-size:1.1rem;color:var(--yellow);margin-bottom:1rem;">Quick Facts</h3>
        <div class="about-fact">
          <span class="fact-icon">📍</span>
          <p class="fact-text"><strong>Location:</strong> Taguig City, Philippines</p>
        </div>
        <div class="about-fact">
          <span class="fact-icon">🎂</span>
          <p class="fact-text"><strong>Age:</strong> 20 years old</p>
        </div>
        <div class="about-fact">
          <span class="fact-icon">🎓</span>
          <p class="fact-text"><strong>Degree:</strong> Bachelor of Tech-Voc Teacher Education - Computer Programming (2024-prsent)</p>
        </div>
        <div class="about-fact">
          <span class="fact-icon">🛠️</span>
          <p class="fact-text"><strong>Specialties:</strong> Web Development, UI/UX Design</p>
        </div>
        <div class="about-fact">
          <span class="fact-icon">📧</span>
          <p class="fact-text"><strong>Email:</strong> julianaisabel.dejesus@tup.edu.ph</p>
        </div>
        <div class="about-fact">
          <span class="fact-icon">🌐</span>
          <p class="fact-text"><strong>Social:</strong> @jllndx (Instagram) · Juliana de Jesus (Facebook)</p>
        </div>
      </div>

      <!-- Personality traits -->
      <h3 style="font-family:'Fredoka One',cursive;font-size:1.1rem;color:var(--yellow);margin-bottom:1rem;">My Values</h3>
      <div style="display:flex;flex-wrap:wrap;gap:0.5rem;">
        @foreach(['Creative ','Detail-Oriented ','Collaborative ','Adaptable ','Passionate '] as $trait)
          <span class="pill">{{ $trait }}</span>
        @endforeach
      </div>
    </div>

  </div>
</div>
@endsection