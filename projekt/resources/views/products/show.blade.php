@include('shared.html')

  @include('shared.head', ['pageTitle' => 'Słodycz '.$product->name])
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
                        <p class="card-text">ID: {{ $product->id }}</p>
                        <p class="card-text">Nazwa: {{ $product->name }}</p>
                        <p class="card-text">Opis: {{ $product->description }}</p>
                        <p class="card-text">Kategoria: {{ $product->category->name }}</p>

                        <p><a href="{{ route('products.edit', $product->id) }}">Edytuj</a></p>

                        <p>
                            <form method="POST" action="{{ route('products.destroy', $product->id) }}">
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
