@extends('master')
@section('content')

<!-- Customer Order History Detail Start -->

  <div class="container py-5 h-200">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-10 col-xl-8">
        <div class="card" style="border-radius: 10px;">
          <div class="card-header px-4 py-5">
            <h5 class="text-muted mb-0">Order Details by <span style="color: #00224e;">{{$order->O_Name}}</span>!</h5>
          </div>
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <p class="lead fw-normal mb-0" style="color: #fbaf32;">Product</p>
              <p class="small text-muted mb-0">Order Date: {{$order->created_at}}</p>
            </div>
            <div class="card shadow-0 border mb-4">
              <div class="card-body">
                <div class="row">
                    @foreach ($order->orderitems as $item)
                  <div class="col-md-3">
                    <img src="asset/img/menu-chichop.png">
                  </div>
                  <div class="col-md-3 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0">{{$item->products->P_Name}}</p>
                  </div>
                  <div class="col-md-3 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small">Quantity: {{$item->Order_Quantity}}</p>
                  </div>
                  <div class="col-md-3 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small">RM{{$item->Order_Price}}</p>
                  </div>
                    @endforeach
                </div>
                <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
              </div>
            </div>

            <div class="d-flex justify-content-between pt-2">
              <p class="fw-bold mb-0">Order Details</p>
              <p class="text-muted mb-0"><span class="fw-bold me-4">Total:</span> RM{{$order->O_Total_Price}}</p>
            </div>

            <div class="d-flex justify-content-between">
              <p class="text-muted mb-0">Email Address: {{$order->O_Email}}</p>
            </div>

            <div class="d-flex justify-content-between pt-2">
              <p class="text-muted mb-0">Address: {{$order->O_Street_1}}</p>
              <p class="text-muted mb-0"><span class="fw-bold me-4">Discount:</span> RM0.00</p>
            </div>

            <div class="d-flex justify-content-between">
              <p class="text-muted mb-0">Contact No: {{$order->O_Phone}}</p>
            </div>

            <div class="d-flex justify-content-between mb-5">
              <p class="text-muted mb-0">Payment Method: {{$order->O_Payment}}</p>
              <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges:</span> Free</p>
            </div>
          </div>
          <div class="card-footer border-0 px-4 py-5" style="background-color: #fbaf32; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
            <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total paid: <span class="h2 mb-0 ms-2">RM{{$order->O_Total_Price}}</span></h5>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
