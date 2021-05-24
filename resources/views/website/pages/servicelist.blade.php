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
            <table class="table table-striped">
                <thead>
                <th>Service Name</th>
                <th>Price</th>

                </thead>
                <tbody>
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

<br>  <br>

@stop