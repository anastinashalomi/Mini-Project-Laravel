<link rel="stylesheet" href="/css/userprofile.css">

@extends('layouts.userlayout')

@section('content')

<div class="container">
<div class="row justify-content-center">
    <div class="col-12 col-lg-10 col-xl-8 mx-auto">
        <h2 class="h3 mb-4 page-title">Account Details</h2>
        <div class="my-4">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Profile</a>
                </li>
            </ul>
            <form action="/updateprofile" method="post">
                @csrf
                <div class="row mt-5 align-items-center">
                    <div class="col-md-3 text-center mb-5">
                        <div class="avatar avatar-xl">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..." class="avatar-img rounded-circle" />
                        </div>
                    </div>
                    
                </div>
                <hr class="my-4" />
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">User Name</label>
                        <input type="text" id="name" class="form-control" value="{{ Auth::user()->name }}" placeholder="" />
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="inputEmail4"  value="{{ Auth::user()->email }}" placeholder="" />
                </div>
                <div class="form-group">
                    <label for="sid">Student or Staff ID</label>
                    <input type="text" class="form-control" id="sid"  value="{{ Auth::user()->sid }}" placeholder="" />
                </div>
                
                
                
            </form>
        </div>
    </div>
</div>

</div>

@endsection
