@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
       <h1 style="margin-left: 150px;"> {{ $data->title }}</h1>
    </div>
    <div class="row">
        <img src="{{ asset('/image/'.$data->featured_img) }}" style="height: 300px; width: 600px; margin-left: 200px;">
    </div>
    <div class="row">
        <p>{{ $data->body }}</p>
    </div>
    <div class="row">
        <p>{{ $data->cartegory }}</p>
    </div>
</div>
@endsection