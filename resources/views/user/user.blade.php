<link rel="stylesheet" href="/css/dash.css">


@extends('layouts.userlayout')

@section('content')



<div class="container ">

    <div class="row ">
        <div class="col-lg-12">
            <h1 class="page-header text-center" style="margin-top:10px">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <!-- for computer lab dash board-->
    <div class="row  offset-lg-1 offset-sm-3 ofset-md-2 offset-3">

        <div class="">
            <div class="container">
                <h3><a href="/computerview">Computer Laboratory</a></h3>
            </div>
            <div class="card-deck">


                <div class="col col-lg-3 col-sm-12 col-md-6 ">
                    <div class="card card1">
                        <div class="card-header">
                            All Complaints
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-lg-6 col-sm-6 col-md-6">
                                    <span><i class="fa fa-tasks fa-4x" aria-hidden="true"></i></span>
                                </div>
                                <div class="col-6 col-lg-6 col-sm-6 col-md-6">
                                    <h5>&nbsp{{$count['fcount'] }} </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col col-lg-3 col-sm-12 col-md-6 ">
                    <div class="card card3">
                        <div class="card-header">
                            Not Completed
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-lg-6 col-sm-6">
                                    <span><i class="fa fa-ban fa-4x" aria-hidden="true"></i></i></span>
                                </div>
                                <div class="col-6 col-lg-6 col-sm-6">
                                    <h5>&nbsp&nbsp{{$count['notcompletedcount']}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col col-lg-3 col-sm-12 col-md-6 ">
                    <div class="card card4">
                        <div class="card-header">
                            In Process
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-lg-6 col-sm-6">
                                    <span><i class="fas fa-step-forward fa-4x"></i></span>
                                </div>
                                <div class="col-6 col-lg-6 col-sm-6">
                                    <h5>&nbsp&nbsp{{$count['processingcount']}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-3 col-sm-12 col-md-6 ">
                    <div class="card card2">
                        <div class="card-header">
                            Completed
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-lg-6 col-sm-6">
                                    <span><i class="fa fa-check fa-4x" aria-hidden="true"></i></i></span>
                                </div>
                                <div class="col-6 col-lg-6 col-sm-6">
                                    <h5>&nbsp&nbsp{{$count['completedcount']}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>   <!-- end of computer lab dash board-->

    <br><br>  <!-- for Physics lab dash board-->
    <div class="row  offset-lg-1 offset-sm-3 ofset-md-2 offset-3">

        <div class="">
            <div class="container">
                <h3><a href="/physicsview">Physics Laboratory</a></h3>
            </div>
            <div class="card-deck">


                <div class="col col-lg-3 col-sm-12 col-md-6 ">
                    <div class="card card1">
                        <div class="card-header">
                            All Complaints
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-lg-6 col-sm-6 col-md-6">
                                    <span><i class="fa fa-tasks fa-4x" aria-hidden="true"></i></span>
                                </div>
                                <div class="col-6 col-lg-6 col-sm-6 col-md-6">
                                    <h5>&nbsp&nbsp{{$count['fcountp'] }} </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col col-lg-3 col-sm-12 col-md-6 ">
                    <div class="card card3">
                        <div class="card-header">
                            Not Completed
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-lg-6 col-sm-6">
                                    <span><i class="fa fa-ban fa-4x" aria-hidden="true"></i></i></span>
                                </div>
                                <div class="col-6 col-lg-6 col-sm-6">
                                    <h5>&nbsp&nbsp{{$count['notcompletedcountp']}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col col-lg-3 col-sm-12 col-md-6 ">
                    <div class="card card4">
                        <div class="card-header">
                            In Process
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-lg-6 col-sm-6">
                                    <span><i class="fas fa-step-forward fa-4x"></i></span>
                                </div>
                                <div class="col-6 col-lg-6 col-sm-6">
                                    <h5>&nbsp&nbsp{{$count['processingcountp']}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-3 col-sm-12 col-md-6 ">
                    <div class="card card2">
                        <div class="card-header">
                            Completed
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-lg-6 col-sm-6">
                                    <span><i class="fa fa-check fa-4x" aria-hidden="true"></i></i></span>
                                </div>
                                <div class="col-6 col-lg-6 col-sm-6">
                                    <h5>&nbsp&nbsp{{$count['completedcountp']}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div><!-- end of physics lab dash board-->

    <br><br><!-- for chemistry lab dash board-->
    <div class="row  offset-lg-1 offset-sm-3 ofset-md-2 offset-3">

        <div class="">
            <div class="container">
                <h3><a href="/chemistrycomplaintview">Chemistry Laboratory</a></h3>
            </div>
            <div class="card-deck">


                <div class="col col-lg-3 col-sm-12 col-md-6 ">
                    <div class="card card1">
                        <div class="card-header">
                            All Complaints
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-lg-6 col-sm-6 col-md-6">
                                    <span><i class="fa fa-tasks fa-4x" aria-hidden="true"></i></span>
                                </div>
                                <div class="col-6 col-lg-6 col-sm-6 col-md-6">
                                    <h5>&nbsp&nbsp{{$count['fcountc'] }} </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col col-lg-3 col-sm-12 col-md-6 ">
                    <div class="card card3">
                        <div class="card-header">
                            Not Completed
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-lg-6 col-sm-6">
                                    <span><i class="fa fa-ban fa-4x" aria-hidden="true"></i></i></span>
                                </div>
                                <div class="col-6 col-lg-6 col-sm-6">
                                    <h5>&nbsp&nbsp{{$count['notcompletedcountc']}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col col-lg-3 col-sm-12 col-md-6 ">
                    <div class="card card4">
                        <div class="card-header">
                            In Process
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-lg-6 col-sm-6">
                                    <span><i class="fas fa-step-forward fa-4x"></i></span>
                                </div>
                                <div class="col-6 col-lg-6 col-sm-6">
                                    <h5>&nbsp&nbsp{{$count['processingcountc']}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-3 col-sm-12 col-md-6 ">
                    <div class="card card2">
                        <div class="card-header">
                            Completed
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-lg-6 col-sm-6">
                                    <span><i class="fa fa-check fa-4x" aria-hidden="true"></i></i></span>
                                </div>
                                <div class="col-6 col-lg-6 col-sm-6">
                                    <h5>&nbsp&nbsp{{$count['completedcountc']}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div><!-- end of chemistry lab dash board-->

</div>


@endsection
