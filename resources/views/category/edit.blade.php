@extends('layouts.main')
@section('content')
<div class="container" style="width: 500px; height: 500px; background-color: grey; border-radius: 10px;">
<form action="{{ route('category.update',$data->id) }}" method="POST">
  @csrf
  @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Title :</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ $data->title }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
