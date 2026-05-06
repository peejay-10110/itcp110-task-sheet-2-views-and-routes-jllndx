@extends('layouts.app')
@section('title', 'Achievements — Juliana de Jesus')

@section('content')
<div class="page-banner">
  <div class="page-banner-content">
    <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span>/</span> Achievements</p>
    <span class="section-tag">— Recognition & Awards</span>
    <h1 class="page-title">Awards <span class="highlight">&</span> Achievements 🏆</h1>
  </div>
</div>

<div class="section">
  <span class="section-tag">— Things I'm proud of</span>
  <h2 class="section-heading">Recognition <span class="dot">Received</span></h2>
  <div class="divider"></div>

  <div class="achievements-grid">
    @php
      $achievements = [
        ['icon'=>'📚','title'=>'Dean\'s Lister','org'=>'TUP Taguig','year'=>'Present','desc'=>'Maintaining Dean\'s Lister standing in college, balancing academic rigor with ongoing growth as a future front-end developer.'],
        ['icon'=>'🌟','title'=>'With High Honors','org'=>'Bagumbayan National High School','year'=>'2022–2024','desc'=>'Earned "With High Honors" distinction throughout Grades 11–12, showcasing consistent excellence in senior high school.'],
        ['icon'=>'🏆','title'=>'Ads Contest Top 3','org'=>'Bagumbayan National High School','year'=>'2023','desc'=>'Part of the group that secured Top 3 in the school\'s advertising design contest, demonstrating collaborative creative skills.'],
        ['icon'=>'⭐','title'=>'With Honors','org'=>'Bagumbayan National High School','year'=>'2020–2022','desc'=>'Achieved "With Honors" recognition during Grades 9–10, continuing a strong academic track record.'],
        ['icon'=>'🎓','title'=>'Consistent Honor Student','org'=>'CP Sta. Teresa Elementary School','year'=>'2012–2018','desc'=>'Maintained honor student status from Grade 1 to 6, demonstrating early academic excellence and dedication.'],
      ];
    @endphp

    @foreach($achievements as $ach)
    <div class="card achievement-card">
      <div class="achievement-icon">{{ $ach['icon'] }}</div>
      <div class="achievement-title">{{ $ach['title'] }}</div>
      <div class="achievement-org">{{ $ach['org'] }}</div>
      <span class="pill-yellow pill" style="margin-bottom:0.75rem;font-size:0.75rem;">{{ $ach['year'] }}</span>
      <p class="achievement-desc">{{ $ach['desc'] }}</p>
    </div>
    @endforeach

  </div>

</div>
@endsection