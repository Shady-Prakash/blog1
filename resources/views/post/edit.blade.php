@extends('layouts.main')
@section('content')
<div class="container" style="width: 500px; height: 500px; background-color: grey; border-radius: 10px;">
<form action="{{ route('post.update',$data->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title :</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ $data->title }}">
  </div>
   {!! Form::select('category',$cats,$cat,['placeholder'=>'Select category','class'=>'form-control']) !!}
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Description :</label>
    <textarea class="form-control" rows="3" name="body">{{ $data->body }}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Image :</label>
    <input type="file" class="form-control-file" name="featured_img">    {{ $data->featured_img }}
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
