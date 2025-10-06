@extends('frontend.layout.app')
@section('main-container')

<main class="main contact-page-section">

  <!-- Hero / Banner -->
  <section class="contact-hero text-center py-5">
    <div class="container">
      <h2 class="display-5 fw-bold">Get in Touch</h2>
      <p class="lead text-muted">We’d love to hear from you. Let’s make something refreshing together.</p>
    </div>
  </section>

  <!-- Contact Info -->
  <section class="contact-info py-5">
    <div class="container">
      <div class="row g-4 justify-content-center">
        <div class="col-md-4 text-center">
          <div class="info-card p-4 bg-white shadow-sm rounded">
            <i class="bi bi-geo-alt fs-2 mb-3" style="color: #ff7e5f;"></i>
            <h6 class="fw-bold">Our Address</h6>
            <p>50/14B Jubilee Mawatha,<br/> Mattakuliya, Colombo 15</p>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div class="info-card p-4 bg-white shadow-sm rounded">
            <i class="bi bi-telephone fs-2 mb-3" style="color: #ff7e5f;"></i>
            <h6 class="fw-bold">Call Us</h6>
            <p>011 2524848 <br/> 077 2775503</p>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div class="info-card p-4 bg-white shadow-sm rounded">
            <i class="bi bi-person fs-2 mb-3" style="color: #ff7e5f;"></i>
            <h6 class="fw-bold">Founder</h6>
            <p>Pallegedara Sarath<br/> Kumara Bandara</p>
          </div>
        </div>
      </div>
    </div>
  </section>

 <!-- Contact Form (Frontend Only) -->
<section class="contact-form-section pb-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="form-card p-5 bg-white shadow-sm rounded">
          <h5 class="fw-bold text-center mb-4">Send Us a Message</h5>
          <form id="contactForm">
            <div class="row g-3">
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Your Name" required>
              </div>
              <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Your Email" required>
              </div>
              <div class="col-12">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="col-12">
                <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
              </div>
              <div class="col-12 text-center">
                <button type="button" class="btn btn-primary px-5 mt-3" id="sendBtn">Send Message</button>
              </div>
            </div>
          </form>
          <!-- Success message placeholder -->
          <div id="successMsg" class="text-center mt-3 text-success" style="display:none;">
            Your message has been sent successfully!
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- JavaScript to Clear Form and Show Message -->
<script>
  document.getElementById('sendBtn').addEventListener('click', function() {
    const form = document.getElementById('contactForm');
    form.reset(); // Clear all input fields

    const successMsg = document.getElementById('successMsg');
    successMsg.style.display = 'block'; // Show success message

    // Hide the message after 3 seconds
    setTimeout(() => {
      successMsg.style.display = 'none';
    }, 3000);
  });
</script>


  <!-- Map -->
  <section class="contact-map">
    <div class="container-fluid px-0">
      <iframe 
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.603515873314!2d79.85713407593496!3d6.976819995022373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25950f0d27633%3A0xf99d3c9730bafaa1!2s50%2F14B%20Jubilee%20Mawatha%2C%20Mattakuliya%2C%20Colombo%2015!5e0!3m2!1sen!2slk!4v1695749183021!5m2!1sen!2slk" 
  width="100%" 
  height="400" 
  style="border:0;" 
  allowfullscreen="" 
  loading="lazy">
</iframe>

    </div>
  </section>

</main>

{{-- Scoped CSS --}}
<style>
.contact-page-section {
  font-family: 'Poppins', sans-serif;
  background: #fdfcf8;
  color: #333;
}

/* Hero */
.contact-hero h2 {
  color: #eb5f2d;
}
.contact-hero p.lead {
  color: #666;
}

/* Info Cards */
.contact-info .info-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.contact-info .info-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 30px rgba(0,0,0,0.10);
}

/* Form */
.form-card input, .form-card textarea {
  border: 1px solid #ddd;
  border-radius: 6px;
}
.form-card input:focus, .form-card textarea:focus {
  border-color: #eb5f2d;
  box-shadow: 0 0 0 0.15rem rgba(255,126,95,0.25);
}

/* Button */
.btn-primary {
  color: var(--contrast-color);
  background: var(--accent-color);
  padding: 8px 26px;
  margin: 0;
  border-radius: 50px;
  transition: 0.3s;
  display: grid;
  place-items: center;
  font-size: 15px;
  border: none
}
.btn-primary:hover {
 color: var(--contrast-color);
  background: color-mix(in srgb, var(--accent-color), transparent 15%);
}

/* Map */
.contact-map iframe {
  border: none;
}
</style>

@endsection
