<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Login Ayna Looks</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('template1/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('template1/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('template1/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('template1/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('template1/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('template1/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('template1/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('template1/assets/vendor/drift-zoom/drift-basic.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('template1/assets/css/main.css')}}" rel="stylesheet">

  <!-- Custom CSS -->
</head>

<body class="login-register-page">

  <main class="main">
    <!-- Login Register Section -->
    <section id="login-register" class="login-register section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <!-- Tombol Silang -->
        <a href="{{ route('landing.index') }}" class="close-btn" title="Kembali ke Halaman Utama">
          <i class="bi bi-x-lg"></i>
        </a>

        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="login-register-wraper">

              <!-- Tab Navigation -->
              <ul class="nav nav-tabs nav-tabs-bordered justify-content-center mb-4" role="tablist">
                <h2 class="text-center mb-4" style="font-size: 28px; font-weight: bold;">
                  <i class="bi bi-box-arrow-in-right me-1"></i> Login Ayna's
                </h2>
              </ul>

              <!-- Tab Content -->
              <div class="tab-content">

                <!-- Login Form -->
                <div class="tab-pane fade show active" id="login-register-login-form" role="tabpanel">
                  <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Input -->
                    <div class="mb-4">
                      <label for="login-register-login-email" class="form-label">Email address</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror"
                        id="login-register-login-email" name="email" value="{{ old('email') }}" required
                        autocomplete="email" autofocus>

                      @error('email')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
                    </div>

                    <!-- Password Input with Eye Toggle -->
                    <div class="mb-4 position-relative">
                      <label for="login-register-login-password" class="form-label">Password</label>
                      <input type="password" class="form-control @error('password') is-invalid @enderror"
                        id="login-register-login-password" name="password" required autocomplete="current-password">
                      <span class="password-toggle" onclick="togglePassword()">
                        <i class="bi bi-eye" id="toggle-icon"></i>
                      </span>

                      @error('password')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
            @enderror
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="login-register-remember-me" name="remember"
                          {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="login-register-remember-me">Remember me</label>
                      </div>
                      @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}" class="forgot-password">Forgot Password?</a>
            @endif
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                      <button type="submit" class="btn btn-primary btn-lg">Login</button>
                    </div>

                    <!-- Register Option -->
                    <div class="text-center mt-3">
                      <p>Tidak punya akun? <a href="{{ route('register') }}" class="text-primary">Registrasi
                          sekarang</a></p>
                    </div>
                  </form>
                </div>

              </div>

            </div>
          </div>
        </div>

      </div>

    </section><!-- /Login Register Section -->

  </main>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('template1/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template1/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('template1/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('template1/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('template1/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('template1/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('template1/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('template1/assets/vendor/drift-zoom/Drift.min.js')}}"></script>
  <script src="{{asset('template1/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('template1/assets/js/main.js')}}"></script>

  <script>
    function togglePassword() {
      const passwordField = document.getElementById('login-register-login-password');
      const toggleIcon = document.getElementById('toggle-icon');
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleIcon.classList.remove('bi-eye');
        toggleIcon.classList.add('bi-eye-slash');
      } else {
        passwordField.type = 'password';
        toggleIcon.classList.remove('bi-eye-slash');
        toggleIcon.classList.add('bi-eye');
      }
    }
  </script>
</body>

</html>