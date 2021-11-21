@extends('layouts.admin')

@section('title', 'Artikel')

{{-- @push('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endpush --}}

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
            <a href="{{ route('artikel.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa sm text-white-50"></i> Tambah Artikel
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
                    <table class="table table-bordered table-striped" id="data">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Thumbnail</th>
                                <th>Author</th>
                                <th>Konten</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($artikel as $result)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $result->title }}</td>
                                    <td>
                                        <img src="{{ Storage::url($result->thumbnail) }}" alt="" style="width: 150px"
                                        class="img-thumbnail" />
                                    </td>
                                    <td>{{ $result->user->name }}</td>
                                    <td>{!! $result->content !!}</td>
                                    <td>
                                        <a href="{{ route('artikel.edit', $result->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i> Edit
                                        </a>
                                        <form action="{{ route('artikel.destroy',$result->id) }}" method="POST" class="d-inline">
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

      {{ $artikel->links() }}

@endsection

{{-- @push('scripts')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
        $('#data').DataTable();
    } );
</script>
@endpush --}}
