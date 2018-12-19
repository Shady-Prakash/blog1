@extends('layouts.main')
@section('content')
           <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover" cellpadding="5px" cellspacing="0px">
                        <tr style="background-color:grey;">
                        	<th>ID</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="../public/image/avatar.png" height="50" width="80" /></td>
                                <td>Hello world !</td>
                                <td>
                                    <a href=""><button type="button" class="btn btn-success">Insert</button></a>
                                    <a href=""><button type="button" class="btn btn-danger">Delete</button></a>
                                    <a href=""><button type="button" class="btn btn-info">Update</button></a>
                                </td>
                            </tr>
                        </table>
                </div>
 @endsection