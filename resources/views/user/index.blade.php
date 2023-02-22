<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ====== Favicon ====== -->
    <link
      rel="shortcut icon"
      href="/img/favicon-32x32.png"
      type="image/png"
    />
    <!-- ====== Boxicons ====== -->
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- ====== Swiper CSS ====== -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <!-- ====== Custom CSS ====== -->
    <link rel="stylesheet" href="/css/styles.css" />
    <title>Fashion Shop</title>
  </head>
  <body>
    <!-- ====== Header ====== -->
    <header class="header">
      <!-- ====== Navigation ====== -->
      <nav class="navbar">
        <div class="row container d-flex">
          <div class="logo">
            <img src="/img/logo.svg" alt="" />
          </div>

          <div class="nav-list d-flex">
            <div class="close">
              <i class="bx bx-x"></i>
            </div>
            <a class="user-link">Login</a>
          </div>

          <div class="icons d-flex">
            <div class="icon user-icon d-flex">
              <i class="bx bx-user"></i>
            </div>
            <div class="icon d-flex">
              <i class="bx bx-bell"></i>
              <span></span>
            </div>
          </div>

          <!-- Hamburger -->
          <div class="hamburger">
            <i class="bx bx-menu-alt-right"></i>
          </div>
        </div>
      </nav>

      <!-- ====== Hero Area ====== -->
      <div class="hero">
        <div class="row container d-flex">
          <div class="col">
            <span class="subtitle">Waktu Terbatas Hanya Untuk Musim Terbaik Anda</span>
            <h1>fash<span class="i">i</span>on</h1>
            <p>TERLIHAT TERBAIK DI HARI TERBAIK ANDA</p>

          </div>
          <img src="/img/woman-in-cart.png" alt="" />
        </div>
      </div>
    </header>

      <!-- ====== Blog ====== -->
      {{-- @foreach ($clothings as $cloth)
    <section class="section blog">
        <div class="title">
          <span>Koleksi</span>
          <h2>Koleksi Terbaru</h2>
        </div>
              
        <div class="row container">
          <div class="col">
            <div class="top">
              <img src="{{ Storage::url('public/cloth/').$cloth->image }}" />
            </div>
            <div class="bottom">
              <h3>{{$cloth->title}}</h3>
              <h4>
                {!! $cloth->content !!}
              </h4>
              <span>{{$cloth->harga}}</span>
            </div>
          </div>
        </div>
      </section>
      @endforeach --}}
      <section class="section blog">
        <div class="title">
          <span>Koleksi</span>
          <h2>Koleksi Terbaru</h2>
        </div>
  
        <div class="row container">
          
          @forelse ($clothings as $cloth)    
          <div class="col" style="background-color: white;">
            <div class="top">
              <img src="{{ Storage::url('public/cloth/').$cloth->image }}" alt="" width="360" height="200" />
            </div>
            <div class="bottom">
              <h3>{{$cloth->title}}</h3>
              <span>{{$cloth->harga}}</span>
              <h4>
                {!! substr($cloth->content, 0, 100) !!}...
              </h4>
              <a class="fancy" href="#">
                <span class="top-key"></span>
                <span class="text"><p style="font-size: 13px;">Lihat Selengkapnya</p></span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
              </a>
            </div>
          </div>
          @empty
              <div class="alert alert-danger">
                  Fashion belum Tersedia.
              </div>
          @endforelse
        </div>
      </section>

    <!-- ====== Statistics ====== -->
    <section class="section statistics">
      <div class="title">
        <span>STATS</span>
        <h2>Statistik Kami</h2>
      </div>

      <div class="row container">
        <div class="col">
          <div class="icon">
            <i class="bx bxs-check-square"></i>
          </div>
          <h3>Sistem Pemesanan Mudah</h3>
          <p>Sebuah sistem yang dirancang untuk memudahkan proses pemesanan suatu produk.</p>
        </div>
        <div class="col">
          <div class="icon">
            <i class="bx bxs-user"></i>
          </div>
          <h3>Pengiriman tepat waktu</h3>
          <p>Suatu kondisi dimana barang atau paket berhasil dikirimkan kepada penerima pada waktu yang telah ditentukan sebelumnya, atau dalam waktu yang diharapkan oleh penerima.</p>
        </div>
        <div class="col">
          <div class="icon">
            <i class="bx bxs-dollar-circle"></i>
          </div>
          <h3>Garansi Uang Kembali</h3>
          <p>Kebijakan yang ditawarkan oleh penjual atau produsen untuk memberikan jaminan kepada pembeli bahwa jika produk yang dibeli tidak memenuhi harapan.</p>
        </div>
        <div class="col">
          <div class="icon">
            <i class="bx bxs-user"></i>
          </div>
          <h3>24/7 Dukungan Pelanggan</h3>
          <p>Memberikan layanan yang cepat dan responsif kepada pelanggan yang memerlukan bantuan atau memiliki pertanyaan tentang produk atau layanan yang ditawarkan.

          </p>
        </div>
      </div>
    </section>

    <!-- ====== Footer ====== -->
    <footer class="footer" style="font-size: 15px;">
      <div class="row container">
        <div class="col">
          <div class="logo d-flex">
            <img src="/img/logo.svg" alt="logo" />
          </div>
          <p style="font-size: 15px;">
            perusahaan teknologi yang berfokus pada solusi e-commerce untuk bisnis kecil dan menengah. 
          </p>
          <div class="icons d-flex">
            <div class="icon d-flex"><i class="bx bxl-instagram"></i></div>
            <div class="icon d-flex"><i class="bx bxl-youtube"></i></div>
          </div>
          <p class="color" style="font-size: 15px;">
            Copyrights 2023 <br />
            @sijasmkn69jkt
          </p>
        </div>
        <div class="col">
          <div style="margin-right: 100px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.433230493772!2d106.9236853141934!3d-6.206445462522951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698bcabb1368d7%3A0xea46dd080cc5e54c!2sSMKN%2069%20JAKARTA!5e0!3m2!1sid!2sid!4v1676974754534!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div>
            <h4>Contact Us</h4>
            <div class="d-flex">
              <div class="icon"><i class="bx bxs-map"></i></div>
              <span style="font-size: 15px; width: 300px;">Jl. Swadaya, RT.7/RW.7, Jatinegara, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13930</span>
            </div>
            <div class="d-flex">
              <div class="icon"><i class="bx bxs-envelope"></i></div>
              <span style="font-size: 15px;">ilham.26cand@gmail.com</span>
            </div>
            <div class="d-flex">
              <div class="icon"><i class="bx bxs-phone"></i></div>
              <span style="font-size: 15px;">+6281299010725</span>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- ====== Login and Signup Form ====== -->
    <div class="user-form">
      <div class="close-form d-flex"><i class="bx bx-x"></i></div>
      <div class="form-wrapper container">
        <div class="user login">
          <div class="img-box">
            <img src="/img/login.svg" alt="" />
          </div>
          <div class="form-box">
            <div class="top">
              <p>
                Belum punya akun?
                <span data-id="#ff0066">Daftar Sekarang</span>
              </p>
            </div>
            <form action="">
              <div class="form-control">
                <h2>Hello!</h2>
                <p>Selamat datang kembali.</p>
                <input type="text" placeholder="Masukkan Username Anda" />
                <div>
                  <input type="password" placeholder="Masukkan Password Anda" />
                  <div class="icon form-icon">
                    <!-- <img src="/img/eye.svg" alt="" /> -->
                  </div>
                </div>
                <span>Kata Sandi Pemulihan</span>
                <input type="Submit" value="Login" />
              </div>
            </form>
          </div>
        </div>

        <!-- Register -->
        <div class="user signup">
          <div class="form-box">
            <div class="top">
              <p>
                Sudah memiliki akun?
                <span data-id="#1a1aff">Login Sekarang</span>
              </p>
            </div>
            <form action="">
              <div class="form-control">
                <h2>Selamat Datang di Fashion Shop!</h2>
                <p>Senang memilikimu.</p>
                <input type="email" placeholder="Masukkan Email Anda" />
                <div>
                  <input type="password" placeholder="Masukkan Password Anda" />
                  <div class="icon form-icon">
                    <img src="/img/eye.svg" alt="" />
                  </div>
                </div>
                <div>
                  <input type="password" placeholder="Masukkan Konfirmasi Password Anda" />
                  <div class="icon form-icon">
                    <img src="/img/eye.svg" alt="" />
                  </div>
                </div>
                <input type="submit" value="Daftar" />
              </div>
            </form>
          </div>
          <div class="img-box">
            <img src="/img/trial.svg" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- ====== SwiperJs ====== -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- ====== Custom Script ====== -->
    <script src="/js/product.js"></script>
    <script src="/js/main.js"></script>
  </body>
</html>
