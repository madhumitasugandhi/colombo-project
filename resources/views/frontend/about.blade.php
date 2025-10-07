@extends('frontend.layout.app')
@section('main-container')

<main class="main">

  <!-- About Section -->
  <section id="about" class="about section about-page-section position-relative">
    <!-- Decorative Shapes -->
    <div class="decorative-shape shape1"></div>
    <div class="decorative-shape shape2"></div>
    <div class="decorative-shape shape3"></div>

    <div class="container about-container" data-aos="fade-up">

      <!-- Hero -->
      <div class="about-hero about-content row align-items-center gy-4">
        <div class="cta-buttons col-md-6">
          <h2 class="display-5">We Bring You Refreshing Natural Beverages</h2>
          <p class="lead mt-3">
            Colombo Products (Pvt) Ltd. was founded in 2010 with the aim of bringing fresh, natural, 
            and innovative beverages to both Sri Lankan and international markets.
          </p>
          <div class="cta-buttons mt-4">
              <a href="/menu" class="btn">Explore Products</a>
              <a href="/contact" class="btn btn-outline">Contact Us</a>
          </div>
        </div>
        <div class="col-md-6 position-relative">
          <img src="{{ asset('assets/img/products/juice-main.jpg') }}" alt="About Us" class="img-fluid rounded shadow" />
        </div>
      </div>

      <!-- About Content -->
      <div class="content-section mt-5">
        <h3>About Colombo Products</h3>
        <p>
          From our humble beginnings, we have steadily grown into a trusted brand, delivering 
          high-quality juices and refreshing drinks that have become a part of everyday life. 
          Over the years, Colombo Products has built a reputation for excellence, ensuring every sip 
          reflects our promise of freshness and authenticity.
        </p>
        <p>
          Today, we continue to expand our product range while staying true to our core values of quality, 
          taste, and customer satisfaction. Colombo Products is proud to serve as a symbol of trust 
          and purity in the beverage industry.
        </p>
      </div>

      <!-- Vision & Mission -->
      <div class="row mt-5 gy-4">
        <div class="col-md-6">
          <div class="content-section">
            <h3>Our Vision</h3>
            <p>
              To be a leading name in the natural food and beverage industry, offering a wide variety 
              of refreshing products that inspire healthier lifestyles locally and globally.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="content-section">
            <h3>Our Mission</h3>
            <p>
              To produce high-quality, natural beverages under strict hygienic standards, 
              using the finest ingredients, while caring for the health and wellbeing of 
              our customers and communities.
            </p>
          </div>
        </div>
      </div>

      <!-- Why Choose Us -->
      <div class="content-section mt-5">
        <h3>Why Choose Us?</h3>
        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-card d-flex align-items-start p-3">
              <i class="bi bi-droplet-half fs-3 me-3"></i>
              <div>
                <h5>100% Natural</h5>
                <p>Ingredients sourced from trusted local farms.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-card d-flex align-items-start p-3">
              <i class="bi bi-heart fs-3 me-3"></i>
              <div>
                <h5>Passion & Care</h5>
                <p>Every sip is made with passion and care for your health.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-card d-flex align-items-start p-3">
              <i class="bi bi-recycle fs-3 me-3"></i>
              <div>
                <h5>Eco-Friendly</h5>
                <p>Packaging that cares for the planet.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-card d-flex align-items-start p-3">
              <i class="bi bi-star fs-3 me-3"></i>
              <div>
                <h5>Trusted Brand</h5>
                <p>Trusted by thousands of happy customers worldwide.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Sustainability -->
      <div class="content-section mt-5">
        <h3>Sustainability Commitment</h3>
        <p>
          We are dedicated to reducing our carbon footprint by using recyclable materials 
          and supporting ethical farming practices. Our goal is to make sure that your 
          refreshing drink also helps refresh the planet.
        </p>
      </div>

    </div>
  </section>
</main>

