<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Discount Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>

<body class="calsite" style="background: linear-gradient(135deg, #e4e7fb, #e7fafe, #d7e2ff) !important;">

 @include('partials.header')

  <div class="container my-container">
    <div class="row g-5">
      <div class="col-md-7">
        <h2 class="custom-heading">Discount Calculator</h2>
        <p>
          The Discount Calculator helps you quickly find out the final price after applying a discount percentage. Perfect for shopping, budgeting, and online sales!
        </p>

        <h2 class="custom-subheading">How to Use?</h2>
        <ul>
          <li>Enter the original price.</li>
          <li>Enter the discount percentage.</li>
          <li>Click the convert button to see your savings!</li>
        </ul>

        <h3 class="links">FAQs</h3>
        <ul class="calculator-links">
          <li><strong>Can it calculate any discount?</strong><br>Yes, enter any price and discount %.</li>
          <li><strong>Is it useful for online sales?</strong><br>Absolutely! Great for quick sale price checks.</li>
        </ul>

        <h2 class="custom-subheading">Example Discount Table</h2>
        <table class="custom-table">
          <thead>
            <tr>
              <th>Original Price</th>
              <th>Discount %</th>
              <th>Final Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1000</td>
              <td>10%</td>
              <td>900</td>
            </tr>
            <tr>
              <td>2000</td>
              <td>20%</td>
              <td>1600</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-md-5">
        <div class="custom-card">
          <h3 class="custom-title">Discount Calculator Tool</h3>
          <form id="discountForm">
            <div class="custom-group">
              <label>Original Price:</label>
              <input type="number" name="price" placeholder="Enter original price" required>
            </div>
            <div class="custom-group">
              <label>Discount (%):</label>
              <input type="number" name="discount" placeholder="Enter discount %" required>
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
      const form = document.getElementById("discountForm");
      const resultBox = document.getElementById("result");

      form.addEventListener("submit", function (e) {
        e.preventDefault();
        const price = parseFloat(form.price.value);
        const discount = parseFloat(form.discount.value);

        if (isNaN(price) || isNaN(discount)) {
          resultBox.textContent = "Please enter valid numbers.";
          return;
        }

        const finalPrice = price - (price * (discount / 100));
        resultBox.textContent = `Final Price: PKR ${finalPrice.toFixed(2)}`;
      });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
