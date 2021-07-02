<link rel="stylesheet" href="/css/dash.css">



@extends('layouts.userlayout')

@section('content')

<div class="container  pt-5">

@if(session()->has('mssg'))
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
</svg>
<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div> 
    {{session('mssg')}}
  </div>
</div>
@endif
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8 bg-dark px-5 rounded z-depth-5 mt-5">
            <div class="row">
                <div class="card-header bg-dark mt-4">
                    <h1 class="text-white">Write Us</h1>
                    <div class="col-sm-12 border border-bottom border-primary"></div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-md-5 border-right">
                    <form action="/userfeedback" method="POST">
                    @csrf
                        <div class="col-md-12">
                            <div class="md-form form-group">
                                <input type="text" class="form-control text-white" name="name" id="name" required="">
                                <label for="name">Name</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="md-form form-group">
                                <input type="email" class="form-control text-white" name="email" id="email" required="">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="col-md-12 pt-2">
                            <div class="md-form form-group">
                                <input type="text" class="form-control text-white" name="sid" id="sid" required="">
                                <label for="sid" class="bg-">Student ID</label>
                            </div>

                        </div>
                </div>
                <div class="col-md-7 mt-2">
                    <div class="md-form">
                        <textarea type="text" name="feedback" id="feedback" rows="4"
                            class="form-control md-textarea text-white" required="">Feedback</textarea>
                        <label for="feedback">Your Feedback</label>
                        <button type="submit" class="btn btn-primary btn-block">Submit </button>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div>


</div>




<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
@endsection.
