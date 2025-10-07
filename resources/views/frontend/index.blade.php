@extends('frontend.layout.app')
@section('main-container')


<main class="main">

  <section id="hero" class="hero section light-background">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="hero-content">
        <div class="row align-items-center">

          <!-- Left Content -->
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="content">
              <h1 class="hero-title mb-4">Refreshing Goodness, Every Sip</h1>
              <p class="hero-subtitle mb-4">
                At <strong>Colombo Product Pvt Ltd</strong>, we craft fruit juices and beverages made from the finest
                ingredients.
                Our mission is simple — bring natural freshness and healthy hydration to your everyday life.
              </p>

              <div class="hero-actions d-flex flex-wrap gap-3 mb-4">
                <a href="/menu" class="btn btn-primary">Explore Products</a>
                <a href="/about" class="btn btn-outline">About Us</a>
              </div>

              <div class="hero-info d-flex flex-wrap align-items-center gap-4">
                <div class="info-item d-flex align-items-center">
                  <i class="bi bi-droplet-half me-2" style="color: #eb5f2d"></i>
                  <div>
                    <small class="text-muted">Specialty</small>
                    <div class="fw-medium">Juices & Beverages</div>
                  </div>
                </div>
                <div class="info-item d-flex align-items-center">
                  <i class="bi bi-geo-alt me-2" style="color: #eb5f2d"></i>
                  <div>
                    <small class="text-muted">Based in</small>
                    <div class="fw-medium">Colombo, Sri Lanka</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Right Product Images -->
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="hero-images">
              <div class="main-image">
                <img src="assets/img/products/juice-main.jpg" alt="Colombo Juice Bottle"
                  class="img-fluid rounded shadow">
              </div>
              <div class="floating-images">
                <div class="floating-image floating-image-1">
                  <img src="assets/img/products/juice-1.jpg" alt="Mango Juice" class="img-fluid rounded shadow">
                </div>
                <div class="floating-image floating-image-2">
                  <img src="assets/img/products/juice-2.jpg" alt="Orange Juice" class="img-fluid rounded shadow">
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

  </section><!-- /Hero Section -->

  <!-- About Section -->
  <section id="about" class="about section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row align-items-center">
        <!-- Left Image -->
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
          <div class="about-image">
            <img src="assets/img/products/juice-main.jpg" alt="Colombo Product Bottles" class="img-fluid rounded">
            <div class="experience-badge">
              <span class="years">15+</span>
              <span class="text">Years of Beverage Excellence</span>
            </div>
          </div>
        </div>

        <!-- Right Content -->
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
          <div class="about-content">
            <div class="section-header">
              <h2>About Colombo Product Pvt Ltd</h2>
              <p class="subtitle">Delivering Fresh & Natural Beverages Since 2008</p>
            </div>

            <div class="story-text">
              <p>At Colombo Product Pvt Ltd, we are passionate about crafting high-quality juices and beverages that
                bring natural flavor and freshness to every sip. Our products are made from carefully selected fruits
                and ingredients to ensure taste and nutrition.</p>

              <p>We believe in innovation, sustainability, and connecting with our customers through delicious, healthy
                drinks. Our mission is to be a trusted brand for families, restaurants, and retailers across Sri Lanka.
              </p>
            </div>
            <div class="chef-highlights">
              <div class="row">
                <div class="col-6">
                  <div class="highlight-item">
                    <i class="bi bi-award"></i>
                   <span>Quality Certified</span>
                  </div>
                </div>
                <div class="col-6">
                  <div class="highlight-item">
                    <i class="bi bi-star"></i>
                    <span>Trusted Brand</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="chef-quote mt-4">
              <blockquote>
                "Cooking is not just about feeding people; it's about creating moments that bring families and friends
                together around the table."
              </blockquote>
              <cite>- Colombo Product Pvt Ltd Team</cite>
            </div>

            <div class="cta-buttons mt-4">
              <a href="/menu" class="btn">Explore Products</a>
              <a href="/contact" class="btn btn-outline">Contact Us</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Product Gallery -->
      <div class="product-gallery mt-5" data-aos="fade-up" data-aos-delay="400">
        <div class="row g-4">
          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <img src="assets/img/products/juice-1.jpg" alt="Mango Juice" class="img-fluid rounded">
              <div class="gallery-caption">
                <h4>Mango Juice</h4>
                <p>Freshly pressed mango goodness</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <img src="assets/img/products/juice-3.jpg" alt="Mixed Fruit Juice" class="img-fluid rounded">
              <div class="gallery-caption">
                <h4>Mixed Fruit Juice</h4>
                <p>A blend of tropical fruits</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <img src="assets/img/products/juice-2.jpg" alt="Orange Juice" class="img-fluid rounded">
              <div class="gallery-caption">
                <h4>Orange Juice</h4>
                <p>Vitamin C packed refreshment</p>
              </div>
            </div>
          </div>


        </div>
      </div>

    </div>

  </section><!-- End About Section -->

  <!-- Products Section -->
  <section id="menu" class="menu section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Our Beverages</h2>
      <p>Refreshing, natural, and made from the finest fruits</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row">
        <div class="col-lg-12">
          <div class="menu-filters">
            <ul class="nav nav-pills justify-content-center" id="menuTabs" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="menu-juices-tab" data-bs-toggle="pill" data-bs-target="#menu-juices"
                  type="button" role="tab">
                  <i class="bi bi-droplet-half me-2"></i>Juices
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="menu-smoothies-tab" data-bs-toggle="pill" data-bs-target="#menu-smoothies"
                  type="button" role="tab">
                  <i class="bi bi-cup-straw me-2"></i>Smoothies
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="menu-premium-tab" data-bs-toggle="pill" data-bs-target="#menu-premium"
                  type="button" role="tab">
                  <i class="bi bi-star-fill me-2"></i>Premium Drinks
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="menu-seasonal-tab" data-bs-toggle="pill" data-bs-target="#menu-seasonal"
                  type="button" role="tab">
                  <i class="bi bi-calendar me-2"></i>Seasonal Specials
                </button>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="tab-content" id="menuTabContent">
        <!-- Juices Tab -->
        <div class="tab-pane fade show active" id="menu-juices" role="tabpanel">
          <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-6">
              <div class="menu-item">
                <div class="menu-item-image">
                  <img src={{"assets/img/products/juice-1.jpg"}} class="img-fluid" alt="Mango Juice">
                  <div class="special-badge">Bestseller</div>
                </div>
                <div class="menu-item-content">
                  <div class="menu-item-header">
                    <h4>Mango Delight</h4>
                  </div>
                  <p>Pure mango juice, no added sugar, refreshing and naturally sweet</p>
                  <div class="menu-item-footer">
                    <span class="price">From $3.50</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="menu-item">
                <div class="menu-item-image">
                  <img src="assets/img/products/juice-2.jpg" class="img-fluid" alt="Orange Juice">
                </div>
                <div class="menu-item-content">
                  <div class="menu-item-header">
                    <h4>Sunny Orange</h4>
                  </div>
                  <p>Rich in Vitamin C, freshly squeezed orange juice for a healthy boost</p>
                  <div class="menu-item-footer">
                    <span class="price">From $3.00</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="menu-item">
                <div class="menu-item-image">
                  <img src="assets/img/products/juice-3.jpg" class="img-fluid" alt="Tropical Mix Juice">
                  <div class="special-badge">New</div>
                </div>
                <div class="menu-item-content">
                  <div class="menu-item-header">
                    <h4>Tropical Mix</h4>
                  </div>
                  <p>A blend of tropical fruits for a refreshing taste</p>
                  <div class="menu-item-footer">
                    <span class="price">From $3.75</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="menu-item">
                <div class="menu-item-image">
                  <img src="assets/img/products/juice-4.jpg" class="img-fluid" alt="Green Detox Juice">
                </div>
                <div class="menu-item-content">
                  <div class="menu-item-header">
                    <h4>Green Detox</h4>
                  </div>
                  <p>Spinach, kale & apple juice, rich in antioxidants and vitamins</p>
                  <div class="menu-item-footer">
                    <span class="price">From $4.00</span>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>


        <!-- Smoothies Tab -->
        <div class="tab-pane fade" id="menu-smoothies" role="tabpanel">
          <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-6">
              <div class="menu-item">
                <div class="menu-item-image">
                  <img src="assets/img/products/smoothie-1.jpg" class="img-fluid" alt="Berry Smoothie">
                  <div class="special-badge">House Favorite</div>
                </div>
                <div class="menu-item-content">
                  <div class="menu-item-header">
                    <h4>Berry Blast</h4>
                  </div>
                  <p>Mixed berries with yogurt for a creamy, antioxidant-rich smoothie</p>
                  <div class="menu-item-footer">
                    <span class="price">From $4.50</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="menu-item">
                <div class="menu-item-image">
                  <img src="assets/img/products/smoothie-2.jpg" class="img-fluid" alt="Tropical Smoothie">
                </div>
                <div class="menu-item-content">
                  <div class="menu-item-header">
                    <h4>Tropical Paradise</h4>
                  </div>
                  <p>Mango, pineapple & banana blended into a smooth tropical drink</p>
                  <div class="menu-item-footer">
                    <span class="price">From $4.00</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="menu-item">
                <div class="menu-item-image">
                  <img src="assets/img/products/smoothie-3.jpg" class="img-fluid" alt="Green Detox Smoothie">
                  <div class="special-badge">New</div>
                </div>
                <div class="menu-item-content">
                  <div class="menu-item-header">
                    <h4>Green Detox</h4>
                  </div>
                  <p>Spinach, kale & apple blended for a healthy green smoothie</p>
                  <div class="menu-item-footer">
                    <span class="price">From $4.75</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="menu-item">
                <div class="menu-item-image">
                  <img src="assets/img/products/smoothie-4.jpg" class="img-fluid" alt="Chocolate Banana Smoothie">
                </div>
                <div class="menu-item-content">
                  <div class="menu-item-header">
                    <h4>Choco Banana</h4>
                  </div>
                  <p>Rich chocolate with ripe bananas for a creamy indulgent treat</p>
                  <div class="menu-item-footer">
                    <span class="price">From $5.00</span>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>


        <!-- Premium Drinks Tab -->
        <div class="tab-pane fade" id="menu-premium" role="tabpanel">
          <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-6">
              <div class="menu-item">
                <div class="menu-item-image">
                  <img src="assets/img/products/premium-1.png" class="img-fluid" alt="Premium Beverage">
                  <div class="special-badge">Premium</div>
                </div>
                <div class="menu-item-content">
                  <div class="menu-item-header">
                    <h4>Gold Label Juice</h4>
                  </div>
                  <p>Exquisite blend of exotic fruits, limited edition premium beverage</p>
                  <div class="menu-item-footer">
                    <span class="price">From $6.50</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="menu-item">
                <div class="menu-item-image">
                  <img src="assets/img/products/premium-2.jpg" class="img-fluid" alt="Royal Berry Blend">
                  <div class="special-badge">Premium</div>
                </div>
                <div class="menu-item-content">
                  <div class="menu-item-header">
                    <h4>Royal Berry Blend</h4>
                  </div>
                  <p>Mixed wild berries with a hint of honey for a rich, smooth taste</p>
                  <div class="menu-item-footer">
                    <span class="price">From $6.00</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="menu-item">
                <div class="menu-item-image">
                  <img src="assets/img/products/premium-3.jpg" class="img-fluid" alt="Tropical Gold">
                  <div class="special-badge">Premium</div>
                </div>
                <div class="menu-item-content">
                  <div class="menu-item-header">
                    <h4>Tropical Gold</h4>
                  </div>
                  <p>A luxurious mix of mango, pineapple & passion fruit for a tropical experience</p>
                  <div class="menu-item-footer">
                    <span class="price">From $6.75</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="menu-item">
                <div class="menu-item-image">
                  <img src="assets/img/products/premium-4.jpg" class="img-fluid" alt="Velvet Citrus">
                  <div class="special-badge">Premium</div>
                </div>
                <div class="menu-item-content">
                  <div class="menu-item-header">
                    <h4>Velvet Citrus</h4>
                  </div>
                  <p>Orange, lemon & a touch of vanilla for a velvety, refreshing drink</p>
                  <div class="menu-item-footer">
                    <span class="price">From $6.25</span>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Seasonal Specials Tab -->
        <div class="tab-pane fade" id="menu-seasonal" role="tabpanel">
          <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-6">
              <div class="menu-item">
                <div class="menu-item-image">
                  <img src="assets/img/products/seasonal-1.jpg" class="img-fluid" alt="King Coconut Juice">
                  <div class="special-badge">Limited Edition</div>
                </div>
                <div class="menu-item-content">
                  <div class="menu-item-header">
                    <h4>King Coconut Juice</h4>
                  </div>
                  <p>Freshly cracked King coconut, naturally hydrating and sweet</p>
                  <div class="menu-item-footer">
                    <span class="price">From $3.50</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="menu-item">
                <div class="menu-item-image">
                  <img src="assets/img/products/seasonal-2.jpg" class="img-fluid" alt="Ceylon Iced Tea">
                  <div class="special-badge">New Arrival</div>
                </div>
                <div class="menu-item-content">
                  <div class="menu-item-header">
                    <h4>Ceylon Iced Tea</h4>
                  </div>
                  <p>Chilled Ceylon black tea with a hint of lemon and mint</p>
                  <div class="menu-item-footer">
                    <span class="price">From $4.50</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="menu-item">
                <div class="menu-item-image">
                  <img src="assets/img/products/seasonal-3.jpg" class="img-fluid" alt="Sri Lankan Faluda">
                  <div class="special-badge">Seasonal Favorite</div>
                </div>
                <div class="menu-item-content">
                  <div class="menu-item-header">
                    <h4>Sri Lankan Faluda</h4>
                  </div>
                  <p>Rose syrup, vermicelli, basil seeds, and milk for a creamy treat</p>
                  <div class="menu-item-footer">
                    <span class="price">From $5.00</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="menu-item">
                <div class="menu-item-image">
                  <img src="assets/img/products/seasonal-4.jpg" class="img-fluid" alt="Wattalapam Smoothie">
                  <div class="special-badge">Exotic Choice</div>
                </div>
                <div class="menu-item-content">
                  <div class="menu-item-header">
                    <h4>Wattalapam Smoothie</h4>
                  </div>
                  <p>Classic Sri Lankan coconut custard blended into a creamy smoothie</p>
                  <div class="menu-item-footer">
                    <span class="price">From $5.50</span>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

      <div class="row mt-5">
        <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="300">
          <a href="/menu" class="btn btn-download">
            <i class="bi bi-grid-1x2 me-2"></i>Explore All Products
          </a>
        </div>
      </div>



    </div>

  </section><!-- /Products Section -->

