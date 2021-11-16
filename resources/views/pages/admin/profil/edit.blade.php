@extends('layouts.admin')

@section('content')
@section('title', 'Edit Profil')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
            {{-- <a href="{{ route('user.profil.edit', $user->id) }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-edit fa sm text-white-50"></i> Edit Profil
            </a> --}}
        </div>

        <div class="card shadow col-xl-8 col-lg-7">
            <div class="card-body">
                <form action="{{ route('user.profil.update', $user->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title" class="font-weight-bolder">Nama Anggota</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" aria-describedby="emailHelp"
                        placeholder="Tambahkan Nama Anggota" value="{{ $user->name }}" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="title" class="font-weight-bolder">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" aria-describedby="emailHelp"
                        placeholder="Tambahkan Username" value="{{ $user->username }}" required>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="title" class="font-weight-bolder">No. Anggota</label>
                    <input type="number" class="form-control @error('no_anggota') is-invalid @enderror" name="no_anggota" aria-describedby="emailHelp"
                        placeholder="Tambahkan No. Anggota" value="{{ $user->no_anggota }}" required>
                        @error('no_anggota')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="title" class="font-weight-bolder">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" aria-describedby="emailHelp"
                        placeholder="Tambahkan Email" value="{{ $user->email }}" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                {{-- <div class="form-group">
                    <label for="title" class="font-weight-bolder">Jabatan</label>
                    <select name="jabatan_id" class="form-control @error('jabatan_id') is-invalid @enderror">
                    @foreach ($jabatan as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $user->jabatan_id ? 'selected' : '' }}>{{ $item->nama_jabatan }}</option>
                    @endforeach
                    </select>
                    @error('jabatan_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div --}}

                  <div class="form-group">
                    <label for="foto" class="font-weight-bolder">Foto</label>
                    <div class="col-md-7">
                        <img src="{{ Storage::url($user->foto) }}" alt="" srcset="" style="height: 150px">
                    </div>
                    <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" aria-describedby="emailHelp"
                        placeholder="Foto" value="{{ $user->foto }}" required>
                        @error('foto')
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
</div>



      </div>
      <!-- /.container-fluid -->

@endsection

