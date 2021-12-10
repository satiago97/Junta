
@extends('layouts/site')

@section('content-page')

<head>
  <link rel="stylesheet" href="css/login.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <title>Sign in</title>
</head>
<style>
  .teste{
    background-image: url("/img/back-login.png");
    background-repeat: no-repeat;
    background-size: cover;
  }
  </style>

     
    <section id="sectionlogin" class="topOff teste">
      <div class="container">
          <div class="row">
          
          <div class="main">
            <p class="sign" align="center">Sign in</p>
            <form class="form1">
              <input class="un " type="text" align="center" placeholder="Username">
              <input class="pass" type="password" align="center" placeholder="Password">
              <a class="submit" align="center">Sign in</a>
              <p class="forgot" align="center"><a href="#">Forgot Password?</p>
                    
                        
    </div>

          </div>
      </div>
  </section>
  <!-- Section1 End -->
@endsection