@extends('layouts.main')
@section('content')
           <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover" cellpadding="5px" cellspacing="0px">
                        <tr style="background-color:grey;">
                        	<th>ID</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                            @foreach($data as $key=>$da) 
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $da->title }}</td>
                                <td>
                                    <a href="{{ route('category.show', $da->id) }}"><button type="button" class="btn btn-success">View</button></a>
                                    <a href="{{ route('category.edit', $da->id) }}"><button type="button" class="btn btn-info">Edit</button></a>
                                    <form action="{{ route('category.destroy', $da->id) }}" method="POST">
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