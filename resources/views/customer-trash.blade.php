<!doctype html>
<html lang="en">
  <head>
    <title>Customer Trash</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <style>
      table {
           width: 80%;
           margin: 0 auto;
           background: rgba(255, 255, 255, 0.7); /* Background color with alpha for transparency */
           border-radius: 10px;
           overflow: hidden;
           backdrop-filter: blur(10px); /* Adjust the blur value as needed */
           position: relative;
       }
   </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-image: url('{{ asset('background1.jpg') }}'); background-size: fit ; opacity: 1.5;">
    <div class="container-fluid bg-dark">
        <div class="container">
        <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="{{ url('/') }}" style="color: white">
          
          {{-- <strong style="color: rgb(233, 168, 47)">A</strong>yush<strong style="color: rgb(233, 168, 47)">G</strong>ram   </strong>  |   --}}
        
              @if (session()->has('user_name'))
                {{ session()->get('user_name')}}
              @else
                 Guest
              @endif
        
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
        data-target="#collapsibleNavid" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-1g-8">
        <li class="nav-item pr-4">
        <a class="nav-link" href="{{ url('/') }}" style="color: white">Home</a>
        </li>
        <li class="nay-item pr-4 pt-2">
        <a class="na-link" href="{{ url('/customer/create') }}" style="color: white">Register</a>
        </li>
        <li class="nay-item pr-4">
        <a class="nav-link" href="{{ url('/customer') }}" style="color: white">Customer</a>
        </li>
        <li class="nay-item pr-4 pt-2">
        <a class="na-link" href="{{ url('/about') }}" style="color: white">About</a>
        </li>
        </ul>
        </div>
        </nav>
    </div>
    </div>
    <br>
    <h2 class="text-center">Customer Table</h2>
    <br>
          <div  class="container">
          <a href="{{url('/customer/create') }}">
            <button class="btn btn-primary d-inline-block m-2 float-right"> Add </button>
          </a>
          <a href="{{url('/customer') }}">
            <button class="btn btn-primary d-inline-block m-2 float-right"> View Customers </button>
          </a>  
        <table class="table">
            
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DoB</th>
                    <th>State</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    
                
                <tr>
                    <td>{{ $customer->user_name }}</td>
                    <td>{{ $customer->email }}  </td>
                    <td>{{ $customer->gender}}  </td>
                    <td>{{ $customer->dob }}    </td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->state }}  </td>
                    <td>{{ $customer->country }}</td>
                    <td>
                        @if($customer->status == "1")
                          <a href="">
                            <span class="badge badge-success">Active</span>  
                          </a>
                        @else
                          <a href="">
                            <span class="badge badge-danger">Inactive</span>  
                          </a>
                        @endif
                    </td>
                    <td>
                        <a href=" {{route('customer.force-delete', ['id' => $customer->customer_id] )}} "> <button class="btn btn-danger">Delete</button>  </a>
                        <a href=" {{route('customer.restore',   ['id' => $customer->customer_id] )}} "> <button class="btn btn-primary">Restore</button>   </a>
                    </td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
      </div>
    

  </body>
</html>