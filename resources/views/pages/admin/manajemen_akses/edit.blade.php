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
                <form action="{{ route('user.update', $user->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="title" class="font-weight-bolder">Nama Anggota</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" aria-describedby="emailHelp"
                        placeholder="Tambahkan Nama Anggota" value="{{ $user->name }}" required readonly>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="title" class="font-weight-bolder">No. Anggota</label>
                    <input type="number" class="form-control @error('no_anggota') is-invalid @enderror" name="no_anggota" aria-describedby="emailHelp"
                        placeholder="Tambahkan No. Anggota" value="{{ $user->no_anggota }}" required readonly>
                        @error('no_anggota')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="title" class="font-weight-bolder">User Akses</label>
                    {{-- <input type="text" class="form-control @error('roles') is-invalid @enderror" name="roles" aria-describedby="emailHelp" --}}
                        {{-- placeholder="Tambahkan Username" value="{{ $user->roles }}" required> --}}
                    <select name="roles" class="form-control">
                        <option value="ADMIN" @if ($user->roles == 'ADMIN') selected @endif>ADMIN</option>
                        <option value="USER" @if ($user->roles == 'USER') selected @endif>USER</option>
                    </select>
                        @error('roles')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div align="right">
                    <button type="submit" class="btn btn-success">Ubah</button>
                </div>
                </form>
            </div>
        </div>



      </div>
      <!-- /.container-fluid -->
@endsection
