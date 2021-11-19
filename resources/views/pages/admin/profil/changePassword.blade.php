@extends('layouts.admin')

@section('content')
@section('title', 'Ubah Password')
@push('after-style')
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
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

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('password.edit') }}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="old_password">Password Lama</label>
                    <input type="password" class="form-control @error('old_password') is-invalid @enderror"
                    id="old_password" name="old_password"
                    placeholder="Masukkan password lama anda ...">
                    @error('old_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password Baru</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                    id="password" name="password"
                    placeholder="Masukkan password baru anda ...">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password Baru</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                    id="password_confirmation" name="password_confirmation"
                    placeholder="Konfirmasi password anda ...">
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div align="right">
                    <button type="submit" class="btn btn-success">Ubah Password</button>
                </div>
                </form>
            </div>
        </div>



      </div>
      <!-- /.container-fluid -->

@endsection


@push('after-scripts')
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
@endpush
