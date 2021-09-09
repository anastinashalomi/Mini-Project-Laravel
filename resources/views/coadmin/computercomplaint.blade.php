<link rel="stylesheet" href="/css/dash.css">


@extends('layouts.comadminlayout')

@section('content')
<div class="row offset-lg-1 offset-sm-3 ofset-md-2 offset-3" style="margin-top:5px">
    <form action="/searchcadmin" class="form-inline my-2 my-lg-0" method="get">
        @csrf
        <input id="query" type="search" class="form-control @error('query') is-invalid @enderror mr-sm-2" name="query" type="search" required placeholder="SearchByNameorSID">
        
        @error('query')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <button class="btn btn-outline-dark btn-md my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>


<div class="container topic row offset-lg-1 offset-sm-3 ofset-md-2 offset-3">
    <h4 class="">Complaints of Computer Laboratory</h4>
</div>

<div class="row offset-lg-1 offset-sm-3 ofset-md-2 offset-3">
    <tr>
        <table class="table table-dark">
            <th>Complaint ID</th>
            <th>Name</th>
            <th>Student or Staff ID</th>
            <th>Complaint</th>
            <th>Current Status</th>
            <th>Action</th>
            <th>Delete</th>
    </tr>

    @foreach($data as $i)
    <tr>
        <td>{{ $i->id}}</td>
        <td>{{ $i->name}}</td>
        <td>{{ $i->sid}}</td>
        <td>{{ $i->complaint}}</td>
        <td>
            @if($i->currentstatus == "Completed")
            <button class="btn btn-success">{{ $i->currentstatus}}</button>
            @elseif($i->currentstatus == "Processing")
            <button class="btn btn-primary">{{ $i->currentstatus}}</button>
            @else($i->currentstatus == "Not Processed")
            <button class="btn btn-danger">{{ $i->currentstatus}}</button>
            @endif
        </td>
        <td><a href="/detailscomplaint/{{$i->id}}" class="btn btn-warning">Action</a></td>
        <!--<td><a href="/deleteccomplaint/{{$i->id}}" class="btn btn-warning">Delete</a></td>-->
        <td>
            <!-- Button trigger modal -->
            <a href="" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$i->id}}">
                Delete
            </a>
        </td>
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
                            <h4 class="text-dark">Are you sure, You want to delete {{$i->id}} complaint...</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No, Exit</button>
                            <a href="/deleteccomplaint/{{$i->id}}" class="btn btn-danger">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>

        
    </tr>
    @endforeach

    </table>
</div>


@endsection
