@include('shared.html')

@include('shared.head')
  <body>

    <!-- Pasek nawigacyjny -->
    @include('shared.navbar')


    <!-- Treść strony -->
    <div id="wrap">
      <div id="main" class="container clear-top">

        <p id="faq" class="display-4">Najczęściej zadawane pytania (FAQ)</p><hr>

        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Jak długo trwa dostawa?
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Jeśli zamawiasz coś z dostępnych produktów, słodycze są wysyłane natychmiastowo i w zależności od
                Twojego położenia mogą dotrzeć w ciągu godziny!<br><br>
                Jeśli zdecydujesz się na zamówienie specjalne, w zależności od wielkości i
                złożoności zamówienia może to potrwać kilka dni. W takim przypadku najlepiej skontaktować się z nami
                za pośrednictwem naszej <a href="contact">strony kontaktowej</a> w celu uzyskania dokładnych informacji.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Nie mogę złożyć zamówienia?
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Jeśli próbujesz złożyć zamówienie, ale nie zostało ono przetworzone, i nie otrzymałeś/aś potwierdzenia e-mailem, prosimy spróbuj ponownie złożyć zamówienie. <br><br>
                Jeśli problem nadal występuje, może to być spowodowane problemem z siecią lub przeglądarką internetową. <br>
                Spróbuj wyczyścić "Pamięć podręczną i pliki Cookie" w ustawieniach przeglądarki i spróbuj ponownie lub spróbuj z inną przeglądarką (Mozilla Firefox, Google Chrome, Microsoft Edge...). <br><br>
                Jeśli żadne z powyższych nie pomaga, skontaktuj się z nami za pośrednictwem <a href="contact">strony kontaktowej</a>, abyśmy mogli Ci pomóc!
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Czy wszystkie produkty są dostępne online?
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                Niestety nie. Obecnie mamy tylko niewielką część całej gamy produktów do sprzedaży online. <br>
                Pracujemy nad dodaniem większej liczby produktów do naszego sklepu internetowego. Jeśli chcesz zobaczyć pełny asortyment produktów, zapraszamy do odwiedzenia nas w Centrum Handlowym
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFour">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Jakie formy płatności akceptujecie?
                </button>
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
                Akceptujemy karty kredytowe VISA, MasterCard, Discover i AmericanExpress, a także karty debetowe VISA i MasterCard.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFive">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Kiedy zostanie pobrana opłata z mojej karty kredytowej?
                </button>
              </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
              <div class="card-body">
                Pobieramy opłatę od klientów dopiero wtedy, gdy przesyłka zostanie wysłana, a nie wcześniej!
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Stopka strony -->
    @include('shared.footer')

    <!-- Opcjonalne skrypty JavaScript -->
    <!-- Najpierw jQuery, potem Popper.js, następnie Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Wtyczka FontAwesome -->
    <script src="https://kit.fontawesome.com/6b3d427563.js" crossorigin="anonymous"></script>
  </body>
</html>
