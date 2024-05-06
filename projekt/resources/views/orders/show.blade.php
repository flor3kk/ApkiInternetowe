@include('shared.html')

@include('shared.head')
  <body>

@include('shared.navbar')


<div id="zamowienia" class="container mb-5" >
    <div class="row">
      <h1>Lista zamowien dla uzytkownika: {{ Auth::user()->name }}</h1>
    </div>

    <div class="row">
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Produkt</th>
                        <th scope="col">Data</th>
                        <th scope="col">Waga</th>
                        <th scope="col">Cena</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td scope="row"><a href="{{ route('products.show', $order->product_id) }}">{{ $order->product_id }}</a></td>
                        <td>{{ $order->order_date }}</td>
                        <td>{{ $order->order_kg }} kg</td>
                        <td>{{ $order->order_price }}</td>
                        <td>
                            <form method="POST" action="{{ route('orders.destroy', $order->id) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Usuń"
                                       style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" />
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <th scope="row" colspan="6">Brak produktow.</th>
                    </tr>
                    @endforelse
                </tbody>
            </table>
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
