<link rel="stylesheet" href="/css/dash.css">


@extends('layouts.userlayout')

@section('content')

<div class="container">


    <div class="row  offset-lg-1 offset-sm-12 justify-content-center">

                <div class="col col-lg-4 col-sm-12 col-md-4 ">
                <img src="img/q2.jpg" class="img-fluid w-100 img1" alt="..." > 
                </div>


                <div class="col col-lg-8 col-sm-12 col-md-8 text-center">
                <h1 class="font-weight-bold new2">Inquriy Management System</h1>
                <h3 class="new3">Sabaragamuwa University of Sri Lanka - Faculty of Applied Sciences</h3>
                <h1 class="new4">WELCOME</h1>
                <h3 class="new5">Let's Help You! <br>
                    Submit Your Queries....
                </h3>
                <p>about laboratories</p>
                <hr>

                @if(session()->has('mssg'))
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </symbol>
                </svg>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" /></svg>
                    <div>
                        {{session('mssg')}}
                    </div>
                </div>
                @endif

                <a href="/chemistry"> <button class="btn badge badge-primary"><i class="fa fa-home"></i><h4> Chemistry Lab</h4></button></a>
                <a href="/physics"><button class="btn badge badge-secondary"><i class="fa fa-home"></i><h4> Physics Lab</h4></button></a>
                <a href="/computer"><button class="btn badge badge-primary"><i class="fa fa-home"></i> <h4>Computer Lab</h4></button></a>

                <br>
                </div>


                

            </div>
        </div>  
 

@endsection