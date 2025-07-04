<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Expense Ratio Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body style="background: linear-gradient(135deg, #e4e7fb, #e7fafe, #d7e2ff);">
 @include('partials.header')

  <div class="container my-container">
    <div class="row g-5">
      <div class="col-md-7">
        <h2 class="custom-heading">Expense Ratio Calculator</h2>
        <p>
          The Expense Ratio Calculator helps investors assess the percentage of their investment that goes toward operating expenses in a mutual fund or ETF. A lower expense ratio means more of your money stays invested, leading to potentially better returns over time.
        </p>

        <h2 class="custom-subheading">How to Use:</h2>
        <ul>
          <li>Enter the total fund expenses (in your currency).</li>
          <li>Enter the total assets under management (AUM).</li>
          <li>Click Convert to get the expense ratio.</li>
        </ul>

        <h3 class="links">FAQs</h3>
        <ul class="calculator-links">
          <li><strong>What is a good expense ratio?</strong><br>Generally, anything below 1% is considered low.</li>
          <li><strong>Why does expense ratio matter?</strong><br>It directly affects your returns over time.</li>
        </ul>

        <h2 class="custom-subheading">Example Table</h2>
        <table class="custom-table">
          <thead>
            <tr>
              <th>Expenses (PKR)</th>
              <th>Assets (PKR)</th>
              <th>Expense Ratio (%)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>50,000</td>
              <td>5,000,000</td>
              <td>1%</td>
            </tr>
            <tr>
              <td>20,000</td>
              <td>4,000,000</td>
              <td>0.5%</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-md-5">
        <div class="custom-card">
          <h3 class="custom-title">Expense Ratio Tool</h3>
          <form id="dynamicForm">
            <div class="custom-group">
              <label>Total Fund Expenses (PKR):</label>
              <input type="number" step="0.01" name="expenses" required placeholder="e.g. 50000">
            </div>
            <div class="custom-group">
              <label>Total Assets (PKR):</label>
              <input type="number" step="0.01" name="assets" required placeholder="e.g. 5000000">
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
    const expenses = parseFloat(form.expenses.value);
    const assets = parseFloat(form.assets.value);

    if (isNaN(expenses) || isNaN(assets) || assets === 0) {
      resultBox.textContent = "Please enter valid numbers.";
      return;
    }

    const ratio = (expenses / assets) * 100;
    resultBox.textContent = "Expense Ratio: " + ratio.toFixed(2) + "%";
  });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
