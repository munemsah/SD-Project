@extends('website.layouts.default')

@section('content')
<header class="bg-success text-white">
    <div class="container text-center">
      <h1>Test and Service Charges</h1>
    </div>
  </header>
  <br>  <br>
<div class="container">
    <div class="card">
                <!-- <div class="card-header">
                    List of all USER 
                </div> -->
        <div class="card-body">
            <table class="table table-striped" id="myTable">
                <thead>
                <th>Service Name</th>
                <th>Price</th>

                </thead>
                <tbody id="myTable">
                @foreach($servicelist as $e)
                 <tr>
                <td>{{ $e->name }}</td>
                <td>{{ $e->price }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        
        <script>
            $(document).ready( function () {
            $('#myTable').DataTable();
            } );
        </script>


@stop