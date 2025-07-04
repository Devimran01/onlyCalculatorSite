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
      <h2 class="custom-heading">{{ $title }}</h2>
      <p>{{ $para }}</p>

      <h2 class="custom-subheading">How to Use {{ $title }}?</h2>
      <ul>
        @foreach($inputs as $input)
          <li>Fill {{ $input['placeholder'] }}.</li>
        @endforeach
        <li>Click the convert button and get the result instantly.</li>
      </ul>

      @if(isset($faq))
      <h3 class="links">FAQs</h3>
      <ul class="calculator-links">
        @foreach($faq as $q => $a)
          <li><strong>{{ $q }}</strong><br>{{ $a }}</li>
        @endforeach
      </ul>
      @endif

      @if(isset($table))
      <h2 class="custom-subheading">{{ $title }} Table</h2>
      <table class="custom-table">
        <thead>
          <tr>
            @foreach($table[0] as $th)
              <th>{{ $th }}</th>
            @endforeach
          </tr>
        </thead>
        <tbody>
          @foreach(array_slice($table, 1) as $row)
            <tr>
              @foreach($row as $cell)
                <td>{{ $cell }}</td>
              @endforeach
            </tr>
          @endforeach
        </tbody>
      </table>
      @endif
    </div>

    <div class="col-md-5">
      <div class="custom-card">
        <h3 class="custom-title">{{ $title }} Tool</h3>

        <form id="dynamicForm">
          @foreach($inputs as $input)
            <div class="custom-group">
              <label>{{ $input['placeholder'] }}:</label>
              <input type="{{ $input['type'] ?? 'number' }}" name="{{ $input['name'] }}" placeholder="{{ $input['placeholder'] }}" required>
            </div>
          @endforeach

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
        formData.append("slug", "{{ $slug }}");

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