<!-- Juice Benefits / Fun Facts Section -->
<section id="juice-benefits" class="juice-benefits section-bg py-5">
  <div class="container" data-aos="fade-up">

    <div class="section-title text-center mb-5">
      <h2>Juice Benefits & Fun Facts</h2>
      <p>Discover the amazing benefits of our fresh juices</p>
    </div>

    <div class="row g-4">

      <div class="col-lg-4 col-md-6">
        <div class="benefit-item p-4 rounded shadow-sm bg-white text-center">
          <div class="highlight-item mb-3" style="font-size: 2rem; color: #eb5f2d;">
            <i class="bi bi-circle"></i>
          </div>
          <h4>Mango Smoothie</h4>
          <p>Rich in Vitamin C & Antioxidants, boosts immunity and energy.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="benefit-item p-4 rounded shadow-sm bg-white text-center">
           <div class="highlight-item mb-3" style="font-size: 2rem; color: #eb5f2d;">
            <i class="bi bi-circle"></i>
          </div>
          <h4>King Coconut Juice</h4>
          <p>Naturally hydrating, packed with electrolytes for active days.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="benefit-item p-4 rounded shadow-sm bg-white text-center">
          <div class="highlight-item mb-3" style="font-size: 2rem; color: #eb5f2d;">
            <i class="bi bi-circle"></i>
          </div>
          <h4>Berry Blast Smoothie</h4>
          <p>Loaded with antioxidants, supports heart health and skin glow.</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Juice Benefits / Fun Facts Section -->

 <!-- Juice Gallery / Featured Menu Section -->
