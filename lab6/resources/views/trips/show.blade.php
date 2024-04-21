<!doctype html>
<html lang="pl" data-bs-theme="">
  @include('shared.head', ['pageTitle' => 'Wycieczki górskie'])
  <body>
    @include('shared.navbar')
    <div id="wycieczki" class="container mt-5">
        <div class="row justify-content-center">
          <h1 class="text-center">Wycieczka {{ $trip->title }}</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="card">
                <img src="{{ asset('storage/img/'.$trip->img) }}" class="card-img-top" alt="{{ $trip->title }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $trip->name }}</h5>
                  <p class="card-text">{{ $trip->description }}</p>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Kontynent:</b> {{ $trip->continent }}</li>
                    <li class="list-group-item"><b>Kraj:</b> {{ $trip->country_id }}</li>
                    <li class="list-group-item"><b>Okres:</b> {{ $trip->period }}</li>
                    <li class="list-group-item"><b>Cena:</b> {{ $trip->price }} PLN</li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
      </div>

    @include('shared.footer')
</html>
