<!doctype html>
<html lang="en">
  <head>
    <title>HomePage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Css Files -->
    <style> 
    
    .bottom-right {
            position: fixed;
            bottom: 0;
            right: 0;
            margin: 10px;
            font-size: 15px;
            color: #3c3333; /* Adjust color as needed */
        }

    body {
            /* background: url('{{ asset("your-background-image.jpg") }}') no-repeat center center fixed;
            background-size: cover;
            margin: 0; /* Remove default margin to fill the entire viewport */
            /* padding: 0; Remove default padding to fill the entire viewport */ */
        }

        .bg-img {
            /* Add your specific styles for the body with a background image */
            
        }

        .container-fluid {
            background-color: rgba(0, 0, 0, 0.7); /* Adjust the opacity as needed */
            color: white; /* Text color on the navbar */
        }
    </style>

  </head>
  <body style="background-image: url('{{ asset('background1.jpg') }}'); background-size: fit ; opacity: 1.5;">
    <div class="container-fluid bg-dark">
    <div class="container">
            <nav class="navbar navbar-expand-sm">
             <a class="navbar-brand" href="{{ url('/') }}" style="color: white"> <strong style="color: rgb(233, 168, 47)">A</strong>yush<strong style="color: rgb(233, 168, 47)">G</strong>ram   </strong>  |  </a>
              <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavid" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
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
              <div class="text-center ">
                 <div>
                  <br><br>      
                  {{-- justify-content-center align-items-center vh-100 --}}
                    <div class="container d-flex justify-content-center align-items-center ">
                      <div>
                        <img src="{{ asset('icons8 A.png') }}"  >
                      </div>
                      <div>
                        <img src="{{ asset('icons8 G.png') }}">
                      </div>
                    </div> 
                  <br>
                  <h1>Welcome to MyGram</h1>
                 </div><br>
                 <div class="container"><h5>
                  This is the first project I made on PHP Laravel framework . It allows Users to create Customers List and also to Update and delete the data .It also has Recycle Bin feature, where data once deleted can be restored again in the Customer's List. <br> <div class="container">
                    <br>
                    
                    <div class="row pt-3">
                        <div class="col-md-6  mt-2  ">
                            <a href="{{ url('/customer/create') }}" class="btn btn-outline-dark">Add New Customer</a>
                        </div>
                        <div class="col-md-6 mt-2 ">
                            <a href="{{ url('/customer') }}" class="btn btn-outline-dark">View Customer's List</a>
                        </div>
                    </div>
                </div> 
                 </h5>
                 </div>
                 

              </div><br>
              <div class="bottom-right">
                 Linkedin: https://www.linkedin.com/in/ayushmaan-manhas-327681259/
              </div>
  </body>
</html>