<section id="juice-gallery" class="juice-gallery section py-5">
  <div class="container" data-aos="fade-up">

    <!-- Section Title -->
    <div class="section-title text-center mb-5">
      <h2>Our Fresh Juices</h2>
      <p>Bright, colorful, and full of flavor – pick your favorite!</p>
    </div>

    <!-- Juice Grid -->
    <div class="row g-4">

      <div class="col-lg-4 col-md-6">
        <div class="juice-item position-relative overflow-hidden rounded" data-aos="fade-up" data-aos-delay="100">
          <img src={{"assets/img/products/juice-1.jpg"}} class="img-fluid" alt="Mango Juice">
          <div class="juice-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-center text-white" style="background: rgba(0,0,0,0.4); opacity: 0; transition: opacity 0.3s;">
            <h4>Mango Delight</h4>
            <p>Sweet & tangy, rich in Vitamin C</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="juice-item position-relative overflow-hidden rounded" data-aos="fade-up" data-aos-delay="200">
          <img src={{"assets/img/products/premium-2.jpg"}} class="img-fluid" alt="Berry Blast">
          <div class="juice-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-center text-white" style="background: rgba(0,0,0,0.4); opacity: 0; transition: opacity 0.3s;">
            <h4>Berry Blast</h4>
            <p>Vibrant mix of strawberries, blueberries & raspberries</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="juice-item position-relative overflow-hidden rounded" data-aos="fade-up" data-aos-delay="300">
          <img src={{"assets/img/products/seasonal-1.jpg"}} class="img-fluid" alt="King Coconut Juice">
          <div class="juice-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-center text-white" style="background: rgba(0,0,0,0.4); opacity: 0; transition: opacity 0.3s;">
            <h4>King Coconut</h4>
            <p>Hydrating & refreshing, naturally packed with electrolytes</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="juice-item position-relative overflow-hidden rounded" data-aos="fade-up" data-aos-delay="400">
          <img src={{"assets/img/products/premium-4.jpg"}} class="img-fluid" alt="Citrus Zing">
          <div class="juice-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-center text-white" style="background: rgba(0,0,0,0.4); opacity: 0; transition: opacity 0.3s;">
            <h4>Citrus Zing</h4>
            <p>Orange, lemon & lime for a zesty refreshment</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="juice-item position-relative overflow-hidden rounded" data-aos="fade-up" data-aos-delay="500">
          <img src={{"assets/img/products/premium-3.jpg"}} class="img-fluid" alt="Faluda">
          <div class="juice-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-center text-white" style="background: rgba(0,0,0,0.4); opacity: 0; transition: opacity 0.3s;">
            <h4>Faluda</h4>
            <p>Rose syrup, basil seeds & milk for a creamy delight</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="juice-item position-relative overflow-hidden rounded" data-aos="fade-up" data-aos-delay="600">
          <img src={{"assets/img/products/seasonal-4.jpg"}} class="img-fluid" alt="Wattalapam Smoothie">
          <div class="juice-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-center text-white" style="background: rgba(0,0,0,0.4); opacity: 0; transition: opacity 0.3s;">
            <h4>Wattalapam Smoothie</h4>
            <p>Coconut custard smoothie, energy boosting & delicious</p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Juice Gallery / Featured Menu Section -->

  <!-- Location Section -->
  <section id="location" class="location section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-5">
        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
          <div class="location-content">
            <div class="content-header">
              <h2>Visit Our Establishment</h2>
              <p class="subtitle">Located in the heart of Manhattan's culinary district</p>
            </div>

            <div class="map-wrapper">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.684949335945!2d-73.98658242357565!3d40.75853057126168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQ1JzMwLjciTiA3M8KwNTknMDcuNyJX!5e0!3m2!1sen!2sus!4v1654321234567!5m2!1sen!2sus"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
              <div class="map-overlay">
                <div class="location-badge">
                  <i class="bi bi-geo-alt"></i>
                  <span>We're Here</span>
                </div>
              </div>
            </div>

            <div class="transportation-info" data-aos="fade-up" data-aos-delay="300">
              <h4>Transportation &amp; Parking</h4>
              <div class="transport-grid">
                <div class="transport-item">
                  <i class="bi bi-train-front"></i>
                  <div class="details">
                    <strong>Subway</strong>
                    <p>Union Square Station (4, 5, 6, L, N, Q, R, W)</p>
                  </div>
                </div>
                <div class="transport-item">
                  <i class="bi bi-p-square"></i>
                  <div class="details">
                    <strong>Valet Parking</strong>
                    <p>Available daily from 5:00 PM</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="250">
          <div class="contact-sidebar">
            <div class="contact-card">
              <div class="card-icon">
                <i class="bi bi-building"></i>
              </div>
              <h3>Address</h3>
              <p>847 Broadway Avenue<br>New York, NY 10003</p>
            </div>

            <div class="contact-card" data-aos="fade-up" data-aos-delay="350">
              <div class="card-icon">
                <i class="bi bi-telephone-fill"></i>
              </div>
              <h3>Reservations</h3>
              <p class="phone">+1 (555) 234-5678</p>
              <p class="note">Recommended 24-48 hours advance booking</p>
            </div>

            <div class="contact-card" data-aos="fade-up" data-aos-delay="450">
              <div class="card-icon">
                <i class="bi bi-clock-fill"></i>
              </div>
              <h3>Operating Hours</h3>
              <div class="hours-list">
                <div class="hour-item">
                  <span class="day">Tuesday - Thursday</span>
                  <span class="time">5:00 PM - 10:00 PM</span>
                </div>
                <div class="hour-item">
                  <span class="day">Friday - Saturday</span>
                  <span class="time">5:00 PM - 11:00 PM</span>
                </div>
                <div class="hour-item">
                  <span class="day">Sunday</span>
                  <span class="time">4:00 PM - 9:00 PM</span>
                </div>
                <div class="hour-item closed">
                  <span class="day">Monday</span>
                  <span class="time">Closed</span>
                </div>
              </div>
            </div>

            <div class="action-buttons" data-aos="fade-up" data-aos-delay="550">
              <a href="#book-a-table" class="btn-primary">Book a Table</a>
              <a href="#" class="btn-secondary">Get Directions</a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section><!-- /Location Section -->

  <!-- Beverages Events Section -->
