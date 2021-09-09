<link rel="stylesheet" href="/css/dash.css">


@extends('layouts.cheadminlayout')

@section('content')



<div class="container ">

<div class="row ">
    <div class="col-lg-12">
        <h1 class="page-header text-center" style="margin-top:10px">Dashboard</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>


<div class="row  offset-lg-1 offset-sm-3 ofset-md-2 offset-3">

    <div class="">
    <div class="container"><h3><a href="/chemistryadmincomplaint">Computer Laboratory</a></h3></div>
        <div class="card-deck">


        <div class="col col-lg-3 col-sm-12 col-md-6 ">
                    <div class="card card1">
                        <div class="card-header">
                            <b>All Complaints</b>
                        </div>
                        <div class="card-body" >
                            <div class="row">
                                <div class="col-6 col-lg-6 col-sm-6 col-md-6">
                                    <span><i class="fa fa-tasks fa-4x" aria-hidden="true"></i></span>
                                </div>
                                <div class="col-6 col-lg-6 col-sm-6 col-md-6 text-right">
                                    <h3><b>&nbsp{{$countnu['totalc'] }}</b> </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            
            <div class="col col-lg-3 col-sm-12 col-md-6">
                <div class="card card3">
                    <div class="card-header">
                    <b>Not Completed</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-lg-6 col-sm-6 col-md-6">
                                <span><i class="fa fa-ban fa-4x" aria-hidden="true"></i></i></span>
                            </div>
                            <div class="col-6 col-lg-6 col-sm-6 col-md-6 text-right">
                                <h3><b>&nbsp{{$countnu['totalnotc'] }}</b></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col col-lg-3 col-sm-12 col-md-6 ">
                <div class="card card4">
                    <div class="card-header">
                        <b>In Process</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-lg-6 col-sm-6 col-md-6">
                                <span><i class="fas fa-step-forward fa-4x"></i></span>
                            </div>
                            <div class="col-6 col-lg-6 col-sm-6 col-md-6 text-right">
                                <h3><b>&nbsp&nbsp{{$countnu['totalproc'] }}</b></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-lg-3 col-sm-12 col-md-6">
                <div class="card card2">
                    <div class="card-header">
                    <b>Completed</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-lg-6 col-sm-6 col-md-6">
                                <span><i class="fa fa-check fa-4x" aria-hidden="true"></i></i></span>
                            </div>
                            <div class="col-6 col-lg-6 col-sm-6 col-md-6 text-right">
                                <h3><b>&nbsp&nbsp{{$countnu['totalcomc'] }}</b></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>

<br><br>


<br><br>



</div>
                    

@endsection
