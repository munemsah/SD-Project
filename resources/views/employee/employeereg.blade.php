<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=hh, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    
        <form class="reg-box border-warning" action="{{ URL::to('store-employee')}}" method="post">
        @csrf
            <h3 class="text-capitalize text-center text-black p-lg-4">Employee</h3>
                <div class="col-md-8 m-auto">
                <label for="">Name</label>
                     <div class="form-group ">
                    <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                    <label for="">Email</label>
                       <input type="text" name="email" class="form-control" id=""  placeholder="Email">
                    </div>
                    <label for="">Password</label>
                    <div class="form-group ">
                       <input type="password" class="form-control" name="password" placeholder="Password">
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
                                        <label class="form-check-label" for="Male">
                                        <input class="form-check-input" type="checkbox" name="Is_Active" value="Active">
                                        <span class="checkmark"></span>
                                        Active
                                        </label>
                                        </div>
        
                     <label for="">Date of birth</label>                  
                     <div class="form-group ">
                     <input type="date" class="form-control" id="birthday" name="date_of_birth">
                       
                     </div>
                     <label for="">Role</label>
                     <div class="form-group ">
                        <!-- <input type="text" class="form-control" name="Role" placeholder="Role"> -->
                        <select type="text" class="form-control" name="Role" placeholder="Role">
                               <option selected>Role...</option>
                                  <option>Admin</option>
                                  <option>User</option>

                      </select>
                     </div>
                 <div>
                      <input type="submit" name="submit" class="btn btn-success" value="Create My Account">
                 </div>
                 <br>
                 <br>
            </div>
            </form>
    </div>
</body>
</html>