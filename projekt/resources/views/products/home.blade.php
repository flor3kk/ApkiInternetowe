@include('shared.html')

@include('shared.head')

<body>

    @include('shared.navbar')

    <div id="slodycze" class="container mt-5 mb-5" >
        <div class="row">
          <h1>Slodycze</h1>
        </div>

        <div class="row mb-2">
            <a href="{{ route('products.create') }}">Dodaj nowy produkt</a>
        </div>

        <div class="row">
            @forelse ($products as $product)
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('storage/img/' . $product->img) }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Cena za kg: {{ $product->price }} zł</p>
                        <p class="card-text">Dostepna ilosc kg: {{ $product->available }}</p>
                        <p class="card-text">Kaloryka: {{ $product->calories }}</p>
                        <p class="card-text">Kategoria: {{ $product->category->name }}</p>
                        <a href="{{ route('products.show', $product->id ) }}" class="btn btn-primary">Więcej szczegółów</a><hr>
                        @if (Auth::check())
                        <a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-primary">Dodaj</a>
                        @endif

                    </div>
                </div>
            </div>
            @empty
                <p>Brak produktow</p>
            @endforelse
    </div>


    @include('shared.footer')

    <!-- Opcjonalny JavaScript -->
    <!-- Najpierw jQuery, potem Popper.js, następnie Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Wtyczka FontAwesome -->
    <script src="https://kit.fontawesome.com/6b3d427563.js" crossorigin="anonymous"></script>
</body>

</html>


