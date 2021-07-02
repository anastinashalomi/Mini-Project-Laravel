<link rel="stylesheet" href="/css/dash.css">
<link rel="stylesheet" href="/css/dash1.css">
@extends('layouts.userlayout')

@section('content')
<div class="row  offset-lg-1 offset-sm-3 ofset-md-4 offset-3">
<div class="container-fluid container1 ">

    <div class="title">
        <h3><i class="fa fa-angle-right"></i> <b> Register Complaint</b></h3>
    </div>
  
    <div class="card">
        <div class="card5">
            <div class="card-header" style="text-align:center">
               <h4><b> Add Complaint (Chemistry Laboratory)</b></h4>
            </div>
            <div class="card-body">
                <form action="/chemistry" method="post" class="form1">
                    @csrf
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                value="{{ Auth::user()->name }}" required autocomplete="name" id="name" name="name"
                                placeholder="Name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group col-md-6">
                            <label for="sid">Student or Staff ID</label>
                            <input type="text" class="form-control @error('sid') is-invalid @enderror"
                                value="{{ old('sid') }} {{ Auth::user()->sid }}" required autocomplete="sid" id="sid"
                                name="sid" placeholder="Stusent or Staff Id">
                            @error('sid')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                    </div>

                    <div class="form-group">
                        <label for="instrument">Equipment or Instrument Name</label>
                        <input type="text" class="form-control" id="instrument" name="instrument"
                            value="{{ old('instrument') }}" 
                            placeholder="Instrument or Equipment">

                        @error('instrument')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                         <label for="instrumentcode">Equipment or Instrument Code</label>
                         <input type="text" class="form-control" id="instrumentcode" name="instrumentcode"
                             value="{{ old('instrumentcode') }}" 
                             placeholder="Instrument or Equipment Code">

                         @error('instrument')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                     </div>


                    <div class="form-group">
                        <label for="complaint">Add Complaint</label>
                        <textarea class="form-control rounded-0  @error('complaint') is-invalid @enderror"
                            name="complaint" value="{{ old('complaint') }}" required autocomplete="complaint"
                            id="complaint" name="complaint" placeholder="Add your complaint" rows="10"></textarea>
                        @error('complaint')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror


                    </div>

                   <!-- <div class="form-group">
                        <label for="file1">Choose File</label>
                        <input type="file" class="form-control-file" id="file1" name="file1">
                    </div>-->

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
</div>


@endsection