<section id="events" class="events section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <!-- Hero -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="150">
        <div class="event-hero-content">
          <h2>Refreshing Beverage Experiences</h2>
          <p>From tropical juice tastings to smoothie workshops, we bring you unique beverage events that celebrate freshness, flavor, and fun.</p>
          <div class="event-stats">
            <div class="stat-item">
              <span class="stat-number">300+</span>
              <span class="stat-label">Juice Tastings</span>
            </div>
            <div class="stat-item">
              <span class="stat-number">50+</span>
              <span class="stat-label">Seasonal Launches</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div class="event-hero-image">
          <img src="{{ asset('assets/img/products/event-hero.jpg') }}" alt="Beverage Event" class="img-fluid">
          <div class="floating-card" data-aos="zoom-in" data-aos-delay="300">
            <i class="bi bi-cup-straw"></i>
            <span>Join Our Next Tasting</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Packages -->
    <div class="event-packages" data-aos="fade-up" data-aos-delay="200">
      <div class="section-header text-center mb-5">
        <h3>Choose Your Beverage Experience</h3>
        <p>Perfect for juice lovers, health enthusiasts, and anyone who enjoys a refreshing drink.</p>
      </div>

      <div class="row g-4">
        <div class="col-lg-4 col-md-6" data-aos="flip-up" data-aos-delay="250">
          <div class="package-card premium">
            <div class="package-header">
              <div class="package-icon">
                <i class="bi bi-gem"></i>
              </div>
              <h4>Signature Tasting</h4>
              <div class="package-price">
                <span class="price">$39</span>
                <span class="per">per person</span>
              </div>
            </div>
            <div class="package-features">
              <ul>
                <li><i class="bi bi-check-circle"></i> 8 exotic juices</li>
                <li><i class="bi bi-check-circle"></i> Seasonal mocktails</li>
                <li><i class="bi bi-check-circle"></i> Pairing with snacks</li>
                <li><i class="bi bi-check-circle"></i> Take-home recipe cards</li>
              </ul>
            </div>
            <div class="package-capacity">10-40 guests</div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="flip-up" data-aos-delay="300">
          <div class="package-card standard featured">
            <div class="popular-badge">Most Loved</div>
            <div class="package-header">
              <div class="package-icon">
                <i class="bi bi-star"></i>
              </div>
              <h4>Smoothie Workshop</h4>
              <div class="package-price">
                <span class="price">$29</span>
                <span class="per">per person</span>
              </div>
            </div>
            <div class="package-features">
              <ul>
                <li><i class="bi bi-check-circle"></i> Hands-on smoothie making</li>
                <li><i class="bi bi-check-circle"></i> Superfood boosters</li>
                <li><i class="bi bi-check-circle"></i> Nutrition tips</li>
                <li><i class="bi bi-check-circle"></i> Free reusable cup</li>
              </ul>
            </div>
            <div class="package-capacity">15-60 guests</div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="flip-up" data-aos-delay="350">
          <div class="package-card essentials">
            <div class="package-header">
              <div class="package-icon">
                <i class="bi bi-heart"></i>
              </div>
              <h4>Juice Bar Pop-up</h4>
              <div class="package-price">
                <span class="price">$19</span>
                <span class="per">per person</span>
              </div>
            </div>
            <div class="package-features">
              <ul>
                <li><i class="bi bi-check-circle"></i> 4 fresh juice options</li>
                <li><i class="bi bi-check-circle"></i> DIY garnish station</li>
                <li><i class="bi bi-check-circle"></i> Fresh fruit platters</li>
                <li><i class="bi bi-check-circle"></i> Eco-friendly cups</li>
              </ul>
            </div>
            <div class="package-capacity">20-100 guests</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Gallery -->
    <div class="event-gallery-grid" data-aos="fade-up" data-aos-delay="200">
      <div class="row g-3">
        <div class="col-lg-3 col-md-6">
          <div class="gallery-item" data-aos="zoom-out" data-aos-delay="250">
            <img src="{{ asset('assets/img/products/juice-2.jpg') }}" alt="Juice Tasting" class="img-fluid">
            <div class="gallery-overlay">
              <span class="gallery-label">Juice Tastings</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="gallery-item main-gallery" data-aos="zoom-out" data-aos-delay="300">
            <img src="{{ asset('assets/img/products/smoothie-3.jpg') }}" alt="Smoothie Workshop" class="img-fluid">
            <div class="gallery-overlay">
              <span class="gallery-label">Smoothie Workshops</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="gallery-item" data-aos="zoom-out" data-aos-delay="350">
            <img src="{{ asset('assets/img/products/seasonal-2.jpg') }}" alt="Pop-up Juice Bar" class="img-fluid">
            <div class="gallery-overlay">
              <span class="gallery-label">Pop-up Juice Bars</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Booking -->
    <div class="booking-section" data-aos="fade-up" data-aos-delay="200">
      <div class="row">
        <div class="col-lg-6" data-aos="slide-right" data-aos-delay="250">
          <div class="booking-info">
            <h3>Book Your Beverage Experience</h3>
            <p>Whether it’s a corporate event, family gathering, or just a fun day with friends — we’ll bring refreshing drinks to your celebration.</p>

            <div class="contact-methods">
              <div class="contact-item">
                <div class="contact-icon"><i class="bi bi-telephone"></i></div>
                <div class="contact-details">
                  <span class="contact-label">Call Us</span>
                  <span class="contact-value">+1 (555) 987-6543</span>
                </div>
              </div>
              <div class="contact-item">
                <div class="contact-icon"><i class="bi bi-envelope"></i></div>
                <div class="contact-details">
                  <span class="contact-label">Email</span>
                  <span class="contact-value">drinks@example.com</span>
                </div>
              </div>
              <div class="contact-item">
                <div class="contact-icon"><i class="bi bi-clock"></i></div>
                <div class="contact-details">
                  <span class="contact-label">Available</span>
                  <span class="contact-value">Mon-Sat 10AM-8PM</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Booking Form -->
        <div class="col-lg-6" data-aos="slide-left" data-aos-delay="300">
          <div class="quick-booking-form">
            <form action="forms/event-booking.php" method="post" class="php-email-form">
              <h4>Quick Event Inquiry</h4>
              <div class="row">
                <div class="col-md-6"><input type="text" name="name" class="form-control" placeholder="Your Name" required></div>
                <div class="col-md-6"><input type="email" name="email" class="form-control" placeholder="Your Email" required></div>
                <div class="col-md-6"><input type="tel" name="phone" class="form-control" placeholder="Phone Number" required></div>
                <div class="col-md-6"><input type="date" name="date" class="form-control" required></div>
                <div class="col-md-6">
                  <select name="guest_count" class="form-select" required>
                    <option value="">Guest Count</option>
                    <option value="10-30">10-30 guests</option>
                    <option value="31-60">31-60 guests</option>
                    <option value="61-100">61-100 guests</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <select name="event_type" class="form-select" required>
                    <option value="">Event Type</option>
                    <option value="tasting">Juice Tasting</option>
                    <option value="workshop">Smoothie Workshop</option>
                    <option value="popup">Juice Bar Pop-up</option>
                    <option value="other">Other</option>
                  </select>
                </div>
                <div class="col-12">
                  <textarea name="message" rows="5" class="form-control" placeholder="Tell us about your event..."></textarea>
                </div>
                <div class="col-12">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your inquiry has been sent. We'll get back to you soon!</div>
                  <button type="submit" class="btn-submit">Send Inquiry</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>
