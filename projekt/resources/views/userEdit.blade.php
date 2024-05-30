@include('shared.html')
@include('shared.head', ['pageTitle' => 'Edytuj dane'])

<body>
    @include('shared.navbar')
    <div class="container mb-5">
        <div class="row mt-4 mb-4 text-center">
            <h1>Edytuj informacje</h1>
        </div>

        @include('shared.validation-error')

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('userUpdate', $user->id) }}" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Imię</label>
                        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-2">
                        <label for="password" class="form-label">Hasło</label>
                        <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group mb-2">
                        <label for="repass" class="form-label">Powtorz haslo</label>
                        <input id="repass" name="repass" type="password" class="form-control @error('repass') is-invalid @enderror" value="{{ old('repass') }}">
                        @error('repass')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center mt-4 mb-4">
                        <button class="btn btn-success" type="submit">Wyślij</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('shared.footer')

    <!-- Opcjonalny JavaScript -->
    <!-- Najpierw jQuery, potem Popper.js, następnie Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
