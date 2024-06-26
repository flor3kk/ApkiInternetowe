
@include('shared.html')

@include('shared.head', ['pageTitle' => 'Edytuj słodycze'])

<body>
    @include('shared.navbar')
    <div class="container mb-5">

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
                            <input id="price" name="price" type="number" class="form-control @if ($errors->first('price')) is-invalid @endif" value="{{ $product->price }}">
                            <div class="invalid-feedback">Nieprawidłowa cena za kg!</div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="available" class="form-label">Dostępna ilość kg</label>
                            <input id="available" name="available" type="number" class="form-control @if ($errors->first('available')) is-invalid @endif" value="{{ $product->available }}">
                            <div class="invalid-feedback">Nieprawidłowa dostępna ilość kg!</div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="calories" class="form-label">Kaloryka</label>
                            <input id="calories" name="calories" type="text" class="form-control @if ($errors->first('calories')) is-invalid @endif" value="{{ $product->calories }}">
                            <div class="invalid-feedback">Nieprawidłowa kaloryka</div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="description" class="form-label">Opis</label>
                            <input id="description" name="description" type="text" class="form-control @if ($errors->first('description')) is-invalid @endif" value="{{ $product->description }}">
                            <div class="invalid-feedback">Nieprawidłowa opis</div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="img" class="form-label">Nazwa obrazka</label>
                            <input id="img" name="img" type="text"
                            class="form-control @if ($errors->first('img')) is-invalid @endif" value="{{ $product->img }}">
                            <div class="invalid-feedback">Nieprawidłowa nazwa obrazka!</div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="category_id" class="form-label">Kategoria</label>
                            <select id="category_id" name="category_id" type="number" class="form-control @if ($errors->first('category_id')) is-invalid @endif">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" @if($category->id == $product->category_id) selected @endif>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Nieprawidłowa kategoria</div>
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
