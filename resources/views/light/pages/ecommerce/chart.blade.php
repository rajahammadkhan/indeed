@extends('light.layouts.app3')
@section('title')
    Chart - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Cart</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">eCommerce</a>
                        </li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-body ">
                        <div class="wrapper wrapper-content animated fadeInRight">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="ibox">
                                        <div class="ibox-title">
                                            <span class="pull-right">(<strong>3</strong>) items</span>
                                            <h5>Items in your cart</h5>
                                        </div>
                                        <div class="ibox-content">
                                            <div class="table-responsive">
                                                <table class="table shoping-cart-table">
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="cart-product-imitation">
                                                                <img src="../../assets/images/products/p9.jpg"
                                                                     alt="">
                                                            </div>
                                                        </td>
                                                        <td class="desc">
                                                            <h3>
                                                                <a href="#" class="text-navy">
                                                                    Premium Lighter
                                                                </a>
                                                            </h3>
                                                            <p class="small">
                                                                <strong>Color:</strong> Black
                                                            </p>
                                                            <p class="small">
                                                                <strong>Seller:</strong> XYZ Infotech
                                                            </p>
                                                            <div class="small m-b-none">
                                                                <p>Delivery by Wed, Nov 14 | Free</p>
                                                            </div>
                                                            <div class="m-t-sm">
                                                                <a href="#" class="text-muted"><i
                                                                            class="fa fa-gift"></i>
                                                                    Add gift package</a>
                                                                |
                                                                <a href="#" class="text-muted"><i
                                                                            class="fa fa-trash"></i>
                                                                    Remove item</a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $180.00
                                                            <span
                                                                    class="small text-muted text-price">$230.00</span>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                   placeholder="1">
                                                        </td>
                                                        <td>
                                                            <h4>
                                                                $180.00
                                                            </h4>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="ibox-content">
                                            <div class="table-responsive">
                                                <table class="table shoping-cart-table">
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="cart-product-imitation">
                                                                <img src="../../assets/images/products/p8.jpg"
                                                                     alt="">
                                                            </div>
                                                        </td>
                                                        <td class="desc">
                                                            <h3>
                                                                <a href="#" class="text-navy">
                                                                    Sunglasses
                                                                </a>
                                                            </h3>
                                                            <p class="small">
                                                                <strong>Color:</strong> Black
                                                            </p>
                                                            <p class="small">
                                                                <strong>Seller:</strong> XYZ Infotech
                                                            </p>
                                                            <div class="small m-b-none">
                                                                <p>Delivery by Wed, Nov 14 | Free</p>
                                                            </div>
                                                            <div class="m-t-sm">
                                                                <a href="#" class="text-muted"><i
                                                                            class="fa fa-gift"></i>
                                                                    Add gift package</a>
                                                                |
                                                                <a href="#" class="text-muted"><i
                                                                            class="fa fa-trash"></i>
                                                                    Remove item</a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $120.00
                                                            <span
                                                                    class="small text-muted text-price">$130.00</span>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                   placeholder="1">
                                                        </td>
                                                        <td>
                                                            <h4>
                                                                $120.00
                                                            </h4>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="ibox-content">
                                            <div class="table-responsive">
                                                <table class="table shoping-cart-table">
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="cart-product-imitation">
                                                                <img src="../../assets/images/products/p3.jpg"
                                                                     alt="">
                                                            </div>
                                                        </td>
                                                        <td class="desc">
                                                            <h3>
                                                                <a href="#" class="text-navy">
                                                                    Wooden Chair
                                                                </a>
                                                            </h3>
                                                            <p class="small">
                                                                <strong>Color:</strong> Black
                                                            </p>
                                                            <p class="small">
                                                                <strong>Seller:</strong> XYZ Infotech
                                                            </p>
                                                            <div class="small m-b-none">
                                                                <p>Delivery by Wed, Nov 14 | Free</p>
                                                            </div>
                                                            <div class="m-t-sm">
                                                                <a href="#" class="text-muted"><i
                                                                            class="fa fa-gift"></i>
                                                                    Add gift package</a>
                                                                |
                                                                <a href="#" class="text-muted"><i
                                                                            class="fa fa-trash"></i>
                                                                    Remove item</a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $280.00
                                                            <span
                                                                    class="small text-muted text-price">$330.00</span>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                   placeholder="1">
                                                        </td>
                                                        <td>
                                                            <h4>
                                                                $280.00
                                                            </h4>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="ibox-content">
                                            <button type="button"
                                                    class="btn btn-info btn-border-radius waves-effect pull-right"><i
                                                        class="fa fa fa-shopping-cart"></i> Checkout</button>
                                            <button type="button"
                                                    class="btn btn-danger btn-border-radius waves-effect"><i
                                                        class="fa fa-arrow-left"></i> Continue Shopping</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="ibox">
                                        <div class="ibox-title">
                                            <h5>Cart Summary</h5>
                                        </div>
                                        <div class="ibox-content">
                                                <span>
                                                    Total
                                                </span>
                                            <h2 class="font-bold">
                                                $580.00
                                            </h2>
                                            <hr>
                                            <div class="m-t-sm">
                                                <div class="pull-left m-r-10">
                                                    <button type="button"
                                                            class="btn btn-info btn-border-radius waves-effect pull-right"><i
                                                                class="fa fa fa-shopping-cart"></i> Checkout</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ibox">
                                        <div class="ibox-title">
                                            <h5>Support</h5>
                                        </div>
                                        <div class="ibox-content text-center">
                                            <h3><i class="fa fa-phone"></i> +00 123 456 789</h3>
                                            <span class="small">
                                                    Please contact with us if you have any questions. We are available
                                                    24h.
                                                </span>
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