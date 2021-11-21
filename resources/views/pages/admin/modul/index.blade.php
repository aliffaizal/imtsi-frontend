@extends('layouts.admin')

@section('content')
@section('title', 'Modul')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
            <a href="{{ route('modul.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa sm text-white-50"></i> Tambah Modul
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
                                <th>No.</th>
                                <th>Judul</th>
                                <th>File</th>
                                <th>Author</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($modul as $result)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $result->title }}</td>
                                    <td>
                                        <a href="{{ route('modul.show', $result->id) }}" class="btn btn-success">
                                            View
                                        </a>

                                    </td>
                                    <td>{{ $result->user->name }}</td>
                                    <td>{!! $result->description !!}</td>
                                    <td>
                                        <a href="{{ route('modul.edit', $result->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i> Edit
                                        </a>

                                        <form action="{{ route('modul.destroy',$result->id) }}" method="POST" class="d-inline">
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

      {{ $modul->links() }}
@endsection
