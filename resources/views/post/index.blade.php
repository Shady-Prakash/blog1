@extends('layouts.main')
@section('content')
           <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover" cellpadding="5px" cellspacing="0px">
                        <tr style="background-color:grey;">
                        	<th>ID</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                            @foreach($data as $key=>$da) 
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $da->title }}</td>
                                <td><img src="{{ asset('/image/'.$da->featured_img) }}" height="50" width="80" /></td>
                                <td>{{ $da->body }}</td>
                                <td>{{ $da->category }}</td>
                                <td>
                                    <a href="{{ route('post.show', $da->id) }}"><button type="button" class="btn btn-success">View</button></a>
                                    <a href="{{ route('post.edit', $da->id) }}"><button type="button" class="btn btn-info">Edit</button></a>
                                    <form action="{{ route('post.delete', $da->id) }}" method="POST">
                                    <input name="_method" type="hidden" value="DELETE"> 
                                        @csrf
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                </div>
 @endsection