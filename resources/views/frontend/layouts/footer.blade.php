<footer class="text-center text-lg-start bg-white text-muted pt-3">
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>4fresh
                    </h6>
                    <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        Products
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Angular</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">React</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Vue</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Laravel</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Pricing</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Help</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                </div>
            </div>
        </div>
    </section>
</footer>
<script src="{{asset('indeed/js/app.min.js')}}"></script>
<script src="{{asset('indeed/js/job.js')}}"></script>
<script src="{{asset('indeed/js/chart.min.js')}}"></script>
<script src="{{asset('indeed/js/admin.js')}}"></script>
<script src="{{asset('indeed/js/jquery.js')}}"></script>
<script src="{{asset('indeed/js/pages/index.js')}}"></script>
<script src="{{asset('indeed/js/pages/charts/jquery-knob.js')}}"></script>
<script src="{{asset('indeed/js/pages/sparkline/sparkline-data.js')}}"></script>
<script src="{{asset('indeed/js/pages/medias/carousel.js')}}"></script>
<script src="{{asset('indeed/js/validations.js')}}"></script>
<script src="{{asset('indeed/js/note.js')}}"></script>
<script src="{{asset('indeed/js/jobPost.js')}}"></script>
<script>
   $(document).ready(function () {
        console.clear();
        let val =
        $("#summernote").summernote("code", $("#summernote").val());
        {{--console.log(`{{$post_job->job_description}}`+"asdasd");--}}
    })
</script>


{{--<script src="../../assets/js/jquery.js"></script>--}}
{{--<script src="../../assets/js/validations.js"></script>--}}
{{--<script src="../../assets/js/note.js"></script>--}}
{{--<script src="../../assets/js/jobPost.js"></script>--}}
</body>
</html>

