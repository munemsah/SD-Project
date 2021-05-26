@extends('website.layouts.default')

@section('content')


<br>
<br>
<br>
<br>
<div class="container">
    
        <form class="reg-box border-warning" action="{{ URL::to('store-appointment')}}" method="post">
        @csrf

        <div class="card-header col-md-8 m-auto">
        <h3 class="text-capitalize text-center text-black p-lg-4">Appointment</h3>
        </div>
       

            
                <div class="card-body col-md-8 m-auto">
                     
                        <div class="form-group ">
                        <label for="">Name</label>  
                            <input type="text" class="form-control" name="name"  placeholder="Your Name">
                            <span class="error">{{ $errors->first('name')}}</span>
                        </div>

                        <div class="form-group">
                        <label for="">Email</label>  
                        <input type="text" name="email" class="form-control" id=""  placeholder="Your Email">
                        <span class="error">{{ $errors->first('email')}}</span>
                        </div>

                    
                        <div class="form-group ">
                        <label for="">Phone</label>  
                        <input type="text" class="form-control" name="phone" placeholder="Your Phone">
                        <span class="error">{{ $errors->first('phone')}}</span>
                        </div>


                             <label for="">Gander</label>

                                <div class="form-check">
                                        <label class="form-check-label" for="Male">
                                        <input class="form-check-input" type="radio" name="gander" value="male">
                                        <span class="checkmark"></span>Male
                                        </label>
                              </div>
                               <div class="form-check">
                                        <label class="form-check-label" for="Female">
                                        <input class="form-check-input" type="radio" name="gander" value="female">
                                        <span class="checkmark"></span>Female
                                        </label>
                         
                             </div>
                             <span class="error">{{ $errors->first('gander')}}</span>    

                   
               
                        <div class="form-group ">
                         <label for="">Appointment Date</label>   
                        <input type="date" class="form-control" id="birthday" name="date_of_birth">
                        <span class="error">{{ $errors->first('date_of_birth')}}</span>    
                        </div>

                        <div class="form-group "> 
                        <label for="">Select Test</label> 
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" name="test" type="checkbox" id="inlineCheckbox1" value="Blood test">
                        <label class="form-check-label" for="inlineCheckbox1">Blood test</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" name="test" type="checkbox" id="inlineCheckbox2" value="Lipid Profile test">
                        <label class="form-check-label" for="inlineCheckbox2">Lipid Profile test</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" name="test" type="checkbox" id="inlineCheckbox3" value="Covid Test">
                        <label class="form-check-label" for="inlineCheckbox3">Covid Test</label>
                        </div>
                        </div>
                        <span class="error">{{ $errors->first('test')}}</span>    



                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message</label>
                            <textarea class="form-control" name="message"  placeholder="Message (Optional)" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                 <div>
                      <input type="submit" name="submit" class="btn btn-success" value="Submit Request">
                 </div>
                 <br>
                 <br>
            </div>
            </form>
    </div>


@stop