{{-- Internal CSS --}}
<style>
/* About Page Unique Section */
.about-page-section {
  background: #fff;
  color: #333;
  font-family: 'Poppins', sans-serif;
  padding: 60px 0;
  position: relative;
  overflow: hidden;
}

/* Decorative Floating Shapes */
.about-page-section .decorative-shape {
  position: absolute;
  border-radius: 50%;
  opacity: 0.15;
  z-index: 0;
  animation: float 6s ease-in-out infinite;
}
.about-page-section .shape1 {
  width: 120px; height: 120px;
  background: #ff7e5f;
  top: 20px; left: 10%;
}
.about-page-section .shape2 {
  width: 80px; height: 80px;
  background: #feb47b;
  bottom: 40px; right: 15%;
  animation-delay: 2s;
}
.about-page-section .shape3 {
  width: 100px; height: 100px;
  background: #ffb347;
  top: 50%; left: 50%;
  transform: translate(-50%, -50%);
  animation-delay: 4s;
}
@keyframes float {
  0%,100% { transform: translateY(0); }
  50% { transform: translateY(-15px); }
}

/* Container */
.about-page-section .about-container {
  max-width: 1200px;
  margin: 0 auto;
  position: relative;
  z-index: 1;
}

/* Hero Section */
.about-page-section .about-hero h2 {
  font-weight: 800; font-size: 2.5rem;
  background: linear-gradient(90deg, #ff7e5f, #feb47b);
  -webkit-background-clip: text; -webkit-text-fill-color: transparent;
  transition: all 0.3s ease;
}
.about-page-section .about-hero h2:hover {
  transform: translateY(-5px);
}
.about-page-section .about-hero p.lead {
  font-size: 1.15rem; line-height: 1.8; color: #555;
}
.about-page-section .about-hero .btn {
  padding: 12px 30px; margin-right: 10px;
  border-radius: 50px; font-weight: 600;
  transition: all 0.3s ease;
}
.about-page-section .about-hero .btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}
.about-page-section .about-hero img {
  border-radius: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.12);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}
.about-page-section .about-hero img:hover {
 transition: transform 0.3s ease,box-shadow 0.4s ease;
 transform: scale(1.1);
  box-shadow: 0 15px 40px rgba(0,0,0,0.2);
}

/* Content Sections */
.about-page-section .content-section {
  margin-top: 50px;
  padding: 20px;
  background: #fff;
  border-radius: 15px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.05);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.about-page-section .content-section:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 35px rgba(0,0,0,0.1);
}
.about-page-section .content-section h3 {
  font-weight: 700; font-size: 1.7rem; margin-bottom: 20px;
  position: relative; color: rgb(39, 37, 37);
}
.about-page-section .content-section h3::after {
  content: ''; width: 60px; height: 4px;
  background: linear-gradient(90deg, #ff7e5f, #feb47b);
  position: absolute; bottom: -10px; left: 0; border-radius: 2px;
}

/* Info Cards */
.about-page-section .info-card {
  background: #fff;
  border-radius: 15px;
  box-shadow: 0 8px 25px rgba(0,0,0,0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.about-page-section .info-card:hover {
  transform: translateY(-7px);
  box-shadow: 0 15px 35px rgba(0,0,0,0.12);
}
.about-page-section .info-card i {
  color: #ff7e5f;
}
.about-page-section .info-card h5 {
  font-weight: 600; margin-bottom: 5px;
}
.about-page-section .info-card p {
  margin: 0; color: #555;
}

/* Row spacing */
.about-page-section .row.gy-4 > [class*='col-'] {
  margin-bottom: 25px;
}

/* Sustainability Section */
.about-page-section .content-section p {
  font-size: 1.05rem; line-height: 1.75; color: #555;
}

/* Responsive */
@media (max-width: 768px) {
  .about-page-section .about-hero h2 { font-size: 2rem; }
  .about-page-section .content-section { padding: 15px; }
}
</style>

@endsection
