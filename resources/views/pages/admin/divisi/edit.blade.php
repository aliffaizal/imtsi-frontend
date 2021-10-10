@extends('layouts.admin')

@section('content')
@section('title', 'Edit Divisi')
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

        <div class="card shadow col-xl-7 col-lg-6">
            <div class="card-body">
                <form action="{{ route('divisi.update', $divisi->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="" class="font-weight-bolder">Divisi</label>
                    <input type="text" class="form-control @error('nama_divisi') is-invalid @enderror" name="nama_divisi" aria-describedby="emailHelp"
                        placeholder="Nama Divisi" value="{{ $divisi->nama_divisi }}" required>
                        @error('nama_divisi')
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