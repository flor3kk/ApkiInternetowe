@include('shared.html')

@include('shared.head')
  <body>

@include('shared.navbar')

    <!-- Treść strony -->
    <div id="wrap">
      <div id="main" class="container clear-top">

        <div class="row">
          <div class="col-12" id="about">
              <img src="img/slodycze.jpg" class="img-fluid shadow" alt="Słodycze">
                <h5 class="display-4">O Nas</h5><hr>
                <p class="card-text">CandyShop przypomina swoim gościom nowoczesną wersję fabryki Willy'ego Wonki. Od chwili wejścia,
                  jego instalacje pop artu - takie jak popularny ogromny li-li-hip, słodkie słupki, półki pełne czekolady i schody pełne
                  bombonów - stanowią apogeum "handlu detalicznego". Ultra-sensoryczne doświadczenie jest wzbogacone przyjemnymi zapachami,
                  linią czasu słodyczy i mnóstwem piosenek i reklam o słodyczach, które nagradzają klientów nie tylko wysokim poziomem cukru,
                  ale także słodkim, trwałym euforyzmem. <br><br>

                  W CandyShopie znajduje się ponad 7000 produktów cukierniczych, które mogą się poszczycić największym, niezrównanym wyborem cukierków
                  i upominków związanych ze słodyczami z całego świata. Jest to muzeum słodyczy, gdzie każdy kawałek jest traktowany dosłownie jak cenny artefakt.
                  Cudowne wystawy podkreślają jaskrawe kolory, tekstury, atrakcyjną grafikę, kreatywne opakowania, piękne wzory i rozpoznawalne kształty słodyczy.
                  CandyShop stanowi bazę dla nowych innowacji cukierków i unikalnych produktów. Są tu produkty z baru CandyShop (marki własnej), szeroki asortyment
                  rzadkich amerykańskich ulubieńców nostalgi, przedmioty nowości, importowane specjalne słodycze i świetne smakołyki na każdą okazję.</p>
              </div>
            </div>
            <HR>

      </div>
    </div>


    @include('shared.footer')

    <!-- Opcjonalne JavaScript -->
    <!-- Najpierw jQuery, potem Popper.js, potem Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Wtyczka FontAwesome -->
    <script src="https://kit.fontawesome.com/6b3d427563.js" crossorigin="anonymous"></script>
  </body>
</html>
