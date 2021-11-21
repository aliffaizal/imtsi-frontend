@extends('layouts.app')
@section('title','Artikel')
@section('content')

<div class="detail-artikel container">
        <div class="">
            <img src="{{ Storage::url($artikel->thumbnail) }}" alt="">
        </div>
        <div class="">
            <h3>{{$artikel->title}}</h3>
            <h4 class="penulis">{{$artikel->user->name}}</h4>
            <p>{!! $artikel->content !!}
            </p>
        </div>
</div>


@endsection
