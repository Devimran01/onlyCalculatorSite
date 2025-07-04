<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Annual Income Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body style="background: linear-gradient(135deg, #e4e7fb, #e7fafe, #d7e2ff);">
 @include('partials.header')

  <div class="container my-container">
    <div class="row g-5">
      <div class="col-md-7">
        <h2 class="custom-heading">Annual Income Calculator</h2>
        <p>
          This calculator helps estimate your yearly income based on your hourly wage, hours worked per week, and total working weeks per year. Perfect for freelancers, part-timers, and employees to manage financial planning and negotiations.
        </p>

        <h2 class="custom-subheading">How to Use:</h2>
        <ul>
          <li>Enter your hourly wage.</li>
          <li>Enter how many hours you work per week.</li>
          <li>Enter how many weeks you work in a year.</li>
          <li>Click Convert to see your estimated annual income.</li>
        </ul>

        <h3 class="links">FAQs</h3>
        <ul class="calculator-links">
          <li><strong>Does it include tax deductions?</strong><br>No, it gives gross annual income only.</li>
          <li><strong>Can this be used by freelancers?</strong><br>Yes, it's great for contract workers and freelancers.</li>
        </ul>

        <h2 class="custom-subheading">Sample Income Table</h2>
        <table class="custom-table">
          <thead>
            <tr>
              <th>Hourly Wage</th>
              <th>Hours/Week</th>
              <th>Weeks/Year</th>
              <th>Annual Income</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>500</td>
              <td>8</td>
              <td>52</td>
              <td>208,000</td>
            </tr>
            <tr>
              <td>1000</td>
              <td>6</td>
              <td>50</td>
              <td>300,000</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-md-5">
        <div class="custom-card">
          <h3 class="custom-title">Annual Income Calculator Tool</h3>
          <form id="dynamicForm">
            <div class="custom-group">
              <label>Hourly Wage (PKR):</label>
              <input type="number" name="wage" required placeholder="e.g. 500">
            </div>
            <div class="custom-group">
              <label>Hours Per Week:</label>
              <input type="number" name="hours" required placeholder="e.g. 40">
            </div>
            <div class="custom-group">
              <label>Weeks Per Year:</label>
              <input type="number" name="weeks" required placeholder="e.g. 52">
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
    const wage = parseFloat(form.wage.value);
    const hours = parseFloat(form.hours.value);
    const weeks = parseFloat(form.weeks.value);

    if (isNaN(wage) || isNaN(hours) || isNaN(weeks)) {
      resultBox.textContent = "Please enter valid numbers.";
      return;
    }

    const income = wage * hours * weeks;
    resultBox.textContent = "Estimated Annual Income: PKR " + income.toLocaleString();
  });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
