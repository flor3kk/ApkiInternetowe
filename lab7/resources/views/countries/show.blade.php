@include('shared.html')

@include('shared.head', ['pageTitle' => 'Kraj - ' . $country->name])

<body>
    @include('shared.navbar')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Kraj</h5>
                <p class="card-text">ID: {{ $country->id }}</p>
                <p class="card-text">Nazwa: {{ $country->name }}</p>
                <p class="card-text">Kod: {{ $country->code }}</p>
                <p class="card-text">Waluta: {{ $country->currency }}</p>
                <p class="card-text">Obszar: {{ $country->area }}</p>
                <p class="card-text">Język: {{ $country->language }}</p>
                <p><a href="{{ route('countries.edit', $country->id) }}">Edytuj</a></p>

                <p>
                    <form method="POST" action="{{ route('countries.destroy', $country->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Usuń"
                               style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" />
                    </form>
                </p>
            </div>
        </div>
    </div>

    @include('shared.footer')
</body>

</html>
