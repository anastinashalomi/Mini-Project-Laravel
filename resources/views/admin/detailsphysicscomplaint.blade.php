    
<link rel="stylesheet" href="/css/sidebar.css">
<link rel="stylesheet" href="/css/dash.css">

@extends('layouts.adminlayout')

@section('content')

<div class="container">

<div class="card card7">
<div class="card-header">
<h4>Details of Complaint</h4>
</div>
<div class="card-body">
 
 <div>
 <label for="id">Complaint ID:</label>&nbsp &nbsp  {{$complaintdata->id}}
 </div><hr>

 <div>
 <label for="sid">Student or Staff ID:</label>&nbsp &nbsp  {{$complaintdata->sid}}
 </div><hr>

 <div>
 <label for="name">Full Name:</label>&nbsp &nbsp  {{$complaintdata->name}}
 </div><hr>

 <div>
 <label for="instrument">Instrument or Device Name:</label>&nbsp &nbsp  {{$complaintdata->instrument}}
 </div><hr>

 <div>
 <label for="instrumentcode">Instrument or Device Code:</label>&nbsp &nbsp  {{$complaintdata->instrumentcode}}
 </div><hr>

 <div>
 <label for="complaint">Complaint:</label>&nbsp &nbsp  {{$complaintdata->complaint}}
 </div><hr>

 <div>
 <label for="currentstatus">Status Of Complaint:</label>&nbsp &nbsp  {{$complaintdata->currentstatus}}
 </div><hr>

<div>
<a href="/updatephysicsstatus/{{$complaintdata->id}}" class="btn btn-warning">TakeAction</a>&nbsp &nbsp &nbsp
 <a href="/physicscomplaint" class="btn btn-warning">Cancel</a>
</div>


</div>


</div>

</div>

@endsection