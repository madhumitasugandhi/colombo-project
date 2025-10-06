@extends('frontend.layout.app')
@section('main-container')

<main class="main menu-page-section">

  <div class="container-fluid py-5">
    <div class="row">

      <!-- Sidebar -->
      <aside class="col-md-3 mb-4">
        <div class="menu-sidebar p-3 bg-white shadow-sm rounded">
          <h5 class="fw-bold mb-3">Product Categories</h5>
          <ul class="list-unstyled menu-category-list">
            <li><a href="#" class="active" data-filter="all">All Products</a></li>
            <li><a href="#" data-filter="glass">190ml Glass Bottles</a></li>
            <li><a href="#" data-filter="tetra">Tetra Pack</a></li>
            <li><a href="#" data-filter="pet">PET Bottles</a></li>
            <li><a href="#" data-filter="water">Bottled Drinking Water</a></li>
            <li><a href="#" data-filter="bites">Bites, Mixtures & Chips</a></li>
            <li><a href="#" data-filter="confectioneries">Confectioneries</a></li>
            <li><a href="#" data-filter="fruit">Fruit Chunks</a></li>
            <li><a href="#" data-filter="export">Export Range</a></li>
          </ul>
        </div>
      </aside>

      <!-- Main Content -->
      <div class="col-md-9">

        <!-- Banner -->
        <div class="menu-banner mb-4">
          <img src="{{ asset('assets/img/products/banner.jpg') }}" class="img-fluid rounded shadow-sm" alt="Menu Banner">
        </div>

        <!-- Products -->
        <div class="row g-4" id="productGrid">

          <!-- Example Products -->
          <div class="col-md-4 col-sm-6 product-card-wrapper" data-category="glass">
            <div class="menu-product-card p-3 text-center bg-white shadow-sm rounded">
              <img src="{{ asset('assets/img/products/mixed-fruit.jpg') }}" class="img-fluid mb-3" alt="Mixed Fruit Drink">
              <h6 class="fw-bold">Mixed Fruit Drink</h6>
              <p class="small text-muted">190ml Glass Bottle</p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 product-card-wrapper" data-category="glass">
            <div class="menu-product-card p-3 text-center bg-white shadow-sm rounded">
              <img src="{{ asset('assets/img/products/mango-drink.jpg') }}" class="img-fluid mb-3" alt="Mango Drink">
              <h6 class="fw-bold">Mango Drink</h6>
              <p class="small text-muted">190ml Glass Bottle</p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 product-card-wrapper" data-category="tetra">
            <div class="menu-product-card p-3 text-center bg-white shadow-sm rounded">
              <img src="{{ asset('assets/img/products/tetra-pack.jpg') }}" class="img-fluid mb-3" alt="Tetra Pack Drink">
              <h6 class="fw-bold">Tetra Pack Drink</h6>
              <p class="small text-muted">200ml Tetra Pack</p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 product-card-wrapper" data-category="pet">
            <div class="menu-product-card p-3 text-center bg-white shadow-sm rounded">
              <img src="{{ asset('assets/img/products/pet-bottle.jpg') }}" class="img-fluid mb-3" alt="PET Bottle Drink">
              <h6 class="fw-bold">PET Bottle Drink</h6>
              <p class="small text-muted">500ml PET Bottle</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

</main>

{{-- Internal CSS --}}
<style>
/* Unique Menu Page Section */
.menu-page-section .menu-sidebar h5 {
  color: #ff7e5f;
}
.menu-page-section .menu-category-list li {
  margin-bottom: 10px;
}
.menu-page-section .menu-category-list a {
  display: block;
  color: #555;
  padding: 6px 10px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.menu-page-section .menu-category-list a:hover,
.menu-page-section .menu-category-list a.active {
  background: #ff7e5f;
  color: #fff;
  text-decoration: none;
}

.menu-page-section .menu-product-card img {
  height: 200px;
  object-fit: contain;
}
.menu-page-section .menu-product-card:hover {
  box-shadow: 0 8px 20px rgba(0,0,0,0.08);
  transform: translateY(-3px);
  transition: 0.3s;
}
</style>

{{-- JavaScript for Filtering --}}
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const categoryLinks = document.querySelectorAll(".menu-category-list a");
    const productCards = document.querySelectorAll(".product-card-wrapper");

    categoryLinks.forEach(link => {
      link.addEventListener("click", function (e) {
        e.preventDefault();

        // Active class handling
        categoryLinks.forEach(l => l.classList.remove("active"));
        this.classList.add("active");

        const filter = this.getAttribute("data-filter");

        productCards.forEach(card => {
          if (filter === "all" || card.getAttribute("data-category") === filter) {
            card.style.display = "block";
          } else {
            card.style.display = "none";
          }
        });
      });
    });
  });
</script>

@endsection
