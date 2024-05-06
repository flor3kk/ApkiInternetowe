@include('shared.html')

@include('shared.head', ['pageTitle' => 'Koszyk'])

<body>
    @include('shared.navbar')

    <div class="container mb-5">

        <div class="row mb-4 text-center">
            <h1>Koszyk</h1>
        </div>
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Produkt</th>
                    <th style="width:10%">Cena</th>
                    <th style="width:8%">Waga</th>
                    <th style="width:22%" class="text-center">Lącznie</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0 @endphp
                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp
                        <tr data-id="{{ $id }}">
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">{{ $details['name'] }}</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">{{ $details['price'] }} zł</td>
                            <td data-th="Quantity">
                                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" />
                            </td>
                            <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }} zł</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Usun</button>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-right"><h3><strong>Łącznie {{ $total }} zł</strong></h3></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right">
                        <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Kontynuuj zakupy</a>
                        <button class="btn btn-success"><i class="fa fa-money"></i> Kup</button>
                    </td>
                </tr>
            </tfoot>
        </table>

@include('shared.footer')



<!-- Opcjonalny JavaScript -->
<!-- Najpierw jQuery, potem Popper.js, następnie Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- Wtyczka FontAwesome -->
<script src="https://kit.fontawesome.com/6b3d427563.js" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        // Function to handle removing an item from the cart
        $('.cart_remove').click(function(){
            var id = $(this).closest('tr').data('id');
            $.ajax({
                url: '{{ route("remove_from_cart") }}',
                method: 'DELETE',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data){
                    location.reload(); // Reload the page after removing item
                }
            });
        });

        // Function to handle updating the quantity of an item in the cart
        $('.cart_update').change(function(){
            var id = $(this).closest('tr').data('id');
            var quantity = $(this).val();
            $.ajax({
                url: '{{ route("update_cart") }}',
                method: 'PATCH',
                data: {
                    id: id,
                    quantity: quantity,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data){
                    location.reload(); // Reload the page after updating quantity
                }
            });
        });
    });
</script>


</body>

</html>
