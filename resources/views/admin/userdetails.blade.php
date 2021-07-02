<link rel="stylesheet" href="/css/dash.css">


@extends('layouts.adminlayout')

@section('content')

<div class="container topic row offset-lg-1 offset-sm-3 ofset-md-2 offset-3" >
<h4 class="">User Details</h4>
</div>

<div class="row offset-lg-1 offset-sm-3 ofset-md-2 offset-3" >
<tr>
<table class="table table-dark">
<th>Name</th>
<th>Student or Staff ID</th>
<th>Email Adress</th>
<th>Role</th>
<th>Edit Role</th>
<th>Delete</th>
</tr>

@foreach($data as $i)
<tr>
<td>{{ $i->name}}</td>
<td>{{ $i->sid}}</td>
<td>{{ $i->email}}</td>
<td>
@if($i->is_admin)
{{'Admin'}}
@else
{{'User'}}
@endif
</td>
<td><a href="/editrole/{{$i->id}}" class="btn btn-warning">Edit Role</a></td>
<td>
@if($i->is_admin)
<a href="" class="btn btn-primary disabled">Delete</a>
@else
<!--<a href="/deleteuser/{{$i->id}}" class="btn btn-warning">Delete</a>-->

            <!-- Button trigger modal -->
            <a href="" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$i->id}}">
                Delete
            </a>

            <!-- Modal -->
            <div class="modal " id="exampleModal{{$i->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="exampleModalLabel">Alert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                    class="fa fa-window-close" aria-hidden="true"></i></button>
                        </div>
                        <div class="modal-body">
                            <h4 class="text-dark">Are you sure, You want to remove {{$i->name}}...</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No, Exit</button>
                            <a href="/deleteuser/{{$i->id}}" class="btn btn-danger">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>


@endif
</td>
</tr>
@endforeach

</table>
</div>


@endsection