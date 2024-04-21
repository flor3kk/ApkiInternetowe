@include('shared.html')

@include('shared.head', ['pageTitle' => 'Edytuj dane kraju'])

<body>
    @include('shared.navbar')

    <div class="container mt-5 mb-5">

        @include('shared.session-error')

        <div class="row mt-4 mb-4 text-center">
            <h1>Edytuj dane wycieczki</h1>
        </div>

        @include('shared.validation-error')

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('trips.update', $trip->id) }}" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Nazwa</label>
                        <input id="name" name="name" type="text" class="form-control @if ($errors->first('name')) is-invalid @endif" value="{{ $trip->name }}">
                        <div class="invalid-feedback">Nieprawidłowa nazwa!</div>
                    </div>

                    <div class="form-group mb-2">
                        <label for="continent" class="form-label">continent</label>
                        <input id="continent" name="continent" type="text" class="form-control @if ($errors->first('continent')) is-invalid @endif" value="{{ $trip->continent }}">
                        <div class="invalid-feedback">Nieprawidłowa nazwa!</div>
                    </div>

                    <div class="form-group mb-2">
                        <label for="period" class="form-label">period</label>
                        <input id="period" name="period" type="text" class="form-control @if ($errors->first('period')) is-invalid @endif" value="{{ $trip->period }}">
                        <div class="invalid-feedback">Nieprawidłowa nazwa!</div>
                    </div>

                    <div class="form-group mb-2">
                        <label for="description" class="form-label">description</label>
                        <input id="description" name="description" type="text" class="form-control @if ($errors->first('description')) is-invalid @endif" value="{{ $trip->description }}">
                        <div class="invalid-feedback">Nieprawidłowa nazwa!</div>
                    </div>

                    <div class="form-group mb-2">
                        <label for="price" class="form-label">price</label>
                        <input id="price" name="price" type="number" class="form-control @if ($errors->first('price')) is-invalid @endif" value="{{ $trip->price }}">
                        <div class="invalid-feedback">Nieprawidłowa nazwa!</div>
                    </div>

                    <div class="form-group mb-2">
                        <label for="country_id" class="form-label">Kraj</label>
                        <select id="country_id" name="country_id" class="form-control">
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}" {{ $trip->country_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Uzupełnienie formularza --}}
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
