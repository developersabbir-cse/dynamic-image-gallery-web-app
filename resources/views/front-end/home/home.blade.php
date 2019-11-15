@extends('front-end.master')

@section('title')
    Image Gallery
@endsection

@section('body')
    <section class="ftco-section-no-padding bg-light">
        <div class="hero-wrap">
            <div class="overlay"></div>
            <div class="d-flex align-items-center js-fullheight">
                <div class="author-image text img d-flex">
                    <section class="home-slider js-fullheight owl-carousel">
                        <div class="slider-item js-fullheight" style="background-image: url({{ asset($homes->slider_img_1) }});">
                        </div>

                        <div class="slider-item js-fullheight" style="background-image:url({{ asset('/') }}front-end/images/author-2.jpg);">
                        </div>
                    </section>
                </div>
                <div class="author-info text p-3 p-md-5">
                    <div class="desc">

                        <span class="subheading">Hello! I'm</span>
                        <h1 class="mb-4">{{ $homes->custom_home_title }}</h1>
                        <p class="mb-4">{{ $homes->custom_home_description }}</p>
                        <h3 class="signature h1">{{ $homes->signature }}</h3>
                        <ul class="ftco-social mt-3">
                            <li class="ftco-animate"><a href="www.twitter.com/{{ $homes->twitter }}"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="www.facebook.com/{{ $homes->facebook }}"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="www.instagram.com/{{ $homes->instagram }}"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section instagram">
        <div class="container">
            <div class="row justify-content-center mb-2 pb-3">
                <div class="col-md-7 heading-section heading-section-2 text-center ftco-animate">
                    <h2 class="mb-4">Follow me on Instagram</h2>
                </div>
            </div>
            <div class="row no-gutters">
                @foreach($galleries as $gallery)
                <div class="col-sm-12 col-md ftco-animate">
                    <a href="{{ asset($gallery->gallery_image) }}" class="insta-img image-popup" style="background-image: url({{ asset($gallery->gallery_image) }});">
                        <div class="icon d-flex justify-content-center">
                            <span class="icon-instagram align-self-center"></span>
                        </div>
                    </a>
                </div>
                    @endforeach
            </div>
        </div>
    </section>
    @endsection
