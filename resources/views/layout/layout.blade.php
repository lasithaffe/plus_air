<html>
  <head>
  	@include('layout.header')
 
  		@yield('content')
 
  	@include('layout.footer')
 
  	@stack('js')
  </body>
</html>