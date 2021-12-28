<head>
<link rel="stylesheet" href="css/paginasContainer.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/texto.css">
  <link rel="stylesheet" href="css/buttons.css">
  <link rel="stylesheet" href="css/cards.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

  <title>Onde comer</title>
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

<section id="sectionOndeComer" class="topOff teste">

    <div class="container">
        <div class="row">
            <div class="main">
                <h1>Onde comer</h1>
                <img class="classic" src="/img/new/icon.png">
            </div>
                   </div>
    </div>


    <section class="hero-section">
      <div class="card-grid">
        <a class="card" href="#">
          <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557177324-56c542165309?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80)"></div>
          <div class="card__content">
            <p class="card__category">Category</p>
            <h3 class="card__heading">Example Card Heading</h3>
          </div>
        </a>
        <a class="card" href="#">
          <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557187666-4fd70cf76254?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
          <div class="card__content">
            <p class="card__category">Category</p>
            <h3 class="card__heading">Example Card Heading</h3>
          </div>
        </a>
        <a class="card" href="#">
          <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1556680262-9990363a3e6d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
          <div class="card__content">
            <p class="card__category">Category</p>
            <h3 class="card__heading">Example Card Heading</h3>
          </div>
        </li>
        <a class="card" href="#">
          <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557004396-66e4174d7bf6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
          <div class="card__content">
            <p class="card__category">Category</p>
            <h3 class="card__heading">Example Card Heading</h3>
          </div>
        </a>
      <div>
    </section>

    <footer>
    @include('layouts/footer')
</footer>
</section>

