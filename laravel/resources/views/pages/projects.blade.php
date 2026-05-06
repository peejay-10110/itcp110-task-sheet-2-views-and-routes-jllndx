@extends('layouts.app')
@section('title', 'Projects — Juliana de Jesus')

@section('content')
<div class="page-banner">
  <div class="page-banner-content">
    <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span>/</span> Projects</p>
    <span class="section-tag">— College Creative Work</span>
    <h1 class="page-title">My <span class="highlight">Projects</span> 🖌️</h1>
  </div>
</div>

<div class="section">

  <!-- Filter tabs (visual only) -->
  <div style="display:flex;gap:0.5rem;flex-wrap:wrap;margin-bottom:2.5rem;">
    @foreach(['All','Hardware & IoT','Web Development','App Development','Film','Design'] as $cat)
      <span class="pill" style="cursor:pointer;padding:0.4rem 1.1rem;">{{ $cat }}</span>
    @endforeach
  </div>

  <div class="projects-grid">
    @php
      $projects = [
        ['emoji'=>'📱','title'=>'Desktop & Mobile Application','year'=>'2026','category'=>'App Development','desc'=>'Cross-platform application built for both desktop and mobile devices. Focused on user-friendly interface and seamless functionality across all screen sizes.','tags'=>['App Development','UI/UX','Cross-Platform','Mobile Design']],
        
        ['emoji'=>'🚀','title'=>'Portfolio Website v2','year'=>'2025','category'=>'Web Development','desc'=>'Completely redesigned portfolio website with enhanced animations, improved UI, and better project showcases. Leveled up from the previous version with new features.','tags'=>['Web Design','Frontend','Animations']],
        
        ['emoji'=>'🎬','title'=>'Short Film — Story to Screen','year'=>'2025','category'=>'Film','desc'=>'Wrote the original screenplay and produced it into a complete short film. Handled storytelling, scriptwriting, creative direction, and post-production oversight.','tags'=>['Screenwriting','Film Production','Direction','Storytelling']],
        
        ['emoji'=>'🌐','title'=>'Portfolio Website v1','year'=>'2024','category'=>'Web Development','desc'=>'Designed and developed a personal portfolio website showcasing creative works and projects. Features responsive design, interactive elements, and custom styling.','tags'=>['HTML/CSS','Responsive','UI/UX']],
        
        ['emoji'=>'💡','title'=>'Smart Street Lights Logic','year'=>'2024','category'=>'Hardware & IoT','desc'=>'Designed and built a functional diorama showcasing automated street lights logic using Arduino. Programmed sensor-based lighting that responds to real-time conditions.','tags'=>['Arduino','Circuit Design','Diorama','IoT','C++']],
      ];
    @endphp

    @foreach($projects as $project)
    <div class="project-card">
      <div class="project-thumb">{{ $project['emoji'] }}</div>
      <div class="project-body">
        <div class="project-year">{{ $project['year'] }} · {{ $project['category'] }}</div>
        <div class="project-title">{{ $project['title'] }}</div>
        <p class="project-desc">{{ $project['desc'] }}</p>
        <div class="project-tags">
          @foreach($project['tags'] as $tag)
            <span class="pill" style="font-size:0.72rem;padding:0.25rem 0.7rem;">{{ $tag }}</span>
          @endforeach
        </div>
      </div>
    </div>
    @endforeach

  </div>

  <div style="text-align:center;margin-top:3rem;padding:2rem;background:rgba(255,45,120,0.06);border:1px solid var(--card-border);border-radius:20px;">
    <p style="font-family:'Caveat',cursive;font-size:1.3rem;color:var(--soft-pink);margin-bottom:1rem;">
      Want to see more? Let's connect! 💗
    </p>
    <a href="{{ route('contact') }}" class="btn btn-primary">Get In Touch →</a>
  </div>

</div>
@endsection