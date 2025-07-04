<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Profit Margin Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body style="background: linear-gradient(135deg, #e4e7fb, #e7fafe, #d7e2ff);">
 @include('partials.header')

  <div class="container my-container">
    <div class="row g-5">
      <div class="col-md-7">
        <h2 class="custom-heading">Profit Margin Calculator</h2>
        <p>
          The Profit Margin Calculator helps you determine the profitability of your product or business by calculating the percentage margin from cost and selling price. It’s essential for pricing strategy, profitability analysis, and business decision-making.
        </p>

        <h2 class="custom-subheading">How to Use the Profit Margin Calculator?</h2>
        <ul>
          <li>Enter the cost price of your product or service.</li>
          <li>Enter the selling price.</li>
          <li>Click the convert button to see the profit margin percentage.</li>
        </ul>

        <h3 class="links">FAQs</h3>
        <ul class="calculator-links">
          <li><strong>What is a good profit margin?</strong><br>It depends on the industry. Generally, a 10-20% margin is considered good.</li>
          <li><strong>Can this help with pricing strategy?</strong><br>Yes, knowing your margin helps you price competitively and profitably.</li>
        </ul>

        <h2 class="custom-subheading">Sample Profit Margin Table</h2>
        <table class="custom-table">
          <thead>
            <tr>
              <th>Cost Price</th>
              <th>Selling Price</th>
              <th>Profit Margin</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>100</td>
              <td>150</td>
              <td>50%</td>
            </tr>
            <tr>
              <td>80</td>
              <td>120</td>
              <td>50%</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-md-5">
        <div class="custom-card">
          <h3 class="custom-title">Profit Margin Calculator Tool</h3>

          <form id="dynamicForm">
            <div class="custom-group">
              <label>Cost Price (PKR):</label>
              <input type="number" name="cost" required placeholder="Enter Cost Price">
            </div>
            <div class="custom-group">
              <label>Selling Price (PKR):</label>
              <input type="number" name="price" required placeholder="Enter Selling Price">
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
        const formData = new FormData(form);
        const cost = parseFloat(formData.get("cost"));
        const price = parseFloat(formData.get("price"));

        if (isNaN(cost) || isNaN(price) || cost <= 0 || price <= 0) {
            resultBox.textContent = "Please enter valid positive numbers.";
            return;
        }

        const profit = price - cost;
        const margin = (profit / price) * 100;
        resultBox.textContent = `Profit Margin: ${margin.toFixed(2)}%`;
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
