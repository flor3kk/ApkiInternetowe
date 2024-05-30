@include('shared.html')
@include('shared.head')

<body>
    @include('shared.navbar')

    <div id="uzytkownicy" class="container mb-5" >
        <div class="row">
          <h1>Lista uzytkownikow</h1>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif


        <div class="row">
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Imie</th>
                        <th scope="col">Email</th>
                        <th scope="col">Hasło</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>
                            <form method="POST" action="{{ route('orders.deleteUser', $user->id) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Usuń"
                                       style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" />
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <th scope="row" colspan="6">Brak uzytkownikow</th>
                    </tr>
                    @endforelse
                </tbody>
            </table>
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
