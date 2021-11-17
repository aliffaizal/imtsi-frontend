@extends('layouts.admin')

@section('content')
@section('title', 'Profil')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
            <a href="{{ route('user.profil.edit', $user->id) }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-edit fa sm text-white-50"></i> Edit Profil
            </a>
        </div>

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 border-right">
            <div class="d-flex flex-column align-items-center text-center p-2 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ $user->name }}</span><span class="text-black-50">{{$user->email}}</span><span> </span></div>
        </div>
        <div class="col-md-6 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row">
                    <div class="col-md"><label class="labels">Nama Anggota</label><input type="text" class="form-control" placeholder="first name" value="{{ $user->name }}"></div>
                    <div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control" placeholder="enter phone number" value="{{ $user->username }}"></div>
                    <div class="col-md-12"><label class="labels">No. Anggota</label><input type="text" class="form-control" placeholder="enter address line 1" value="{{ $user->no_anggota }}"></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="enter address line 2" value="{{ $user->email }}"></div>
                    <div class="col-md-12"><label class="labels">Jabatan</label><input type="text" class="form-control" placeholder="enter address line 2" value="{{ $user->nama_jabatan }}"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{{-- </div> --}}



      </div>
      <!-- /.container-fluid -->

@endsection
