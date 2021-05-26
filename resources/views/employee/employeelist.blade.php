<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">


<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    <title>Employee list</title>
</head>
<body>
    <div class="container">
        <div class="card">
         <div class="card-header">
         <h2>Filterable Table</h2>
        <p>Type something in the input field to search the table for first names, last names or emails:</p>  
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <br><br>

        <h4 class="card-title">Employee list</h4>
        </div>
          <div class="card-body">
            <table class="table table-striped" id="myTable">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Role</th>
                <th>Action</th>
            </thead>
            <tbody id="myTable">
           
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
    <script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        } );
    </script>

</body>
</html>