<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Films</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    @yield('css')
  </head>
  <body>
    <header>
      <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="">
            <img src="https://tasnimimmobilier.com/wp-content/uploads/2022/02/logo.jpg" alt="" width="200rem">
          </a>
      
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item" href="{{ url('/dashboard') }}">
              Accueil
            </a>
      
      
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                Authentification
              </a>
      
              <div class="navbar-dropdown">
                <a class="navbar-item" href="{{ url('/login') }}">
                  Connexion
                </a>
                <a class="navbar-item" href="{{ url('/register') }}">
                  Inscription
                </a>
              </div>
            </div>

            


          </div>
      
          
        </div>
      </nav>

      <img src="https://splendorstudio.net/fancify/broker-lite/wp-content/uploads/2020/07/fancify-image-2.jpg" alt="" width="100%" >
    </header>
    <main class="section">

      <div class="presentation">
        <h1>TASNIMIMMOBILIER UN NOM AUQUEL VOUS POUVEZ FAIRE CONFIANCE</h1>
        <p>
            
              Quels que soient vos besoins, vous trouverez sans difficulté la location idéale pour toute la famille.
              Nous disposons de tous les services utiles pour vous garantir un logement ou séjour inoubliable.

              Nous mettons à votre disposition pour vous accompagner à tous vos besoin dans le domaine de l’immobilier.


        </p>
      </div>
        
    </main>
  </body>
</html>

<style>
  header img{
    height: 50rem;
  }

  .navbar-item img{
    height: 10rem
  }

  .presentation{
    text-align: center;
    margin: 2rem;

  }

  .presentation h1{
    font-weight: bold;
    text-decoration: underline;
  }

  .presentation p{
    margin-top: 1rem;
  }
</style>
