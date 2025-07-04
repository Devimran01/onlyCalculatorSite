<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Calculator Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body style="background: linear-gradient(135deg, #e4e7fb, #e7fafe, #d7e2ff) !important; ">
 @include('partials.header')

<div class="container my-container">
  <div class="row g-5">

    <div class="col-md-7">
      <h2 class="custom-heading">Age Calculator</h2>
      <p>
        The Age Calculator determines the exact age of an individual in years, months, and days from the date of birth to the current date. It is widely used for documentation, school admissions, job applications, and health assessments.
      </p>

      <h2 class="custom-subheading">How to Use Age Calculator?</h2>
      <ul>
        <li>Fill Enter Date of Birth.</li>
        <li>Click the convert button and get the result instantly.</li>
      </ul>

      <h3 class="links">FAQs</h3>
      <ul class="calculator-links">
        <li><strong>Does it account for leap years?</strong><br>Yes, the calculator handles all leap year calculations.</li>
        <li><strong>Can it show age in months or days?</strong><br>This version returns age in years, but it can be expanded to show months/days.</li>
      </ul>

      <h2 class="custom-subheading">Age Calculator Table</h2>
      <table class="custom-table">
        <thead>
          <tr>
            <th>DOB</th>
            <th>Current Age</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2000-01-01</td>
            <td>24 years</td>
          </tr>
          <tr>
            <td>2010-06-15</td>
            <td>14 years</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="col-md-5">
      <div class="custom-card">
        <h3 class="custom-title">Age Calculator Tool</h3>

        <form id="dynamicForm">
          <div class="custom-group">
            <label>Enter Date of Birth:</label>
            <input type="date" name="dob" placeholder="Enter Date of Birth" required>
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
        formData.append("slug", "age");

        fetch("/calculator/calculate", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
            },
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            resultBox.textContent = data.result;
        });
    });
});
</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>