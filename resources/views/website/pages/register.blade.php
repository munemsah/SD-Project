@extends('website.layouts.single')
@section('form')
    <div class="container">
        <div class="col-md-8 offset-md-2 mt-5">
            <div class="card">
                <div class="card-header">
                    Register
                </div>
                <div class="card-body">
                <form class="reg-box border-warning" method="post" action="{{ URL::to('store-user')}}">
                @csrf
                    <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Age</label>
                            <input type="text" class="form-control" name="age" id="">
                        </div>
                        <div class="form-group ">
                        <!-- <input type="text" class="form-control" name="Role" placeholder="Role"> -->
                        <label for="">Role</label>
                        <select type="text" class="form-control" name="Role" placeholder="Role">
                               <option selected>Role...</option>
                                  <option>User</option>

                      </select>
                     </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Register</button>
                        </div>
                        Already have an account? <a href="{{URL::to('/login')}}">Login Here </a>

                    </form>
                </div>
            </div>
        </div>
        
    </div>
@stop 