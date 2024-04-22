@include('shared.html')

@include('shared.head')
  <body>

    @include('shared.navbar')

    <!-- Treść strony -->
    <div id="wrap">
      <div id="main" class="container-fluid clear-top">

        <!-- Mapa Google -->
        <div class="row text-center">
          <div class="col google-maps shadow">
            <iframe src="https://www.google.com/maps/d/embed?mid=1-1ZTTmuNeItfG7MPzZ8XchNFUG0&hl=pl&ehbc=2E312F"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>

        <!-- Informacje kontaktowe -->
        <div class="container">

        <section class="contactinfo">
          <div class="row text-center" style="padding-left: 0 !important; padding-right: 0 !important;">
            <div class="col-4" style="padding: 0 !important;">
              <i class="fas fa-location-arrow"></i> Adres:
              <br>Rzeszów
            </div>
            <div class="col-4" style="padding: 0 !important;">
              <i class="fas fa-phone"></i> Telefon:
              <br><a href="tel:+381606088281" class="text-danger">123-456-789</a>
            </div>
            <div class="col-4" style="padding: 0 !important;">
              <i class="far fa-envelope"></i> Email:
              <br><a href="mailto:bf125115@stud.ur.edu.pl" class="text-danger" id="cont-email">candyshopoffice@gmail.com</a>
            </div>
          </div>
        </section>

        <!-- Formularz kontaktowy -->
        <form id="form" class="contactinfo needs-validation"  novalidate>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="imie">Imię: *</label>
                <input type="text" class="form-control" id="imie" placeholder="Wpisz swoje imię..." required>
                <div class="invalid-feedback">To pole jest wymagane!</div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="nazwisko">Nazwisko: *</label>
                <input type="text" class="form-control" id="nazwisko" placeholder="Wpisz swoje nazwisko..." required>
                <div class="invalid-feedback">To pole jest wymagane!</div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email: *</label>
            <input type="email" class="form-control" id="email" placeholder="Wpisz swój adres email..." required>
            <div class="invalid-feedback">To pole jest wymagane!</div>
          </div>
          <div class="form-group">
            <label for="telefon">Nr. Telefonu:</label>
            <input type="number" class="form-control" id="telefon" placeholder="Wpisz swój numer telefonu...">
          </div>
          <div class="form-group">
            <label for="cel">Wybierz cel kontaktu: *</label>
            <select class="form-control" name="cel" required>
              <option value="" selected disabled>Wybierz cel kontaktu...</option>
              <option>Zamówienie specjalne</option>
              <option>Informacje o produkcie</option>
              <option>Problem z dostawą</option>
              <option>Kariera</option>
              <option>Inne...</option>
            </select>
          </div>
          <div class="form-group">
            <label for="wiadomosc">Wiadomość: *</label>
            <textarea class="form-control" id="wiadomosc" placeholder="Wpisz swoją wiadomość..." rows="5" required></textarea>
            <div class="invalid-feedback">To pole jest wymagane!</div>
          </div>
          <button type="submit" class="btn btn-outline-danger btn-lg btn-block"><i class="far fa-paper-plane"></i> Wyślij!</button>
        </form>
      </div>

      </div>
    </div>

    @include('shared.footer')

    <!-- Opcjonalne JavaScript -->
    <!-- Walidacja formularza -->
    <script>
      var form =  document.querySelector('.needs-validation');

      form.addEventListener('submit', function(event){
        if (form.checkValidity() === false){
          event.preventDefault();
          event.stopPropagation();
        }else{
          event.preventDefault();
          window.open('potwierdzenie.html','_self');
        }
        form.classList.add('was-validated');
      })
    </script>
    <!-- Najpierw jQuery, potem Popper.js, a następnie Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Wtyczka FontAwesome -->
    <script src="https://kit.fontawesome.com/6b3d427563.js" crossorigin="anonymous"></script>
  </body>
</html>
