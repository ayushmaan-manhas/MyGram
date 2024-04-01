<!doctype html>
<html lang="en">
  <head>
    <title>Registration: Add Customer Data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
      
    <form action="{{$url}}" method="POST">
        @csrf
         
        <div class="container inline-flex ">
          <h1 class="text-center"> {{ $title }}   </h1>
             
          {{-- <x-input type="text" name="name" label="Please enter your name" :demo="$demo" />
          <x-input type="email" name="email" label="Please enter your email" />
          <x-input type="password" name="password" label="Please enter your password" />
          <x-input type="password" name="password_confir" label="Please re-enter your password" />
   --}}
            
           
            
            <div class="form-group">
              <label for="please enter">Name</label>
              <input type="text" name="name" id="" class="form-control" value="{{ $customer->name }}" placeholder="" aria-describedby="helpId">
              <span class="text-danger">
                    @error('name')
                      {{ $message }}
                    @enderror
              </span>
              {{-- <smallid="helpId"class="text-muted">Helptext</small> --}}
            </div>
  
            <div class="form-group">
              <label for="">E-Mail</label>
              <input type="email" name="email" id="" class="form-control" value="{{ $customer->email }}" placeholder="" aria-describedby="helpId">
              <span class="text-danger">
                    @error('email')
                      {{ $message }}
                    @enderror
              </span>
              {{-- <smallid="helpId"class="text-muted">Helptext</small> --}}
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
              {{-- <smallid="helpId"class="text-muted">Helptext</small> --}}
              <span class="text-danger">
                              @error('password')
                              {{ $message }}
                              @enderror   
              </span>
            </div>
           <div class="form-group">
              <label for="">Confirm Password</label>
              <input type="password" name="password_confir" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <span class="text-danger">
                              @error('password_confir')
                              {{ $message }}
                              @enderror
              </span>
              {{-- <smallid="helpId"class="text-muted">Helptext</small> --}}
         <br>
              <div class="form-group">
                <label for="">Country</label>
                <input type="text" name="country" id="" class="form-control" value="{{ $customer->country }}" placeholder="" aria-describedby="helpId">
                <span class="text-danger">
                      @error('country')
                        {{ $message }}
                      @enderror
                </span>
                {{-- <smallid="helpId"class="text-muted">Helptext</small> --}}
              </div> 
              <div class="form-group">
                <label for="">State</label>
                <input type="text" name="state" id="" class="form-control" value="{{ $customer->state }}" placeholder="" aria-describedby="helpId">
                <span class="text-danger">
                      @error('state')
                        {{ $message }}
                      @enderror
                </span>
                {{-- <smallid="helpId"class="text-muted">Helptext</small> --}}
              </div>
              <div class="form-group">
                <label for="">Address</label>
                <input type="address" name="address" id="" class="form-control" {{ $customer->address }}" placeholder="" aria-describedby="helpId">
                <span class="text-danger">
                      @error('address')
                        {{ $message }}
                      @enderror
                </span>
                {{-- <smallid="helpId"class="text-muted">Helptext</small> --}}
              </div>

              <div class="container">
                <p>Gender</p>
              <div class="form-check-inline"><br>
                <label class="form-check-label" for="radio1">
                  <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" {{ $customer->gender == "male"? "checked":"" }}>Male
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label" for="radio2">
                  <input type="radio" class="form-check-input" id="radio2" name="gender" value="female" {{ $customer->gender == "female"? "checked":"" }}>Female
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="radio3" name="gender" value="other" {{ $customer->gender == "other"? "checked":"" }}>Other
                </label>
              </div>

              <br/><br/>

              <div class="form-group">
                <label for="">Date of Birth</label>
                <input type="date" name="dob" id="" class="form-control" value="{{ $customer->dob }}" placeholder="" aria-describedby="helpId">
                <span class="text-danger">
                      @error('dob')
                        {{ $message }}
                      @enderror
                </span>
                {{-- <smallid="helpId"class="text-muted">Helptext</small> --}}
              </div>

              <br>
               <button class="btn btn-primary">
              Submit
               </button>
      </div>  
     </form> 
     </body>
  </html>
    
  
  </body>
</html>