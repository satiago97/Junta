
<head>
  <link rel="stylesheet" href="css/registar.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/paginasContainer.css">
  <link rel="stylesheet" href="css/texto.css">
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
            
            <form class="form1">
              <input class="un" type="text"  placeholder="Nome">
              <input class="un" type="email"  placeholder="E-mail">
              <input class="un" type="password"  placeholder="Palavra-passe">
              <input class="un" type="password"  placeholder="Confirmar palavra-passe">
            
              <a2 class="submit"></a2>
            </form>
                        
          </div>

          </div>
      </div>
      <footer>
    @include('layouts/footer')
  </footer>
  </section>



 
