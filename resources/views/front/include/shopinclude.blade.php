    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                @foreach ($products as $product)
                    <div class="col-md-3 col-sm-6" height="400" width="250">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="{{ asset('images/' . $product->image) }}" alt="">
                            </div>
                            <h2><a href=""></a>{{ $product->details }}</h2>
                            <div class="product-carousel-price">
                                <ins>${{ $product->price }}</ins>
                            </div>
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70"
                                    rel="nofollow" href="#">Add to cart</a>

                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70"
                                    rel="nofollow" href="{{ route('single.product', $product->id) }}">View</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
