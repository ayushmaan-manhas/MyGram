<!doctype html>
<html lang="en">
  <head>
    <title>About</title>
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
      <a class="navbar-brand" href="{{ url('/') }}" style="color: white"><strong style="color: rgb(233, 168, 47)">A</strong>yush<strong style="color: rgb(233, 168, 47)">G</strong>ram   </strong>  |  </a>
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
      <h1 class="text-center">
        <br>
        
         About Our WebSite ! </h1>
        <br />
        
        <br>
      </h1>
      <div class="container text-justify font-normal">
        

Welcome to <b> A G Gram</b> , where we celebrate the versatility and goodness of gram! Whether you are a food enthusiast exploring diverse culinary experiences or a social media enthusiast connecting with others, our platform is designed with you in mind.
<br><br>
<h4>Our Mission:</h4> 
At <b> A G Gram</b>, we are passionate about showcasing the incredible potential of gram. From mouthwatering recipes that elevate chickpeas to the star of the dish, to a vibrant community sharing stories and connecting over shared interests, our mission is to bring people together through the power of gram.
<br>
<br>
<h4>What We Offer:</h4>

<li>Inspiring Recipes: Discover a plethora of delicious recipes, from traditional chickpea-based dishes to innovative creations that will tantalize your taste buds.
</li>
<li>
Community Hub: Connect with like-minded individuals who share your love for gram. Share your experiences, tips, and culinary adventures in our vibrant community.
</li><li>
Nutritional Insights: Learn about the nutritional benefits of gram, why it's a fantastic addition to your diet, and how it contributes to a healthy lifestyle.
</li>
<br>
<h4>Our Story:</h4>
<b> A G Gram</b> started with a simple idea: to create a space that celebrates the incredible potential of gram. Whether you're a seasoned chef, a home cook, or someone just discovering the wonders of chickpeas, we invite you to join our community.

Join Us Today:
Embark on a journey of culinary exploration and community engagement. Join <b> A G Gram</b> today and be part of a community that celebrates the humble gram in all its glory.
Feel free to customize this content to better fit the tone, style, and purpose of your website.
      </div>
      <br><br>
      <h4 class="text-right mx-1">Current Date: {{ date('d-m-y') }} </h4>
  </body>
</html>