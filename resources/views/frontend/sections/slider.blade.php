@if($ThemeSettings('option-carousel-slider','on'))

    <div class="row">
        <div class="col-12 p-0">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php $ads = DB::table('sliders')->leftJoin('media', function($join) {
                        $join->on('sliders.id', '=', 'media.reference_id');
                    })
                        ->where('status',1)->where('type','slider')
                        ->where('reference_type','=','slider')
                        ->get()
                    ?>
{{--                    @dd($ads)--}}
                    <?php $i=1?>
                    @foreach($ads as $ad)
                        <div class="carousel-item {{$i == 1 ? 'active' : '' }}">
                            <a href="{{$ad->url}}">
                                <img src="{{asset('images/media/'.$ad->image)}}" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <?php $i++?>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
@endif
