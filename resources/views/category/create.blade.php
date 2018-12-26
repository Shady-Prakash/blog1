@extends('layouts.main')
@section('content')
<div class="container" style="width: 500px; height: 500px; background-color: grey; border-radius: 10px;">
  @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
         </ul>
    </div>
  @endif
<form action="{{ action('CategoryController@store') }}" method="POST">
	@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title :</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter title" name="title">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
