@include('shared.html')

@include('shared.head')
  <body>

    @include('shared.navbar')

    <!-- Treść strony -->
    <div id="wrap">
      <div id="main" class="container-fluid clear-top">

        <div style="width: 80% !important; margin: auto; margin-bottom: 5px;">
          <div class="display-4">Galeria</div><hr style="height: 1px;">
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/gallery_shop1.jpg" class="d-block w-100 carousel-img" alt="Drzewo z lizaków">
              <div class="carousel-caption d-none d-md-block">
                <h5>Drzewo z lizaków</h5>
                <p>Drzewo z lizaków to główna atrakcja naszego sklepu. Koniecznie musisz to zobaczyć na własne oczy!</p>
              </div>
            </div>

            <div class="carousel-item">
                <img src="img/gallery_shop2.jpg" class="d-block w-100 carousel-img" alt="zewnatrz">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Zewnatrz</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/gallery_shop3.jpg" class="d-block w-100 carousel-img" alt="Alejka">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Alejka</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/gallery_shop4.jpg" class="d-block w-100 carousel-img" alt="Waty cukrowe">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Waty cukrowe</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/gallery_shop5.jpg" class="d-block w-100 carousel-img" alt="Strefa relaksu">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Strefa relaksu</h5>
                </div>
              </div>

              <div class="carousel-item">
                <img src="img/gallery_shop6.jpg" class="d-block w-100 carousel-img">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>

              <div class="carousel-item">
                <img src="img/gallery_shop7.jpg" class="d-block w-100 carousel-img">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>

              <div class="carousel-item">
                <img src="img/gallery_shop8.jpg" class="d-block w-100 carousel-img" alt="bar">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Bar</h5>
                </div>
              </div>

              <div class="carousel-item">
                <img src="img/gallery_shop9.jpg" class="d-block w-100 carousel-img">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>

              <div class="carousel-item">
                <img src="img/gallery_shop10.jpg" class="d-block w-100 carousel-img" alt="Strefa czekolady">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Strefa czekolady</h5>
                </div>
              </div>

              <div class="carousel-item">
                <img src="img/gallery_shop11.jpg" class="d-block w-100 carousel-img">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>

            <div class="carousel-item">
                <img src="img/gallery_shop12.jpg" class="d-block w-100 carousel-img" alt="a">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Centrum</h5>
                </div>
              </div>


          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
    </div>

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
