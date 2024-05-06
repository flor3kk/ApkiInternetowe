@include('shared.html')

@include('shared.head')
  <body>

@include('shared.navbar')

    <!-- Treść strony -->
    <div id="slodycze" class="container mb-5" >
        <div class="row">
          <h1>Lista slodyczy</h1>
        </div>

        <div class="row">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nazwa</th>
                            <th scope="col">Cena za kg</th>
                            <th scope="col">Dostepna ilosc kg</th>
                            <th scope="col">Opis</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <th scope="row"><a href="{{ route('products.show', $product->id) }}">{{ $product->id }}</a></th>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->available }}</td>
                            <td>{{ $product->description }}</td>
                        </tr>
                        @empty
                        <tr>
                            <th scope="row" colspan="6">Brak produktow.</th>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

    </div>


    @include('shared.footer')

    <!-- Opcjonalne JavaScript -->
    <!-- Najpierw jQuery, potem Popper.js, potem Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Wtyczka FontAwesome -->
    <script src="https://kit.fontawesome.com/6b3d427563.js" crossorigin="anonymous"></script>
  </body>
</html>
