<link rel="stylesheet" href="/css/dash.css">


@extends('layouts.userlayout')

@section('content')
<div class="row offset-lg-1 offset-sm-3 ofset-md-2 offset-3">
<div class="container topic" style="margin-left:30px margin-right:10px">
<h4>Your Complaints of Physics Laboratory</h4>
</div>

<div style="margin-left:30px margin-right:10px">
<tr>
<table class="table table-dark">
<th>Complaint ID</th>
<th>Complaint</th>
<th>Current Status</th>
<th>Remark</th>
</tr>

@foreach($data as $i)
<tr>
<td>{{ $i->id}}</td>
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
<td>{{$i->reviewmsg}}</td>
</tr>
@endforeach

</table>
</div>
</div>

@endsection