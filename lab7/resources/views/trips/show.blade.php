@include('shared.html')

  @include('shared.head', ['pageTitle' => 'Wycieczka '.$trip->name])
  <body>
    @include('shared.navbar')

    <div id="wycieczki" class="container mt-5 mb-5">
        <div class="row m-2 text-center">
          <h1>Wycieczka</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('storage/img/'.$trip->img) }}" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">ID: {{ $trip->id }}</p>
                        <p class="card-text">Nazwa: {{ $trip->name }}</p>
                        <p class="card-text">continent: {{ $trip->continent }}</p>
                        <p class="card-text">period: {{ $trip->period }}</p>
                        <p class="card-text">description: {{ $trip->description }}</p>
                        <p class="card-text">price: {{ $trip->price }}</p>
                        <p><a href="{{ route('trips.edit', $trip->id) }}">Edytuj</a></p>

                        <p>
                            <form method="POST" action="{{ route('trips.destroy', $trip->id) }}">
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
