

@extends('layouts.app')

@section('content')
<div style="background: linear-gradient(135deg, #e4e7fb, #e7fafe, #d7e2ff); !important">
  


<div style="position: relative; background-color: #fefefe; border-radius: 15px; padding: 30px 5px 30px 5px; margin-left: 20px; margin-right: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); transform: translateY(-20px); z-index: 1;">

  <div style="position: absolute; top: -10px; left: 75px; width: 0; height: 0; border-left: 25px solid transparent; border-right: 25px solid transparent; border-bottom: 24px solid #fefefe; border-top-left-radius: 10px; border-top-right-radius: 8px;"></div>

  <div class="card-section" style="background-color: white!important;">
    <ul class="card-list" style="padding-left: 5px; padding-right: 15px; margin: 0;">
      <li class="card"><a href="#"><div class="card-content"><span class="icon">🧬</span><span class="title">Biology</span></div><span class="count">104 calculators</span></a></li>
      <li class="card"><a href="#"><div class="card-content"><span class="icon">🧪</span><span class="title">Chemistry</span></div><span class="count">101 calculators</span></a></li>
      <li class="card"><a href="#"><div class="card-content"><span class="icon">🏗️</span><span class="title">Construction</span></div><span class="count">151 calculators</span></a></li>
      <li class="card"><a href="{{ route('conversion.index') }}"><div class="card-content"><span class="icon">🔁</span><span class="title">Conversion</span></div><span class="count">310 calculators</span></a></li>
      <li class="card"><a href="#"><div class="card-content"><span class="icon">🌿</span><span class="title">Ecology</span></div><span class="count">33 calculators</span></a></li>
      <li class="card"><a href="{{ route('Everyday-life.index') }}"><div class="card-content"><span class="icon">🏡</span><span class="title">Everyday Life</span></div><span class="count">266 calculators</span></a></li>
      <li class="card"><a href="{{ route('finance.index') }}"><div class="card-content"><span class="icon">💰</span><span class="title">Finance</span></div><span class="count">588 calculators</span></a></li>
      <li class="card"><a href=""><div class="card-content"><span class="icon">🍔</span><span class="title">Food</span></div><span class="count">68 calculators</span></a></li>
      <li class="card"><a href="{{ route('health.index') }}"><div class="card-content"><span class="icon">❤️</span><span class="title">Health</span></div><span class="count">428 calculators</span></a></li>
      <li class="card"><a href="#"><div class="card-content"><span class="icon">🧮</span><span class="title">Math</span></div><span class="count">669 calculators</span></a></li>
      <li class="card"><a href="#"><div class="card-content"><span class="icon">⚛️</span><span class="title">Physics</span></div><span class="count">525 calculators</span></a></li>
      <li class="card"><a href="#"><div class="card-content"><span class="icon">🏅</span><span class="title">Sports</span></div><span class="count">109 calculators</span></a></li>
     
    </ul>
  </div>
</div>
</div>

                        
<section class="about-blogs-section">


  <h2 style="padding-top: 20px">ABOUT Calulators Only </h2>

  <p class="about-para" style="padding-top: 20px">
Calculators Only is your trusted hub for an extensive variety of free online calculators crafted to simplify your everyday life and technical tasks. From finance and health to physics, chemistry, mathematics, and even AI-driven tools, we aim to cover every domain where accurate calculations matter. Our mission is to empower users with reliable, up-to-date, and fast solutions—instantly and without any cost. What sets Calculators Only apart is our continuous effort to expand and improve. We regularly update our tools and introduce new calculators to meet evolving user needs. Whether you're solving basic math, managing your budget, analyzing scientific data, or exploring conversions, Calculators Only ensures precision at every step. Each tool is built with accuracy and user-friendliness in mind to enhance your productivity.
  </p>

  

  <button class="explore-btn">
  Explore Our Blogs <span class="arrow-icon">→</span>
</button>


 
  <div class="blog-slider-wrapper" style="position: relative;">

    
    <span class="blog-arrow left-arrow" onclick="scrollBlogs(-1)">&#8249;</span>

    <div class="blog-grid">
      <a href="#" class="blog-card">
        <img src="{{ asset('assets/images/cal.png') }}" alt="Blog 1">
      </a>
      <a href="#" class="blog-card">
        <img src="{{ asset('assets/images/o.png') }}" alt="Blog 2">
      </a>
      <a href="#" class="blog-card">
        <img src="{{ asset('assets/images/m.jpg') }}" alt="Blog 3">
      </a>
      <a href="#" class="blog-card">
        <img src="{{ asset('assets/images/k.png') }}" alt="Blog 4">
      </a>
    </div>


    <span class="blog-arrow right-arrow" onclick="scrollBlogs(1)">&#8250;</span>

  </div>

