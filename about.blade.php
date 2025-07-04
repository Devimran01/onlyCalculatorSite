<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Calculator Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>


<header class="main-header">
    <nav class="navbar">
        <div class="logo">CALCULATORS ONLY</div>
        <ul class="nav-links">
             <li><a href="{{ url('/') }}">Home</a></li>
   
    <li><a href="{{ url('/about-us') }}">About Us</a></li>
    <li><a href="{{ url('/blogs') }}">Blogs</a></li>
            <li><a href="{{ url('/contact-us') }}">Contact</a></li>
        </ul>
    </nav>





  <section class="about-hero text-center text-white d-flex align-items-center justify-content-center">
    <div>
      <h1 class="display-4 fw-bold">About Us</h1>
      <p class="lead">Simple. Fast. Accurate. Everything you need in a calculator site.</p>
    </div>
  </section>

  <!-- About Content -->
  <section class="about-section py-5">
    <div class="container">
      
      <!-- Who We Are -->
      <div class="row align-items-center mb-5">
        <div class="col-md-4">
          <img src="{{ asset('assets/images/k.png') }}" class="img-fluid rounded shadow" alt="Team behind Calculators Only">
        </div>
        <div class="col-md-8">
          <h2 class="mb-3">Who We Are</h2>
          <p class="text-muted">
            At <strong>Calculators Only</strong>, we provide easy-to-use, accurate calculators for daily tasks like age, EMI, and percentage calculations. Our tools are designed to simplify your life by offering instant results with a clean, responsive interface.
          </p>
          <p class="text-muted">
           Fast, accurate, and user-friendly calculators designed to make your everyday math and financial tasks easier. Whether you're calculating your age, monthly EMI, body mass index, or simple percentages – we’ve built the tools that save you time and effort.
          </p>
        </div>
      </div>

      <!-- Our Mission -->
      <div class="row align-items-center mb-5">
        <div class="col-md-4 order-md-2">
          <img src="{{ asset('assets/images/m.jpg') }}" class="img-fluid rounded shadow" alt="Calculators Only Mission">
        </div>
        <div class="col-md-8 order-md-1">
          <h2 class="mb-3">Our Mission</h2>
          <p class="text-muted">
            Our mission is to be the go-to platform for reliable online calculators. We focus on simplicity, accuracy, and speed — with no clutter or distractions. Whether you're a student, professional, or everyday user, we aim to help you solve problems instantly.
          </p>
          <p class="text-muted">
            We keep improving and adding tools that matter most to our users.
          </p>
        </div>
      </div>

      <!-- Extra Section -->
      <div class="row align-items-center">
        <div class="col-md-4">
          <img src="{{ asset('assets/images/k.png') }}" class="img-fluid rounded shadow" alt="Our Values">
        </div>
        <div class="col-md-8">
          <h2 class="mb-3">What Makes Us Different</h2>
          <p class="text-muted">
            Unlike other websites filled with ads and slow tools, we focus purely on functionality and speed. Our goal is to give you exactly what you need — fast and distraction-free.
          </p>
          <p class="text-muted">
            We're committed to continuous improvement and listening to our users' needs every step of the way.
          </p>
        </div>
      </div>

    </div>
  </section>



@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