<!-- /Beverages Events Section -->

  <!-- Contact Section -->
  <section id="contact" class="contact section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="contact-info">
            <div class="contact-card">
              <h3>Contact Information</h3>
              <p>Feel free to reach out with any questions about the book, speaking engagements, or media inquiries.</p>

              <div class="contact-details">
                <div class="contact-item">
                  <i class="bi bi-envelope"></i>
                  <div>
                    <h4>Email:</h4>
                    <p>author@example.com</p>
                  </div>
                </div>

                <div class="contact-item">
                  <i class="bi bi-telephone"></i>
                  <div>
                    <h4>Phone:</h4>
                    <p>+1 (555) 123-4567</p>
                  </div>
                </div>

                <div class="contact-item">
                  <i class="bi bi-geo-alt"></i>
                  <div>
                    <h4>Address:</h4>
                    <p>123 Book Street, Literary Lane</p>
                    <p>Wordsmith City, NY 10001</p>
                  </div>
                </div>
              </div>

              <div class="social-links">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="contact-form-wrapper">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="John Doe" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="email">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="john@example.com"
                    required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="I loved your book!"
                  required="">
              </div>
              <div class="form-group mt-3">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" rows="4" placeholder="Your message here..."
                  required=""></textarea>
              </div>

              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>

              <div class="text-center">
                <button type="submit">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section><!-- /Contact Section -->
</main>
@endsection