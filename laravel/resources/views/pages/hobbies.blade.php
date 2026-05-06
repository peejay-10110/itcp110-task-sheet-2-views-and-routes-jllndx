@extends('layouts.app')
@section('title', 'Hobbies — Juliana de Jesus')

@section('content')
<div class="page-banner">
  <div class="page-banner-content">
    <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span>/</span> Hobbies</p>
    <span class="section-tag">— Beyond the portfolio</span>
    <h1 class="page-title">What I <span class="highlight">Love</span> Doing 🎵</h1>
  </div>
</div>

<div class="section">
  <span class="section-tag">— My personal world</span>
  <h2 class="section-heading">Hobbies <span class="dot">&</span> Interests</h2>
  <div class="divider"></div>

  <div class="hobbies-grid">
  @php
      $hobbies = [
        ['emoji'=>'📖','name'=>'Reading','desc'=>'Getting lost in graphic novels, design books, and fiction that sparks visual ideas — plus the occasional page-turner at 2 AM.'],
        ['emoji'=>'🍰','name'=>'Baking','desc'=>'Whisking away stress one batch of cookies at a time. The kitchen is my happy place, and butter is my love language.'],
        ['emoji'=>'🍳','name'=>'Cooking','desc'=>'Experimenting with flavors like an artist mixes paint — sometimes it\'s a masterpiece, sometimes it\'s... creative chaos. Either way, we eat good.'],
        ['emoji'=>'🍜','name'=>'Trying New Food','desc'=>'Exploring local Filipino eats and global cuisines — a foodie who eats with their eyes first and heart second. Life\'s too short for the same order twice.'],
        ['emoji'=>'🚂','name'=>'Solo Travel','desc'=>'Wandering new cities with just a backpack and a playlist. Solo adventures = unlimited spontaneity + the best conversations with strangers.'],
        ['emoji'=>'🎨','name'=>'Making Art','desc'=>'Digital illustrations, charcoal sketches, watercolor experiments — art is my journal when words fail.'],
        ['emoji'=>'✂️','name'=>'Crafting & DIY','desc'=>'Turning trash into treasure, old into gold. Handmade gifts, collages, and anything that involves glue guns and big dreams.'],
        ['emoji'=>'🎬','name'=>'Watching Films','desc'=>'A cinephile at heart — from indie gems to blockbuster hits. Studying storytelling, cinematography, and crying over fictional characters.'],
        ['emoji'=>'☕','name'=>'Café Hopping','desc'=>'Finding the perfect matcha latte, aesthetic corners, and cozy nooks to read, journal, or just people-watch for hours.'],
        ['emoji'=>'🌿','name'=>'Nature & Me-Time','desc'=>'Solo walks, quiet parks, and golden hour skies — because sometimes the best company is your own thoughts and a gentle breeze.'],
      ];
@endphp

    @foreach($hobbies as $hobby)
    <div class="card hobby-card">
      <span class="hobby-emoji">{{ $hobby['emoji'] }}</span>
      <div class="hobby-name">{{ $hobby['name'] }}</div>
      <p class="hobby-desc">{{ $hobby['desc'] }}</p>
    </div>
    @endforeach

  </div>

  <div style="margin-top:4rem;display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;">
    <div class="card" style="padding:2rem;">
      <h3 style="font-family:'Fredoka One',cursive;font-size:1.2rem;color:var(--yellow);margin-bottom:1rem;">🌙 My Ideal Day</h3>
      <p style="color:var(--text-muted);font-size:0.92rem;line-height:1.8;">
        Wake up early ☀️ → coffee + jazz music → sketch ideas in a journal → 
        golden hour photoshoot → watch a film → sleep early while listening to good music 🌙
      </p>
    </div>
    <div class="card" style="padding:2rem;">
      <h3 style="font-family:'Fredoka One',cursive;font-size:1.2rem;color:var(--yellow);margin-bottom:1rem;">✨ Currently Into</h3>
      <div style="display:flex;flex-wrap:wrap;gap:0.5rem;">
        @foreach(['Studio Ghibli films 🎥','Spanish lattes 🍵','Indie OPM 🎸','Journaling 📓','Cat🐱'] as $item)
          <span class="pill" style="font-size:0.8rem;">{{ $item }}</span>
        @endforeach
      </div>
    </div>
  </div>

</div>
@endsection