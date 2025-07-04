<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Acreage Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body style="background: linear-gradient(135deg, #e4e7fb, #e7fafe, #d7e2ff) !important;">
 @include('partials.header')

<div class="container my-container">
  <div class="row g-5">

    <div class="col-md-7">
      <h2 class="custom-heading">Acreage Calculator</h2>
      <p>
        The Acreage Calculator helps you convert land area from square feet to acres. Useful for real estate, farming, and property development, it provides quick and accurate results.
      </p>

      <h2 class="custom-subheading">How to Use Acreage Calculator?</h2>
      <ul>
        <li>Enter the area in square feet.</li>
        <li>Click convert to get the result in acres.</li>
      </ul>

      <h3 class="links">FAQs</h3>
      <ul class="calculator-links">
        <li><strong>How many square feet in one acre?</strong><br>43,560 square feet = 1 acre</li>
        <li><strong>Is it useful for farming land?</strong><br>Yes, especially for measuring large plots.</li>
      </ul>

      <h2 class="custom-subheading">Sample Conversions</h2>
      <table class="custom-table">
        <thead>
          <tr>
            <th>Square Feet</th>
            <th>Acres</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>43560</td><td>1</td></tr>
          <tr><td>87120</td><td>2</td></tr>
        </tbody>
      </table>
    </div>

    <div class="col-md-5">
      <div class="custom-card">
        <h3 class="custom-title">Acreage Calculator Tool</h3>

        <form id="dynamicForm">
          <div class="custom-group">
            <label>Enter Square Feet:</label>
            <input type="number" name="square_feet" placeholder="e.g. 43560" required>
          </div>
          <button type="submit">Convert</button>
        </form>

        <p id="result">Result will appear here</p>
      </div>
    </div>

  </div>
</div>

@include('partials.footer')

<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("dynamicForm");
    const resultBox = document.getElementById("result");

    form.addEventListener("submit", function (e) {
        e.preventDefault();
        const squareFeet = parseFloat(form.square_feet.value);
        if (isNaN(squareFeet) || squareFeet <= 0) {
            resultBox.textContent = "Please enter a valid number.";
            return;
        }
        const acres = (squareFeet / 43560).toFixed(4);
        resultBox.textContent = `${squareFeet} square feet = ${acres} acres`;
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
