<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Loan EMI Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body style="background: linear-gradient(135deg, #e4e7fb, #e7fafe, #d7e2ff);">
 @include('partials.header')
  <div class="container my-container">
    <div class="row g-5">
      <div class="col-md-7">
        <h2 class="custom-heading">Loan EMI Calculator</h2>
        <p>
          The Loan EMI (Equated Monthly Installment) Calculator helps you estimate your monthly loan repayment amount. Just enter the loan amount, interest rate, and loan term to see how much you will need to pay every month.
        </p>

        <h2 class="custom-subheading">How to Use:</h2>
        <ul>
          <li>Enter your total loan amount.</li>
          <li>Enter annual interest rate (in %).</li>
          <li>Enter loan term (in years).</li>
          <li>Click convert to get your EMI.</li>
        </ul>

        <h3 class="links">FAQs</h3>
        <ul class="calculator-links">
          <li><strong>What is EMI?</strong><br>EMI stands for Equated Monthly Installment, which is the fixed monthly amount paid towards your loan.</li>
          <li><strong>Is the EMI the same throughout?</strong><br>Yes, EMI usually stays the same unless you opt for floating interest rates.</li>
        </ul>

        <h2 class="custom-subheading">Loan EMI Examples</h2>
        <table class="custom-table">
          <thead>
            <tr>
              <th>Loan Amount</th>
              <th>Interest Rate</th>
              <th>Term</th>
              <th>Monthly EMI</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>500,000</td>
              <td>10%</td>
              <td>5 years</td>
              <td>10,624</td>
            </tr>
            <tr>
              <td>1,000,000</td>
              <td>12%</td>
              <td>10 years</td>
              <td>14,347</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-md-5">
        <div class="custom-card">
          <h3 class="custom-title">Loan EMI Tool</h3>
          <form id="dynamicForm">
            <div class="custom-group">
              <label>Loan Amount (PKR):</label>
              <input type="number" name="amount" step="any" required placeholder="e.g. 500000">
            </div>
            <div class="custom-group">
              <label>Interest Rate (% per annum):</label>
              <input type="number" name="rate" step="any" required placeholder="e.g. 10">
            </div>
            <div class="custom-group">
              <label>Loan Term (Years):</label>
              <input type="number" name="years" required placeholder="e.g. 5">
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

    const amount = parseFloat(form.amount.value);
    const rate = parseFloat(form.rate.value) / 12 / 100;
    const months = parseInt(form.years.value) * 12;

    if (isNaN(amount) || isNaN(rate) || isNaN(months) || months <= 0) {
      resultBox.textContent = "Please enter valid inputs.";
      return;
    }

    const emi = (amount * rate * Math.pow(1 + rate, months)) / (Math.pow(1 + rate, months) - 1);
    resultBox.textContent = "Monthly EMI: PKR " + emi.toFixed(2);
  });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
