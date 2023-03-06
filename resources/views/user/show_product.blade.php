@extends('layouts.produk')
@include('partials.navbar')
<style>
  .shadow-btn:hover {
    background-color: #1567aa !important;
  }
</style>

@section('content')
<div class="container pb-5">
    <div class="row g-5 mx-0 align-items-start">
      <div class="col-md-5">
        <img src="{{ Storage::url('public/cloth/').$clothing->image }}" class="rounded w-100 mt-4" alt="Gambar Kartu">
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h1 class="card-title" style="font-weight: bold;">{{$clothing->title}}</h1>
          <h3 class="card-text d-flex mt-0 mb-5" style="color: #205E61;">
            <i class='bx bxs-dollar-circle align-items-center' style="font-size: 30px; padding-right: 5px; padding-top: 3px;"></i> {{$clothing->harga}}
          </h3>
            <form onsubmit="return confirm('Apakah Anda Yakin Ingin Membeli Ini?');" action="{{ route('user.dibuat', $clothing->id) }}">
              <button type="submit" class="fw-bold btn btn-md btn-primary px-3 shadow-btn rounded-pill">Beli Sekarang</button>
            </form>
        </div>
      </div>
    </div>
    <div class="row mx-0 mt-3">
      <h3 class="fw-bold mt-5">Detail Produk {{$clothing->title}}</h3>
      <div style="width: 150px; background: #FF7B54; height: 5px; border-radius: 20px; margin-left: 10px; margin-bottom: 20px;"></div>
      <div>
        {!! $clothing->content !!}
      </div>
        <h3 class="fw-bold mt-5">Detail Pemilik Toko</h3>
        <div style="width: 150px; background: #FF7B54; height: 5px; border-radius: 20px; margin-left: 10px; margin-bottom: 20px;"></div>
        <div class="d-flex justify-between mt-3">
          <div class="avatar" style="margin-right: 13px;">
            <img src="{{ Storage::url('public/cloth/').$clothing->avatar }}" class="rounded-circle" alt="gambar" width="50" height="50">
          </div>
          <div>
            <h5 style="font-weight: bold;">{{$clothing->nama}}</h5>
            <p>{{$clothing->email}}</p>
          </div>
        </div>
        <div style="width: 450px;">
          <h6 class="fw-bold">Alamat:</h6>
          <h6 style="line-height: 25px;"> {!! $clothing->alamat !!}</h6>
        </div>
      </div>
</div>


  {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pengiriman</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('add.myprogram', $clothing->id) }}">
          @csrf
          <div class="modal-body">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" id="name" name="name" class="input mb-3 form-control" placeholder="Masukkan Nama Anda" value="" required autofocus>
            <label for="email" class="form-label">Email</label>
            <input type="text" id="email" name="email" class="input mb-3 form-control" placeholder="Masukkan Email Anda" value="" required>
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" id="alamat" name="alamat" class="input mb-3 form-control" placeholder="Masukkan Alamat Anda" value="" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Kirim</button>
          </div>
        </form>
      </div>
    </div>
  </div> --}}
@endsection