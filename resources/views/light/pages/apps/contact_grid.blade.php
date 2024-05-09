@extends('light.layouts.app3')
@section('title')
    Contact Grid - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Contact Grid</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Apps</a>
                        </li>
                        <li class="breadcrumb-item active">Contact Grid</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="col-xs-12 col-sm-6">
                            <h2>
                                <strong>Contact</strong> Grid</h2>
                        </div>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card border-apply">
                                    <div class="m-b-20">
                                        <div class="contact-grid">
                                            <div class="profile-header l-bg-purple-dark">
                                                <div class="user-name">Pooja Patel</div>
                                                <div class="name-center">General Manager</div>
                                            </div>
                                            <img src="../../assets/images/user/usrbig1.jpg" class="user-img" alt="">
                                            <p>
                                                A-103, shyam gokul flats, Mahatma Road
                                                <br />Mumbai
                                            </p>
                                            <div>
                                                    <span class="phone">
                                                        <i class="material-icons">phone</i>264-625-2583</span>
                                            </div>
                                            <div class="profile-userbuttons">
                                                <button type="button"
                                                        class="btn btn-info btn-border-radius waves-effect">Read
                                                    More
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-apply">
                                    <div class="m-b-20">
                                        <div class="contact-grid">
                                            <div class="profile-header bg-cyan">
                                                <div class="user-name">Smita Patil</div>
                                                <div class="name-center">Housekeeper</div>
                                            </div>
                                            <img src="../../assets/images/user/usrbig2.jpg" class="user-img" alt="">
                                            <p>
                                                45, Krishna Tower, Near Bus Stop, Satellite,
                                                <br />Ahmedabad
                                            </p>
                                            <div>
                                                    <span class="phone">
                                                        <i class="material-icons">phone</i>264-625-2583</span>
                                            </div>
                                            <div class="profile-userbuttons">
                                                <button type="button"
                                                        class="btn btn-info btn-border-radius waves-effect">Read
                                                    More
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-apply">
                                    <div class="m-b-20">
                                        <div class="contact-grid">
                                            <div class="profile-header bg-dark">
                                                <div class="user-name">John Smith</div>
                                                <div class="name-center">Cook</div>
                                            </div>
                                            <img src="../../assets/images/user/usrbig3.jpg" class="user-img" alt="">
                                            <p>
                                                456, Estern evenue, Courtage area,
                                                <br />New York
                                            </p>
                                            <div>
                                                    <span class="phone">
                                                        <i class="material-icons">phone</i>264-625-2583</span>
                                            </div>
                                            <div class="profile-userbuttons">
                                                <button type="button"
                                                        class="btn btn-info btn-border-radius waves-effect">Read
                                                    More
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card border-apply">
                                    <div class="m-b-20">
                                        <div class="contact-grid">
                                            <div class="profile-header l-bg-orange">
                                                <div class="user-name">Pooja Patel</div>
                                                <div class="name-center">General Manager</div>
                                            </div>
                                            <img src="../../assets/images/user/usrbig4.jpg" class="user-img" alt="">
                                            <p>
                                                A-103, shyam gokul flats, Mahatma Road
                                                <br />Mumbai
                                            </p>
                                            <div>
                                                    <span class="phone">
                                                        <i class="material-icons">phone</i>264-625-2583</span>
                                            </div>
                                            <div class="profile-userbuttons">
                                                <button type="button"
                                                        class="btn btn-info btn-border-radius waves-effect">Read
                                                    More
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-apply">
                                    <div class="m-b-20">
                                        <div class="contact-grid">
                                            <div class="profile-header bg-green">
                                                <div class="user-name">Smita Patil</div>
                                                <div class="name-center">Housekeeper</div>
                                            </div>
                                            <img src="../../assets/images/user/usrbig5.jpg" class="user-img" alt="">
                                            <p>
                                                45, Krishna Tower, Near Bus Stop, Satellite,
                                                <br />Ahmedabad
                                            </p>
                                            <div>
                                                    <span class="phone">
                                                        <i class="material-icons">phone</i>264-625-2583</span>
                                            </div>
                                            <div class="profile-userbuttons">
                                                <button type="button"
                                                        class="btn btn-info btn-border-radius waves-effect">Read
                                                    More
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-apply">
                                    <div class="m-b-20">
                                        <div class="contact-grid">
                                            <div class="profile-header l-bg-red">
                                                <div class="user-name">John Smith</div>
                                                <div class="name-center">Cook</div>
                                            </div>
                                            <img src="../../assets/images/user/usrbig6.jpg" class="user-img" alt="">
                                            <p>
                                                456, Estern evenue, Courtage area,
                                                <br />New York
                                            </p>
                                            <div>
                                                    <span class="phone">
                                                        <i class="material-icons">phone</i>264-625-2583</span>
                                            </div>
                                            <div class="profile-userbuttons">
                                                <button type="button"
                                                        class="btn btn-info btn-border-radius waves-effect">Read
                                                    More
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card border-apply">
                                    <div class="m-b-20">
                                        <div class="contact-grid">
                                            <div class="profile-header bg-indigo">
                                                <div class="user-name">Pooja Patel</div>
                                                <div class="name-center">General Manager</div>
                                            </div>
                                            <img src="../../assets/images/user/usrbig7.jpg" class="user-img" alt="">
                                            <p>
                                                A-103, shyam gokul flats, Mahatma Road
                                                <br />Mumbai
                                            </p>
                                            <div>
                                                    <span class="phone">
                                                        <i class="material-icons">phone</i>264-625-2583</span>
                                            </div>
                                            <div class="profile-userbuttons">
                                                <button type="button"
                                                        class="btn btn-info btn-border-radius waves-effect">Read
                                                    More
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-apply">
                                    <div class="m-b-20">
                                        <div class="contact-grid">
                                            <div class="profile-header bg-brown">
                                                <div class="user-name">Smita Patil</div>
                                                <div class="name-center">Housekeeper</div>
                                            </div>
                                            <img src="../../assets/images/user/usrbig8.jpg" class="user-img" alt="">
                                            <p>
                                                45, Krishna Tower, Near Bus Stop, Satellite,
                                                <br />Ahmedabad
                                            </p>
                                            <div>
                                                    <span class="phone">
                                                        <i class="material-icons">phone</i>264-625-2583</span>
                                            </div>
                                            <div class="profile-userbuttons">
                                                <button type="button"
                                                        class="btn btn-info btn-border-radius waves-effect">Read
                                                    More
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-apply">
                                    <div class="m-b-20">
                                        <div class="contact-grid">
                                            <div class="profile-header bg-amber">
                                                <div class="user-name">John Smith</div>
                                                <div class="name-center">Cook</div>
                                            </div>
                                            <img src="../../assets/images/user/usrbig9.jpg" class="user-img" alt="">
                                            <p>
                                                456, Estern evenue, Courtage area,
                                                <br />New York
                                            </p>
                                            <div>
                                                    <span class="phone">
                                                        <i class="material-icons">phone</i>264-625-2583</span>
                                            </div>
                                            <div class="profile-userbuttons">
                                                <button type="button"
                                                        class="btn btn-info btn-border-radius waves-effect">Read
                                                    More
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card border-apply">
                                    <div class="m-b-20">
                                        <div class="contact-grid">
                                            <div class="profile-header l-bg-purple-dark">
                                                <div class="user-name">Pooja Patel</div>
                                                <div class="name-center">General Manager</div>
                                            </div>
                                            <img src="../../assets/images/user/usrbig1.jpg" class="user-img" alt="">
                                            <p>
                                                A-103, shyam gokul flats, Mahatma Road
                                                <br />Mumbai
                                            </p>
                                            <div>
                                                    <span class="phone">
                                                        <i class="material-icons">phone</i>264-625-2583</span>
                                            </div>
                                            <div class="profile-userbuttons">
                                                <button type="button"
                                                        class="btn btn-info btn-border-radius waves-effect">Read
                                                    More
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-apply">
                                    <div class="m-b-20">
                                        <div class="contact-grid">
                                            <div class="profile-header bg-cyan">
                                                <div class="user-name">Smita Patil</div>
                                                <div class="name-center">Housekeeper</div>
                                            </div>
                                            <img src="../../assets/images/user/usrbig2.jpg" class="user-img" alt="">
                                            <p>
                                                45, Krishna Tower, Near Bus Stop, Satellite,
                                                <br />Ahmedabad
                                            </p>
                                            <div>
                                                    <span class="phone">
                                                        <i class="material-icons">phone</i>264-625-2583</span>
                                            </div>
                                            <div class="profile-userbuttons">
                                                <button type="button"
                                                        class="btn btn-info btn-border-radius waves-effect">Read
                                                    More
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-apply">
                                    <div class="m-b-20">
                                        <div class="contact-grid">
                                            <div class="profile-header bg-dark">
                                                <div class="user-name">John Smith</div>
                                                <div class="name-center">Cook</div>
                                            </div>
                                            <img src="../../assets/images/user/usrbig3.jpg" class="user-img" alt="">
                                            <p>
                                                456, Estern evenue, Courtage area,
                                                <br />New York
                                            </p>
                                            <div>
                                                    <span class="phone">
                                                        <i class="material-icons">phone</i>264-625-2583</span>
                                            </div>
                                            <div class="profile-userbuttons">
                                                <button type="button"
                                                        class="btn btn-info btn-border-radius waves-effect">Read
                                                    More
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
        </div>
    </div>
</section>
@endsection