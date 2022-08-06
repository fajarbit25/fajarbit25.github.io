<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Fajar Ramadana - {{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">

      <h1>Fajar Ramadana</h1>
      <h2>I'am Web Developer</h2>
      <div class="countdown d-flex justify-content-center" data-count="2023/12/3">
        <div>
          <h3><i class="bi bi-filetype-php"></i></h3>
          <h4>Php</h4>
        </div>
        <div>
          <h3><i class="bi bi-filetype-html"></i></h3>
          <h4>HTML</h4>
        </div>
        <div>
          <h3><i class="bi bi-filetype-css"></i></h3>
          <h4>CSS</h4>
        </div>
        <div>
          <h3><i class="bi bi-filetype-js"></i></h3>
          <h4>JavaScript</h4>
        </div>
      </div>

      <div class="subscribe">
        <h4>Subscribe now to get the latest updates!</h4>
        <form action="/subscribe" method="post" role="form" class="php-email-form-1">
          @csrf
          <input type="hidden" name="title" value="Subscribe By">
          <div class="subscribe-form">
            <input type="email" name="email" required><input type="submit" value="Subscribe">
            
          </div>
          <div class="mt-2">
            <div class="loading">Loading</div>
            @error('email')
                    <div class="alert alert-warning">{{ $message }}</div>
            @enderror
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif
          </div>
        </form>
      </div>

      <div class="social-links text-center">
        <a href="https://twitter.com/StarPatriic" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://web.facebook.com/fajarberantakan25" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/fajarramadana_/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/fajar-ramadana-34628a164/" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End #header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
          <p>
            Backend & Frontend Developer. <br/>
            Jasa Pembuatan Website, Segala jenis aplikasi berbasis website, menggunakan beberapa framework terpopuler.
          </p>
        </div>

        <div class="row mt-2">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-bootstrap"></i></div>
            <h4 class="title"><a href="https://getbootstrap.com/" target="_blank">Bootstrap</a></h4>
            <p class="description">Framework HTML, CSS, dan JavaScript yang berfungsi untuk mendesain website responsive dengan cepat dan mudah.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-code-slash"></i></div>
            <h4 class="title"><a href="https://codeigniter.com/" target="_blank">Codeigniter</a></h4>
            <p class="description">Framework khusus web dan application development yang hadir sebagai platform open-source.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-braces-asterisk"></i></div>
            <h4 class="title"><a href="https://laravel.com/" target="_blank">Laravel</a></h4>
            <p class="description">Framework yang sesuai dengan kebutuhan aplikasi web yang akan Anda bangun, Serupakan salah satu framework yang sangat populer saat ini.</p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Makassar City, Sulawesi Selatan, Indonesia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>fajarramadana25@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+6289-533-007-8691</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254333.04988035173!2d119.2625387690013!3d-5.111132313240551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee329d96c4671%3A0x3030bfbcaf770b0!2sMakassar%2C%20Kota%20Makassar%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1659629138104!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="/contact" method="post" role="form" class="php-email-form-1">
                @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" id="name" required>
                  @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required>
                  @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" value="{{ old('subject') }}" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" required>
                @error('subject')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="10" required>{{ old('message') }}</textarea>
                @error('message')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
              <div class="my-3">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Fajar Ramadana</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://fajarbit25.github.io/">Fajar Ramadana</a>
      </div>
    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>
</html>