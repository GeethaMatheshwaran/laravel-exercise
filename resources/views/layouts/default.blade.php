<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('expect-title')</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
</head>
<body class="d-flex flex-column min-vh-100">
<!-- Header -->

@include('layouts.includes.header')

<!-- Content -->
<div class="flex-grow-1">
@section('main-content')
{{-- <section>

</section> --}}
@show
</div>

<!-- Footer -->
@include('layouts.includes.footer')

<!-- Include Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
