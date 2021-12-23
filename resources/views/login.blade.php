
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
            <p class="sign" align="center">Log in</p>
            <form class="form1" method="POST" action="/login">
              {{csrf_field()}}
              <input class="un " type="text" id="email" name="email" placeholder="E-mail">
              <input class="pass" type="password" id="password" name="password" placeholder="Palavra-passe">
              <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
              <p class="forgot" align="center"><a href="#">Esqueceu-se da palavra-passe?</p>
              <p class="forgot" align="center"><a href="{{ route('register') }}">Registar</p>

              @include('partials.formerrors')
             
                    
                        
    </div>

          </div>
      </div>
  </section>
  <!-- Section1 End -->
@endsection