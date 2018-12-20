@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
       <h1> {{ $data->title}}</h1>
    </div>
    <div class="row">
        <img src="{{ asset('/image/'.$data->featured_img) }}" style="height: 50px; width: 50px;">
    </div>
    <div class="row">
        <p>{{ $data->body }}</p>
    </div>
</div>
@endsection