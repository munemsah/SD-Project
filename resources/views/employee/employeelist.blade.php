<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Employee list</title>
</head>
<body>
    <div class="container">
        <div class="card">
         <div class="card-header">
            <h4 class="card-title">Employee list</h4>
        </div>
          <div class="card-body">
            <table class="table table-striped">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Role</th>
                <th>Action</th>
            </thead>
            <tbody>
           
            @foreach($employeelist as $e)
            <tr>
                <td>{{ $e->name }}</td>
                <td>{{ $e->email }}</td>
                <td>{{ $e->gender }}</td>
                <td>{{ $e->date_of_birth }}</td>
                <td>{{ $e->role }}</td>
                <td> 
                <a href=" {{ URL::to('employee-edit/'.$e->id) }} ">Edit </a>
                <a href="#" data-toggle="modal" data-target="#delete{{ $e->id }}">Delete </a>
                
                <div class="modal" id="delete{{ $e->id }}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Confirmation</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            Are you Sure you want to delete {{ $e->name }}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            <a class="btn btn-danger" href="{{URL::to('delete-employee/'.$e->id)}}"> Yes </a>
                        </div>

                        </div>
                    </div>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
            </table>
          </div>
        </div>
    </div>
</body>
</html>