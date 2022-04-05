<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasnim</title>
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
      
            <a class="navbar-item" href="{{ url('/proprietes') }}">
              Liste des propriétés
            </a>

            <a class="navbar-item" href="{{ url('/proprietaires') }}">
              Liste des propriétaires
            </a>

            

            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                Réglages
              </a>
      
              <div class="navbar-dropdown">
                <div class="mt-3 space-y-1">
                  <!-- Authentication -->
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                    
                      <a class="navbar-item" href="{{ url('/typeproprietes') }}">
                        Types de propriétés
                      </a>

                      <a class="navbar-item" href="{{ url('/typeproprietes') }}">
                        Pays
                      </a>
                      
                  </form>
              </div>
              </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                {{ Auth::user()->name }}
              </a>
      
              <div class="navbar-dropdown">
                <div class="mt-3 space-y-1">
                  <!-- Authentication -->
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
  
                      <a class="navbar-link" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                          this.closest('form').submit();">
                          {{ __('Log Out') }}
                  </a>
                  </form>
              </div>
              </div>
            </div>


          </div>
      
          
        </div>
      </nav>
    </header>
    <main class="section">
        <div class="container">
            @yield('content')
        </div>
    </main>
  </body>
</html>