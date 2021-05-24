@extends('website.layouts.single')
@section('form')
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Service Register
                </div>
                <div class="card-body">
                <form class="reg-box border-warning" method="post" action="{{ URL::to('store-service')}}">
                @csrf
                     
                     <div class="form-group ">
                            <label for="">Service Name</label>
                            <select type="text" class="form-control" name="name" placeholder="Role">
                                <option selected>Name...</option>
                                <option>Blood Test</option>
                                <option>CT Scan</option>
                                <option>MRI</option>
                                <option>X-Ray</option>
                                <option>Covid Test</option>
                            </select>
                     </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" class="form-control" name="price" id="">
                        </div>
                    
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        
    </div>
@stop 