</section>
<section class="card-section" style="background-color: #44B8C9 !important">
 <h2 style="color: white">popular calculators</h2>
    <div class="card-grid">
    <a href="#" class="card-link">
      <article class="card">
        <h3 class="card-title">
        Body Fat Calculator
          <svg viewBox="0 0 20 20" class="arrow-icon">
            <g>
              <path d="M7.4 10C7.4 10 10.9637 10 15.65 10M15.65 10L10.4 5M15.65 10L10.4 15" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M4.9 10L4.4 10" stroke-width="1.8" stroke-linecap="round"/>
            </g>
          </svg>
        </h3>
        <p class="card-desc"> Calculate your exact body fat percentage to stay on track with your health and fitness.</p>
        <span class="card-tag">body-fat</span>
      </article>
    </a>

    
    <a href="#" class="card-link">
      <article class="card">
        <h3 class="card-title">
        Face Shape Calculator
          <svg viewBox="0 0 20 20" class="arrow-icon">
            <g>
              <path d="M7.4 10C7.4 10 10.9637 10 15.65 10M15.65 10L10.4 5M15.65 10L10.4 15" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M4.9 10L4.4 10" stroke-width="1.8" stroke-linecap="round"/>
            </g>
          </svg>
        </h3>
        <p class="card-desc">Discover your face shape instantly and find the best styles that suit your features.</p>
        <span class="card-tag">face-shape</span>
      </article>
    </a>
    


    <a href="#" class="card-link">
      <article class="card">
        <h3 class="card-title">
        Waist to Height Ratio Calculator
          <svg viewBox="0 0 20 20" class="arrow-icon">
            <g>
              <path d="M7.4 10C7.4 10 10.9637 10 15.65 10M15.65 10L10.4 5M15.65 10L10.4 15" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M4.9 10L4.4 10" stroke-width="1.8" stroke-linecap="round"/>
            </g>
          </svg>
        </h3>
        <p class="card-desc">Find your waist-to-height ratio to assess body shape and overall health accurately.</p>
        <span class="card-tag">waist-height</span>
      </article>
    </a>

    <a href="#" class="card-link">
      <article class="card">
        <h3 class="card-title">
      Fahrenheit to Celsius Converter
          <svg viewBox="0 0 20 20" class="arrow-icon">
            <g>
              <path d="M7.4 10C7.4 10 10.9637 10 15.65 10M15.65 10L10.4 5M15.65 10L10.4 15" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M4.9 10L4.4 10" stroke-width="1.8" stroke-linecap="round"/>
            </g>
          </svg>
        </h3>
        <p class="card-desc">Convert Fahrenheit to Celsius instantly for temperature needs in daily situations.</p>
        <span class="card-tag">fahrenheit-celsius</span>
      </article>
    </a>
    <a href="#" class="card-link">
      <article class="card">
        <h3 class="card-title">
       ML to OZ Converter
          <svg viewBox="0 0 20 20" class="arrow-icon">
            <g>
              <path d="M7.4 10C7.4 10 10.9637 10 15.65 10M15.65 10L10.4 5M15.65 10L10.4 15" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M4.9 10L4.4 10" stroke-width="1.8" stroke-linecap="round"/>
            </g>
          </svg>
        </h3>
        <p class="card-desc">Convert milliliters to ounces easily for cooking, science, and measurement tasks</p>
        <span class="card-tag">ml-oz</span>
      </article>
    </a>
    <a href="#" class="card-link">
      <article class="card">
        <h3 class="card-title">
       KG to Stone Converter
          <svg viewBox="0 0 20 20" class="arrow-icon">
            <g>
              <path d="M7.4 10C7.4 10 10.9637 10 15.65 10M15.65 10L10.4 5M15.65 10L10.4 15" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M4.9 10L4.4 10" stroke-width="1.8" stroke-linecap="round"/>
            </g>
          </svg>
        </h3>
        <p class="card-desc">Convert kilograms into stones quickly, ideal for UK-based weight measurement use.</p>
        <span class="card-tag">kg-stone</span>
      </article>
    </a>
    <a href="#" class="card-link">
      <article class="card">
        <h3 class="card-title">
       KG to Stone Converter
          <svg viewBox="0 0 20 20" class="arrow-icon">
            <g>
              <path d="M7.4 10C7.4 10 10.9637 10 15.65 10M15.65 10L10.4 5M15.65 10L10.4 15" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M4.9 10L4.4 10" stroke-width="1.8" stroke-linecap="round"/>
            </g>
          </svg>
        </h3>
        <p class="card-desc">Convert kilograms into stones quickly, ideal for UK-based weight measurement use.</p>
        <span class="card-tag">kg-stone</span>
      </article>
    </a>



    <a href="#" class="card-link">
      <article class="card">
        <h3 class="card-title">
      Annual Income Calculator
          <svg viewBox="0 0 20 20" class="arrow-icon">
            <g>
              <path d="M7.4 10C7.4 10 10.9637 10 15.65 10M15.65 10L10.4 5M15.65 10L10.4 15" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M4.9 10L4.4 10" stroke-width="1.8" stroke-linecap="round"/>
            </g>
          </svg>
        </h3>
        <p class="card-desc">Find your yearly income based on working hours and hourly wage in one click.</p>
        <span class="card-tag">annual-income</span>
      </article>
    </a>
    <a href="#" class="card-link">
      <article class="card">
        <h3 class="card-title">
    ROI Calculator
          <svg viewBox="0 0 20 20" class="arrow-icon">
            <g>
              <path d="M7.4 10C7.4 10 10.9637 10 15.65 10M15.65 10L10.4 5M15.65 10L10.4 15" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M4.9 10L4.4 10" stroke-width="1.8" stroke-linecap="round"/>
            </g>
          </svg>
        </h3>
        <p class="card-desc">Measure your Return on Investment and check if your money is working smart.</p>
        <span class="card-tag">roi</span>
      </article>
    </a>
    <a href="#" class="card-link">
      <article class="card">
        <h3 class="card-title">
    Steps to Miles Calculator
          <svg viewBox="0 0 20 20" class="arrow-icon">
            <g>
              <path d="M7.4 10C7.4 10 10.9637 10 15.65 10M15.65 10L10.4 5M15.65 10L10.4 15" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M4.9 10L4.4 10" stroke-width="1.8" stroke-linecap="round"/>
            </g>
          </svg>
        </h3>
        <p class="card-desc">Convert your daily steps into miles for better fitness tracking and goals.

