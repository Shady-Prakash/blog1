@extends('layouts.main')
@section('content')
           <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover" cellpadding="5px" cellspacing="0px">
                        <tr style="background-color:#990033;">
                            <th><span class="glyphicon glyphicon-picture"></span>Image</th>
                            <th><span class="glyphicon glyphicon-user"></span>Body</th>
                            <th><span class="glyphicon glyphicon-map-marker"></span>Action</th>
                        </tr>
                            <tr>
                                <td><img src="" height="50" width="80" /></td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <a href=""><button type="button" class="btn btn-success">Update</button></a><br><br>
                                    <a href=""><button type="button" class="btn btn-danger">Delete</button></a>
                                    <a href=""><button type="button" class="btn btn-info">Update</button></a>


                                </td>
                            </tr>
                        </table>
                </div>
 @endsection