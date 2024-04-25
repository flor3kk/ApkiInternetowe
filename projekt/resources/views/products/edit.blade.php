
@include('shared.html')

@include('shared.head', ['pageTitle' => 'Edytuj słodycze'])

<body>
    @include('shared.navbar')
    <div class="container mt-5 mb-5">

        @include('shared.session-error')

        <div class="row mt-4 mb-4 text-center">
            <h1>Edytuj słodycz</h1>
        </div>

            @include('shared.validation-error')

            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form method="POST" action="{{ route('products.update', $product->id) }}" class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label for="name" class="form-label">Nazwa</label>
                            <input id="name" name="name" type="text" class="form-control @if ($errors->first('name')) is-invalid @endif" value="{{ $product->name }}">
                            <div class="invalid-feedback">Nieprawidłowa nazwa!</div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="price" class="form-label">Cena za kg</label>
                            <input id="price" name="price" type="text" class="form-control @if ($errors->first('price')) is-invalid @endif" value="{{ $product->price }}">
                            <div class="invalid-feedback">Nieprawidłowa cena za kg!</div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="available" class="form-label">Dostępna ilość kg</label>
                            <input id="available" name="available" type="text" class="form-control @if ($errors->first('available')) is-invalid @endif" value="{{ $product->available }}">
                            <div class="invalid-feedback">Nieprawidłowa dostępna ilość kg!</div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="description" class="form-label">Opis</label>
                            <input id="description" name="description" type="text" class="form-control @if ($errors->first('description')) is-invalid @endif" value="{{ $product->description }}">
                            <div class="invalid-feedback">Nieprawidłowa opis</div>
                        </div>
                        {{-- Uzupełnienie formularza --}}
                        <div class="text-center mt-4 mb-4">
                            <input class="btn btn-success" type="submit" value="Wyślij">
                        </div>
                    </form>
                </div>
            </div>
        </div>

</html>
