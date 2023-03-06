@extends('layouts.produk')
@section('content')

@include('partials.navbar')
<div class="container">
  <div class="row justify-content-center align-items-center vh-100">
    <div class="col-md-6">
      <img src="/img/selamat.png" class="img-fluid mx-auto d-block mb-4" alt="Gambar Gembira">
      <div class="card">
        <div class="card-body text-center">
          <h3 class="fw-bold">Selamat!</h3>
          <p>Anda telah berhasil mengisi data pengiriman.</p>
          <p>Untuk melakukan pembayaran disini.</p>
          <a href="https://wa.me/62{{substr($clothing->nomor_telepon, 1, 12)}}?text=Permisi%20Admin%20Kepada%20:%0D%0AEmail%20:%0D%0A" class="btn btn-success" target="_blank"><i class='bx bxl-whatsapp'></i> Hubungi Kami via WhatsApp</a>
          {{-- <a href="#" class="btn btn-primary">Kembali ke Beranda</a> --}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection