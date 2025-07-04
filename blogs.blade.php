
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
<section class="blog-hero text-center py-5">
  <div class="container">
    <h1 class="display-4">Our Blogs</h1>
    <p>Latest updates, tutorials, and tips from our team.</p>
  </div>
</section>


<section class="blog-listing py-5 bg-light">
  <div class="container">
    <div class="row g-5">

      <div class="col-md-4">
  <div class="card blog-card h-100" style="border-radius: 10px; overflow: hidden;">
    <img src="{{ asset('assets/images/k.png') }}" class="card-img-top" alt="Blog Image" style="width: 100%; display: block;">
    
    <div class="card-body" style="padding: 20px;">
      <h5 class="card-title" style="margin-bottom: 10px; font-weight: 600;">Top 5 Calculator Tools for Students</h5>
      <p class="card-text text-muted" style="font-size: 16px;">
        Discover the best calculator tools every student should use for better accuracy and faster calculations....
      </p>
      <a href="#" class="btn btn" style="margin-top: 10px;">Read More</a>
    </div>
  </div>
</div>

   
      <div class="col-md-4">
  <div class="card blog-card h-100" style="border-radius: 10px; overflow: hidden;">
    <img src="{{ asset('assets/images/k.png') }}" class="card-img-top" alt="Blog Image" style="width: 100%; display: block;">
    
    <div class="card-body" style="padding: 20px;">
      <h5 class="card-title" style="margin-bottom: 10px; font-weight: 600;">Top 5 Calculator Tools for Students</h5>
      <p class="card-text text-muted" style="font-size: 16px;">
        Discover the best calculator tools every student should use for better accuracy and faster calculations....
      </p>
      <a href="#" class="btn btn" style="margin-top: 10px;">Read More</a>
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="card blog-card h-100" style="border-radius: 10px; overflow: hidden;">
    <img src="{{ asset('assets/images/k.png') }}" class="card-img-top" alt="Blog Image" style="width: 100%; display: block;">
    
    <div class="card-body" style="padding: 20px;">
      <h5 class="card-title" style="margin-bottom: 10px; font-weight: 600;">Top 5 Calculator Tools for Students</h5>
      <p class="card-text text-muted" style="font-size: 16px;">
        Discover the best calculator tools every student should use for better accuracy and faster calculations....
      </p>
      <a href="#" class="btn btn" style="margin-top: 10px;">Read More</a>
    </div>
  </div>
</div>

</section>

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
