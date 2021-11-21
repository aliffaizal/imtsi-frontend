@extends('layouts.app')

@section('content')
@section('title', 'Modul')

<div class="container">
    <h1 class="h3 mb-3 text-gray-800 judul">@yield('title')</h1>

    <div class="card-artikel">
        <div class="row">
      @foreach ($modul as $result)
      <div class="col-md-4">
          <div class="card card-artikel" style="width: 18rem;">
              <div class="card-body row">
                  <div class="col-12 col-sm-3"><i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i></div>
                <div class="col-12 col-sm-9"><a href="{{ route('user.modul.show', $result->id) }}" target="_blank">
                    <h4 class="card-title">{{ $result->title }}</h4>
                  </a>
                  <p class="card-text">{{ $result->user->name }}</p>
                  <p class="card-text">{!! $result->description !!}</p></div>
              </div>
            </div>
      </div>
      @endforeach
    </div>
  </div>
</div>




      </div>
      <!-- /.container-fluid -->


      {{ $modul->links() }}
@endsection
