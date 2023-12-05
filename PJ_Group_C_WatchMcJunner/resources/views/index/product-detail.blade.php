@extends('index.header')

@section('content')

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <!-- Product main img -->
        <div class="col-md-5 col-md-push-2">
            <div id="product-main-img">
                <div class="product-preview">
                    <img src="/img/{{ $products['image'] }}" alt="">
                </div>
            </div>
        </div>
        <!-- /Product main img -->
        <!-- Product thumb imgs -->

        <div class="col-md-2  col-md-pull-5">

            <div id="product-imgs">
                <div class="product-preview">
                    <img src="./img/" alt="">
                </div>
            </div>
        </div>
        <!-- /Product thumb imgs -->

        <!-- Product details -->

        <div class="col-md-5">

            <div class="product-details">
                <h2 class="product-name">{{ $products['name'] }}</h2>
                <div>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a class="review-link" href="#">10 Review(s) | Add your review</a>
                </div>
                <div>
                    <h3 class="product-price">{{ number_format($products['price']) }} VNĐ</h3>
                    <span class="product-available">In Stock</span>
                </div>
                <div class="product-options">
                    <label>
                        Color
                        <select class="input-select">
                            <option selected value="0">None</option>
                            <option value="1">Red</option>
                            <option value="2">Blue</option>
                            <option value="3">Gray</option>
                            <option value="4">White</option>
                        </select>
                    </label>
                </div>
                <div class="add-to-cart">
                    <button class="add-to-cart-btn" type="submit" name="add_to_cart"><a href="{{ route('add_to_cart', $products->product_id) }}" target="_self"> add to cart</a><i class="fa fa-shopping-cart"></i></button>
                </div>

                <ul class="product-btns">
                    <li><a href="{{ route('add_to_wish', $products->product_id) }}"><i class="fa fa-heart-o"></i> add to wishlist</li>
                    <br>
                    <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
                </ul>

                <!-- <ul class="product-links">
                    <li>Category:</li>
                    <li><a href="#"></a></li>
                </ul>
                <ul class="product-links">
                    <li>Share:</li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul> -->
            </div>

        </div>

        <!-- /Product details -->

        <!-- Product tab -->
        <div class="col-md-12">
            <div id="product-tab">
                <!-- product tab nav -->
                <ul class="tab-nav">
                    <li class="active"><a data-toggle="tab" href="#tab1">Mô tả</a></li>
                    <li><a data-toggle="tab" href="#tab2">Chi tiết</a></li>
                    <li><a data-toggle="tab" href="#tab3">Bình luận</a></li>
                </ul>
                <!-- /product tab nav -->

                <!-- product tab content -->

                <div class="tab-content">
                    <!-- tab1  -->
                    <div id="tab1" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-md-12">
                                <p><strong>Description: </strong>{{ $products['description'] }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- /tab1  -->

                    <!-- tab2  -->
                    <div id="tab2" class="tab-pane fade in">
                        <div class="row">
                            <div class="col-md-12">
                                <p><strong>Tên sản phẩm: </strong>{{ $products['name'] }}</p>
                                <p><strong>Giá: </strong>{{ number_format($products['price']) }} VNĐ</p>
                                <p><strong>Loại: </strong>{{ $products['type'] }}</p>
                                <p><strong>Hãng sản xuất: </strong>{{ $products['brand'] }}</p>
                                <p><strong>Trạng thái: </strong>{{ $products['status'] }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- /tab2  -->

                    <!-- tab3  -->
                    <div id="tab3" class="tab-pane fade in">
                        <div class="row">
                            <!-- Rating -->
                            <div class="col-md-3">
                                <div id="rating">
                                    <div class="rating-avg">
                                        <span>4.5</span>
                                        <div class="rating-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <ul class="rating">
                                        <li>
                                            <div class="rating-stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="rating-progress">
                                                <div style="width: 80%;"></div>
                                            </div>
                                            <span class="sum">3</span>
                                        </li>
                                        <li>
                                            <div class="rating-stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="rating-progress">
                                                <div style="width: 60%;"></div>
                                            </div>
                                            <span class="sum">2</span>
                                        </li>
                                        <li>
                                            <div class="rating-stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="rating-progress">
                                                <div></div>
                                            </div>
                                            <span class="sum">0</span>
                                        </li>
                                        <li>
                                            <div class="rating-stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="rating-progress">
                                                <div></div>
                                            </div>
                                            <span class="sum">0</span>
                                        </li>
                                        <li>
                                            <div class="rating-stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="rating-progress">
                                                <div></div>
                                            </div>
                                            <span class="sum">0</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Rating -->

                            <!-- Reviews -->
                            <div class="col-md-6">
                                <div id="reviews">
                                    <ul class="reviews">
                                        <li>
                                            <div class="review-heading">
                                                <h5 class="name">Luan</h5>
                                                <p class="date">27 DEC 2023, 8:0 PM</p>
                                                <!-- <div class="review-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o empty"></i>
                                                </div> -->
                                            </div>
                                            <div class="review-body">
                                                <p></p>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="reviews-pagination">
                                        <li class="active">1</li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Reviews -->

                            <!-- Review Form -->
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="col-md-3">
                                <div id="review-form">
                                    <form class="review-form" action="{{ route('generate_comment') }}" method="POST">
                                        @csrf
                                        <input name="name" class="input" type="text" placeholder="Your Lastname">
                                        <input name="email" class="input" type="email" placeholder="Your Email">
                                        <textarea name="comment" class="input" placeholder="Your Review"></textarea>

                                        <!-- <div class="input-rating">
                                            <span>Your Rating: </span>
                                            <div class="stars">
                                                <input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
                                                <input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
                                                <input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
                                                <input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
                                                <input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
                                            </div>
                                        </div> -->
                                        <button class="primary-btn">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /Review Form -->
                        </div>
                    </div>
                    <!-- /tab3  -->
                </div>
                <!-- /product tab content  -->
            </div>
        </div>
        <!-- /product tab -->
    </div>
    <!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /SECTION -->

@endsection
