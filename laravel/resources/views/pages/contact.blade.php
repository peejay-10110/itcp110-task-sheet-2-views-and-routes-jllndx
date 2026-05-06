@extends('layouts.app')
@section('title', 'Contact — Juliana de Jesus')

@section('content')
<div class="page-banner">
  <div class="page-banner-content">
    <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span>/</span> Contact</p>
    <span class="section-tag">— Reach out</span>
    <h1 class="page-title">Let's <span class="highlight">Connect</span> 💌</h1>
  </div>
</div>

<div class="section">
  <div class="contact-layout">

    <!-- Left: Info -->
    <div>
      <span class="section-tag">— Where to find me</span>
      <h2 class="section-heading">Get In <span class="dot">Touch</span></h2>
      <div class="divider"></div>
      <p style="color:var(--text-muted); margin-bottom:2rem; line-height:1.8;">
  Whether you want to collaborate on a project, need a front-end developer,
  or just want to say hi — my inbox is always open. Let's create something meaningful and pixel-perfect together! 💻🌸
</p>
      <a href="mailto:julianaisabel.dejesus@tup.edu.ph" class="contact-info-item">
        <div class="contact-icon">📧</div>
        <div>
          <div class="contact-label">Email</div>
          <div class="contact-value">julianaisabel.dejesus@tup.edu.ph</div>
        </div>
      </a>

      <a href="https://facebook.com/JulianaDeJesus" target="_blank" rel="noopener" class="contact-info-item">
        <div class="contact-icon" style="background:linear-gradient(135deg,#1877f2,#0d5dbf);">📘</div>
        <div>
          <div class="contact-label">Facebook</div>
          <div class="contact-value">Juliana de Jesus</div>
        </div>
      </a>

      <a href="https://instagram.com/jllndx" target="_blank" rel="noopener" class="contact-info-item">
        <div class="contact-icon" style="background:linear-gradient(135deg,#e1306c,#833ab4);">📷</div>
        <div>
          <div class="contact-label">Instagram</div>
          <div class="contact-value">@jllndx</div>
        </div>
      </a>

      <div class="contact-info-item" style="cursor:default;">
        <div class="contact-icon" style="background:linear-gradient(135deg,#4CAF50,#2e7d32);">📍</div>
        <div>
          <div class="contact-label">Location</div>
          <div class="contact-value">Taguig City, Philippines</div>
        </div>
      </div>

      <!-- Availability badge -->
      <div style="margin-top:1.5rem;padding:1.25rem;background:rgba(76,175,80,0.1);border:1px solid rgba(76,175,80,0.3);border-radius:14px;display:flex;align-items:center;gap:1rem;">
        <div style="width:12px;height:12px;background:#4CAF50;border-radius:50%;box-shadow:0 0 10px rgba(76,175,80,0.6);flex-shrink:0;animation:pulse 2s infinite;"></div>
        <div>
          <div style="font-weight:600;font-size:0.9rem;color:#81C784;">Available for Project Collaboration</div>
          <div style="font-size:0.78rem;color:var(--text-muted);">Open to design projects, branding & collaborations</div>
        </div>
      </div>
      <style>@keyframes pulse{0%,100%{box-shadow:0 0 10px rgba(76,175,80,0.6)}50%{box-shadow:0 0 20px rgba(76,175,80,0.9)}}</style>
    </div>

    <!-- Right: Form -->
    <div>
      <div class="card" style="padding:2.5rem;">
        <h3 style="font-family:'Fredoka One',cursive;font-size:1.4rem;margin-bottom:0.25rem;">Send Me a Message</h3>
        <p style="color:var(--text-muted);font-size:0.88rem;margin-bottom:2rem;">I usually respond within 24 hours ✨</p>

        <form class="contact-form" action="{{ route('contact.send') }}" method="POST">
          @csrf

          <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
            <div class="form-group">
              <label class="form-label" for="first_name">First Name</label>
              <input type="text" id="first_name" name="first_name" class="form-input" placeholder="Your first name" required>
            </div>
            <div class="form-group">
              <label class="form-label" for="last_name">Last Name</label>
              <input type="text" id="last_name" name="last_name" class="form-input" placeholder="Your last name">
            </div>
          </div>

          <div class="form-group">
            <label class="form-label" for="email">Email Address</label>
            <input type="email" id="email" name="email" class="form-input" placeholder="your@email.com" required>
          </div>

          <div class="form-group">
            <label class="form-label" for="subject">Subject</label>
            <input type="text" id="subject" name="subject" class="form-input" placeholder="e.g. Collaboration, Project...">
          </div>

          <div class="form-group">
            <label class="form-label" for="message">Message</label>
            <textarea id="message" name="message" class="form-textarea" placeholder="Tell me about your project or just say hi! 🌸" required></textarea>
          </div>

          @if(session('success'))
            <div style="padding:0.85rem 1rem;background:rgba(76,175,80,0.12);border:1px solid rgba(76,175,80,0.3);border-radius:10px;color:#81C784;font-size:0.88rem;">
              ✅ {{ session('success') }}
            </div>
          @endif

          <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;padding:1rem;">
            Send Message 💌
          </button>
        </form>
      </div>
    </div>

  </div>
</div>
@endsection