@extends('website.layouts.single')
@section('form')
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    @if(Session::has('err_msg'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Alert!</strong> Invalid Email or Password.
                        </div>
                    @endif 
                    <form method="post" action="{{ URL::to('loginstore')}}">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" id="">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                        Don't have an account? <a href="{{URL::to('/register')}}">Sign in Here </a>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
@stop 