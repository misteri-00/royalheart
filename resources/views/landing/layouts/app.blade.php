<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">
<head>
  @include('landing.layouts.head')
</head>
<body>

  <!-- Header Section Start -->
  @include('landing.layouts.header')
  <!-- Header Section End -->

  @yield('content')
  
  <!-- Footer Starts -->
  @include('landing.layouts.footer')
  <!-- Footer Ends -->

  @include('landing.layouts.script')

</body>
</html>
