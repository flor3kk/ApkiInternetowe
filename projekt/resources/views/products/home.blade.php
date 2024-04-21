{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep ze słodyczami</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8bbd0; /* Jasnoróżowy kolor tła */
        }

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Sklep ze słodyczami</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Strona główna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nasze produkty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">O nas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="slodycze" class="container mt-5">
        <div class="row">
          <h1>Slodycze</h1>
        </div>
    <div class="row">
            @forelse ($randomProd as $product)
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('storage/img/'.$product->img) }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->nazwa }}</h5>
                        <p class="card-text">Cena za kg: {{ $product->cena_za_kg }} zł</p>
                        <p class="card-text">Dostepna ilosc kg: {{ $product->dostepna_ilosc_kg }}</p>
                        <a href="{{ route('products.show', $product->ID_produktu ) }}" class="btn btn-primary">Więcej szczegółów...</a>
                    </div>
                </div>
            </div>
            @empty
                <p>Brak produktow</p>
            @endforelse
    </div>


    <footer class="footer fixed-bottom py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">© 2024 Sklep ze słodyczami</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html> --}}


<!doctype html>
<html lang="pl">
  <head>
    <!-- Wymagane meta tagi -->
    <meta charset="utf-8">
    <meta name="description" content="CandyShop to wiodący sklep ze słodyczami w tym regionie. Oferujemy szeroki wybór cukierków, czekolad i lodów. Realizujemy także specjalne zamówienia na wesela i imprezy!" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Słodycze, Czekolady, Cukierki, Lody, Sklep internetowy, Cukiernia, Słodki">
    <meta name="author" content="Filip Babić, rookybusiness@gmail.com">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Własny CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Ikona i nazwa karty -->
    <link rel="icon" href="img/logo-icon.png">
    <title>CandyShop | Strona główna</title>
  </head>
  <body>

    <!-- Pasek nawigacyjny -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger">
      <a class="navbar-brand" href="index.html"><img src="img/logo-small.png" class="img-fluid" alt="CandyShop"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Strona główna <span class="sr-only">(aktualnie)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="onama.html">O nas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="proizvodi.html">Produkty</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="galerija.html">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontakt.html">Kontakt</a>
          </li>
        </ul>
      </div>
    </nav>

    <div id="wrap">
      <div id="main" class="container clear-top">

        <!-- Karty produktów -->
        <section id="proizvodi">
          <div class="row">
            <div class="col-lg-4 col-12">
              <div class="card shadow" style="margin-bottom: 2rem;">
                <img src="img/bombone.jpg" class="card-img-top" alt="cukierki" style="  height: 20rem; object-fit: cover;">
                <div class="card-body text-center">
                  <p class="card-text">Oferujemy szeroki asortyment kolorowych cukierków różnego rodzaju!<br> Od gumowych, przez żelki aż po twarde cukierki - mamy wszystko, co zadowoli każdego łasucha!</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class="card shadow" style="margin-bottom: 2rem;">
                <img src="img/cokolade.jpg" class="card-img-top" alt="czekolady" style="  height: 20rem; object-fit: cover;">
                <div class="card-body text-center">
                  <p class="card-text">Nasze delikatne czekolady rozpuszczają się w ustach. Oprócz szerokiego wyboru smaków oferujemy także możliwość wykonania czekoladek na specjalne okazje, takie jak bankiety czy wesela!</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class="card shadow" style="margin-bottom: 2rem;">
                <img src="img/sladoledi.jpg" class="card-img-top" alt="lody" style="  height: 20rem; object-fit: cover;">
                <div class="card-body text-center">
                  <p class="card-text">Marzysz o prawdziwym lodzie?<br>Nie szukaj dalej, trafiłeś we właściwe miejsce! Ostatnio wprowadziliśmy do oferty kilka najpiękniejszych lodów o naturalnych składnikach i prawdziwym smaku!</p>
                </div>
              </div>
            </div>
          </div>

          <button type="button" class="btn btn-danger btn-lg btn-block" onclick="window.location.href = 'proizvodi.html';"> -> Zobacz listę wszystkich naszych produktów tutaj! <- </button>

          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Promocja 20% zniżki!</h1>
              <p class="lead">Tylko do końca stycznia 2020 roku skorzystaj z specjalnej oferty 20% zniżki przy zakupie przynajmniej jednego produktu z każdej z trzech oferowanych kategorii.</p>
            </div>
          </div>
        </section>

        <!-- W skrócie o nas -->
        <section id="opis">
          <div class="card mb-3 shadow">
            <img src="img/prodavnica.jpg" class="card-img-top" alt="Sklep">
            <div class="card-body">
              <h3 class="card-title">CandyShop</h3>
              <p class="card-text">Słodycze, przekąski i prezenty to to, w czym CandyShop się specjalizuje! Od 2009 roku dostarczamy zamówienia do szczęśliwych klientów na całym Bałkanach, takich jak Ty!
                <br>
                Nasz zespół jest oddany temu, aby Twoje doświadczenie z nami sprawiło, że będziesz uśmiechnięty i że będziesz wracać po więcej. Pozwól, że przedstawimy Ci nasz zespół i opowiemy nieco więcej o naszej firmie.
                </p>
              <a href="onama.html" class="card-link">Dowiedz się więcej...</a>
            </div>
          </div>
        </section>

      </div>
    </div>

    <!-- Stopka strony -->
    <footer>
      <div class="row text-center" style="margin: 0 !important;">
        <div class="col-12">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="https://www.facebook.com/candydotcom" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/candydotcom/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="https://twitter.com/candydotcom" target="_blank"><i class="fab fa-twitter"></i></a></li>
          </ul>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="faq.html">Najczęściej zadawane pytania</a></li>
            <li class="list-inline-item"><a href="cenovnik.html">Cennik</a></li>
            <li class="list-inline-item"><a href="mapa.html">Mapa strony</a></li>
            <li class="list-inline-item"><a href="kontakt.html">Kontakt</a></li>
          </ul>
          <p>Prawa autorskie <i class="far fa-copyright"></i> 2024, CandyShop Wszelkie prawa zastrzeżone.</p>
        </div>
      </div>
    </footer>

    <!-- Opcjonalny JavaScript -->
    <!-- Najpierw jQuery, potem Popper.js, następnie Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Wtyczka FontAwesome -->
    <script src="https://kit.fontawesome.com/6b3d427563.js" crossorigin="anonymous"></script>
  </body>
</html>
