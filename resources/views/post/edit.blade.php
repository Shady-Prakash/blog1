@extends('layouts.main')
@section('content')
<div class="container" style="width: 500px; height: 500px; background-color: grey; border-radius: 10px;">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Title :</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter title" name="title">
  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Description :</label>
    <textarea class="form-control" rows="3" name="body"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Image :</label>
    <input type="file" class="form-control-file" name="featured_img">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection