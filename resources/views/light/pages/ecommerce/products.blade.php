@extends('light.layouts.app3')
@section('title')
    Products - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Products</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">eCommerce</a>
                        </li>
                        <li class="breadcrumb-item active">Products</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <!-- Line Chart -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <a href="#">
                                            <img class="pic-1" src="../../assets/images/products/p7.jpg" alt="">
                                            <img class="pic-2" src="../../assets/images/products/p7-1.jpg" alt="">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a>
                                            </li>
                                            <li><a href="#" data-tip="Add to Wishlist"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                            <li><a href="cart.html" data-tip="Add to Cart"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                        <span class="product-new-label">Sale</span>
                                        <span class="product-discount-label">20%</span>
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star disable"></li>
                                    </ul>
                                    <div class="product-content">
                                        <h3 class="title"><a href="#">DSLR Camera</a></h3>
                                        <div class="price">$16.00
                                            <span>$20.00</span>
                                        </div>
                                        <a class="add-to-cart" href="#">+ Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <a href="#">
                                            <img class="pic-1" src="../../assets/images/products/p8.jpg" alt="">
                                            <img class="pic-2" src="../../assets/images/products/p8-1.jpg" alt="">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a>
                                            </li>
                                            <li><a href="#" data-tip="Add to Wishlist"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                            <li><a href="cart.html" data-tip="Add to Cart"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                        <span class="product-new-label">Sale</span>
                                        <span class="product-discount-label">50%</span>
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                    </ul>
                                    <div class="product-content">
                                        <h3 class="title"><a href="#">Sunglasses</a></h3>
                                        <div class="price">$5.00
                                            <span>$10.00</span>
                                        </div>
                                        <a class="add-to-cart" href="#">+ Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <a href="#">
                                            <img class="pic-1" src="../../assets/images/products/p9.jpg" alt="">
                                            <img class="pic-2" src="../../assets/images/products/p9-1.jpg" alt="">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a>
                                            </li>
                                            <li><a href="#" data-tip="Add to Wishlist"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                            <li><a href="cart.html" data-tip="Add to Cart"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                        <span class="product-new-label">Sale</span>
                                        <span class="product-discount-label">50%</span>
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                    </ul>
                                    <div class="product-content">
                                        <h3 class="title"><a href="#">Lighter</a></h3>
                                        <div class="price">$5.00
                                            <span>$10.00</span>
                                        </div>
                                        <a class="add-to-cart" href="#">+ Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <a href="#">
                                            <img class="pic-1" src="../../assets/images/products/p10.jpg" alt="">
                                            <img class="pic-2" src="../../assets/images/products/p10-1.jpg" alt="">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a>
                                            </li>
                                            <li><a href="#" data-tip="Add to Wishlist"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                            <li><a href="cart.html" data-tip="Add to Cart"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                        <span class="product-new-label">Sale</span>
                                        <span class="product-discount-label">50%</span>
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                    </ul>
                                    <div class="product-content">
                                        <h3 class="title"><a href="#">cookies</a></h3>
                                        <div class="price">$5.00
                                            <span>$10.00</span>
                                        </div>
                                        <a class="add-to-cart" href="#">+ Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <a href="#">
                                            <img class="pic-1" src="../../assets/images/products/p11.jpg" alt="">
                                            <img class="pic-2" src="../../assets/images/products/p11-1.jpg" alt="">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a>
                                            </li>
                                            <li><a href="#" data-tip="Add to Wishlist"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                            <li><a href="cart.html" data-tip="Add to Cart"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                        <span class="product-new-label">Sale</span>
                                        <span class="product-discount-label">20%</span>
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star disable"></li>
                                    </ul>
                                    <div class="product-content">
                                        <h3 class="title"><a href="#">Ice Cream</a></h3>
                                        <div class="price">$16.00
                                            <span>$20.00</span>
                                        </div>
                                        <a class="add-to-cart" href="#">+ Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <a href="#">
                                            <img class="pic-1" src="../../assets/images/products/p12.jpg" alt="">
                                            <img class="pic-2" src="../../assets/images/products/p12-1.jpg" alt="">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a>
                                            </li>
                                            <li><a href="#" data-tip="Add to Wishlist"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                            <li><a href="cart.html" data-tip="Add to Cart"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                        <span class="product-new-label">Sale</span>
                                        <span class="product-discount-label">50%</span>
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                    </ul>
                                    <div class="product-content">
                                        <h3 class="title"><a href="#">Lipstics</a></h3>
                                        <div class="price">$5.00
                                            <span>$10.00</span>
                                        </div>
                                        <a class="add-to-cart" href="#">+ Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <a href="#">
                                            <img class="pic-1" src="../../assets/images/products/p7.jpg" alt="">
                                            <img class="pic-2" src="../../assets/images/products/p7-1.jpg" alt="">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a>
                                            </li>
                                            <li><a href="#" data-tip="Add to Wishlist"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                            <li><a href="cart.html" data-tip="Add to Cart"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                        <span class="product-new-label">Sale</span>
                                        <span class="product-discount-label">50%</span>
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                    </ul>
                                    <div class="product-content">
                                        <h3 class="title"><a href="#">DSLR Camera</a></h3>
                                        <div class="price">$5.00
                                            <span>$10.00</span>
                                        </div>
                                        <a class="add-to-cart" href="#">+ Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <a href="#">
                                            <img class="pic-1" src="../../assets/images/products/p8.jpg" alt="">
                                            <img class="pic-2" src="../../assets/images/products/p8-1.jpg" alt="">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a>
                                            </li>
                                            <li><a href="#" data-tip="Add to Wishlist"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                            <li><a href="cart.html" data-tip="Add to Cart"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                        <span class="product-new-label">Sale</span>
                                        <span class="product-discount-label">50%</span>
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                    </ul>
                                    <div class="product-content">
                                        <h3 class="title"><a href="#">Sunglasses</a></h3>
                                        <div class="price">$5.00
                                            <span>$10.00</span>
                                        </div>
                                        <a class="add-to-cart" href="#">+ Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <a href="#">
                                            <img class="pic-1" src="../../assets/images/products/p7.jpg" alt="">
                                            <img class="pic-2" src="../../assets/images/products/p7-1.jpg" alt="">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a>
                                            </li>
                                            <li><a href="#" data-tip="Add to Wishlist"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                            <li><a href="cart.html" data-tip="Add to Cart"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                        <span class="product-new-label">Sale</span>
                                        <span class="product-discount-label">20%</span>
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star disable"></li>
                                    </ul>
                                    <div class="product-content">
                                        <h3 class="title"><a href="#">DSLR Camera</a></h3>
                                        <div class="price">$16.00
                                            <span>$20.00</span>
                                        </div>
                                        <a class="add-to-cart" href="#">+ Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <a href="#">
                                            <img class="pic-1" src="../../assets/images/products/p8.jpg" alt="">
                                            <img class="pic-2" src="../../assets/images/products/p8-1.jpg" alt="">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a>
                                            </li>
                                            <li><a href="#" data-tip="Add to Wishlist"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                            <li><a href="cart.html" data-tip="Add to Cart"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                        <span class="product-new-label">Sale</span>
                                        <span class="product-discount-label">50%</span>
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                    </ul>
                                    <div class="product-content">
                                        <h3 class="title"><a href="#">Sunglasses</a></h3>
                                        <div class="price">$5.00
                                            <span>$10.00</span>
                                        </div>
                                        <a class="add-to-cart" href="#">+ Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <a href="#">
                                            <img class="pic-1" src="../../assets/images/products/p9.jpg" alt="">
                                            <img class="pic-2" src="../../assets/images/products/p9-1.jpg" alt="">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a>
                                            </li>
                                            <li><a href="#" data-tip="Add to Wishlist"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                            <li><a href="cart.html" data-tip="Add to Cart"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                        <span class="product-new-label">Sale</span>
                                        <span class="product-discount-label">50%</span>
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                    </ul>
                                    <div class="product-content">
                                        <h3 class="title"><a href="#">cookies</a></h3>
                                        <div class="price">$5.00
                                            <span>$10.00</span>
                                        </div>
                                        <a class="add-to-cart" href="#">+ Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <a href="#">
                                            <img class="pic-1" src="../../assets/images/products/p10.jpg" alt="">
                                            <img class="pic-2" src="../../assets/images/products/p10-1.jpg" alt="">
                                        </a>
                                        <ul class="social">
                                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a>
                                            </li>
                                            <li><a href="#" data-tip="Add to Wishlist"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                            <li><a href="cart.html" data-tip="Add to Cart"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                        <span class="product-new-label">Sale</span>
                                        <span class="product-discount-label">50%</span>
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                    </ul>
                                    <div class="product-content">
                                        <h3 class="title"><a href="#">Lighter</a></h3>
                                        <div class="price">$5.00
                                            <span>$10.00</span>
                                        </div>
                                        <a class="add-to-cart" href="#">+ Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Line Chart -->
        </div>
    </div>
</section>
@endsection