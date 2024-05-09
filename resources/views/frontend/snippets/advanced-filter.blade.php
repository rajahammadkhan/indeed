<div class="col-12">
    <button class="btn bg-signature text-white w-100 px-3 py-2" id="toggle_filter">Filters</button>
    <div class="row py-4 bg- px-3 justify-content-center w-100 mx-auto" id="main_filter">
        <div class="col-sm-12 col-md-12 col-lg-12 py-3 px-0">
            <div class="price d-flex flex-column w-100">
                <div class="price-head" id="clear-price">
                    <span class="name">PRICE</span>
                </div>
                <input class="c_type onslect" type="hidden" name="c_type" value="{{$data}}">
                <div class="line-price d-flex align-items-center w-100">
                    <div class="d-flex align-items-center w-50">
                        <label>$</label>
                        <input id="search_low_price" name="min_price" type="number" min="1" class="w-100 ms-2 bd-soft min_price onslect">
                    </div>
                    <div class="d-flex align-items-center w-50 mx-2">
                        <label>$</label>
                        <input min="1" id="search_high_price" name="max_price" class="w-100 ms-2 bd-soft max_price onslect" type="number">
                    </div>

                </div>
            </div>
        </div>

        <style>
            :root {
                --background-gradient: linear-gradient(30deg, #f39c12 30%, #f1c40f);
                --gray: #34495e;
                --darkgray: #2c3e50;
            }

            #search_low_price,
            #search_high_price {
                padding-block: 0.5rem;
                border-radius: 0.7rem;
                border-color: #f8964e;
            }

            .selectMain select {
                appearance: none;
                outline: 0;
                border: 0;
                box-shadow: none;
                flex: 1;
                padding: 0 1em;
                color: #fff;
                background-color: #f8964e;
                background-image: none;
                cursor: pointer;
            }

            /* Remove IE arrow */
            .selectMain select::-ms-expand {
                display: none;
            }

            /* Custom Select wrapper */
            .selectMain {
                position: relative;
                display: flex;
                width: 100%;
                border-radius: .7em;
                overflow: hidden;
            }

            .selectMain select {
                padding-block: 0.5rem;
            }

            /* Arrow */
            .selectMain::after {
                content: '\25BC';
                position: absolute;
                top: 0;
                right: 0;
                padding: 0.5em 0.8rem;
                background-color: #f57618;
                transition: .25s all ease;
                pointer-events: none;
                color: white;
            }

            /* Transition */
            .selectMain:hover::after {
                color: #eee;
            }

            #dropdownMenuButton1 {
                background-color: #f8964e !important;
                padding-block: 0.5rem;
                color: white;
                overflow: hidden;
                border-radius: 0.7rem;
            }

            button#dropdownMenuButton1::after {
                content: '\25BC';
                position: absolute;
                top: 0;
                right: 0;
                padding: 0.5em 0.8rem;
                background-color: #f57618;
                transition: .25s all ease;
                pointer-events: none;
                color: white;
                border-width: 0px;
                height: 100%;
                border-top-right-radius: 0.7rem;
                border-bottom-right-radius: 0.7rem;
            }
        </style>

        <div class="col-sm-12 col-md-12 col-lg-12 py-3 px-0">
            <div class="discount-head mb-2">
                <span class="name text-uppercase">discount</span>
            </div>
            <form action="{{url('search-coupon')}}" method="POST" enctype="multipart/form-data" class="selectMain">
                @csrf
                <select name="discount" class="disc onslect w-100">
                    <option value="all">All Discount</option>
                    <option value='<?= serialize(['min' => 20, 'max' => 49]) ?>'>20% off - 49%</option>
                    <option value='<?= serialize(['min' => 50, 'max' => 79]) ?>'> 50% off - 79%</option>
                    <option value='<?= serialize(['min' => 80, 'max' => 99]) ?>'> 80% off - 99%</option>
                </select>
            </form>
        </div>

        <!-- <div class="col-sm-12 col-md-12 col-lg-12 py-3 d-flex px-0 justify-content-start flex-column ">
            <div class="discount-head mb-2">
                <span class="name text-uppercase">discount</span>
            </div>
            <form action="{{url('search-coupon')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <select name="discount" class="disc onslect w-100 bd-soft">
                    <option value='all'> All discount</option>
                    <option value='<?= serialize(['min' => 20, 'max' => 49]) ?>'> 20% off - 49%</option>
                    <option value='<?= serialize(['min' => 50, 'max' => 79]) ?>'> 50% off - 79%</option>
                    <option value='<?= serialize(['min' => 80, 'max' => 99]) ?>'> 80% off - 99%</option>
                </select>
            </form>
        </div> -->
        <div class="col-sm-12 col-md-12 col-lg-12 py-3 d-flex px-0 justify-content-start flex-column ">
            <div class="Coupon-head mb-2">
                <span class="name text-uppercase">Coupon</span>
            </div>
            <form action="{{url('search-coupon')}}" method="POST" enctype="multipart/form-data" class="selectMain">
                @csrf
                <select name="fullfilled" class="fullfilled onslect w-100">
                    <option value="">All</option>
                    <option value="1">fullfilled by amazon</option>
                </select>
            </form>
        </div>
        <!-- <div class="col-sm-12 col-md-12 col-lg-12 py-3 d-flex px-0 justify-content-start flex-column ">
            <div class="Coupon-head mb-2">
                <span class="name text-uppercase">Coupon</span>
            </div>
            <form action="{{url('search-coupon')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <select name="fullfilled" class="fullfilled onslect w-100 bd-soft">
                    <option value="">All</option>
                    <option value="1">fullfilled by amazon</option>
                </select>
            </form>
        </div> -->
        @php
        $categories = DB::table('categories')->where(['reference_type' => 'coupon','status'=> 1])->get();
        @endphp
        <div class="col-sm-12 col-md-12 col-lg-12 py-3 d-flex px-0 justify-content-start flex-column">
            <div class="Category-head mb-2">
                <span class="name text-uppercase">Category</span>
            </div>
            <div class="dropdown">
                <button class="dropdown-toggle bg-white bd-soft border-0 categ-dd w-100 text-start d-flex justify-content-between align-items-center" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Categories
                </button>
                <ul class="dropdown-menu categ-dropd w-100 rounded-0" aria-labelledby="dropdownMenuButton1">
                    @foreach($categories as $category)
                    <li class="d-flex px-2">
                        <input class="form-check-input category onslect pe-2" type="checkbox" name="category" value="{{$category->id}}" id="flexCheckDefault">
                        <label class="form-check-label text-truncate" for="flexCheckDefault">
                            {{$category->title}}
                        </label>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- <div class="col-sm-12 col-md-12 col-lg-12 py-3 d-flex px-0 justify-content-start flex-column">
            <div class="Range-head mb-2">
                <span class="name text-uppercase">Range</span>
            </div>
            <form action="{{url('search-coupon')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <select name="range" class="range onslect w-100 bd-soft">
                    <option value="0">default rank</option>
                    <option value="1">price: Low to high</option>
                    <option value="2">Discount: High to Low</option>
                    <option value="3">Newest</option>
                </select>
            </form>

        </div> -->
        <div class="col-sm-12 col-md-12 col-lg-12 py-3 d-flex px-0 justify-content-start flex-column">
            <div class="Range-head mb-2">
                <span class="name text-uppercase">Range</span>
            </div>
            <form action="{{url('search-coupon')}}" method="POST" enctype="multipart/form-data" class="selectMain">
                @csrf
                <select name="range" class="range onslect w-100">
                    <option value="0">default rank</option>
                    <option value="1">price: Low to high</option>
                    <option value="2">Discount: High to Low</option>
                    <option value="3">Newest</option>
                </select>
            </form>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(document).on('change keyup', '.onslect', function() {
            var multisel = [];
            $.each($("input[name='category']:checked"), function() {
                multisel.push($(this).val());
            });

            $.ajax({
                type: 'POST',
                url: "{{url('search-coupon')}}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    discount: $('.disc').val(),
                    fullfilled: $('.fullfilled').val(),
                    category: multisel,
                    range: $('.range').val(),
                    min_price: $('.min_price').val(),
                    max_price: $('.max_price').val(),
                    max_price: $('.max_price').val(),
                    c_type: $('.c_type').val(),


                },
                // dataType: "json",
                // beforeSend: function() {
                //     $(".ajaxpreload").show();
                // },
                success: function(data) {

                    console.log(data);

                    $(".aj-data").html(data);
                    // $("#total-amount").text(data * 1);
                    // $('#total_cost').val(data * 1);
                    // $('#wow').text('Pay Now '+'('+data * 1+'$)');
                    // $(".ajaxpreload").hide();
                    // if((data * 1) >= 1){
                    //     $('#wow').attr("disabled", false);
                    //     $('.alert-danger').hide();
                    //
                    // }else{
                    //     $('.alert-danger').show();
                    //     $('#wow').attr("disabled", true);
                    // }

                }
            });
        });
    });
</script>
