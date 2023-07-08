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
      <div
        class="container position-relative"
        data-aos="zoom-in"
        data-aos-delay="100"
      >
        <h1>Kemenpora<br />{{ $title }}</h1>
        <h2>
          Merupakan aplikasi data atlet dan pelatih dibawah naungan Asdep Sentra Pembinaan Olahraga Prestasi
        </h2>
        <a href="courses.html" class="btn-login">Login</a>
      </div>
    </section>
    <!-- End Hero -->

    <!-- ======= Footer ======= -->
    @include('components.footer.footer')

    {{-- uncoment untuk menggunakan loader --}}
    {{-- <div id="preloader"></div> --}}

    @include('other.include.button.back-top')
  

    <!-- Vendor JS Files -->
    @include('other.include.vendor.js')
    
  
    <!-- Template Main JS File -->
    @include('other.include.vendor.main-js')
    
  </body>
</html>
