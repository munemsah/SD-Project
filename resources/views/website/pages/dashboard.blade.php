<!DOCTYPE html>
<html>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<body>

<!-- Sidebar -->
<div class="w3-sidebar  w3-black w3-bar-block" style="width:15%">
  <h4 class="w3-bar-item" >Dashboard</h4>
  <a href="#" class="w3-bar-item w3-button">Home</a>
  @if(Session::has('userrole') && Session::get('userrole')=='admin')
  <div>
  <a href="{{ URL::to('/userlist') }}" class="w3-bar-item w3-button">User list</a>
  </div>
  <div>
  <a href="{{ URL::to('/addservice') }}" class="w3-bar-item w3-button">add service</a>
  </div>
  @endif 


  <a href="#" class="w3-bar-item w3-button">Blood Request</a>
  <a href="datamodify.php" class="w3-bar-item w3-button">Ban Mamber</a>
  <a href="#" class="w3-bar-item w3-button">Blog Post</a>
  <a href="#" class="w3-bar-item w3-button">Campaign Galery</a>
  <a href="#" class="w3-bar-item w3-button ">Profile</a>
  <a href="#" class="w3-bar-item w3-button">Tools</a>
  <a href="#" class="w3-bar-item w3-button">Settings</a>

</div>

<!-- Page Content -->
<div style="margin-left:15%">

    <div class="w3-container w3-black">
                <h4 class="text-right">
                     <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Profile </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <p>{{Session::get('username')}}  </p>
                                    <p>{{Session::get('userrole')}}  </p>
                                  <a href="{{ URL::to('logout') }}"> Logout </a>
                       </div>
                     </div>
                 </h4>
    </div>







</div>
      
</body>
</html>
