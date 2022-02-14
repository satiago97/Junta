
@extends('layouts/site')

@section('content-page')

<head>
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/buttons.css">
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
            <p class="sign" align="center">Log in</p>
            <form class="form1" method="POST" action="/login">
              {{csrf_field()}}
              <input class="un" type="text" id="email" name="email" placeholder="E-mail">
              <input class="pass" type="password" id="password" name="password" placeholder="Palavra-passe">
              <div class="captcha" style="margin-top:15px;">
                    <span >{!! captcha_img() !!}</span>
                    <input class="un" id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                </div>
              <button style="cursor:pointer;margin:0 auto; display:block;" type="submit" class="button-62">Login</button>
              <p class="forgot" align="center"><a href="#">Esqueceu-se da palavra-passe?</p>
              <p class="forgot" align="center"><a href="{{ route('register') }}">Registar</p>

              @include('partials.formerrors')
             
                    
                        
    </div>

          </div>
      </div>
  </section>
  <!-- Section1 End -->
@endsection