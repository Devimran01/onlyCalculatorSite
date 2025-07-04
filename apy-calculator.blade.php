<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>APY Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body style="background: linear-gradient(135deg, #e4e7fb, #e7fafe, #d7e2ff);">
 @include('partials.header')

  <div class="container my-container">
    <div class="row g-5">
      <div class="col-md-7">
        <h2 class="custom-heading">APY Calculator</h2>
        <p>
          This APY (Annual Percentage Yield) Calculator helps you determine the real rate of return on your savings or investments based on the interest rate and the number of compounding periods per year. It's a powerful financial planning tool to compare bank accounts, CDs, and investment options.
        </p>

        <h2 class="custom-subheading">How to Use:</h2>
        <ul>
          <li>Enter the interest rate (in %).</li>
          <li>Enter how many times interest compounds per year.</li>
          <li>Click Convert to see the APY.</li>
        </ul>

        <h3 class="links">FAQs</h3>
        <ul class="calculator-links">
          <li><strong>What is APY?</strong><br>It’s the actual annual return on your savings, including compounding.</li>
          <li><strong>Why is APY better than interest rate?</strong><br>Because it gives the real yield you’ll earn.</li>
        </ul>

        <h2 class="custom-subheading">APY Table</h2>
        <table class="custom-table">
          <thead>
            <tr>
              <th>Interest Rate (%)</th>
              <th>Compounding Periods</th>
              <th>APY (%)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>5</td>
              <td>12</td>
              <td>5.12%</td>
            </tr>
            <tr>
              <td>7</td>
              <td>4</td>
              <td>7.19%</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-md-5">
        <div class="custom-card">
          <h3 class="custom-title">APY Calculator Tool</h3>
          <form id="dynamicForm">
            <div class="custom-group">
              <label>Interest Rate (%):</label>
              <input type="number" step="0.01" name="rate" required placeholder="e.g. 5">
            </div>
            <div class="custom-group">
              <label>Compounding Times per Year:</label>
              <input type="number" name="compound" required placeholder="e.g. 12">
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
    const rate = parseFloat(form.rate.value);
    const compound = parseInt(form.compound.value);

    if (isNaN(rate) || isNaN(compound) || compound <= 0) {
      resultBox.textContent = "Please enter valid values.";
      return;
    }

    const apy = (Math.pow(1 + (rate / 100) / compound, compound) - 1) * 100;
    resultBox.textContent = "APY: " + apy.toFixed(2) + "%";
  });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
