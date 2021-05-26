@extends('website.layouts.default')

@section('content')


<br>
<br>
<br>
<br>
<div class="container">
    
        <form class="reg-box border-warning" action="{{ URL::to('')}}" method="post">
        @csrf

        <div class="card-header col-md-8 m-auto">
        <h3 class="text-capitalize text-center text-black p-lg-4">Appointment</h3>
        </div>
       

            
                <div class="card-body col-md-8 m-auto">
                     
                        <div class="form-group ">
                        <label for="">Name</label>  
                            <input type="text" class="form-control" name="name" placeholder="Your Name">
                        </div>

                        <div class="form-group">
                        <label for="">Email</label>  
                        <input type="text" name="email" class="form-control" id=""  placeholder="Your Email">
                        </div>

                    
                        <div class="form-group ">
                        <label for="">Phone</label>  
                        <input type="text" class="form-control" name="phone" placeholder="Your Phone">
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

                   
        
                     <label for="">Appointment Date</label>                  
                        <div class="form-group ">
                        <input type="date" class="form-control" id="birthday" name="date_of_birth">
                        </div>

                        <label for="">Select Test</label>
                        <div class="form-group ">  
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Blood test</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Lipid Profile test</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                        <label class="form-check-label" for="inlineCheckbox3">Covid Test</label>
                        </div>
                        </div>



                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message</label>
                            <textarea class="form-control"  placeholder="Message (Optional)" id="exampleFormControlTextarea1" rows="3"></textarea>
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