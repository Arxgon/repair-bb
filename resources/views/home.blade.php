@extends('layouts.template')

@section('title', 'BBWS-CITARUM | Home')

@section('addcss')
<style>
    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
        margin-bottom: 0rem;
    }

    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
        bottom: 3rem;
        z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel-item {
        height: 100vh;
    }

    .carousel-item>img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 100vh;
    }

    @media (min-width: 40em) {

        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }

        .featurette-heading {
            font-size: 50px;
        }
    }

    @media (min-width: 62em) {
        .featurette-heading {
            margin-top: 7rem;
        }
    }

    @media (max-width: 991px) {
        .carousel-item {
            height: 30vh;
        }

        .carousel-item>img {
            width: 100%;
            height: 100%;
            object-fit: unset;
        }
    }
</style>
@endsection

@section('content')
<div role="main" class="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="{{ asset('assets/img/jumbotron.jpeg') }}" alt="First slide">
                <div class="container d-none">
                    <div class="carousel-caption text-left">
                        <h1>Example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida
                            at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="{{ asset('assets/img/wwf-img.jpeg') }}" alt="Third slide">
                <div class="container d-none">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida
                            at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            {{-- <div class="carousel-item ">
                <img class="third-slide" src="{{ asset('assets/img/org-structure.jpg') }}" alt="Third slide">
                <div class="container d-none">
                    <div class="carousel-caption text-right">
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida
                            at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div> --}}
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="custom-shape-divider-bottom bottom-normal">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill-yellow"></path>
        </svg>
    </div>

    <div class="custom-shape-divider-bottom bottom-offside">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill"></path>
        </svg>
    </div>

    <section
        class="section section-height-3 bg-light border-0 m-0 appear-animation pt-4 pb-0 animated fadeIn appear-animation-visible"
        data-appear-animation="fadeIn" style="animation-delay: 100ms;">
        <div class="container">
            <div class="row">
                <div class="col appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                    style="animation-delay: 200ms;">
                    <div class="row">
                        <div class="col-6 d-flex flex-column align-items-start">
                            <h2 class="font-weight-normal text-6 mb-1"> <strong
                                    class="font-weight-extra-bold">Berita</strong>Terkini</h2>
                        </div>
                        <div class="col-6 d-flex flex-column align-items-end justify-content-end">
                            <h4 class="font-weight-light text-3 mb-1 ">
                                <a href="{{ route('berita') }}">Lihat lainnya ... </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row w-100">
                @foreach ($latestPosts as $post)
                <div class="col">
                    <div class="row w-100">
                        <div class="col align-self-center">
                            <a href="{{ route('berita') }}/{{ $post->slug }}" class="text-decoration-none">
                                <img src="{{  $post->image ? asset('storage/'.$post->image) : asset('assets/img/no img.png') }}"
                                    class="img-landing hover-effect-2 mb-3" alt="{{ $post->title }}">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto pe-0 ">
                            <div class="date">
                                <span class="day font-weight-extra-bold border">{{
                                    date("d",strtotime($post->published_at)) }}</span>
                                <span class="month text-2 text-uppercase">{{ date("M",strtotime($post->published_at))
                                    }}</span>
                            </div>
                        </div>
                        <div class="col ps-1">
                            <h4 class="text-3 line-height-6">
                                <a href="{{ route('berita') }}/{{ $post->slug }}"
                                    class="text-primary text-hover-quaternary">
                                    {{ $post->title }}
                                </a>
                            </h4>
                            <a href="{{ route('berita') }}/{{ $post->slug }}"
                                class="read-more text-primary font-weight-semibold text-2 p-0 m-0 mb-3">
                                selengkapnya
                                <i class="fas fa-chevron-right text-1 ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- <x-running-text /> --}}

    {{-- video citarum --}}
    {{-- <section>
        <div class="video">
            <div class="col w-full d-flex flex-column justify-content-center text-center ">
                <video controls autoplay>
                    <source src="{{ asset('assets/vid/Sungai Citarum.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </section> --}}


    <hr>
    <div class="container pt-3 mb-0">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="font-weight-normal text-6 mb-0">
                    <strong class="font-weight-extra-bold">Pelayanan Publik</strong>
                </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="pel-pub" class="owl-carousel owl-theme mb-0 pt-0 owl-loaded owl-drag owl-carousel-init"
                    style="height: auto;">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-835px, 0px, 0px); transition: all 0.25s ease 0s; width: 2506px;">
                            <script>
                                $(document).ready(function(){
                                $("#pel-pub").owlCarousel({
                                    autoplay:true,
                                    autoplayTimeout:3000,
                                    autoplayHoverPause:true,
                                    dots:false,
                                    loop:true,
                                    responsive: {
                                        0: {
                                            items:3
                                        },
                                        476: {
                                            items:3
                                        },
                                        768: {
                                            items:5
                                        },
                                        992: {
                                            items:6
                                        },
                                        1200: {
                                            items:6
                                        }
                                    }
                                });

                                $("#btn-nav-t").click(function(){
                                    if ($("nav.collapse").hasClass("show")) {
                                        $("nav.collapse").removeClass("show");
                                        $(".header-body").animate({
                                            height: $(".header-body").outerHeight() - $(".header-nav-main nav").outerHeight(!0),
                                        },
                                        function () {
                                            $(this).height("auto");
                                        });
                                    } else {
                                        $("nav.collapse").addClass("show");
                                        $(".header-body").animate({
                                            height: $(".header-body").outerHeight() + $(".header-nav-main nav").outerHeight(!0) + 10,
                                        });
                                    }
                                });
                            });
                            </script>
                            <script type="text/javascript">
                                window.$crisp=[];window.CRISP_WEBSITE_ID="244701da-9d61-42ef-a98a-7a54c28f07ff";
                            (function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";
                            s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();
                            </script>

                            <div class="owl-item cloned" style="width: 139.2px;">
                                <div class="m-4">
                                    <a class="text-center w-100" target="_blank" href="https://gol.itjen.pu.go.id/">
                                        <img style="height: 58px; width: 160px; display: block; margin: auto;"
                                            src="{{ asset('assets/img/upg.jpg') }}"
                                            alt="Unit Pengendalian Gratifikasi"></a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 139.2px;">
                                <div class="m-4">
                                    <a target="_blank" href="https://lapor.go.id/">
                                        <img class="img-fluid"
                                            src="https://sda.pu.go.id/assets/templates/img/logo/lapor.webp"
                                            alt=" SPAN Lapor"></a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 139.2px;">
                                <div class="m-4">
                                    <a target="_blank" href="https://jdih.pu.go.id">
                                        <img class="img-fluid"
                                            src="https://sda.pu.go.id/assets/templates/img/logo/jdih-logo.jpg"
                                            alt="JDIH"></a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 139.2px;">
                                <div class="m-4">
                                    <a target="_blank" href="https://sigi.pu.go.id">
                                        <img class="img-fluid"
                                            src="https://sda.pu.go.id/assets/templates/img/logo/sigi-logo.gif"
                                            alt="SIGI PUPR"></a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 139.2px;">
                                <div class="m-4 text-center">
                                    <a target="_blank" href="https://pdsda.sda.pu.go.id">
                                        <img width="155px" height="58px" class="img-fluid"
                                            src="https://sda.pu.go.id/assets/templates/img/logo/wrdc_logo.gif"
                                            alt="Pusat Data Sumber Daya Air"></a>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 139.2px;">
                                <div class="m-4 text-center">
                                    <a class="text-center w-100" target="_blank" href="https://wispu.pu.go.id/">
                                        <img style="max-height: 58px; width: 58px; display: block; margin: auto;"
                                            src="{{ asset('assets/img/wbs.jpg') }}" alt="WBS"></a>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 139.2px;">
                                <div class="m-4 text-center">
                                    <a target="_blank" href="http://sihka.sda.pu.go.id">
                                        <img class="img-fluid"
                                            src="https://sda.pu.go.id/assets/templates/img/logo/sihka-logo.gif"
                                            alt="Sistem Informasi Hidrologi"></a>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 139.2px;">
                                <div class="m-4 text-center">
                                    <a target="_blank" href="https://perizinansda.pu.go.id/">
                                        <img class="img-fluid"
                                            src="https://sda.pu.go.id/assets/templates/img/logo/perizinan.gif"
                                            alt="Perizinan SDA"></a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 139.2px;">
                                <div class="m-4">
                                    <a class="text-center w-100" target="_blank" href="https://gol.itjen.pu.go.id/">
                                        <img style="height: 58px; width: 160px; display: block; margin: auto;"
                                            src="{{ asset('assets/img/upg.jpg') }}"
                                            alt="Unit Pengendalian Gratifikasi"></a>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 139.2px;">
                                <div class="m-4">
                                    <a target="_blank" href="https://lapor.go.id/">
                                        <img class="img-fluid"
                                            src="https://sda.pu.go.id/assets/templates/img/logo/lapor.webp"
                                            alt="SPAN Lapor"></a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 139.2px;">
                                <div class="m-4">
                                    <a target="_blank" href="https://jdih.pu.go.id">
                                        <img class="img-fluid"
                                            src="https://sda.pu.go.id/assets/templates/img/logo/jdih-logo.jpg"
                                            alt="JDIH"></a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 139.2px;">
                                <div class="m-4">
                                    <a target="_blank" href="https://sigi.pu.go.id">
                                        <img class="img-fluid"
                                            src="https://sda.pu.go.id/assets/templates/img/logo/sigi-logo.gif"
                                            alt="SIGI PUPR"></a>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 139.2px;">
                                <div class="m-4 text-center">
                                    <a target="_blank" href="https://pdsda.sda.pu.go.id">
                                        <img width="155px" height="58px" class="img-fluid"
                                            src="https://sda.pu.go.id/assets/templates/img/logo/wrdc_logo.gif"
                                            alt="Pusat Data Sumber Daya Air"></a>
                                </div>
                            </div>

                            <div class="owl-item active" style="width: 139.2px;">
                                <div class="m-4 text-center">
                                    <a class="text-center w-100" target="_blank" href="https://wispu.pu.go.id/">
                                        <img style="max-height: 58px; width: 58px; display: block; margin: auto;"
                                            src="{{ asset('assets/img/wbs.jpg') }}" alt="WBS"></a>
                                </div>

                            </div>
                            <div class="owl-item cloned" style="width: 139.2px;">
                                <div class="m-4 text-center">
                                    <a target="_blank" href="http://sihka.sda.pu.go.id">
                                        <img class="img-fluid"
                                            src="https://sda.pu.go.id/assets/templates/img/logo/sihka-logo.gif"
                                            alt="Sistem Informasi Hidrologi"></a>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 139.2px;">
                                <div class="m-4 text-center">
                                    <a target="_blank" href="https://perizinansda.pu.go.id/">
                                        <img class="img-fluid"
                                            src="https://sda.pu.go.id/assets/templates/img/logo/perizinan.gif"
                                            alt="Perizinan SDA"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled">
                        <button type="button" role="presentation" class="owl-prev"></button>
                        <button type="button" role="presentation" class="owl-next"></button>
                    </div>
                    <div class="owl-dots disabled">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('addjs')
<script>

</script>
@endsection
