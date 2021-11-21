@extends('layouts.app')
@section('title','Artikel')
@section('content')

    <div class="container">
      <h1 class="h3 mb-3 text-gray-800">@yield('title')</h1>

      <div class="card-artikel">
          <div class="row">
        @foreach ($artikel as $result)
        <div class="col-md-4">
            <div class="card card-artikel" style="width: 18rem;">
                <img class="card-img-top" src="{{ Storage::url($result->thumbnail) }}" alt="Card image cap" style="height: 180px;">
                <div class="card-body">
                  <a href="{{route('user.artikel.show', $result->id)}}">
                    <h4 class="card-title">{{ $result->title }}</h4>
                  </a>
                  <p class="card-text">{{ $result->user->name }}</p>
                </div>
              </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

{{ $artikel->links() }}
@endsection
