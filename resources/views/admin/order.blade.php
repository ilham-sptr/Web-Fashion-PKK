@extends('layouts.admin')
<title>Manajemen Order</title>
@section('content')
@include('partials.navbarAdmin')
  
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">NAMA PELANGGAN</th>
                                <th scope="col">KELAS</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">NOMOR TELEPON</th>
                                <th scope="col">NAMA BARANG</th>
                                <th scope="col">HARGA</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col">ACTION</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($pengiriman as $driver)
                                    <tr>
                                        <td>{{$driver->nama}}</td>
                                        <td>{{$driver->kelas}}</td>
                                        <td>{{$driver->email}}</td>
                                        <td>{{$driver->nomor_telepon}}</td>
                                        <td>{{$driver->nama_barang}}</td>
                                        <td>{{$driver->harga}}</td>
                                        <td>{{$driver->alamat}}</td>
                                        <td style="width: 100px; text-align:center;">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('clothing.hapusOrder', $driver->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"><i class='bx bx-trash-alt'></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    
                                @empty
                                    <div class="alert alert-danger">
                                        Data Order belum Tersedia.
                                    </div>
                                    
                                @endforelse
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>
@endsection