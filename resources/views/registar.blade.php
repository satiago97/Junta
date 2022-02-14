
<head>
  <link rel="stylesheet" href="css/registar.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/paginasContainer.css">
  <link rel="stylesheet" href="css/texto.css">
  <link rel="stylesheet" href="css/buttons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <title>Sign in</title>
</head>
<style>
  .teste{
    background-image: url("/img/back-login.png");
    background-repeat: no-repeat;
    background-size: cover;
    height: 20%;
  }
  .un{
    width: 50%;
  }
  .b{
    width: 50%;
  }

 
 
  </style>

<header>
@include('layouts/header')
</header>
     
    <section id="sectionlogin" class="topOff teste">

    <div class="container">
    <div class="row"></div>
    <div class="main">
        <h1>Criação de conta</h1>
        <img class="classic" src="/img/new/icon.png">
    </div>
</div>

      <div class="container">
          <div class="row">
          
          <div class="registoContainer">
            
            <form class="form1" method="POST" action="/register">
            {{ csrf_field() }}
              <input class="un" type="text"  id="name" name="name" placeholder="Nome">
              <input class="un" type="email" id="email" name="email" placeholder="E-mail">
              <input class="un" type="password" id="password"  name="password" placeholder="Palavra-passe">
              <input class="un" type="password" id="password_confirmation" name="password_confirmation"  placeholder="Confirmar palavra-passe">
              <p></p>
              <span>{!! captcha_img() !!}</span>
              <div class="form-group mb-4">
                <input class="un" id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
              </div>
             
              
              <button style="cursor:pointer; margin:0 auto; display:block;" type="submit" class="button-62">Registar</button>

              @include('partials.formerrors')
            
              <!--<a2 class="submit" type="submit" ></a2>-->
            </form>
                        
          </div>

          </div>
      </div>
      <footer>
    @include('layouts/footer')
  </footer>
  </section>



