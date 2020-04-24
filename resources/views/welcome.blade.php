@extends('layouts.app-main')
@section('title')
    Contact Us
@endsection
@section('content')


    <!-- Banner -->
    @include('layouts.banner')
    <!-- /End Banner -->


    <!-- About -->
    <section class="about_intro section-padding">
        <div class="container">
            <div class="about_us">
                <div class="section-header text-center">
                    <h2 class="text-capitalize">We are a Church That Believes in <u>Jesus</u></h2>
                </div>
                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years,
                    sometimes by accident, sometimes on purpose (injected humour and the like). If you are going to use a passage of Lorem Ipsum.</p>
                <p>You need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined. chunks as necessary.</p>
            </div>
            <div class="text-center">
                <a href="#" class="btn btn-lg dark-btn">Register for free Membership</a>
            </div>
        </div>
    </section>
    <!-- /About -->

    <!-- Causes -->
    <section id="causes" class="section-padding gray_bg">
        <div class="container">
            <div class="owl-carousel">
                <div class="item">
                    <div class="causes_info white_text">
                        <div class="h__set">
                            <h6>Urgent CAUSES</h6>
                        </div>
                        <h2 class="text-capitalize">The Five Points of Gospel Truth</h2>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</p>
                        <div class="causes_chart">
                            <p>Raised: <strong>$15,000.00</strong></p>
                            <div class="sa-donation-count">
                                <div class="piechart" data-border-color="#ff6a48" data-value=".50">
                                    <span class="count">50</span>
                                </div>
                            </div>
                            <p>Goal: <strong>$25,000.00</strong></p>
                        </div>
                        <a href="#" class="btn btn-lg dark-btn">Donate Now</a>
                    </div>
                </div>
                <div class="item">
                    <div class="causes_info white_text">
                        <div class="h__set">
                            <h6>Urgent CAUSES</h6>
                        </div>
                        <h2 class="text-capitalize">The Five Points of Gospel Truth</h2>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</p>
                        <div class="causes_chart">
                            <p>Raised: <strong>$15,000.00</strong></p>
                            <div class="sa-donation-count">
                                <div class="piechart" data-border-color="#ff6a48" data-value=".75">
                                    <span class="count">50</span>
                                </div>
                            </div>
                            <p>Goal: <strong>$25,000.00</strong></p>
                        </div>
                        <a href="#" class="btn btn-lg dark-btn">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Causes -->

    <!-- Latest-Events-Sermons -->
    <section class="section-padding latest_event_sermons m-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5">
                    <div class="heading">
                        <h3>Latest Events</h3>
                        <a href="#" class="btn btn-secondary btn-md pull-right">See All</a>
                    </div>
                    <div class="event_list">
                        <ul>
                            <li>
                                <div class="event_info">
                                    <div class="event_date">
                                        <span>20</span> Aug'18
                                    </div>
                                    <h6><a href="#">Which is the same as saying</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Sunday (8:00 am -9:00 am)</li>
                                        <li><i class="fa fa-map-marker"></i> 56 Thatcher Avenue River Forest</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="event_info">
                                    <div class="event_date">
                                        <span>16</span> Aug'18
                                    </div>
                                    <h6><a href="#">If you are going to use</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Sunday (8:00 am -9:00 am)</li>
                                        <li><i class="fa fa-map-marker"></i> 56 Thatcher Avenue River Forest</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="event_info">
                                    <div class="event_date">
                                        <span>27</span> Aug'18
                                    </div>
                                    <h6><a href="#">Nor again is there anyone</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Sunday (8:00 am -9:00 am)</li>
                                        <li><i class="fa fa-map-marker"></i> 56 Thatcher Avenue River Forest</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 offset-lg-2">
                    <div class="heading">
                        <h3 class="text-capitalize">Latest Sermons</h3>
                        <a href="#" class="btn btn-secondary btn-md pull-right">See All</a>
                    </div>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h6 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        But I must explain to you how</a>
                                </h6>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <ul class="sermons_meta">
                                        <li><i class="fa fa-user"></i> Message from <a href="#">Frederick</a></li>
                                        <li><i class="fa fa-calendar-check-o"></i> Aug 12, 2018</li>
                                    </ul>
                                    <div class="sermons_inside">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-music"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                            <li><a href="#"><i class="fa fa-file-pdf-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h6 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Who loves or pursues</a>
                                </h6>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="sermons_meta">
                                        <li><i class="fa fa-user"></i> Message from <a href="#">Frederick</a></li>
                                        <li><i class="fa fa-calendar-check-o"></i> Aug 12, 2018</li>
                                    </ul>
                                    <div class="sermons_inside">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-music"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                            <li><a href="#"><i class="fa fa-file-pdf-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h6 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">That pleasures have to be repudiated</a>
                                </h6>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <ul class="sermons_meta">
                                        <li><i class="fa fa-user"></i> Message from <a href="#">Frederick</a></li>
                                        <li><i class="fa fa-calendar-check-o"></i> Aug 12, 2018</li>
                                    </ul>
                                    <div class="sermons_inside">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-music"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                            <li><a href="#"><i class="fa fa-file-pdf-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h6 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">To take a trivial example</a>
                                </h6>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <ul class="sermons_meta">
                                        <li><i class="fa fa-user"></i> Message from <a href="#">Frederick</a></li>
                                        <li><i class="fa fa-calendar-check-o"></i> Aug 12, 2018</li>
                                    </ul>
                                    <div class="sermons_inside">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-music"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                            <li><a href="#"><i class="fa fa-file-pdf-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Latest-Events-Sermons -->

    <!-- Live Broadcast -->
    <section class="sa-video-gallery-section" id="live-video">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center">
                        <h2 class="text-capitalize">Our Live Broadcast</h2>
                        <p>Watch our Event live directly from our website</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="sa-leading-video-gallery">
                        <div class="media">
                            <div class="media-left">
                                <div class="sa-video-blog-popup">
                                    <div class="thumb">
                                        <img src="assets/images/video-gallery/01.png" alt="img">
                                    </div>
                                    <div class="video_icon">
                                        <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-play"></i></a>
                                    </div>

                                </div>
                            </div>
                            <div class="media-body">
                                <div class="sa-leading-video-details">
                                    <p class="video-date">Aug 12, 2018</p>
                                    <h3>When our power of choice</h3>
                                    <p>You need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum there isn't anything embarrassing hidden in the generators on the Internet tend to repeat predefined</p>
                                    <a class="btn btn-primary" href="#">Watch Video</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sa-single-video-gallery">
                        <div class="sa-video-blog-popup">
                            <div class="thumb">
                                <img src="assets/images/video-gallery/1.png" alt="img">
                            </div>
                            <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-play"></i></a>
                        </div>
                        <h3>Kenne G. Patten</h3>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sa-single-video-gallery">
                        <div class="sa-video-blog-popup">
                            <div class="thumb">
                                <img src="assets/images/video-gallery/2.jpg" alt="img">
                            </div>
                            <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-play"></i></a>
                        </div>
                        <h3>David M. Dahan</h3>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sa-single-video-gallery">
                        <div class="sa-video-blog-popup">
                            <div class="thumb">
                                <img src="assets/images/video-gallery/3.jpg" alt="img">
                            </div>
                            <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-play"></i></a>
                        </div>
                        <h3>D. Kathy Santos Kito</h3>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sa-single-video-gallery">
                        <div class="sa-video-blog-popup">
                            <div class="thumb">
                                <img src="assets/images/video-gallery/4.jpg" alt="img">
                            </div>
                            <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-play"></i></a>
                        </div>
                        <h3>Kim I. Bailey</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Live Broadcast -->

    <!-- Testimonials -->
    <section class="section-padding p-0">
        <div class="our_testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="ss-testimonial-meta">
                            <div class="ss-testimonial-meta-inner">
                                <h4 class="text-capitalize">What Our Member Say</h4>
                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years
                                </p>
                                <a href="#" class="btn-link">Learn More <i class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="img_wrap clearfix">
                            <div class="ss-testimonial-img1 ss-testimonial-img">
                                <img src="assets/images/team/c-img01.png" alt="image">
                            </div>
                            <div class="ss-testimonial-img2 ss-testimonial-img">
                                <img src="assets/images/team/c-img04.png" alt="image">
                            </div>
                            <div class="ss-testimonial-img3 ss-testimonial-img">
                                <img src="assets/images/team/c-img03.png" alt="image">
                            </div>
                        </div>
                        <div id="testimonials">
                            <div class="owl-carousel">
                                <div class="item">
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text. .
                                        It uses a dictionary of over 200 Latin words, combined with.
                                    </p>
                                    <h6>Bobby K. Parker</h6>
                                </div>
                                <div class="item">
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text. .
                                        It uses a dictionary of over 200 Latin words, combined with.
                                    </p>
                                    <h6>Bobby K. Parker</h6>
                                </div>
                                <div class="item">
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text. .
                                        It uses a dictionary of over 200 Latin words, combined with.
                                    </p>
                                    <h6>Bobby K. Parker</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Testimonials -->

    <!-- Latest-Blog -->
    <section class="latest_blog section-padding">
        <div class="container">
            <div class="blog">
                <div class="section-header text-center">
                    <h2 class="text-capitalize">Latest News</h2>
                    <p>Follow our latest news and dont miss a thing</p>
                </div>
                <div class="row">
                    <article class="col-md-6 col-12">
                        <div class="blog_wrap">
                            <div class="blog_img">
                                <a href="#"><img src="assets/images/post_1.jpg" alt="image"></a>
                            </div>
                            <div class="blog_info">
                                <div class="post_date"><a href="#">Aug 12, 2018</a></div>
                                <h5><a href="#">On the other hand</a></h5>
                                <p>You need to be sure there isn't anything embarrassing hidden in the middle of text.
                                    All the Lorem Ipsum generators on the Internet tend to repeat predefined</p>
                                <a href="#" class="btn btn-primary">Details <i class="fa fa-caret-right"></i> </a>
                            </div>
                        </div>
                    </article>

                    <article class="col-md-6 col-12">
                        <div class="blog_wrap">
                            <div class="blog_img">
                                <a href="#"><img src="assets/images/post_2.jpg" alt="image"></a>
                            </div>
                            <div class="blog_info">
                                <div class="post_date"><a href="#">Aug 12, 2018</a></div>
                                <h5><a href="#">On the other hand</a></h5>
                                <p>You need to be sure there isn't anything embarrassing hidden in the middle of text.
                                    All the Lorem Ipsum generators on the Internet tend to repeat predefined</p>
                                <a href="#" class="btn btn-primary">Details <i class="fa fa-caret-right"></i> </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest-Blog -->

    <!-- Footer -->
    <footer id="footer">
        <!-- Footer-Top -->
        <div class="footer_top secondary-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 top_widget">
                        <div class="footer_logo">
                            <a href="#"><img src="assets/images/logo.png" alt="image"></a>
                        </div>
                    </div>
                    <div class="col-md-4 top_widget">
                        <div class="newsletter">
                            <form>
                                <div class="email_input">
                                    <input type="email" placeholder="Email address">
                                </div>
                                <button type="submit">Submit <i class="fa fa-caret-right"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 top_widget">
                        <div class="follow_us">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Footer-Top -->

        <!-- Footer-Widgets -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer_widget">
                    <div class="widget_inner">
                        <h5>Contact Us</h5>
                        <p>9000 Regency Parkway, Suite 400 Cary, NC 27518</p>
                        <p>E: <a href="mailto:info@slidesigma.com">info@slidesigma.com</a></p>
                        <p>P: +000 1456 6978 111</p>
                    </div>
                </div>
                <div class="col-md-4 footer_widget">
                    <div class="widget_inner">
                        <div class="instagram_img">
                            <ul>
                                <li><a href="#"><img src="assets/images/feed/shop/01.jpg" alt="image"></a></li>
                                <li><a href="#"><img src="assets/images/feed/shop/02.jpg" alt="image"></a></li>
                                <li><a href="#"><img src="assets/images/feed/shop/03.jpg" alt="image"></a></li>
                                <li><a href="#"><img src="assets/images/feed/shop/04.jpg" alt="image"></a></li>
                                <li><a href="#"><img src="assets/images/feed/shop/05.jpg" alt="image"></a></li>
                                <li><a href="#"><img src="assets/images/feed/shop/06.jpg" alt="image"></a></li>
                                <li><a href="#"><img src="assets/images/feed/shop/07.jpg" alt="image"></a></li>
                                <li><a href="#"><img src="assets/images/feed/shop/08.jpg" alt="image"></a></li>
                            </ul>
                            <a href="#" class="insta_url"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer_widget">
                    <div class="widget_inner">
                        <h5>Useful Links</h5>
                        <div class="footer_nav">
                            <ul>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Account</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Cart</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Checkout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Footer-Widgets -->

@endsection



