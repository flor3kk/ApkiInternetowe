    <!-- Pasek nawigacyjny -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger">
        <a class="navbar-brand" href="welcome"><img src="img\logo.png" class="img-fluid" alt="CandyShop"></a>
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
            @if (Auth::check())
            <li class="nav-item">
                <a class="nav-link {{ Request::is('orders') ? 'active' : '' }}" href="{{ url('orders') }}">Zamowienia uzytkownika: {{ Auth::user()->name }}</a>
            </li>
            @endif
          </ul>

          <ul class="navbar-nav mb-2 mb-lg-0">
            {{-- <li class="pr-5">
                <button class="nav-link" onclick="themeToggle()"> <i class="bi-moon-stars"></i></button>
            </li> --}}
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">{{ Auth::user()->name }} wyloguj się </a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Zaloguj się</a>
                </li>
            @endif

            @if (!Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="{{ route('registration') }}">Rejestracja</a>
            </li>
            @endif

            @if (Auth::check())
            <div class="dropdown">
                <button type="button" class="btn btn-primary" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Koszyk <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>

                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        @php $total = 0 @endphp
                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                        <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                            <p>Lącznie: <span class="text-info">zł {{ $total }}</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    {{ $details['name'] }} <br>
                                    <span class="price text-info">{{ $details['price'] }} zł</span> <br>
                                    <span class="count"> Ilosc w kg: {{ $details['quantity'] }}</span>
                                    <hr>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <button class="btn btn-primary btn-block" id="place-order-btn">Zamów</button>
                        </div>
                    @endif
                </div>
            </div>
            @endif

            <script>
                document.getElementById('place-order-btn').addEventListener('click', function() {
                    fetch('/clear-cart', {
                        method: 'GET',
                    })
                    .then(response => {
                        if (response.ok) {
                            alert('Zamowienie zostało wysłane');
                        } else {
                            alert('Wystąpił błąd podczas czyszczenia koszyka.');
                        }
                    })
                    .catch(error => {
                        console.error('Wystąpił błąd:', error);
                        alert('Wystąpił błąd podczas czyszczenia koszyka.');
                    });
                });
            </script>

            </div>
        </ul>
        </div>
      </nav>
