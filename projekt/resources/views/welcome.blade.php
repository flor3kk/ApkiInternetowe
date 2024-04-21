@include('shared.html')

    @include('shared.head')
  <body>

    @include('shared.navbar')

    <div id="wrap">
      <div id="main" class="container clear-top">

        <!-- Karty produktów -->
        <section id="proizvodi">
          <div class="row">
            <div class="col-lg-4 col-12">
              <div class="card shadow" style="margin-bottom: 2rem;">
                <img src="img/bombone.jpg" class="card-img-top" alt="cukierki" style="  height: 20rem; object-fit: cover;">
                <div class="card-body text-center">
                  <p class="card-text">Oferujemy szeroki asortyment kolorowych cukierków różnego rodzaju!<br> Od gumowych, przez żelki aż po twarde cukierki - mamy wszystko, co zadowoli każdego łasucha!</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class="card shadow" style="margin-bottom: 2rem;">
                <img src="img/cokolade.jpg" class="card-img-top" alt="czekolady" style="  height: 20rem; object-fit: cover;">
                <div class="card-body text-center">
                  <p class="card-text">Nasze delikatne czekolady rozpuszczają się w ustach. Oprócz szerokiego wyboru smaków oferujemy także możliwość wykonania czekoladek na specjalne okazje, takie jak bankiety czy wesela!</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class="card shadow" style="margin-bottom: 2rem;">
                <img src="img/sladoledi.jpg" class="card-img-top" alt="lody" style="  height: 20rem; object-fit: cover;">
                <div class="card-body text-center">
                  <p class="card-text">Marzysz o prawdziwym lodzie?<br>Nie szukaj dalej, trafiłeś we właściwe miejsce! Ostatnio wprowadziliśmy do oferty kilka najpiękniejszych lodów o naturalnych składnikach i prawdziwym smaku!</p>
                </div>
              </div>
            </div>
          </div>

          <button type="button" class="btn btn-danger btn-lg btn-block" onclick="window.location.href = 'products';"> -> Zobacz listę wszystkich naszych produktów tutaj! <- </button>

          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Promocja 20% zniżki!</h1>
              <p class="lead">Tylko do końca stycznia 2020 roku skorzystaj z specjalnej oferty 20% zniżki przy zakupie przynajmniej jednego produktu z każdej z trzech oferowanych kategorii.</p>
            </div>
          </div>
        </section>

        <!-- W skrócie o nas -->
        <section id="opis">
          <div class="card mb-3 shadow">
            <img src="img/prodavnica.jpg" class="card-img-top" alt="Sklep">
            <div class="card-body">
              <h3 class="card-title">CandyShop</h3>
              <p class="card-text">Słodycze, przekąski i prezenty to to, w czym CandyShop się specjalizuje! Od 2009 roku dostarczamy zamówienia do szczęśliwych klientów na całym Bałkanach, takich jak Ty!
                <br>
                Nasz zespół jest oddany temu, aby Twoje doświadczenie z nami sprawiło, że będziesz uśmiechnięty i że będziesz wracać po więcej. Pozwól, że przedstawimy Ci nasz zespół i opowiemy nieco więcej o naszej firmie.
                </p>
              <a href="onama.html" class="card-link">Dowiedz się więcej...</a>
            </div>
          </div>
        </section>

      </div>
    </div>

    @include('shared.footer')

    <!-- Opcjonalny JavaScript -->
    <!-- Najpierw jQuery, potem Popper.js, następnie Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Wtyczka FontAwesome -->
    <script src="https://kit.fontawesome.com/6b3d427563.js" crossorigin="anonymous"></script>
  </body>
</html>
