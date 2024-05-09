@extends('light.layouts.app3')
@section('title')
    Product List - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Contact List</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Apps</a>
                        </li>
                        <li class="breadcrumb-item active">Contact List</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example contact_list">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>QTY</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="table-img">
                                        <img src="../../assets/images/products/p-13.jpg" alt="">
                                    </td>
                                    <td>Laptop with touchs screen</td>
                                    <td>Electronics</td>
                                    <td>$23</td>
                                    <td>12</td>
                                    <td>
                                        <span class="label l-bg-purple shadow-style">In Stock</span>
                                    </td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="../../assets/images/products/p-14.jpg" alt="">
                                    </td>
                                    <td>xyz 25 L Laptop Backpack</td>
                                    <td>Bags</td>
                                    <td>$15</td>
                                    <td>123</td>
                                    <td>
                                        <span class="label l-bg-purple shadow-style">In Stock</span>
                                    </td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="../../assets/images/products/p-15.jpg" alt="">
                                    </td>
                                    <td>Smart Shelter Metal Outdoor Chair</td>
                                    <td>Furniture</td>
                                    <td>$13</td>
                                    <td>0</td>
                                    <td>
                                        <span class="label l-bg-orange shadow-style">Out Of Stock</span>
                                    </td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="../../assets/images/products/p-16.jpg" alt="">
                                    </td>
                                    <td>Solid Men's Hooded Red T-Shirt</td>
                                    <td>Clothing</td>
                                    <td>$3</td>
                                    <td>45</td>
                                    <td>
                                        <span class="label l-bg-purple shadow-style">In Stock</span>
                                    </td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="../../assets/images/products/p-17.jpg" alt="">
                                    </td>
                                    <td>White Watch - For Men</td>
                                    <td>Watches</td>
                                    <td>$23</td>
                                    <td>0</td>
                                    <td>
                                        <span class="label l-bg-orange shadow-style">Out Of Stock</span>
                                    </td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="../../assets/images/products/p-18.jpg" alt="">
                                    </td>
                                    <td>People Bellies For Women (Brown)</td>
                                    <td>Footware</td>
                                    <td>$3</td>
                                    <td>6</td>
                                    <td>
                                        <span class="label l-bg-cyan shadow-style">Only 6 Left</span>
                                    </td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="../../assets/images/products/p-19.jpg" alt="">
                                    </td>
                                    <td>Mobile Phone (Space Grey, 32 GB)</td>
                                    <td>Mobile</td>
                                    <td>$423</td>
                                    <td>34</td>
                                    <td>
                                        <span class="label l-bg-purple shadow-style">In Stock</span>
                                    </td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="../../assets/images/products/p-20.jpg" alt="">
                                    </td>
                                    <td>abc 1.5 Ton 3 Star BEE Rating 2018 Window AC - White</td>
                                    <td>Electronics</td>
                                    <td>$356</td>
                                    <td>0</td>
                                    <td>
                                        <span class="label l-bg-orange shadow-style">Out Of Stock</span>
                                    </td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="../../assets/images/products/p-13.jpg" alt="">
                                    </td>
                                    <td>Laptop with touchs screen</td>
                                    <td>Electronics</td>
                                    <td>$23</td>
                                    <td>12</td>
                                    <td>
                                        <span class="label l-bg-purple shadow-style">In Stock</span>
                                    </td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="../../assets/images/products/p-14.jpg" alt="">
                                    </td>
                                    <td>xyz 25 L Laptop Backpack</td>
                                    <td>Bags</td>
                                    <td>$15</td>
                                    <td>123</td>
                                    <td>
                                        <span class="label l-bg-purple shadow-style">In Stock</span>
                                    </td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="../../assets/images/products/p-15.jpg" alt="">
                                    </td>
                                    <td>Smart Shelter Metal Outdoor Chair</td>
                                    <td>Furniture</td>
                                    <td>$13</td>
                                    <td>0</td>
                                    <td>
                                        <span class="label l-bg-orange shadow-style">Out Of Stock</span>
                                    </td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="../../assets/images/products/p-16.jpg" alt="">
                                    </td>
                                    <td>Solid Men's Hooded Red T-Shirt</td>
                                    <td>Clothing</td>
                                    <td>$3</td>
                                    <td>45</td>
                                    <td>
                                        <span class="label l-bg-purple shadow-style">In Stock</span>
                                    </td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="../../assets/images/products/p-17.jpg" alt="">
                                    </td>
                                    <td>White Watch - For Men</td>
                                    <td>Watches</td>
                                    <td>$23</td>
                                    <td>0</td>
                                    <td>
                                        <span class="label l-bg-orange shadow-style">Out Of Stock</span>
                                    </td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="../../assets/images/products/p-18.jpg" alt="">
                                    </td>
                                    <td>People Bellies For Women (Brown)</td>
                                    <td>Footware</td>
                                    <td>$3</td>
                                    <td>6</td>
                                    <td>
                                        <span class="label l-bg-cyan shadow-style">Only 6 Left</span>
                                    </td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="../../assets/images/products/p-19.jpg" alt="">
                                    </td>
                                    <td>Mobile Phone (Space Grey, 32 GB)</td>
                                    <td>Mobile</td>
                                    <td>$423</td>
                                    <td>34</td>
                                    <td>
                                        <span class="label l-bg-purple shadow-style">In Stock</span>
                                    </td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-img">
                                        <img src="../../assets/images/products/p-20.jpg" alt="">
                                    </td>
                                    <td>abc 1.5 Ton 3 Star BEE Rating 2018 Window AC - White</td>
                                    <td>Electronics</td>
                                    <td>$356</td>
                                    <td>0</td>
                                    <td>
                                        <span class="label l-bg-orange shadow-style">Out Of Stock</span>
                                    </td>
                                    <td>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">mode_edit</i>
                                        </button>
                                        <button class="btn tblActnBtn">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection