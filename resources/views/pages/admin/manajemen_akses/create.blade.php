@extends('layouts.admin')

@section('content')
@section('title', 'Tambah Keanggotaan')
@push('after-style')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endpush

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
        </div>

        <div class="card shadow col-xl-8 col-lg-7">
            <div class="card-body">
                <form action="{{ route('keanggotaan.create') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title" class="font-weight-bolder">Nama Anggota</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" aria-describedby="emailHelp"
                        placeholder="Tambahkan Nama Anggota" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="title" class="font-weight-bolder">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" aria-describedby="emailHelp"
                        placeholder="Tambahkan Username" value="{{ old('username') }}" required>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="title" class="font-weight-bolder">No. Anggota</label>
                    <input type="number" class="form-control @error('no_anggota') is-invalid @enderror" name="no_anggota" aria-describedby="emailHelp"
                        placeholder="Tambahkan No. Anggota" value="{{ old('no_anggota') }}" required>
                        @error('no_anggota')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="title" class="font-weight-bolder">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" aria-describedby="emailHelp"
                        placeholder="Tambahkan Email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="title" class="font-weight-bolder">Jabatan</label>
                    <select name="jabatan_id" class="form-control @error('jabatan_id') is-invalid @enderror">
                    <option value="">Pilih Jabatan</option>
                    @foreach ($jabatan as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_jabatan }}</option>
                        
                    @endforeach
                    </select>
                    @error('jabatan_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                <div class="form-group">
                    <label for="title" class="font-weight-bolder">Divisi</label>
                    <select name="divisi_id" class="form-control @error('divisi_id') is-invalid @enderror">
                    <option value="">Pilih Divisi</option>
                    @foreach ($divisi as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_divisi }}</option>
                    @endforeach
                    </select>
                    @error('divisi_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                <div class="form-group">
                    <label for="title" class="font-weight-bolder">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" aria-describedby="emailHelp"
                        placeholder="Tambahkan Password" value="{{ old('password') }}" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="title" class="font-weight-bolder">Konfirmasi Password</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" aria-describedby="emailHelp"
                        placeholder="Tambahkan Konfirmasi Password" value="{{ old('password_confirmation') }}" required>
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div align="right">
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
                </form>
            </div>
        </div>



      </div>
      <!-- /.container-fluid -->
@endsection