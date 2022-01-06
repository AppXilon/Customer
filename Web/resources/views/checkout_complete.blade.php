@extends('master')
@section('content')

<!-- Shipping Address Start -->
<div class="checkout">
    <div class="container">
        <div class="section-header text-center">
            <h2>Checkout Item</h2>
        </div>
        <div class="process-checkout">
            <ul class="progressbar">
                <li class="active">Shipping Address </li>
                <li class="active">Summary</li>
                <li>Complete</li>
            </ul>
        </div>

        <ol class="progtrckr" data-progtrckr-steps="5">
            <li class="progtrckr-done">Order Recieve</li><!--
            --><li class="progtrckr-todo">Preparing</li><!--
            --><li class="progtrckr-todo">Ready</li><!--
            --><li class="progtrckr-todo">Complete</li><!--
            --><li class="progtrckr-todo">Delivered</li>
        </ol>

    </div>
</div>

@endsection
