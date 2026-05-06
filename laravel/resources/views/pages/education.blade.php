@extends('layouts.app')
@section('title', 'Education — Juliana de Jesus')

@section('content')
<div class="page-banner">
  <div class="page-banner-content">
    <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span>/</span> Education</p>
    <span class="section-tag">— My academic journey</span>
    <h1 class="page-title">Education <span class="highlight">Journey</span> 🎓</h1>
  </div>
</div>

<div class="section">
  <div style="max-width:760px;">

    <span class="section-tag">— From the beginning</span>
    <h2 class="section-heading">Where it all <span class="dot">started</span></h2>
    <div class="divider"></div>

    <div class="timeline">

      {{-- COLLEGE --}}
      <div class="timeline-item">
        <div class="card">
          <div style="display:flex;justify-content:space-between;align-items:flex-start;flex-wrap:wrap;gap:0.5rem;">
            <div>
              <span class="pill-yellow pill" style="margin-bottom:0.75rem;">College</span>
              <div class="timeline-period">2024 – Present</div>
              <div class="timeline-school">Technological University of the Philippines - Taguig</div>
              <div class="timeline-degree">Bachelor of Tech-Voc Teacher Education - Computer Programming (B.T.V.T.E.)</div>
            </div>
            <span style="font-size:2.5rem;">🏛️</span>
          </div>
          <p class="timeline-desc" style="margin-top:0.75rem;">
            Taking a four-year degree in Computer Programming, focusing on software development, web design, and programming languages. Actively led and contributed to various
            student organizations and projects throughout college.
          </p>
          <div style="display:flex;flex-wrap:wrap;gap:0.4rem;margin-top:1rem;">
            @foreach(['Software Development','Web Design','Programming','Database Management','Project Management'] as $sub)
              <span class="pill" style="font-size:0.75rem;">{{ $sub }}</span>
            @endforeach
          </div>
        </div>
      </div>

      {{-- SHS / JHS --}}
      <div class="timeline-item">
        <div class="card">
          <div style="display:flex;justify-content:space-between;align-items:flex-start;flex-wrap:wrap;gap:0.5rem;">
            <div>
              <span class="pill-yellow pill" style="margin-bottom:0.75rem;">Senior High School</span>
              <div class="timeline-period">2022 – 2024</div>
              <div class="timeline-school">Bagumbayan National High School</div>
              <div class="timeline-degree">HUMSS — Humanities & Social Sciences</div>
            </div>
            <span style="font-size:2.5rem;">📚</span>
          </div>
          <p class="timeline-desc" style="margin-top:0.75rem;">
            Pursued the HUMSS strand, developing a strong foundation in communication, creative writing,
            and social sciences. Discovered my love for visual arts and story writing during this period.
          </p>
          <div style="display:flex;flex-wrap:wrap;gap:0.4rem;margin-top:1rem;">
            @foreach(['Creative Writing','Communication','Visual Arts','Social Sciences'] as $sub)
              <span class="pill" style="font-size:0.75rem;">{{ $sub }}</span>
            @endforeach
          </div>
        </div>
      </div>

      {{-- JHS --}}
      <div class="timeline-item">
        <div class="card">
          <div style="display:flex;justify-content:space-between;align-items:flex-start;flex-wrap:wrap;gap:0.5rem;">
            <div>
              <span class="pill-yellow pill" style="margin-bottom:0.75rem;">Junior High School</span>
              <div class="timeline-period">2018 – 2022</div>
              <div class="timeline-school">Your Junior High School</div>
              <div class="timeline-degree">General Education</div>
            </div>
            <span style="font-size:2.5rem;">✏️</span>
          </div>
          <p class="timeline-desc" style="margin-top:0.75rem;">
            Built a solid academic foundation during junior high school, where I began
            experimenting with art and discovered my passion for writing and creative expression.
            Participated in school art contests such as slogan making and developed early design sensibilities.
          </p>
        </div>
      </div>

      {{-- ELEMENTARY --}}
      <div class="timeline-item">
        <div class="card">
          <div style="display:flex;justify-content:space-between;align-items:flex-start;flex-wrap:wrap;gap:0.5rem;">
            <div>
              <span class="pill-yellow pill" style="margin-bottom:0.75rem;">Elementary</span>
              <div class="timeline-period">2012 – 2018</div>
              <div class="timeline-school">Your Elementary School</div>
              <div class="timeline-degree">Primary Education</div>
            </div>
            <span style="font-size:2.5rem;">🌱</span>
          </div>
          <p class="timeline-desc" style="margin-top:0.75rem;">
            Where it all began! Elementary school nurtured my curiosity and love for learning.
            Early on, I was drawn to art classes and would fill notebooks with doodles — the
            first seeds of what would become my career as a designer.
          </p>
        </div>
      </div>

    </div>

    <div style="margin-top:2rem;padding:1.5rem;background:rgba(255,217,61,0.08);border:1px solid rgba(255,217,61,0.25);border-radius:16px;">
      <p style="font-family:'Caveat',cursive;font-size:1.2rem;color:var(--yellow);text-align:center;">
        "Education is not about filling a bucket, but lighting a fire. Let that fire warm your ambition and burn away every doubt that says 'I can't'." 🔥
      </p>
    </div>

  </div>
</div>
@endsection