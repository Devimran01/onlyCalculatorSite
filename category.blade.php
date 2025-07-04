


@extends('layouts.app')

@section('content')


<div class="container my-5">

  <h2 class="mb-2 category-title">Health Calculators</h2>


  <small class="text-muted d-block mb-3 total-count">150 Calculators</small>

 
  <p class="mb-4 category-description">
      Our Health Calculators are designed to help you monitor and improve your well-being. From tracking your Body Mass Index (BMI) to calculating heart rate zones, calorie needs, and more — these tools provide quick and accurate results to support a healthier lifestyle. Whether you're focusing on fitness, nutrition, or general wellness, our calculators make it easier to stay informed and make better health decisions.
  </p>



  <div class="row">
    <div class="col-md-6">
        <ul class="calculator-links">
            <li><a href="{{ url('/calculator/sqft-to-cubic-yds') }}">Square Feet to Cubic Yards Calculator</a></li>
            <li><a href="{{ url('/calculator/water-intake') }}">Water Intake Calculator</a></li>
            <li><a href="{{ url('/calculator/ideal-weight') }}">Ideal Weight Calculator</a></li>
            <li><a href="{{ url('/calculator/bmr') }}">BMR Calculator</a></li>
            <li><a href="{{ url('/calculator/sqft-to-cubic-yds') }}">Square Feet to Cubic Yards Calculator</a></li>
            <li><a href="{{ url('/calculator/water-intake') }}">Water Intake Calculator</a></li>
            <li><a href="{{ url('/calculator/ideal-weight') }}">Ideal Weight Calculator</a></li>
            <li><a href="{{ url('/calculator/bmr') }}">BMR Calculator</a></li>
        </ul>
    </div>
    <div class="col-md-6">
       <ul class="calculator-links">
            <li><a href="{{ url('/calculator/bmi') }}">BMI Calculator</a></li>
            <li><a href="{{ url('/calculator/body-fat') }}">Body Fat Calculator</a></li>
            <li><a href="{{ url('/calculator/calorie-intake') }}">Calorie Intake Calculator</a></li>
            <li><a href="{{ url('/calculator/heart-rate') }}">Heart Rate Calculator</a></li>
            <li><a href="{{ url('/calculator/sqft-to-cubic-yds') }}">Square Feet to Cubic Yards Calculator</a></li>
            <li><a href="{{ url('/calculator/water-intake') }}">Water Intake Calculator</a></li>
            <li><a href="{{ url('/calculator/ideal-weight') }}">Ideal Weight Calculator</a></li>
            <li><a href="{{ url('/calculator/bmr') }}">BMR Calculator</a></li>
        </ul>
    </div>
  </div>
</div>

@endsection







