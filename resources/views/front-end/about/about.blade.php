@extends('front-end.master')
@section('title')
    Collection
@endsection
@section('body')
		<section class="ftco-section-no-padding bg-light">
				<div class="hero-wrap">
					<div class="overlay"></div>
					<div class="d-flex">
						<div class="author-image text img p-md-5" style="background-image: url({{ $author->author_image }});">

						</div>
						<div class="author-info text p-4 p-md-5 mt-5 mb-5">
							<div class="desc">
                            <span class="subheading">{{ $about->about_title }}</span>
                            <h1 class="big-letter">Louie Smith</h1>
                            <h1 class="mb-4"><span>My Name is {{ $author->author_name }}</span></h1>
                            <p class="mb-4">{{ $about->about_description }}</p>
                            <h3 class="signature h1">{{ $author->author_name }}</h3>
								<ul class="ftco-social mt-3">
		              <li class="ftco-animate"><a href="{{ $author->author_facebook }}"><span class="icon-twitter"></span></a></li>
		              <li class="ftco-animate"><a href="{{ $author->author_twitter }}"><span class="icon-facebook"></span></a></li>
		              <li class="ftco-animate"><a href="{{ $author->author_instagram }}"><span class="icon-instagram"></span></a></li>
		            </ul>
	            </div>
						</div>
					</div>
				</div>
            </section>

            <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
	    	<div class="container">
	    		<div class="row justify-content-start">
	    			<div class="col-md-10">
			    		<div class="row">
			          <div class="col-xl-3 col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
			            <div class="block-18">
			              <div class="text d-flex align-items-center">
			                <strong class="number" data-number="120">0</strong>
			                <span>Pounds of Equipment</span>
			              </div>
			            </div>
			          </div>
			          <div class="col-xl-3 col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
			            <div class="block-18">
			              <div class="text d-flex align-items-center">
			                <strong class="number" data-number="150">0</strong>
			                <span>Studio Session</span>
			              </div>
			            </div>
			          </div>
			          <div class="col-xl-3 col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
			            <div class="block-18">
			              <div class="text d-flex align-items-center">
			                <strong class="number" data-number="200">0</strong>
			                <span>Finished Photosessions</span>
			              </div>
			            </div>
			          </div>
			          <div class="col-xl-3 col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
			            <div class="block-18">
			              <div class="text d-flex align-items-center">
			                <strong class="number" data-number="200">0</strong>
			                <span>Happy Clients</span>
			              </div>
			            </div>
			          </div>
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
                <a href="{{ $gallery->gallery_image }}" class="insta-img image-popup" style="background-image: url({{ $gallery->gallery_image }});">
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
