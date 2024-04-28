@include('shared.html')

@include('shared.head', ['pageTitle' => 'Dodaj nowy produkt'])

<body>
    @include('shared.navbar')

    <div class="container mt-5 mb-5">

        @include('shared.session-error')

        <div class="row mt-4 mb-4 text-center">
            <h1>Dodaj nowy produkt</h1>
        </div>

        @include('shared.validation-error')

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('products.store') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Nazwa</label>
                        <input id="name" name="name" type="text" class="form-control @if ($errors->first('name')) is-invalid @endif" value="{{ old('name') }}">
                        <div class="invalid-feedback">Nieprawidłowa nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="price" class="form-label">Cena za kg</label>
                        <input id="price" name="price" type="number" class="form-control @if ($errors->first('price')) is-invalid @endif" value="{{ old('price') }}">
                        <div class="invalid-feedback">Nieprawidłowa cena za kg!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="available" class="form-label">Dostepna ilosc kg</label>
                        <input id="available" name="available" type="number" class="form-control @if ($errors->first('available')) is-invalid @endif" value="{{ old('available') }}">
                        <div class="invalid-feedback">Nieprawidłowa ilosc kg!</div>
                    </div>

                    <div class="form-group mb-2">
                        <label for="calories" class="form-label">Kalorie</label>
                        <input id="calories" name="calories" type="text" class="form-control @if ($errors->first('calories')) is-invalid @endif" value="{{ old('calories') }}">
                        <div class="invalid-feedback">Nieprawidłowy kalorie!</div>
                    </div>

                    <div class="form-group mb-2">
                        <label for="description" class="form-label">Opis</label>
                        <input id="description" name="description" type="text" class="form-control @if ($errors->first('description')) is-invalid @endif" value="{{ old('description') }}">
                        <div class="invalid-feedback">Nieprawidłowy opis!</div>
                    </div>

                    <div class="form-group mb-2">
                        <label for="category_id" class="form-label">Kategoria</label>
                        <input id="category_id" name="category_id" type="number" class="form-control @if ($errors->first('category_id')) is-invalid @endif" value="{{ old('category_id') }}">
                        <div class="invalid-feedback">Nieprawidłowy format!</div>
                    </div>

                    <div class="text-center mt-4 mb-4">
                        <input class="btn btn-success" type="submit" value="Wyślij">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('shared.footer')
</body>

</html>
