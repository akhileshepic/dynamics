<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('title')
    <!-- Bootstrap CSS -->
  @include('frontend.common.header')
 
  @yield('style')

  </head>
  <body>
@include('frontend.common.navbar')
@yield('body')
@include('frontend.common.footer')
@include('frontend.common.script')
@yield('script')
  </body>
</html>