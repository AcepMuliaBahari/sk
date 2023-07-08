<!DOCTYPE html>
<html lang="en">
  <head>
  @include('other.include.meta.meta')
  </head>

  <body>
    <!-- ======= Header ======= -->
    @include('header.header')

    <!-- ======= Hero Section ======= -->

    <section id="hero" class="d-flex justify-content-center align-items-center">
      <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
   
      @yield('content')
    </div>
    </section>
    <!-- ======= Footer ======= -->
    @include('components.footer.footer')

    <div id="preloader"></div>

    @include('other.include.button.back-top')
  

    <!-- Vendor JS Files -->
    @include('other.include.vendor.js')
    
  
    <!-- Template Main JS File -->
    @include('other.include.vendor.main-js')
    
  </body>
</html>
