@extends('frontend.layout.app')
@section('main-container')

{{-- Unique class to body --}}
@push('body-class', 'about-page')

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">About Us</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li class="current">About</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- About Section -->
  <section id="about" class="about section">
    <div class="container about-container" data-aos="fade-up">

      <!-- Hero -->
      <div class="about-hero row align-items-center gy-4">
        <div class="col-md-6">
          <h2 class="display-5">We Craft Digital Stories That Connect</h2>
          <p class="lead mt-3">We believe every brand has a story. We turn that story into immersive digital experiences — websites, mobile apps, branding — everything in between.</p>
          <a href="{{ route('contact') ?? url('/contact') }}" class="btn btn-primary mt-3">Work With Us</a>
        </div>
        <div class="col-md-6">
          <img src="{{ asset('images/about-hero-2.jpg') }}" alt="About Us" class="img-fluid rounded shadow" />
        </div>
      </div>

      <!-- Example section -->
      <div class="content-section mt-5">
        <h3>Our Mission</h3>
        <p>Our mission is to empower businesses with digital products built on empathy, performance and clarity.</p>
      </div>

    </div>
  </section>
</main>

{{-- Internal CSS --}}
<style>
  /* Unique about page body class */
  body.about-page {
    background: #fdfdfd;
    color: #222;
  }

  /* Parent container margin top */
  .about-container {
    margin-top: 50px;
  }

  /* Hero section */
  .about-hero h2 {
    font-weight: 700;
    color: #222;
  }

  .about-hero p.lead {
    font-size: 1.1rem;
    color: #555;
  }

  .about-hero img {
    border-radius: 20px;
    box-shadow: 0px 6px 20px rgba(0,0,0,0.1);
    transition: transform .3s ease;
  }
  .about-hero img:hover {
    transform: scale(1.03);
  }

  /* Section heading */
  .content-section h3 {
    font-weight: 600;
    margin-bottom: 15px;
    position: relative;
  }
  .content-section h3::after {
    content: '';
    width: 50px;
    height: 3px;
    background: #ff7b00;
    position: absolute;
    bottom: -8px;
    left: 0;
    border-radius: 2px;
  }
</style>

@endsection
