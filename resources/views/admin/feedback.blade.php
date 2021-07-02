<link rel="stylesheet" href="/css/dash.css">


@extends('layouts.adminlayout')

@section('content')

<div class="container topic row offset-lg-1 offset-sm-3 ofset-md-2 offset-3" >
<h4 class="">User Feedbacks</h4>
</div>

<div class="row offset-lg-1 offset-sm-3 ofset-md-2 offset-3" >
<tr>
<table class="table table-dark">
<th>Name</th>
<th>Student or Staff ID</th>
<th>Email Adress</th>
<th>Feedback</th>
<th>Delete</th>
</tr>

@foreach($data as $i)
<tr>
<td>{{ $i->name}}</td>
<td>{{ $i->sid}}</td>
<td>{{ $i->email}}</td>
<td>{{ $i->feedback}}</td>
<td><a href="/deletefeedback/{{$i->id}}" class="btn btn-warning">Delete</a></td>
</tr>
@endforeach

</table>
</div>


@endsection