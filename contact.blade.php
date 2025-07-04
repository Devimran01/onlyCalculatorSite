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

<section class="contact-hero text-center">
  <div class="container">
    <h1 class="display-4 fw-bold">Contact Us</h1>
    <p class="lead">Have questions or feedback? We'd love to hear from you.</p>
  </div>
</section>

<section class="contact-section">
  <div class="container">
    <div class="row g-5 align-items-stretch">
      <!-- Left Column -->
      <div class="col-md-6 d-flex flex-column justify-content-between">
        <div>
          <h2>Get in Touch</h2>
          <p class="text-muted">
            Whether you have a suggestion for a new calculator, a bug to report, or just want to say hello — we’re here to help. Fill out the form and we’ll get back to you as soon as possible.
          </p>
          <p class="text-muted">
            Our team works hard to ensure you get a smooth experience on our site. From math tools to date calculators — we love building tools that help. Don't hesitate to drop a message!
          </p>
            <p class="text-muted">
            Our team works hard to ensure you get a smooth experience on our site. From math tools to date calculators — we love building tools that help.
          </p>

        </div>
        <ul class="list-unstyled contact-details">
          <li><i class="fas fa-envelope me-2 "></i><strong>Email:</strong> support@calculatorsonly.com</li>
          <li><i class="fas fa-phone-alt me-2 "></i><strong>Phone:</strong> +1 (555) 123-4567</li>
          <li><i class="fas fa-map-marker-alt me-2 "></i><strong>Address:</strong> 123 Web Lane, Calculator City, CA 90210</li>
        </ul>
      </div>

     
      <div class="col-md-6">
        <form action="#" method="POST" class="contact-form border rounded p-4 shadow-sm">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Your Name *</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Your Email *</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Your Message *</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Type your message" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>




@include('partials.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




