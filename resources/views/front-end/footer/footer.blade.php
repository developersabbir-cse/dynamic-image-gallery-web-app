<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container px-md-5">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Recent Photos</h2>
                    <ul class="list-unstyled photo">
                        @foreach($galleries as $gallery)
                        <li><a href="#" class="img" style="background-image: url({{ asset($gallery->gallery_image) }});"></a></li>
                            @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Archives</h2>
                    <ul class="list-unstyled categories">
                        <li><a href="#">November 2020 <span>(105)</span></a></li>
                        <li><a href="#">October 2020 <span>(212)</span></a></li>
                        <li><a href="#">September 2020 <span>(150)</span></a></li>
                        <li><a href="#">August 2020 <span>(100)</span></a></li>
                        <li><a href="#">July 2020 <span>(200)</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">{{ $author->author_address}}</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{ $author->author_phone_number }}</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{ $author->author_email_address }}</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>