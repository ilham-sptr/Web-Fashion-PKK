@extends('layouts.produk')
{{-- <link rel="icon" href="/img/logo-dv.png"> --}}
<nav class="navbar container-fluid mt-4">
  <div class="row container d-flex">
    <div class="logo" style="">
      <a href="/" style="display: flex; align-items: center; text-decoration: none;">
        <img src="/img/logo-dv.png" alt="" width="60" />
        <p style="font-weight: bold; font-size: 22px; padding-top: 20px;"><span style="color: #2B3467;">Deal</span><span style="color: #FF8B13;">Vo</span></p>
      </a>
    </div>
  </div>
</nav>
@section('content')

{{-- @include('partials.navbar') --}}
<div class="container">
  <div class="row justify-content-center align-items-center vh-100">
    <div class="col-md-6">
      <img src="/img/selamat.png" class="img-fluid mx-auto d-block mb-4" alt="Gambar Gembira">
      <div class="card">
        <div class="card-body text-center">
          <h3 class="fw-bold">Selamat!</h3>
          <p>Anda telah berhasil mengisi data pengiriman.</p>
          <p>Untuk melakukan pembayaran disini.</p>
          <a href="https://wa.me/62{{ $pengiriman->nomor_telepon }}?text=Halo, Apakah produk {{ $pengiriman->nama_barang }} masih tersedia?" target="_blank" role="button" class="btn btn-success"><i class='bx bxl-whatsapp'></i> Hubungi Kami via WhatsApp</a>
          {{-- <a href="#" class="btn btn-primary">Kembali ke Beranda</a> --}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection