@extends('master')
@section('content')

<!-- Page Header Start -->
<div class="page-header mb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Menu</h2>
            </div>
            <div class="col-12">
                <a href="/">Home</a>
                <a href="/catalogue">Menu</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Menu Start -->
<div class="menu">
    <div class="container">
        <div class="section-header text-center">
            <!-- <p>Food Menu</p> -->
            <p></p>
            <p></p>
            <h2>Delicious Food Menu</h2>
        </div>
        <div class="menu-tab product_data">
            
            <ul class="nav nav-pills justify-content-center">
                @foreach ($category as $cate)
                <li class="nav-item">
                    <a href="#category{{$cate->P_Cat_Id}}" class="nav-link active" data-toggle="pill">{{$cate->P_Cat_Name}}</a>
                </li>
                @endforeach
            </ul>
            
            <div class="tab-content">
            @foreach ($category as $P_Cat)
                <div id="category{{$P_Cat->P_Cat_Id}}" class="container tab-pane active">
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                        @php
                        $catProduct = App\Models\Product::where('Cat_Id',$P_Cat->P_Cat_Id)->orderBy('Cat_Id','DESC')->get();
                        @endphp
                        @foreach ($catProduct as $item) 
                            <div class="item {{$item->P_Id==1?'active':''}}">
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="{{asset('images/'. $item->P_Image)}}" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span><a href="detail/{{$item->P_Id}}">{{$item->P_Name}}</a></span> <strong>RM{{ number_format((float) $item->P_Price, 2, '.', '') }}</strong></h3>
                                        <br>
                                        <p>{{$item->S_Description}}</p>
                                        @if($item->P_Status == 1)
                                            <label class="badge bg-success">In Stock</label>
                                        @else
                                            <label class="badge bg-danger">Out of Stock</label>
                                        @endif
                                    </div>
                                    @if($item->P_Status == 1)
                                        <div class="menu-cart">
                                            <form action="/add_to_cart" method="POST">
                                                @csrf
                                                <input type="hidden" name="Pro_Id" value="{{$item->P_Id}}">
                                                <button class="button-cart addToCartBtn"><i class="fa fa-shopping-cart"></i></button>
                                            
                                        </div>
                                    @else
                                        <div class="menu-cart">
                                            <input type="hidden" name="Pro_Id" value="{{$item->P_Id}}">
                                            <button disabled class="button-cart addToCartBtn"><i class="fa fa-shopping-cart"></i></button>
                                        </div>
                                    @endif
                                    <div class="col-lg-2">
                                        <input type="hidden" value="{{$item->P_Id}}" class="Pro_Id">
                                        <div class="quantity input-group">
                                            <input type="button" value="-" class="button-minus border rounded-circle icon-shape icon-sm mx-1 changeQuantity" data-field="quantity">
                                            <input type="number" step="1" max="10" value="1"  name="Pro_qty" class="quantity-field border-0 text-center w-80" style="width:100px">
                                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm changeQuantity" data-field="quantity">
                                        </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-lg-5 d-none d-lg-block">
                            <img src="asset/img/menu-friedrice-big.png" alt="Image">
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->

<!-- offer section -->

<section class="offer_section layout_padding-bottom">
<div class="offer_container">
    <div class="container ">
    <div class="row">
        <div class="col-md-6  ">
        <div class="box ">
            <div class="img-box">
            <img src="asset/img/o1.jpg" alt="">
            </div>
            <div class="detail-box">
            <h5>
                Tasty Thursdays
            </h5>
            <h6>
                <span>20%</span> Off
            </h6>
            <a href="">
                Order Now <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                <g>
                    <g>
                    <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                    c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                </g>
                <g>
                    <g>
                    <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                    C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                    c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                    C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                </g>
                <g>
                    <g>
                    <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                    c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                </svg>
            </a>
            </div>
        </div>
        </div>
        <div class="col-md-6  ">
        <div class="box ">
            <div class="img-box">
            <img src="asset/img/o2.jpg" alt="">
            </div>
            <div class="detail-box">
            <h5>
                Pizza Days
            </h5>
            <h6>
                <span>15%</span> Off
            </h6>
            <a href="">
                Order Now <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                <g>
                    <g>
                    <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                    c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                </g>
                <g>
                    <g>
                    <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                    C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                    c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                    C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                </g>
                <g>
                    <g>
                    <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                    c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                </svg>
            </a>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</section>

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



