<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
  <body class="no-trans">


    
      {{-- @include('partials._messages') --}}

      <!-- {{ Auth::check() ? "Logged In" : "Log Out" }} -->

      @yield('content')

          <!-- footer start -->
    <!-- ================ -->
  
    {{-- <footer id="footer">       --}}
      @yield('footer')      
      {{-- @include('partials._footer') --}}
    {{-- </footer> --}}

  
  
    
    <!-- footer end -->
    @include('partials._javascript')
    @yield('scripts')
  </body>
</html>