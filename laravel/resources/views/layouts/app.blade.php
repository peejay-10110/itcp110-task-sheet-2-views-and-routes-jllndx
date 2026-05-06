<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Juliana de Jesus — Portfolio')</title>
  <meta name="description" content="@yield('meta_description', 'Portfolio of Juliana de Jesus — Student')">
  <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  @stack('head')
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
  <a href="{{ route('home') }}" class="nav-logo">J<span>DJ</span></a>
  <ul class="nav-links" id="navMenu">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('about') }}">About</a></li>
    <li><a href="{{ route('education') }}">Education</a></li>
    <li><a href="{{ route('skills') }}">Skills</a></li>
    <li><a href="{{ route('experience') }}">Experience</a></li>
    <li><a href="{{ route('projects') }}">Projects</a></li>
    <li><a href="{{ route('achievements') }}">Awards</a></li>
    <li><a href="{{ route('hobbies') }}">Hobbies</a></li>
    <li><a href="{{ route('contact') }}">Contact</a></li>
  </ul>
  <div class="nav-hamburger" id="navHamburger" aria-label="Toggle menu">
    <span></span><span></span><span></span>
  </div>
</nav>

<!-- PAGE CONTENT -->
<div class="page-wrapper">
  @yield('content')
</div>

<!-- FOOTER -->
<footer class="footer">
  <div class="footer-name">Juliana de Jesus</div>
  <p>Student · Taguig, Philippines</p>
  <nav class="footer-links">
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('education') }}">Education</a>
    <a href="{{ route('skills') }}">Skills</a>
    <a href="{{ route('experience') }}">Experience</a>
    <a href="{{ route('projects') }}">Projects</a>
    <a href="{{ route('achievements') }}">Awards</a>
    <a href="{{ route('hobbies') }}">Hobbies</a>
    <a href="{{ route('contact') }}">Contact</a>
  </nav>
  <p style="margin-top:1.5rem; font-size:0.78rem;">© {{ date('Y') }} Juliana de Jesus. Crafted with 💗</p>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>