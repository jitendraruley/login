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

        {{--<div class="row">--}}
                    {{--{!! Form::open(['method'=>'POST', 'action'=>'/customer', 'file'=>true])!!}--}}

                                    {{--<center>Fill Customer Details</center>--}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('name', 'Name:' )!!}--}}
                        {{--{!! Form::text('name', null, ['class'=>'form-control'] )!!}--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('email', 'Email:' )!!}--}}
                        {{--{!! Form::text('email', null, ['class'=>'form-control'] )!!}--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('number', 'Number:' )!!}--}}
                        {{--{!! Form::number('number', null, ['class'=>'form-control'] )!!}--}}
                    {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form::label('address', 'Address:' )!!}--}}
                    {{--{!! Form::text('address', null, ['class'=>'form-control'] )!!}--}}
                {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::submit('submit', null, ['class'=>'btn btn-primary'] )!!}--}}
                    {{--</div>--}}


                {{--{!! Form::close() !!}--}}
    {{--@include(includes.form_error)--}}
            {{--@stop--}}
        {{--</div>--}}<form method="POST" action="route[{customer/store}]" >
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <input type="hidden" name="_method" value="PUT">
                        <label>Name</label><input class="col-md-12" id="name" type="text"  name="name" placeholder="Name of Customer">
                        <label>Email</label><input class="col-md-12" id="email" type="email" name="email" placeholder="Email id of Customer">
                        <label>Number</label><input class="col-md-12" id="number" type="tel" name="number" placeholder="Mobile Number of Customer">
                        <label>Address</label><input class="col-md-12" id="address" type="text" name="address" placeholder="Address of Customer">
                        {{--<input type="hidden" name="_method" value="PUT">--}}
                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                        <input type="submit" name="submit" value="submit" class="btn btn-info" id="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
