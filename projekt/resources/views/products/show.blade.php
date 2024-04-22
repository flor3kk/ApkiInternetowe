@include('shared.html')

  @include('shared.head', ['pageTitle' => 'Słodycz '.$product->nazwa])
  <body>

    @include('shared.navbar')

    <div id="cukierki" class="container  mt-5 mb-5">
        <div class="row m-2 text-center">
          <h1>Cukierek</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('storage/img/'.$product->img) }}" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">ID: {{ $product->ID_produktu }}</p>
                        <p class="card-text">Nazwa: {{ $product->nazwa }}</p>
                        <p class="card-text">Cena za Kg: {{ $product->cena_za_kg }}</p>
                        <p class="card-text">Dostepna ilosc kg: {{ $product->dostepna_ilosc_kg }}</p>

                        <p><a href="{{ route('products.edit', $product->ID_produktu) }}">Edytuj</a></p>

                        <p>
                            <form method="POST" action="{{ route('products.destroy', $product->ID_produktu) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Usuń"
                                       style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" />
                            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
      </div>

    @include('shared.footer')
</html>
