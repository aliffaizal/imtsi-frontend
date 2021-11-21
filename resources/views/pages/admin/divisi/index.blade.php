@extends('layouts.admin')

@section('title', 'Divisi')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
            {{-- <a href="{{ route('jabatan.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa sm text-white-50"></i> Tambah Jabatan
            </a> --}}
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalCreate">
                <i class="fas fa-plus fa sm text-white"></i> Tambah Divisi
            </button>
        </div>

        @if (session('message'))
            <div class="alert alert-success alert-dismissible show-fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>x</span>
                    </button>
                    {{session('message')}}
                </div>
            </div>
        @endif

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Divisi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($divisi as $result)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $result->nama_divisi }}</td>
                                    <td>
                                        <a href="{{ route('divisi.edit', $result->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i> Edit
                                        </a>
                                        <form action="{{ route('divisi.destroy',$result->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



      </div>
      <!-- /.container-fluid -->

      <!-- Modal Create -->
      <div class="modal fade" id="modalCreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Divisi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ route('divisi.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title" class="font-weight-bolder">Divisi</label>
                        <input type="text" class="form-control @error('nama_divisi') is-invalid @enderror" name="nama_divisi" aria-describedby="emailHelp"
                            placeholder="Tambahkan Divisi" value="{{ old('nama_divisi') }}" required>
                            @error('nama_divisi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>

          </div>
        </div>
      </div>

      {{ $divisi->links() }}
@endsection