</p>
        <span class="card-tag">steps-miles</span>
      </article>
    </a>
     <a href="#" class="card-link">
      <article class="card">
        <h3 class="card-title">
        Interval Calculator
          <svg viewBox="0 0 20 20" class="arrow-icon">
            <g>
              <path d="M7.4 10C7.4 10 10.9637 10 15.65 10M15.65 10L10.4 5M15.65 10L10.4 15" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M4.9 10L4.4 10" stroke-width="1.8" stroke-linecap="round"/>
            </g>
          </svg>
        </h3>
        <p class="card-desc">The confidence interval calculator finds the confidence level for your data sample.</p>
        <span class="card-tag">Statistics</span>
      </article>
    </a>
     <a href="#" class="card-link">
      <article class="card">
        <h3 class="card-title">
     Discount Calculator
          <svg viewBox="0 0 30 20" class="arrow-icon">
            <g>
              <path d="M7.4 10C7.4 10 10.9637 10 15.65 10M15.65 10L10.4 5M15.65 10L10.4 15" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M4.9 10L4.4 10" stroke-width="1.8" stroke-linecap="round"/>
            </g>
          </svg>
        </h3>
        <p class="card-desc">Instantly calculate the discount amount and find your final sale price in seconds.

</p>
        <span class="card-tag">discount</span>
      </article>
    </a>
     
    
  </div>
</section>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<section class="faq-section">
  <h2 class="faq-heading">Frequently Asked Questions</h2>
  
  <div class="faq-container">
    
    <div class="faq-item">
      <button class="faq-question">
        What is a BMI Calculator?
        <span class="arrow"><i class="fas fa-chevron-down"></i></span>
      </button>
      <div class="faq-answer">
        A BMI Calculator helps you find your body mass index using height and weight.
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">
        How accurate is the Age Calculator?
        <span class="arrow"><i class="fas fa-chevron-down"></i></span>
      </button>
      <div class="faq-answer">
        It gives an accurate age based on your birthdate till today.
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">
        Can I use the Loan Calculator free?
        <span class="arrow"><i class="fas fa-chevron-down"></i></span>
      </button>
      <div class="faq-answer">
        Yes, it's 100% free and online, with no registration needed.
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">
        What is a Percentage Calculator?
        <span class="arrow"><i class="fas fa-chevron-down"></i></span>
      </button>
      <div class="faq-answer">
        It helps you calculate percent value, increase/decrease and comparisons.
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">
        Does the Interval Calculator need data?
        <span class="arrow"><i class="fas fa-chevron-down"></i></span>
      </button>
      <div class="faq-answer">
        Yes, you need sample size, mean, and standard deviation to get confidence interval.
      </div>
    </div>

  </div>
</section>



@endsection
