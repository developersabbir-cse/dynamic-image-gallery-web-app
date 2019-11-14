<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
    <h1 id="colorlib-logo"><a href="index.html"><span class="img" style="background-image: url({{ asset($author->author_image) }});"></span>{{ $author->author_name }}</a></h1>
    <nav id="colorlib-main-menu" role="navigation">
        <ul>
            <li class="colorlib-active"><a href="{{ route('/') }}">Home</a></li>
            <li><a href="{{ route('collection') }}">Collection</a></li>
            <li><a href="about.html">About Me</a></li>
            <li><a href="services.html">My Services</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>

    <div class="colorlib-footer">
        <h3>Newsletter</h3>
        <div class="d-flex justify-content-center">
            <form action="#" class="colorlib-subscribe-form">
                <div class="form-group d-flex">
                    <div class="icon"><span class="icon-paper-plane"></span></div>
                    <input type="text" class="form-control" placeholder="Enter Email Address">
                </div>
            </form>
        </div>
    </div>
</aside>