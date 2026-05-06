@extends('layouts.app')
@section('title', 'Skills — Juliana de Jesus')

@section('content')
<div class="page-banner">
  <div class="page-banner-content">
    <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span>/</span> Skills</p>
    <span class="section-tag">— Tools & Abilities</span>
    <h1 class="page-title">My <span class="highlight">Skills</span> ⚡</h1>
  </div>
</div>

<div class="section">

  <!-- Technical Skills -->
  <span class="section-tag">— Software & Tools</span>
  <h2 class="section-heading">Technical <span class="dot">Skills</span></h2>
  <div class="divider"></div>

  <div class="skills-grid">

    <div class="card">
      <div class="skill-category-title">🎨 Design Tools</div>
      @php
        $designTools = [
          ['name'=>'Adobe Photoshop','level'=>60],
          ['name'=>'Canva','level'=>95],
          ['name'=>'Procreate','level'=>70],
        ];
      @endphp
      @foreach($designTools as $tool)
      <div class="skill-item">
        <div class="skill-label">
          <span>{{ $tool['name'] }}</span>
          <span style="color:var(--soft-pink);">{{ $tool['level'] }}%</span>
        </div>
        <div class="skill-bar-track">
          <div class="skill-bar-fill" style="width:{{ $tool['level'] }}%"></div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="card">
      <div class="skill-category-title">💻 Development & Tech</div>
      @php
        $devTools = [
          ['name'=>'Laravel / PHP','level'=>75],
          ['name'=>'HTML / CSS','level'=>90],
          ['name'=>'Arduino (C++)','level'=>80],
          ['name'=>'Flutter / Mobile Dev','level'=>70],
          ['name'=>'UI/UX Design','level'=>75],
        ];
      @endphp
      @foreach($devTools as $tool)
      <div class="skill-item">
        <div class="skill-label">
          <span>{{ $tool['name'] }}</span>
          <span style="color:var(--soft-pink);">{{ $tool['level'] }}%</span>
        </div>
        <div class="skill-bar-track">
          <div class="skill-bar-fill" style="width:{{ $tool['level'] }}%"></div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="card">
      <div class="skill-category-title">🎬 Video & Motion</div>
      @php
        $videoTools = [
          ['name'=>'CapCut / Video Editing','level'=>85],
          ['name'=>'Film Production','level'=>80],
          ['name'=>'Screenwriting','level'=>85],
        ];
      @endphp
      @foreach($videoTools as $tool)
      <div class="skill-item">
        <div class="skill-label">
          <span>{{ $tool['name'] }}</span>
          <span style="color:var(--soft-pink);">{{ $tool['level'] }}%</span>
        </div>
        <div class="skill-bar-track">
          <div class="skill-bar-fill" style="width:{{ $tool['level'] }}%"></div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="card">
      <div class="skill-category-title">✏️ Creative & Visual</div>
      @php
        $creativeSkills = [
          ['name'=>'Illustration & Drawing','level'=>60],
          ['name'=>'Layout & Typography','level'=>65],
          ['name'=>'Photography','level'=>90],
          ['name'=>'Visual Storytelling','level'=>90],
        ];
      @endphp
      @foreach($creativeSkills as $skill)
      <div class="skill-item">
        <div class="skill-label">
          <span>{{ $skill['name'] }}</span>
          <span style="color:var(--soft-pink);">{{ $skill['level'] }}%</span>
        </div>
        <div class="skill-bar-track">
          <div class="skill-bar-fill" style="width:{{ $skill['level'] }}%"></div>
        </div>
      </div>
      @endforeach
    </div>

  </div>

  <!-- Soft Skills -->
  <div style="margin-top:4rem;">
    <span class="section-tag">— Interpersonal</span>
    <h2 class="section-heading">Personal <span class="dot">Skills</span></h2>
    <div class="divider"></div>

    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:1rem;">
      @php
        $softSkills = [
          ['icon'=>'⏰','name'=>'Time Management','desc'=>'Balancing academics, orgs, and creative projects'],
          ['icon'=>'🔍','name'=>'Attention to Detail','desc'=>'Meticulous eye for design and code precision'],
          ['icon'=>'🤝','name'=>'Collaboration','desc'=>'Working effectively in film and tech teams'],
          ['icon'=>'💬','name'=>'Communication','desc'=>'Conveying ideas clearly in writing & visuals'],
          ['icon'=>'🌱','name'=>'Adaptability','desc'=>'Thriving in dynamic, fast-paced environments'],
          ['icon'=>'👑','name'=>'Leadership','desc'=>'Leading creative productions & student orgs'],
          ['icon'=>'🎨','name'=>'Creativity','desc'=>'Turning abstract ideas into tangible work'],
          ['icon'=>'📋','name'=>'Organization','desc'=>'Managing documents, deadlines, and tasks'],
        ];
      @endphp
      @foreach($softSkills as $skill)
      <div class="card" style="text-align:center;padding:1.75rem 1.25rem;">
        <div style="font-size:2rem;margin-bottom:0.75rem;">{{ $skill['icon'] }}</div>
        <div style="font-family:'Fredoka One',cursive;font-size:1rem;margin-bottom:0.4rem;color:var(--text-main);">{{ $skill['name'] }}</div>
        <div style="font-size:0.8rem;color:var(--text-muted);">{{ $skill['desc'] }}</div>
      </div>
      @endforeach
    </div>
  </div>

  <!-- Tools at a glance -->
  <div style="margin-top:4rem;">
    <span class="section-tag">— At a glance</span>
    <h2 class="section-heading">Tools I <span class="dot">Use</span></h2>
    <div class="divider"></div>
    <div style="display:flex;flex-wrap:wrap;gap:0.75rem;">
      @php
        $tools = [
          'Canva', 'Adobe Premiere Pro', 'Laravel', 'PHP', 
          'HTML/CSS', 'Arduino', 'Flutter', 'Procreate', 'CapCut', 
          'Figma', 'Microsoft Office'
        ];
      @endphp
      @foreach($tools as $t)
        <span class="pill" style="font-size:0.88rem;padding:0.5rem 1.25rem;">{{ $t }}</span>
      @endforeach
    </div>
  </div>

</div>
@endsection