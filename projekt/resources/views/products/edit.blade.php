
@include('shared.html')

@include('shared.head', ['pageTitle' => 'Edytuj słodycze'])

    <div class="container mt-5 mb-5">
        @include('shared.session-error')

    @include('shared.navbar')

        <div class="row mt-4 mb-4 text-center">
            <h1>Edytuj słodycz</h1>
        </div>

            @include('shared.validation-error')

            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form method="POST" action="{{ route('products.update', $product->ID_produktu) }}" class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label for="nazwa" class="form-label">Nazwa</label>
                            <input id="nazwa" name="nazwa" type="text" class="form-control @if ($errors->first('nazwa')) is-invalid @endif" value="{{ $product->nazwa }}">
                            <div class="invalid-feedback">Nieprawidłowa nazwa!</div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="cena_za_kg" class="form-label">Cena za kg</label>
                            <input id="cena_za_kg" name="cena_za_kg" type="text" class="form-control @if ($errors->first('cena_za_kg')) is-invalid @endif" value="{{ $product->cena_za_kg }}">
                            <div class="invalid-feedback">Nieprawidłowa cena za kg!</div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="dostepna_ilosc_kg" class="form-label">Dostępna ilość kg</label>
                            <input id="dostepna_ilosc_kg" name="dostepna_ilosc_kg" type="text" class="form-control @if ($errors->first('dostepna_ilosc_kg')) is-invalid @endif" value="{{ $product->dostepna_ilosc_kg }}">
                            <div class="invalid-feedback">Nieprawidłowa dostępna ilość kg!</div>
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
