@if($ThemeSettings('option-search-filter-type','stores'))
    <div class="search p-2 d-flex justify-content-between mx-2">
        <div class="fields">
            <select class="px-1" id="selectbox1"
                    onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                <option value="fr" hidden selected>
                    CATEGORIES
                </option>
                @foreach($Categories('store') as $category)
                    <option value="">{{$category->title}} </option>
                @endforeach
            </select>

            <input type="text" class="ps-3" placeholder="Search Stores & Details">
        </div>
        <button type="submit" class="search-btn border-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#3b589d"
                 class="bi bi-search" viewBox="0 0 16 16">
                <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>
@elseif($ThemeSettings('option-search-filter-type','coupons'))
    <form class="m-0 searchbar-mobile position-relative" action="{{url('search-result')}}" method="get">
        @csrf
        <div class="search p-2 d-flex justify-content-between mx-2">
            <div class="fields">
                <select name="category" class="px-1">
                    <option value="" hidden selected>
                        CATEGORIES
                    </option>
                    @foreach($Categories('coupon') as $category)
                        <option value="{{base64_encode($category->id)}}">{{$category->title}} </option>
                    @endforeach
                </select>

                <input type="text" name="coupon" class="ps-3" placeholder="Search Coupons & Deals" id="show-user-mobile">
            </div>
            <button type="submit" class="search-btn border-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#38c4ca"
                     class="bi bi-search" viewBox="0 0 16 16">
                    <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
        </div>
        <ul class="searchData" id="style-1">
        </ul>
    </form>
    <style>
        .searchData {
            padding: 0;
            margin: 0 .5rem;
            position: absolute;
            background: white;
            width: 97%;
            max-height:70vh;
            overflow-y: auto;
        }

        .searchData li {
            padding: .5rem .65rem;
            text-transform: capitalize;
            transition: .3s all;
            user-select: none;
            cursor: default;
        }

        .searchData li:hover {
            background-color: rgba(56, 196, 202, 0.29);
        }
    </style>
@endif

<script type="text/javascript">
    $(document).ready(function () {
        /* When click show user */
        $('body').on('input', '#show-user-mobile', function () {
            var word = $(this).val();
            $.ajax({
                url: "{{url('SearchKeyword') }}",
                type: "GET",
                data: {
                    _token: '{{ csrf_token() }}',
                    keyword: word
                },
                contentType: 'application/json',
                success: function (data) {
                    $('.searchData').empty();
                    jQuery.each(data, function (index, item) {
                        $('.searchData').append(`<li>${item.title}</li>`);
                    });
                }
            });
        });
    });
    $(document).on('click', '.searchbar-mobile li', function () {
        $(this).parents('.searchbar-mobile').find('input').val($(this).text());
        $('#show-user-mobile').attr('value', $(this).text());
        $('.searchbar-mobile').trigger('submit');  
    });
</script>
