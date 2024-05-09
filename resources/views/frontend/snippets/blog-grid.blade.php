@if($ThemeSettings('option-blog-view','grid'))

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mx-auto  my-4 blog-grid-view" >
        <div class="main ">

            <div class="">

                <?php
                $image = isset($blog['image']) ? $blog['image'] : 'galleryimage.png' ;

                ?>
                <a href="{{url('blog',$blog['slug'])}}" >
                    <img class="w-100 rounded-5 shadow_dark" src="{{asset('images/media/'.$image)}}" alt="{{$blog['title']}}">
                </a>
            </div>
            <div class=" p-3">
                <a href="{{url('blog',$blog['slug'])}}" >

                    <h1 class=" fs-2 main-heading fw-sm-bold text-dark text-start text-truncat">
                        {{$blog['title']}}
                    </h1>
                </a>
                <div class="center d-flex justify-content-between">
                    <p class="fs-12 text-muted fw-sm-bold">
                        By {{$blog['user']}}
                    </p>
                    <p class="fs-12 fw-sm-bold">
                        {{date('F d, Y', strtotime($blog['created_at']))}}

                    </p>
                </div>
                <div class="fs-6 fw-normal text-start para truncat mb-3">
                    {!! $blog['short_description'] !!}
                </div>
                <a href="{{url('blog',$blog['slug'])}}" class="btn read-more-cta px-4 py-2 fs-12 bg-signature">
                    READ MORE
                </a>
            </div>
        </div>

    </div>

</div>
@endif
<style>
    @media (min-width: 768px){
        .blog-grid-view img {
            object-fit: cover;
            height: 430px;
        }
    }


</style>
