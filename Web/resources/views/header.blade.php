<?php
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;
$total=0;

if (Auth::check()) {
    $total= CartController::cartItem();
}

?>

<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-light navbar-light">
    <div class="container-fluid">
        <a href="/" class="navbar-brand">App<span>Xilon</span></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="home" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Shop</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Food and Beverage</a>
                            <div class="dropdown-submenu">
                                <a href="order_type" class="dropdown-item">Taf Bistro</a>
                            </div>
                        <a href="#" class="dropdown-item">Groceries</a>
                    </div>
                </div>
                <a href="about" class="nav-item nav-link">About</a>
               
                <a href="contact.html" class="nav-item nav-link">Contact</a>

                <div class="nav-item dropdown">
                @if (Auth::check())
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu">
                        <a href="/profileDetail" class="dropdown-item">Profile</a>
                        <a href="order_history" class="dropdown-item">My Order</a> 
                            
                        <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    </div>
                
                @else
              

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                    <div class="dropdown-menu">
                        <a href="/login" class="dropdown-item">Customer Login</a>
                        <a href="/login" class="dropdown-item">Manager Login</a>
                        <a href="/register" class="dropdown-item">Register</a>
                            
                    </div>
                </div>
                
                @endif

                </div>

                <div class="search-widget">
                    <form action="/search">
                        <input class="form-control" type="text" name="query" placeholder="Search Keyword">
                        <button class="btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>  
                <div class="nav-item nav-link">
                    <a href="/cartlist">
                        <i class="fa fa-shopping-cart" style="font:size 30px"></i>
                        <span>{{$total}}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Nav Bar End -->
