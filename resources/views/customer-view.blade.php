<!doctype html>
<html lang="en">
  <head>
    <title>Customer</title>
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
        
              {{-- @if (session()->has('user_name'))
                {{ session()->get('user_name')}}
              @else
                 Guest
              @endif
         --}}
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
                        <div class="row m-2">
                          <form action="" class="col-9">
                            <div class="form-group">
                              <label for=""></label>
                              <input type="search" name="search" id="" class="form-control" placeholder="Search by Name or Email" aria-describedby="helpId" value="{{ $search }}">
                              <small id="helpId" class="text-muted"></small>
                            </div>
                            <button class="btn btn-primary">Search</button>
                          </form>
                          <div class="col-3">
                              <a href="{{url('/customer/create') }}">
                                <button class="btn btn-primary d-inline-block m-2 float-right"> Add </button>
                              </a>  
                              <a href="{{url('/customer/trash') }}">
                                <button class="btn btn-danger d-inline-block m-2 float-right"> Go to Trash</button>
                              </a>  
                          </div>
                        </div>
        <table class="table">
            
            <thead>
                <tr>
                    <th>No.</th>
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
                @php $serialNumber = 1; @endphp
                @foreach ($customers as $customer)
                    
                
                <tr>
                    <td>{{ $serialNumber++ }}</td>
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
                        <a href=" {{route('customer.delete', ['id' => $customer->customer_id] )}} "> <button class="btn btn-danger">Trash</button>  </a><br>
                        <a href=" {{route('customer.edit',   ['id' => $customer->customer_id] )}} "> <button class="btn btn-primary">Edit</button>   </a>
                    </td>
                </tr>
                
                @endforeach
                
            </tbody>
        </table>
        <div class="row">
          {{ $customers->links() }}
        </div>
        
      </div>
      

  </body>
</html>