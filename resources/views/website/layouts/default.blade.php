<!DOCTYPE html>
<html lang="en">

<head>

@include('website.includes.head')
</head>

<body id="page-top">

@include('website.includes.nav')
@yield('content')
@include('website.includes.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('website/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('website/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('website/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="{{ asset('website/js/scrolling-nav.js')}}"></script>
 
</body>

</html>
