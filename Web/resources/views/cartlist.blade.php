@extends('master')
@section('content')

<!-- Cart Start -->
<div class="cart">
    <div class="container">
        <div class="section-header text-center">
            <p></p>
            <p></p>
            <h2>Product Cart</h2>
        </div>
        <div class="basket">
            <div class="basket-module">
                <label for="promo-code">Enter a promotional code</label>
                <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
                <button class="promo-code-cta">Apply</button>
            </div>
            <div class="basket-labels">
                <ul>
                <li class="item item-heading">Item</li>
                <li class="price"> Price</li>
                <li class="quantity">Quantity</li>
                <li class="subtotal">Subtotal</li>
                </ul>
            </div>
            @if($product->count()>0)
                @php $totalPrice = 0; @endphp
                @foreach($product as $item)
                <div class="basket-product">
                    <div class="item">
                        <div class="product-image">
                            <img src="asset/img/menu-friedrice-big.png" alt="Placholder Image 2" class="product-frame">
                        </div>
                        <div class="product-details">
                            <a href="detail/{{$item->id}}">
                            <h4><strong>{{$item->P_Name}}</strong></h4></a>
                            <p><strong>{{$item->S_Description}}</strong></p>
                            <p>Notes: </p>
                        </div>
                    </div>
                    <div class="price">{{ number_format((float) $item->P_Price, 2, '.', '') }}
                    </div>
                    @if($item->P_Status == 1)
                        <div class="quantity input-group">
                            <input type="button" value="-" class="button-minus border rounded-circle icon-shape icon-sm mx-1 changeQuantity" data-field="quantity">
                            <input type="number" step="1" max="10" value="{{$item->Pro_Qty}}"  name="quantity" class="quantity-field border-0 text-center w-25" style="width:40px">
                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm changeQuantity" data-field="quantity">
                        </div>
                        <div class="subtotal">{{ number_format((float) $item->P_Price, 2, '.', '') }}
                        </div>
                        @php $totalPrice += $item->P_Price * $item->Pro_Qty; @endphp
                    @else
                        <h5>Out of Stock</h5>
                    @endif
                    <div class="remove">
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
                    </div>
                </div>
                    @endforeach

                <div class="pricing">
                    <div class="basket-labels">
                        <ul>
                        <li class="quantity">Subtotal</li>
                        <li class="quantity"> Promo Apply </li>
                        <li class="quantity">Total Price</li>
                        </ul>
                    </div>
                    <div class="price">{{ number_format((float) $totalPrice, 2, '.', '') }}
                        </div>
                    <div class="price">
                        </div>
                    <div class="price">{{ number_format((float) $totalPrice, 2, '.', '') }}
                        </div>
                    <div class="checkout-button">
                        <a href="/" class="btn btn-warning">Continue Shopping</a>
                        <a href="checkout_shipping" class="btn btn-warning">Proceed to Checkout</a>
                    </div>
                </div>
            @else
                <div class="basket-product">
                    <div class="item">
                        <div class="product-details">
                            <h4><strong>Cart is empty</strong></h4></a>
                        </div>
                    </div>
                <div class="checkout-button">
                    <a href="/" class="btn btn-warning">Continue Shopping</a>
                </div>
            @endif
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->
@endsection

@section('scripts')
<script>
function incrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal) && currentVal< 10) {
            parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(1);
        }
    }

function decrementValue(e) {
    e.preventDefault();
    var fieldName = $(e.target).data('field');
    var parent = $(e.target).closest('div');
    var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

    if (!isNaN(currentVal) && currentVal > 1) {
        parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
    } else {
        parent.find('input[name=' + fieldName + ']').val(1);
    }
}

$('.input-group').on('click', '.button-plus', function(e) {
    incrementValue(e);
});

$('.input-group').on('click', '.button-minus', function(e) {
    decrementValue(e);
});


</script>
@endsection

    