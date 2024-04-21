    <!-- Pasek nawigacyjny -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger">
        <a class="navbar-brand" href="welcome"><img src="img/logo.png" class="img-fluid" alt="CandyShop"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('welcome') ? 'active' : '' }}" href="{{ url('welcome') }}">Strona głowna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ url('home') }}">Produkty</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('about') }}">O nas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('gallery') ? 'active' : '' }}" href="{{ url('gallery') }}">Galeria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('contact') }}">Kontakt</a>
            </li>
          </ul>
        </div>
      </nav>
