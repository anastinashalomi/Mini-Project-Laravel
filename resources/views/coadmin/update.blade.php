    
<link rel="stylesheet" href="/css/sidebar.css">
<link rel="stylesheet" href="/css/dash.css">

@extends('layouts.comadminlayout')

@section('content')

<div class="card card6">

<div class="card-header">
<h4>Update Complaint Status</h4>
</div>


<div class="card-body">
<div>
<div class="container">
<form action="/updatecadmincomplaint" method="post">
@csrf
<div>
<label for="">Complaint ID : 
<input type="text" class="form-control" name="id" value="{{$complaintdata->id}}">
</label>
</div><hr>

<div>
<label for="">Name : 
<input type="text" class="form-control" name="name" value="{{$complaintdata->name}}">
</label>
</div><hr>

<div>
<label for="">Complaint :
<input type="text" class="form-control" name="complaint" value="{{$complaintdata->complaint}}">
</label>
</div><hr>

<div>
<label for="">Comment :
<input type="text" class="form-control" name="reviewmsg" value="{{$complaintdata->reviewmsg}}">
</label>
</div><hr>

<div>
<label for="">Status :
<select id="currentstatus" name="currentstatus">
<option selected>{{$complaintdata->currentstatus}}</option>
<option value="NotProcessedYet">Not Processed Yet</option>
<option value="Processing">Processing</option>
<option value="Completed">Completed</option>
</select>
</label>
</div><hr>

<div class=row >
<input type="submit" class="btn btn-primary" value="update"> &nbsp &nbsp &nbsp
<a href="/computeradmincomplaint" class="btn btn-danger" value="cancel">Cancel</a>
</div>

</form>
</div>
</div>

</div>


</div>



@endsection