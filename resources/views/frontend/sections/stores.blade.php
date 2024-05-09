@if($ThemeSettings('option-stores-list','on'))
<div class="container py-3 pt-5">
    <div class="row">
        <div class="col-12 ">
            <h1 class=" text-black text-uppercase fw-bolder mb-1">
                Top Stores
            </h1>
        </div>
        <div class="col-12">
            <div class="row">
                @foreach($stores as $store)
                <div class="col-md-1half col-sm-6 col-6 text-center my-2 ">
                    <div class="top-cards active p-3 rounded-4 brdMain overflow-hidden">
                        <div class="img">
                            <a href="{{url('stores',$store->slug)}}">
                            <img src="{{asset('images/media/'.$store->image)}}" class="w-100" alt="{{$store->title.'-'.$store->created_at}}">
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
{{--        <div class="col-12 mx-auto text-center my-4">--}}
{{--            <button class="custom_btn bg-signature">VIEW ALL</button>--}}
{{--        </div>--}}
    </div>
</div>
@endif
