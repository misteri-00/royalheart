<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
  @include('admin.layouts.head')
</head>

<body>

  <!--start header-->
  @include('admin.layouts.header')
  <!--end top header-->


   <!--start sidebar-->
  @include('admin.layouts.sidebar')
  <!--end sidebar-->

  <!--start main wrapper-->
  @yield('content')
  <!--end main wrapper-->

  <!--start overlay-->
  <div class="overlay btn-toggle"></div>
  <!--end overlay-->

   <!--start footer-->
   <footer class="page-footer">
    <p class="mb-0">Copyright © 2024. All right reserved.</p>
  </footer>
  <!--end footer-->

  <!--start cart-->
  @include('admin.layouts.chart')
  <!--end cart-->

  <!--start switcher-->
  @include('admin.layouts.switcher')
  <!--start switcher-->

  <!--bootstrap js-->
  @include('admin.layouts.script')

</body>

</html>
