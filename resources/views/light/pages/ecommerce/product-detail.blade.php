@extends('light.layouts.app3')
@section('title')
    Product Detail - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Product Details</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">eCommerce</a>
                        </li>
                        <li class="breadcrumb-item active">Product Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="block-header">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <ul class="breadcrumb breadcrumb-style ">
                                        <li class="bcrumb-1">
                                            <a href="../../index-2.html">Home</a>
                                        </li>
                                        <li class="bcrumb-2">
                                            <a href="#" onClick="return false;">Furniture</a>
                                        </li>
                                        <li class="bcrumb-3">
                                            <a href="#" onClick="return false;">Chair</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="product-store">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <div class="product-gallery">
                                            <div class="product-gallery-thumbnails">
                                                <ol class="thumbnails-list list-unstyled">
                                                    <li><img src="../../assets/images/products/p2.jpg" alt=""></li>
                                                    <li><img src="../../assets/images/products/p3.jpg" alt=""></li>
                                                    <li><img src="../../assets/images/products/p4.jpg" alt=""></li>
                                                    <li><img src="../../assets/images/products/p5.jpg" alt=""></li>
                                                    <li><img src="../../assets/images/products/p6.jpg" alt=""></li>
                                                </ol>
                                            </div>
                                            <div class="product-gallery-featured">
                                                <img src="../../assets/images/products/p1.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <div class="product-payment-details">
                                            <p class="last-sold text-muted"><small>145 items sold</small></p>
                                            <h4 class="product-title mb-2">Wooden Mettalic Chair In Black
                                                Leatherette </h4>
                                            <h2 class="product-price display-4">$70.00</h2>
                                            <p><i class="fa fa-credit-card text-success"></i> <strong>No cost EMI
                                                    ₹19,165/month</strong></p>
                                            <p><i class="fa fa-swatchbook col-cyan"></i> <strong>Bank Offer10%
                                                    Instant Discount on Mastercard for First Online
                                                    PaymentT&nbsp;C</strong></p>
                                            <p><i class="fa fa-bookmark col-red"></i> <strong>Partner OfferBuy this
                                                    Laptop &nbsp; get 2 Yrs Extended Warranty @ ₹2999</strong></p>
                                            <p><i class="fa fa-credit-card text-success"></i> <strong>No cost EMI
                                                    ₹19,165/month</strong></p>
                                            <label for="quant">Quantity</label>
                                            <input type="number" name="quantity" min="1" id="quant"
                                                   class="form-control mb-5 input-lg"
                                                   placeholder="Choose the quantity">
                                            <button type="button" class="btn btn-warning waves-effect">
                                                <i class="fas fa-cart-plus"></i>
                                                <span>ADD TO CART</span>
                                            </button>
                                            <button type="button" class="btn btn-info waves-effect">
                                                <i class="fas fa-bolt"></i>
                                                <span>BUY NOW</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <li role="presentation">
                                <a href="#home" data-toggle="tab" class="active show">Features</a>
                            </li>
                            <li role="presentation">
                                <a href="#profile" data-toggle="tab">Description</a>
                            </li>
                            <li role="presentation">
                                <a href="#messages" data-toggle="tab">FAQ</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="home">
                                <div class="product-description">
                                    <h2 class="mb-5">Features</h2>
                                    <dl class="row mb-5">
                                        <dt class="col-sm-3">Brand</dt>
                                        <dd class="col-sm-9">XYZ</dd>
                                        <dt class="col-sm-3">Dimensions</dt>
                                        <dd class="col-sm-9">H 32 x W 18 x D 19; Seating Height-18</dd>
                                        <dt class="col-sm-3">Weight</dt>
                                        <dd class="col-sm-9">5 Kgs </dd>
                                        <dt class="col-sm-3">Warranty</dt>
                                        <dd class="col-sm-9">24 Months' Warranty</dd>
                                        <dt class="col-sm-3">Material</dt>
                                        <dd class="col-sm-9">Metal</dd>
                                        <dt class="col-sm-3">Height</dt>
                                        <dd class="col-sm-9">32.0 inches</dd>
                                        <dt class="col-sm-3">Width</dt>
                                        <dd class="col-sm-9">18.0 inches</dd>
                                        <dt class="col-sm-3">Depth</dt>
                                        <dd class="col-sm-9">19.0 inches</dd>
                                    </dl>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <div class="product-description">
                                    <h2 class="mb-5">Description</h2>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Odit
                                        nemo reiciendis quisquam a quis delectus
                                        consectetur ipsa
                                        eligendi aliquam earum in vitae voluptate ratione
                                        fugiat
                                        similique nostrum debitis dolor, ipsam quo officiis
                                        quas
                                        necessitatibus? Magnam eveniet iure, eligendi est
                                        ullam
                                        consectetur repellat quis doloremque ad
                                        perspiciatis assumenda
                                        ducimus distinctio quaerat sit repudiandae illo
                                        praesentium
                                        modi dolor. Veritatis aperiam, minima natus
                                        assumenda
                                        ipsum voluptatem reprehenderit? Possimus nobis,
                                        voluptate,
                                        blanditiis, temporibus ad nostrum corrupti quos
                                        corporis
                                        voluptas tempora aliquid magnam quia voluptatem
                                        rerum odit
                                        fugiat facere necessitatibus adipisci sunt.
                                        Veritatis
                                        architecto,
                                        perferendis labore sit nobis eaque perspiciatis et
                                        iusto, in
                                        doloribus est!</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Natus
                                        vel reiciendis voluptatibus assumenda tempora vitae
                                        aut
                                        adipisci harum, corporis in id perferendis quia
                                        repellat
                                        reprehenderit temporibus aspernatur ab ullam magni
                                        error
                                        consectetur, facilis inventore ipsum, veniam
                                        voluptas. Error
                                        laboriosam atque quisquam facere esse repellat
                                        consectetur quos
                                        eum, quaerat blanditiis saepe?</p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="messages">
                                <b>Questions and Answers</b>
                                <div class="product-faq mb-5">
                                    <p class="text-muted">What information do you need?</p>
                                </div>
                                <div class="product-comments">
                                    <h5 class="mb-2">Or ask to David's Store</h5>
                                    <form class="form-inline mb-5">
                                            <textarea cols="50" rows="2" class="form-control mr-4"
                                                      placeholder="write a question"></textarea><button
                                                class="btn btn-lg btn-primary">Ask</button>
                                    </form>
                                    <h5 class="mb-5">Lastest Questions</h5>
                                    <ol class="list-unstyled last-questions-list">
                                        <li><i class="fa fa-comment"></i> <span>Hello
                                                    david, can i pay
                                                    with credit card?</span></li>
                                        <li><i class="fa fa-comment"></i> <span>can i send
                                                    it to
                                                    another address?</span></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-body ">
                        <div class="product-store">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <h3 class="mb-5">More from John's Store</h3>
                                    <div class="recommended-items card-deck">
                                        <div class="card">
                                            <img src="../../assets/images/products/p2.jpg" alt=""
                                                 class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title">U$ 55.00</h5>
                                                <span class="text-muted"><small>Wooden Mettalic Chair</small></span>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="../../assets/images/products/p3.jpg" alt=""
                                                 class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title">U$ 55.00</h5>
                                                <span class="text-muted"><small>Wooden Mettalic Chair</small></span>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="../../assets/images/products/p4.jpg" alt=""
                                                 class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title">U$ 55.00</h5>
                                                <span class="text-muted"><small>Wooden Mettalic Chair</small></span>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="../../assets/images/products/p5.jpg" alt=""
                                                 class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title">U$ 55.00</h5>
                                                <span class="text-muted"><small>Wooden Mettalic Chair</small></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection