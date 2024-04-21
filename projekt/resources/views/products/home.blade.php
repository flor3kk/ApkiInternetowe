<!DOCTYPE html>
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

</html>
