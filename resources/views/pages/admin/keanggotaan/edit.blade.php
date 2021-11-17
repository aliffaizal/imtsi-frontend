@extends('layouts.admin')

@section('content')
@section('title', 'Edit Keanggotaan')
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
                <form action="{{ route('keanggotaan.update', $keanggotaan->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title" class="font-weight-bolder">Nama Anggota</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" aria-describedby="emailHelp"
                        placeholder="Tambahkan Nama Anggota" value="{{ $keanggotaan->name }}" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="title" class="font-weight-bolder">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" aria-describedby="emailHelp"
                        placeholder="Tambahkan Username" value="{{ $keanggotaan->username }}" required>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="title" class="font-weight-bolder">No. Anggota</label>
                    <input type="number" class="form-control @error('no_anggota') is-invalid @enderror" name="no_anggota" aria-describedby="emailHelp"
                        placeholder="Tambahkan No. Anggota" value="{{ $keanggotaan->no_anggota }}" required>
                        @error('no_anggota')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="title" class="font-weight-bolder">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" aria-describedby="emailHelp"
                        placeholder="Tambahkan Email" value="{{ $keanggotaan->email }}" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="title" class="font-weight-bolder">Jabatan</label>
                    <select name="jabatan_id" class="form-control @error('jabatan_id') is-invalid @enderror">
                    @foreach ($jabatan as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $keanggotaan->jabatan_id ? 'selected' : '' }}>{{ $item->nama_jabatan }}</option>
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
                    @foreach ($divisi as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $keanggotaan->divisi_id ? 'selected' : '' }}>{{ $item->nama_divisi }}</option>
                    @endforeach
                    </select>
                    @error('divisi_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="title" class="font-weight-bolder">Instansi</label>
                    <select name="instansi_id" class="form-control @error('instansi_id') is-invalid @enderror">
                    @foreach ($instansi as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $keanggotaan->instansi_id ? 'selected' : '' }}>{{ $item->instansi }}</option>
                    @endforeach
                    </select>
                    @error('instansi_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="title" class="font-weight-bolder">Wilayah</label>
                    <select name="wilayah_id" class="form-control @error('wilayah_id') is-invalid @enderror">
                    @foreach ($wilayah as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $keanggotaan->wilayah_id ? 'selected' : '' }}>{{ $item->wilayah }}</option>
                    @endforeach
                    </select>
                    @error('wilayah_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div align="right">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
                </form>
            </div>
        </div>



      </div>
      <!-- /.container-fluid -->
@endsection
