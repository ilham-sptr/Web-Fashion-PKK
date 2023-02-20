@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('clothing.create') }}" class="btn btn-md btn-success mb-3">TAMBAH PRODUK</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">NAMA</th>
                                <th scope="col">KELAS</th>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">DITERBIT</th>
                                <th scope="col">CONTENT</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($clothings as $cloth)
                                <tr>
                                    <td>{{ $cloth->nama }}</td>
                                    <td>{{ $cloth->kelas }}</td>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/cloth/').$cloth->image }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $cloth->title }}</td>
                                    <td>{{ $cloth->updated_at }}</td>
                                    <td>{!! $cloth->content !!}</td>
                                    <td style="width: 100px;">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('clothing.destroy', $cloth->slug) }}" method="POST">
                                            <a href="{{ route('clothing.edit', $cloth->slug) }}" class="btn btn-sm btn-primary"><i class='bx bxs-pencil'></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class='bx bx-trash-alt'></i></button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Clothing belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $clothings->links() }}
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