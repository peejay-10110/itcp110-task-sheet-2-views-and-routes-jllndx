@extends('layouts.app')

@section('title', 'Home - Juliana de Jesus')

@section('content')

<section class="hero">
  <!-- Background blobs -->
  <div class="hero-bg-blobs">
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>
  </div>

  <div class="hero-content">
    <!-- Text Side -->
    <div>
      <p class="hero-greeting">✨ Hello there, I'm</p>
      <h1 class="hero-name">
        <span class="first">Juliana</span><br>
        <span class="last">de Jesus</span>
      </h1>
      <div class="hero-title-label">
        <span class="pill">🎨 UI/UX Designer</span>
        <span class="pill-yellow pill">✏️ Writer</span>
        <span class="pill-green pill">🎬 Loves movies</span>
      </div>
      <p class="hero-bio">
       I'm a 20-year-old College Student from Taguig City, Philippines.
        I study at Technological University of the Philippines - Taguig.
      </p>
      <div class="hero-actions">
        <a href="{{ route('projects') }}" class="btn btn-primary">View My Work →</a>
        <a href="{{ route('contact') }}" class="btn btn-outline">Let's Connect</a>
      </div>

      <!-- Quick stats -->
      <div style="display:flex;gap:2rem;margin-top:2.5rem;flex-wrap:wrap;">
        <div>
          <div style="font-family:'Fredoka One',cursive;font-size:2rem;color:var(--hot-pink);">50+</div>
          <div style="font-size:0.8rem;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;">books read</div>
        </div>
        <div>
          <div style="font-family:'Fredoka One',cursive;font-size:2rem;color:var(--yellow);">∞</div>
          <div style="font-size:0.8rem;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;">Solo trip</div>
        </div>
        <div>
          <div style="font-family:'Fredoka One',cursive;font-size:2rem;color:var(--soft-pink);">∞</div>
          <div style="font-size:0.8rem;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;">Creative Ideas</div>
        </div>
      </div>
    </div>

   <div class="hero-image-wrap">
  <img
    src="{{ asset('images/juliana.jpg') }}"
    alt="Juliana de Jesus"
    class="hero-photo"
    onerror="this.style.background='linear-gradient(135deg,rgba(255,45,120,0.4),rgba(216,27,96,0.3))';this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 300 300%22%3E%3Ctext x=%22150%22 y=%22160%22 font-size=%2280%22 text-anchor=%22middle%22%3E👩%3C/text%3E%3C/svg%3E'"
  />
</div>

  <!-- Scroll hint -->
  <div class="hero-scroll">
    <div class="scroll-line"></div>
    <p class="scroll-text">Scroll</p>
  </div>
</section>

<!-- QUICK LINKS STRIP -->
<section style="background:rgba(255,45,120,0.06);border-top:1px solid var(--card-border);border-bottom:1px solid var(--card-border);padding:3rem clamp(1.5rem,8vw,6rem);">
  <div style="max-width:1100px;margin:0 auto;">
    <span class="section-tag">— Explore my portfolio</span>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:1rem;margin-top:1.5rem;">
      @php
        $quickLinks = [
          ['route'=>'about','icon'=>'🌸','label'=>'About Me','desc'=>'Who I am as a person'],
          ['route'=>'education','icon'=>'🎓','label'=>'Education','desc'=>'From elementary to college'],
          ['route'=>'skills','icon'=>'⚡','label'=>'Skills','desc'=>'Tools & abilities I have'],
          ['route'=>'experience','icon'=>'💼','label'=>'Experience','desc'=>'Work & affiliations'],
          ['route'=>'projects','icon'=>'🖌️','label'=>'Projects','desc'=>'My college creative work'],
          ['route'=>'achievements','icon'=>'🏆','label'=>'Achievements','desc'=>'Awards & recognition'],
          ['route'=>'hobbies','icon'=>'🎵','label'=>'Hobbies','desc'=>'What I love doing'],
          ['route'=>'contact','icon'=>'📬','label'=>'Contact','desc'=>'Let\'s work together'],
        ];
      @endphp
      @foreach($quickLinks as $link)
      <a href="{{ route($link['route']) }}" style="background:var(--card-bg);border:1px solid var(--card-border);border-radius:16px;padding:1.25rem;text-decoration:none;color:inherit;transition:all 0.3s ease;display:block;"
         onmouseover="this.style.borderColor='rgba(255,45,120,0.5)';this.style.transform='translateY(-3px)';"
         onmouseout="this.style.borderColor='var(--card-border)';this.style.transform='translateY(0)';">
        <div style="font-size:1.8rem;margin-bottom:0.4rem;">{{ $link['icon'] }}</div>
        <div style="font-family:'Fredoka One',cursive;font-size:1rem;color:var(--text-main);margin-bottom:0.2rem;">{{ $link['label'] }}</div>
        <div style="font-size:0.78rem;color:var(--text-muted);">{{ $link['desc'] }}</div>
      </a>
      @endforeach
    </div>
  </div>
</section>

@endsection