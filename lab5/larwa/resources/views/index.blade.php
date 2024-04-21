<!doctype html>
<html lang="pl" data-bs-theme="">

    @include('shared.head', ['pageTitle' => 'Wycieczki gorskie'])

  <body>

    @include('shared.navbar')

    @include('shared.carousel')

    <div id="wycieczki" class="container mt-5">
      <div class="row">
        <h1>Wycieczki</h1>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card">
            <img src="{{ Storage::url('public/img/colorado.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Kolorado</h5>
                <p class="card-text">jest wyżynno-górzystym stanem, którego średnia wysokość nad poziomem morza
                    przekracza 2000 m.
                    Najwyższy szczyt Kolorado, Mount Elbert, wznosi się na 4399 m n.p.m. </p>
                <a href="#" class="btn btn-primary">Więcej szczegółów...</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card">
            <img src="{{ Storage::url('public/img/alaska.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Alaska</h5>
                  <p class="card-text">
                    pasmo górskie w Ameryce Północnej w stanie Alaska. Jest to najwyższa część łańcucha Kordylierów z najwyższym szczytem kontynentu - Denali (McKinley) (6194 m n.p.m.).
                  </p>
                  <a href="#" class="btn btn-primary">Więcej szczegółów...</a>
              </div>
          </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
          <div class="card">
            <img src="{{ Storage::url('public/img/everest.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Everest</h5>
                  <p class="card-text">najwyższy szczyt Ziemi (8848 m n.p.m., podaje się też wysokość 8844 lub 8850), ośmiotysięcznik położony w Himalajach Wysokich, na granicy Nepalu i Tybetu.
                  </p>
                  <a href="#" class="btn btn-primary">Więcej szczegółów...</a>
              </div>
          </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
          <div class="card">
            <img src="{{ Storage::url('public/img/alps.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Alpy</h5>
                  <p class="card-text">najwyższy łańcuch górski Europy, ciągnący się łukiem od wybrzeża Morza Śródziemnego w okolicy Savony po dolinę Dunaju w okolicach Wiednia.
                  </p>
                  <a href="#" class="btn btn-primary">Więcej szczegółów...</a>
              </div>
          </div>
      </div>
    </div>
    </div>

    <div id="cennik" class="container mt-5 mb-5">
      <div class="row">
          <h1>Cennik</h1>
      </div>

      @include('shared.table')

    </div>

    <div id="inne" class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 mb-4">
          <h2>O naszych wycieczkach...</h2>
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/t7ZpJ7wWlZI"></iframe>
        </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <h2>Zapytanie o ofertę</h2>
          <form>
            <div class="mt-2 mb-3">
                <label for="exampleFormControlInput1">Adres email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1"
                    placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormSelect1">Rodzaj oferty</label>
                <select class="form-select" id="exampleFormControlSelect1">
                    <option selected>indywidualna</option>
                    <option>grupowa</option>
                    <option>specjalna</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlAmount">Budżet</label>
                <div class="input-group mb-3">
                  <input type="number" min="0" placeholder="20000" step="any" class="form-control" aria-label="Amount">
                  <span class="input-group-text">PLN</span>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1">Komentarz</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <a href="#" class="btn btn-primary">Wyślij</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    @include('shared.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  </body>
</html>
