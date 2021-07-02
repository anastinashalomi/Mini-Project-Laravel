    
<link rel="stylesheet" href="/css/sidebar.css">
<link rel="stylesheet" href="/css/dash.css">

@extends('layouts.adminlayout')

@section('content')

<div class="card card6">
<div class="card-header">
<h4>Update User Role</h4>
</div>

<div class="card-body">
<h4>Current Role: 
@if($data->is_admin){{'Adimn'}}
@else{{'User'}}
@endif
</h4>
<div>
<div class="container">
<form action="/updaterole" method="post">
@csrf

<div>
<label for="">User ID :
<input type="text" class="form-control" name="id" value="{{$data->id}}">
</label>
</div><hr>

<div>
<label for="">Name :
<input type="text" class="form-control" name="name" value="{{$data->name}}">
</label>
</div><hr>


<div>
<label for="">Email :
<input type="text" readonly class="form-control" name="email" value="{{$data->email}}">
</label>
</div><hr>

<div>
<label for="">User Role :
<select id="is_admin" name="is_admin">
<option selected>{{$data->is_admin}}</option>
<option value='1'>Adimn</option>
<option value='0'>User</option>
</select>
</label>
</div><hr>

<div class="row"></div>
<input type="submit" class="btn btn-primary" value="update">&nbsp &nbsp &nbsp
<a href="/userdetails" class="btn btn-danger">Cancel</a>
</div>

</form>
</div>
</div>

</div>


</div>



@endsection