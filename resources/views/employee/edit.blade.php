<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=hh, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Edit</title>
</head>
<body>
    <div class="container">
    
        <form class="reg-box border-warning" action="{{ URL::to('update-employee/'.$employee->id)}}" method="post">
        @csrf
            <h3 class="text-capitalize text-center text-black p-lg-4">Employee</h3>
                <div class="col-md-8 m-auto">
                <label for="">Name</label>
                     <div class="form-group ">
                    <input type="text" class="form-control" name="name" value="{{ $employee->name }}" placeholder="Name">
                    </div>
                    <label for="">Email</label>
                    <div class="form-group">
                       <input type="text" name="email" class="form-control" value="{{ $employee->email }}"  id=""  placeholder="Email">
                    </div>

                    <label for="">Gander</label>

                                    <div class="form-check">
                                    <label class="form-check-label" for="Male">
                                    <input class="form-check-input" type="radio" name="gander" value="male">
                                    <span class="checkmark"></span>
                                        Male
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <label class="form-check-label" for="Female">
                                    <input class="form-check-input" type="radio" name="gander" value="female">
                                    <span class="checkmark"></span>
                                        Female
                                    </label>
                                    </div>    
                                    <label for="">Active</label>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="Is_Active" >
                                    <label class="form-check-label" for="y">
                                        Active
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="Is_Active"  checked>
                                    <label class="form-check-label" for="n">
                                        Not Active
                                    </label>
                                    </div>

                    <label for="">Date of birth</label>                  
                     <div class="form-group ">
                     <input type="date" class="form-control" id="birthday" name="date_of_birth" value="{{ $employee->date_of_birth }}">
                     </div>

                     
                     <label for="">Role</label>    
                     <div class="form-group ">
                        <input type="text" class="form-control" name="Role" value="{{ $employee->role }}" placeholder="Role">
                     </div>
                 <div>
                      <input type="submit" name="submit" class="btn btn-success" value="Create My Account">
                 </div>
                 <p class="text-warning pt-4">
                Already a member: <a class="text-black" href="#">SIGN IN</a>
                </p>
            </div>
            </form>
    </div>
</body>
</html>