@extends('index.header')

@section('content')
<div class="aside" style="padding-left: 60px;">
    <h3 class="aside-title" style="padding-left: 130px;">Kết quả tìm kiếm</h3>

</div>
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- ASIDE -->
            <div id="aside" class="col-md-3">
                <!-- aside Widget -->

                <!-- /aside Widget -->

                <!-- aside Widget -->
                <div class="aside">
                    <h3 class="aside-title">Price</h3>
                    <div class="price-filter">
                        <div id="price-slider"></div>
                        <div class="input-number price-min">
                            <input id="price-min" type="number">
                            <span class="qty-up">+</span>
                            <span class="qty-down">-</span>
                        </div>
                        <span>-</span>
                        <div class="input-number price-max">
                            <input id="price-max" type="number">
                            <span class="qty-up">+</span>
                            <span class="qty-down">-</span>
                        </div>
                    </div>
                </div>
                <!-- /aside Widget -->

                <!-- aside Widget -->
                <div class="aside">
                    <h3 class="aside-title">Brand</h3>
                    <div class="checkbox-filter">
                        <div class="th-anh">
                            <ul class="chon-th" style="list-style: none">
                                <li>
                                    <img src="../img/BU.jpg" alt="">
                                    <img src="../img/logo-seiko.jpg" alt="">
                                </li>
                                <li>
                                    <img src="../img/logo-SRWatch.jpg" alt="">
                                    <img src="../img/logo-Tissot.jpg" alt="">
                                </li>
                                <li>
                                    <img src="../img/CA.jpg" alt="">
                                    <img src="../img/CK.jpg" alt="">
                                </li>
                                <li>
                                    <img src="../img/CS.jpg" alt="">
                                    <img src="../img/CT.jpg" alt="">
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /ASIDE -->

            <!-- STORE -->

            <div id="store" class="col-md-9">
                <!-- store products -->
                <div class="row">
                    @foreach ($product as $value)
                    <!-- product -->
                    <div class="col-md-4 col-xs-6">

                        <div class="product">
                            <div class="product-img">
                                <a href="/product-detail/{{ $value->product_id }}"><img src="/img/{{ $value->image }}" style="height: 263px; width: 263px;" alt=""></a>
                            </div>
                            <div class="product-body">
                                <input type="hidden" value="{{$value->product_id}}">
                                <h3 class="product-name"><a href="/product-detail/{{ $value->product_id }}">{{ $value->name }}</a></h3>
                                <h4 class="product-price" style="margin: 0 ;">{{ number_format($value->price) }} VNĐ</h4>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-btns">
                                    <button class="add-to-wishlist"><a href="{{ route('add_to_wish', $value->product_id) }}" target="_self"><i class="fa fa-heart-o"></i></a><span class="tooltipp">add to wishlist</span></button>
                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                    <button class="quick-view"><a href="javascript:void(0)" id="show-product" data-url="{{ route('quick-view', $value->product_id) }}"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a></button>
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <button class="add-to-cart-btn" type="submit" name="add_to_cart"><a href="{{ route('add_to_cart', $value->product_id) }}" target="_self"> add to cart</a><i class="fa fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- /product -->
                    @endforeach
                </div>

                <!-- /store products -->

                <!-- store bottom filter -->
                <div class="store-filter clearfix">
                    <!-- PAGE -->
                </div>
                <!-- Modal -->
                <div class="modal fade" id="productShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Xem nhanh</h5>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <div class="modal-body">
                                @foreach ($product as $item)
                                @if (isset($item))
                                <img id="product-image" src="/img/{{ $item->image }}" alt="image" style="width:100%;max-width:300px">
                                @endif
                                @endforeach
                                <p><strong>Name:</strong> <span id="product-name"></span></p>
                                <p><strong>Price: </strong> <span id="product-price"></span></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /store bottom filter -->
            </div>

            <!-- /STORE -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->



@endsection

@section('scripts')
<!-- Modal -->
<script type="text/javascript">
    $(document).ready(function() {

        $('body').on('click', '#show-product', function() {
            var userURL = $(this).data('url');

            // var img = document.getElementById('myImg');
            // var modalImg = document.getElementById("img01");
            // img.onclick = function() {
            //     modal.style.display = "block";
            //     modalImg.src = this.src;
            // }
            $.get(userURL, function(data) {
                $('#productShowModal').modal('show');
                $('#roduct-image').attr('src', data.image);
                $('#product-name').text(data.name);
                $('#product-price').text(data.price);
            })
        });

    });
</script>
@endsection
