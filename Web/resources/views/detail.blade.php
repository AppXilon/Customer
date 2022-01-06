@extends('master')
@section('content')

<!-- Page Header Start -->
<div class="page-header mb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Product Details</h2>
            </div>
            <div class="col-12">
                <a href="index">Home</a>
                <a href="/detail">Product Details</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Single Post Start-->
<div class="single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-content">
                    <img src="asset/img/menu-friedrice-big.png" />
                    <h2>{{$detail['P_Name']}}</h2>
                    @if($detail['P_Status'] == 1)
                        <label class="badge bg-success">In Stock</label>
                    @else
                        <label class="badge bg-danger">Out of Stock</label>
                    @endif
                    <p>
                    {{$detail['L_Description']}}
                    </p>

                    @if($detail['P_Status'] == 1)
                        <div class="menu-cart">
                        <form action="/add_to_cart" method="POST">
                            @csrf
                            <input type="hidden" name="Pro_Id" value="{{$detail['P_Id']}}">
                            <button class="btn btn-primary"><i class="fa fa-shopping-cart"></i></button>
                        </form>
                    </div>
                    @else
                        <div class="menu-cart">
                            <input type="hidden" name="Pro_Id" value="{{$detail['P_Id']}}">
                            <button disabled class="btn btn-primary"><i class="fa fa-shopping-cart"></i></button>
                        </div>
                    @endif
                    
                </div>
                <div class="single-tags">
                    <a href="">Taf Bistro</a>
                    <a href="">Burger</a>
                    <a href="">Food</a>
                    <a href="">Delivery</a>
                    <a href="">Dine In</a>
                    <a href="">Take Away</a>
                    <a href="">Booking</a>
                </div>
                <div class="single-related">
                    <h2>Related Products</h2>
                    <div class="owl-carousel related-slider">
                        <div class="post-item">
                            <div class="post-img">
                                <img src="asset/img/post-1.jpg" />
                            </div>
                            <div class="post-text">
                                <a href="">Chinese Fried Rice</a>
                                <div class="post-meta">
                                    <p><a href="">Best to try!!</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="post-item">
                            <div class="post-img">
                                <img src="asset/img/post-2.jpg" />
                            </div>
                            <div class="post-text">
                                <a href="">Pineapple Fried Rice</a>
                                <div class="post-meta">
                                    <p><a href="">It will complete the taste</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-comment">
                    <h2>Reviews</h2>
                    <ul class="comment-list">
                        <li class="comment-item">
                            <div class="comment-body">
                                <div class="comment-img">
                                    <img src="asset/img/user.png" />
                                </div>
                                <div class="comment-text">
                                    <h3><a href="">Nurul Adila</a></h3>
                                    <span>16 Mei 2023 at 12:00pm</span>
                                    <p>
                                        You guys should try this kampung fried rice! I almost buy it everyday. 
                                    </p>
                                    <a class="btn" href="">Reply</a>
                                </div>
                            </div>
                        </li>
                        <li class="comment-item">
                            <div class="comment-body">
                                <div class="comment-img">
                                    <img src="asset/img/user1.png" />
                                </div>
                                <div class="comment-text">
                                    <h3><a href="">Ammar Hafizi</a></h3>
                                    <p><span>01 Jan 2023 at 5:00pm</span></p>
                                    <p>
                                        The food still hot even I used delivery service! Good!
                                    </p>
                                    <a class="btn" href="">Reply</a>
                                </div>
                            </div>
                            <ul class="comment-child">
                                <li class="comment-item">
                                    <div class="comment-body">
                                        <div class="comment-img">
                                            <img src="asset/img/user3.png" />
                                        </div>
                                        <div class="comment-text">
                                            <h3><a href="">Ashraf Hakim</a></h3>
                                            <p><span>7 April 2023 at 10:00am</span></p>
                                            <p>
                                                Recommended to try! Very delicious!
                                            </p>
                                            <a class="btn" href="">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="comment-form">
                    <h2>Leave a comment</h2>
                    <form>
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="url" class="form-control" id="website">
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Post Comment" class="btn custom-btn">
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <div class="search-widget">
                            <form>
                                <input class="form-control" type="text" placeholder="Search Keyword">
                                <button class="btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="sidebar-widget">
                        <h2 class="widget-title">Product Recommendations</h2>
                        <div class="recent-post">
                            <div class="post-item">
                                <div class="post-img">
                                    <img src="asset/img/post-1.jpg" />
                                </div>
                                <div class="post-text">
                                    <a href="">Wagyu Beef burger</a>
                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-img">
                                    <img src="asset/img/post-2.jpg" />
                                </div>
                                <div class="post-text">
                                    <a href="">Fruit Salad</a>
                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-img">
                                    <img src="asset/img/post-3.jpg" />
                                </div>
                                <div class="post-text">
                                    <a href="">Orange Juice</a>
                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-img">
                                    <img src="asset/img/post-4.jpg" />
                                </div>
                                <div class="post-text">
                                    <a href="">Lemon Juice</a>
                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-img">
                                    <img src="asset/img/post-5.jpg" />
                                </div>
                                <div class="post-text">
                                    <a href="">Kaya Toast Bread</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget">
                        <div class="image-widget">
                            <a href="#"><img src="asset/img/blog-2.jpg" alt="Image"></a>
                        </div>
                    </div>

                    <div class="sidebar-widget">
                        <h2 class="widget-title">Categories</h2>
                        <div class="category-widget">
                            <ul>
                                <li><a href="">Restaurant</a><span>(98)</span></li>
                                <li><a href="">Groceries</a><span>(87)</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Post End-->   
@endsection