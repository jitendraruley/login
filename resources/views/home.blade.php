@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard You are logged in! {{$user->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>

                <div>
                    <form method="post" action="{{url('home.store')}}" >
                                    <center>Fill Customer Details</center>
                        <label>Name</label><input class="col-md-12" id="name" type="text"  name="name" placeholder="Name of Customer"/>
                        <label>Email</label><input class="col-md-12" id="email" type="email" name="email" placeholder="Email id of Customer"/>
                        <label>Number</label><input class="col-md-12" id="number" type="tel" name="number" placeholder="Mobile Number of Customer"/>
                        <label>Address</label><input class="col-md-12" id="address" type="text" name="address" placeholder="Address of Customer" />
                        <input type="button" name="submit" value="Submit" id="submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
