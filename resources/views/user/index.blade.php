@extends('layouts.user')
@section('content')
    <!-- ====== Header ====== -->
    <header class="header">
      <!-- ====== Navigation ====== -->
      @include('partials.navbar')

      <!-- ====== Hero Area ====== -->
      <div class="hero">
        <div class="row container d-flex">
          <div class="col">
            <span class="subtitle">Waktu Terbatas Hanya Untuk Musim Terbaik Anda</span>
            <h1>fash<span class="i" style="color: #F8F988;">i</span>on</h1>
            <p>TERLIHAT TERBAIK DI HARI TERBAIK ANDA</p>

          </div>
          <img src="/img/woman-in-cart.png" alt="" />
        </div>
      </div>
    </header>
      <section class="section blog">
        <div class="title">
          <span>COLLECTION</span>
          <h2>Koleksi Terbaru</h2>
        </div>
  
        <div class="row container">
          
          @forelse ($clothings as $cloth)
          <div class="center" style="display: flex; align-items: center; justify-content: center;">
            <a href="{{ route('user.show', $cloth->id) }}">
              <div class="col" style="background-color: white; height: 500px; width: 350px;">
                <div class="top">
                  <img src="{{ Storage::url('public/cloth/').$cloth->image }}" alt="" width="360" height="200" />
                </div>
                <div class="bottom">
                  <h3 style=" color: #FF7B54;text-align: left; font-weight: bold;padding-left: 25px;">{{$cloth->title}}</h3>
                  <h4 style="text-align: left;" class="">{{$cloth->harga}}</h4>
                  <h4  style="text-align: left;">
                    {!! substr($cloth->content, 0, 100) !!}...
                  </h4>
                </div>
              </div>
            </a>
          </div>
          @empty
              <div class="alert alert-danger container" style="background: #F55050; color: white; padding: 10px; border-radius: 20px">
                  Stok belum Tersedia.
              </div>
          @endforelse
        </div>
      </section>

    <!-- ====== Statistics ====== -->
    <section class="section statistics">
      <div class="title"> 
        <span>STATISTICS</span>
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
    @include('partials.footer')
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
@endsection