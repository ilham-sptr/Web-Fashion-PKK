@extends('layouts.produk')

{{-- 'nama', 'email', 'kelas', 'nomor_telepon', 'alamat' --}}
@section('content')
@include('partials.navbar')
<div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h3 class="text-center mb-4 fw-bold">Formulir Pengiriman</h3>
            <form action="{{route('user.pengiriman')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Barang</label>
                  <input type="text" class="form-control @error('nama_barang') is-invalid @enderror"  id="nama" placeholder="Masukkan Nama Barang Anda" name="nama_barang" value="{{$clothing->title}}">
                  @error('nama_barang')
                      <div class="alert alert-danger mt-2">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Harga</label>
                  <input type="text" class="form-control @error('harga') is-invalid @enderror"  id="harga" placeholder="Masukkan Harga Barang Anda" name="harga" value="{{$clothing->harga}}">
                  @error('harga')
                      <div class="alert alert-danger mt-2">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror"  id="nama" placeholder="Masukkan Nama Lengkap Anda" name="nama">
                @error('nama')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" placeholder="Masukkan Kelas Lengkap Anda" name="kelas">
                @error('kelas')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Alamat Email Anda" name="email">
                @error('email')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="tel" class="form-label">Nomor Telepon</label>
                <input type="tel" class="form-control @error('nomor_telepon') is-invalid @enderror" id="tel" placeholder="Masukkan Nomor Telepon Anda" name="nomor_telepon">
                @error('nomor_telepon')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="5" placeholder="Masukkan Alamat Pengiriman Anda">{{ old('alamat') }}</textarea>
                @error('alamat')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-block">Dikirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
  
@endsection
