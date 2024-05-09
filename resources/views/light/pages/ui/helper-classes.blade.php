@extends('light.layouts.app3')
@section('title')
    Helper Classes - {{config('app.dashboard')}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Helper Classes</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index-2.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">UI</a>
                        </li>
                        <li class="breadcrumb-item active">Helper</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Text Styles -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Text</strong> Styles
                            <small>You can use classes which names are
                                <code>.font-bold, .font-italic, .font-underline, .font-line-through, .font-overline</code>
                            </small>
                        </h2>
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
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <p>
                                    <b>Normal</b>
                                </p>
                                <p>Default text</p>
                                <p class="col-pink">Text pink color</p>
                                <p class="col-cyan">Text cyan color</p>
                                <p class="col-teal">Text teal color</p>
                                <p class="col-orange">Text orange color</p>
                                <p class="col-blue-grey">Text blue grey color</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <p>
                                    <b>Bold</b>
                                </p>
                                <p class="font-bold">Default text</p>
                                <p class="font-bold col-pink">Text pink color</p>
                                <p class="font-bold col-cyan">Text cyan color</p>
                                <p class="font-bold col-teal">Text teal color</p>
                                <p class="font-bold col-orange">Text orange color</p>
                                <p class="font-bold col-blue-grey">Text blue grey color</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <p>
                                    <b>Italic</b>
                                </p>
                                <p class="font-italic">Default text</p>
                                <p class="font-italic col-pink">Text pink color</p>
                                <p class="font-italic col-cyan">Text cyan color</p>
                                <p class="font-italic col-teal">Text teal color</p>
                                <p class="font-italic col-orange">Text orange color</p>
                                <p class="font-italic col-blue-grey">Text blue grey color</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <p>
                                    <b>Underline</b>
                                </p>
                                <p class="font-underline">Default text</p>
                                <p class="font-underline col-pink">Text pink color</p>
                                <p class="font-underline col-cyan">Text cyan color</p>
                                <p class="font-underline col-teal">Text teal color</p>
                                <p class="font-underline col-orange">Text orange color</p>
                                <p class="font-underline col-blue-grey">Text blue grey color</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <p>
                                    <b>Line Through</b>
                                </p>
                                <p class="font-line-through">Default text</p>
                                <p class="font-line-through col-pink">Text pink color</p>
                                <p class="font-line-through col-cyan">Text cyan color</p>
                                <p class="font-line-through col-teal">Text teal color</p>
                                <p class="font-line-through col-orange">Text orange color</p>
                                <p class="font-line-through col-blue-grey">Text blue grey color</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <p>
                                    <b>Overline</b>
                                </p>
                                <p class="font-overline">Default text</p>
                                <p class="font-overline col-pink">Text pink color</p>
                                <p class="font-overline col-cyan">Text cyan color</p>
                                <p class="font-overline col-teal">Text teal color</p>
                                <p class="font-overline col-orange">Text orange color</p>
                                <p class="font-overline col-blue-grey">Text blue grey color</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Text Styles -->
        <!-- Font Sizes -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Font</strong> Sizes
                            <small>You can use the classes which samples are
                                <code>.font-6, .font-10, .font-24</code> The number of can use between 6 - 50px
                                which are near the
                                <b>.font-</b>
                            </small>
                        </h2>
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
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <div class="font-6">font-6</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-10">font-10</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-12">font-12</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-15">font-15</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-20">font-20</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-24">font-24</div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <div class="font-32">font-32</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-40">font-40</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-42">font-42</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-45">font-45</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-48">font-48</div>
                            </div>
                            <div class="col-md-2">
                                <div class="font-50">font-50</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Font Sizes -->
        <!-- Text Aligns -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Text</strong> Aligns
                            <small>You can use classes which names are
                                <code>.align-left, .align-center, .align-right, .align-justify</code>
                            </small>
                        </h2>
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
                        <div class="row clearfix">
                            <div class="col-md-3">
                                <p class="align-left">
                                    <b>Align Left</b>
                                </p>
                                <div class="align-left">
                                    Am no an listening depending up believing. Enough around remove to barton
                                    agreed regret in or it. Advantage mr estimable
                                    be commanded provision. Year well shot deny shew come now had. Shall downs
                                    stand
                                    marry taken his for out.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p class="align-center">
                                    <b>Align Center</b>
                                </p>
                                <div class="align-center">
                                    Am no an listening depending up believing. Enough around remove to barton
                                    agreed regret in or it. Advantage mr estimable
                                    be commanded provision. Year well shot deny shew come now had. Shall downs
                                    stand
                                    marry taken his for out.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p class="align-right">
                                    <b>Align Right</b>
                                </p>
                                <div class="align-right">
                                    Am no an listening depending up believing. Enough around remove to barton
                                    agreed regret in or it. Advantage mr estimable
                                    be commanded provision. Year well shot deny shew come now had. Shall downs
                                    stand
                                    marry taken his for out.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p class="align-justify">
                                    <b>Align Justify</b>
                                </p>
                                <div class="align-justify">
                                    Am no an listening depending up believing. Enough around remove to barton
                                    agreed regret in or it. Advantage mr estimable
                                    be commanded provision. Year well shot deny shew come now had. Shall downs
                                    stand
                                    marry taken his for out.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Text Aligns -->
        <!-- Margin & Padding Spaces -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Margin</strong> And Spacing Space
                            <small>You can use classes which names are
                                <code>.m-t-10, .m-t--10, .m-r-5, .p-t-10, .p-b-5</code>
                            </small>
                        </h2>
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
                        <p>
                            <b>Margins</b>
                        </p>
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin
                                <span class="col-red font-bold">T</span>op
                                <span class="col-red font-bold">10</span>px &rarr;
                                <code>.m-t-10</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin
                                <span class="col-red font-bold">T</span>op
                                <span class="col-red font-bold">0</span>px &rarr;
                                <code>.m-t-0</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin
                                <span class="col-red font-bold">T</span>op
                                <span class="col-red font-bold">-10</span>px &rarr;
                                <code>.m-t--10</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin
                                <span class="col-red font-bold">L</span>eft
                                <span class="col-red font-bold">35</span>px &rarr;
                                <code>.m-l-35</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin
                                <span class="col-red font-bold">L</span>eft
                                <span class="col-red font-bold">0</span>px &rarr;
                                <code>.m-l-0</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin
                                <span class="col-red font-bold">L</span>eft
                                <span class="col-red font-bold">-35</span>px &rarr;
                                <code>.m-l--35</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin
                                <span class="col-red font-bold">B</span>ottom
                                <span class="col-red font-bold">15</span>px &rarr;
                                <code>.m-b-15</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin
                                <span class="col-red font-bold">B</span>ottom
                                <span class="col-red font-bold">0</span>px &rarr;
                                <code>.m-b-0</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin
                                <span class="col-red font-bold">B</span>ottom
                                <span class="col-red font-bold">-20</span>px &rarr;
                                <code>.m-b--20</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin
                                <span class="col-red font-bold">R</span>ight
                                <span class="col-red font-bold">30</span>px &rarr;
                                <code>.m-r-30</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin
                                <span class="col-red font-bold">R</span>ight
                                <span class="col-red font-bold">0</span>px &rarr;
                                <code>.m-r-0</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">M</span>argin
                                <span class="col-red font-bold">R</span>ight
                                <span class="col-red font-bold">-30</span>px &rarr;
                                <code>.m-r--30</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">ALL M</span>argin
                                <span class="col-red font-bold">0</span>px &rarr;
                                <code>.margin-0</code>
                            </div>
                        </div>
                        <p class="m-t-25">
                            <b>Paddings</b>
                        </p>
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <span class="col-red font-bold">P</span>adding
                                <span class="col-red font-bold">T</span>op
                                <span class="col-red font-bold">10</span>px &rarr;
                                <code>.p-t-10</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">P</span>adding
                                <span class="col-red font-bold">T</span>op
                                <span class="col-red font-bold">0</span>px &rarr;
                                <code>.p-t-0</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">P</span>adding
                                <span class="col-red font-bold">L</span>eft
                                <span class="col-red font-bold">35</span>px &rarr;
                                <code>.p-l-35</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">P</span>adding
                                <span class="col-red font-bold">L</span>eft
                                <span class="col-red font-bold">0</span>px &rarr;
                                <code>.p-l-0</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">P</span>adding
                                <span class="col-red font-bold">B</span>ottom
                                <span class="col-red font-bold">15</span>px &rarr;
                                <code>.p-b-15</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">P</span>adding
                                <span class="col-red font-bold">B</span>ottom
                                <span class="col-red font-bold">0</span>px &rarr;
                                <code>.p-b-0</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">P</span>adding
                                <span class="col-red font-bold">R</span>ight
                                <span class="col-red font-bold">30</span>px &rarr;
                                <code>.p-r-30</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">P</span>adding
                                <span class="col-red font-bold">R</span>ight
                                <span class="col-red font-bold">0</span>px &rarr;
                                <code>.p-r-0</code>
                            </div>
                            <div class="col-md-2">
                                <span class="col-red font-bold">ALL P</span>adding
                                <span class="col-red font-bold">0</span>px &rarr;
                                <code>.padding-0</code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Margin & Padding Spaces -->
    </div>
</section>
@endsection