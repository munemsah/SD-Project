@extends('website.layouts.single')
@section('form')
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Edit User 
                </div>
                <div class="card-body">
                <form class="reg-box border-warning" method="post" action="{{ URL::to('update-user/'.$user->id)}}">
                @csrf
                    <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" value="{{ $user->name }}" name="name" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" value="{{ $user->email }}" name="email" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" value="{{ $user->password }}" name="password" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Age</label>
                            <input type="text" class="form-control" value="{{ $user->age }}" name="age" id="">
                        </div>
                        <div class="form-group ">
                        <!-- <input type="text" class="form-control" name="Role" placeholder="Role"> -->
                        <label for="">Role</label>
                        <select type="text" class="form-control" value="{{ $user->Role }}" name="Role" placeholder="Role">
                               <option selected>Role...</option>
                                  <option>User</option>
                                  <option>Admin</option>
                                  <option>Employee</option>
                                  <option>Doctor</option>

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