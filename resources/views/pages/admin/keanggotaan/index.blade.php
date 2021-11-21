@extends('layouts.admin')

@section('content')
@section('title', 'Keanggotaan')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
            <a href="{{ route('keanggotaan.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa sm text-white-50"></i> Tambah Anggota
            </a>
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
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No. Anggota</th>
                                <th>Nama Anggota</th>
                                <th>Jabatan</th>
                                <th>Divisi</th>
                                <th>Instansi</th>
                                <th>Wilayah</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($keanggotaan as $result)
                                <tr>
                                    <td>{{ $result->no_anggota }}</td>
                                    <td>{{ $result->name }}</td>
                                    <td>{{ $result->nama_jabatan }}</td>
                                    <td>{{ $result->instansi }}</td>
                                    <td>{{ $result->wilayah }}</td>
                                    <td>{{ $result->nama_divisi }}</td>
                                    <td>
                                        <a href="{{ route('keanggotaan.edit', $result->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i> Edit
                                        </a>
                                        <form action="{{ route('keanggotaan.destroy',$result->id) }}" method="POST" class="d-inline">
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


      {{ $keanggotaan->links() }}
@endsection
