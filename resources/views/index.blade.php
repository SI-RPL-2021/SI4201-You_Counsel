@extends('layout/main')


@section('title', 'You-Counsel')
@section('style_navbar')
    <link href="{{ asset('style/css/styles.css') }}" rel="stylesheet">
@endsection
@section('container')


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>Hello and Welcome!</h1>
                            <p class="p-heading p-large">We <span id="js-rotating">Listen to, Understand, Solved</span> Your Problem.</p>
                            <a class="btn-solid-lg" href="/register">Join Now!</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Intro -->
    <div id="about" class="basic-1">
        <div class="container">
            <div class="row">
              <div class="col-lg-7">
                  <div class="image-container" style="width:400px; height:450px;">
                      <img class="img-fluid" src="PHOTOS/counselorman1.png" alt="alternative">
                  </div> <!-- end of image-container -->
              </div>
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">ABOUT US</div>
                        <h2 style="margin-left:20px; margin-bottom:-15px; color:#17BFBF;">You</h2>
                        <hr align="left" width="50%" style="background-color: #17BFBF; opacity: 30%;">
                        <h2 style="margin-left:50px; margin-top:-15px; color:#17BFBF;">Counsel</h2>
                        <p>We listen to your problem. We understanding your emotion. We solved your problem.
                         You-Counsel will take care and give you full attention until you blooming.</p>
                        <p class="testimonial-text">"Our Main Focus is You"</p>
                        <div class="testimonial-author">Todoan - Founder</div>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                 <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->


    <!-- Articles -->
    <div id="services" class="filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">Services</div>
                    <h2>Hello! These are some of the services we offer to you!</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="grid">
                        <div class="element-item">
                            <a class="popup-with-move-anim" href="#journal">
                                <div class="element-item-overlay"><span>My <br>Personal Journal</span>
                                </div><img src="PHOTOS/journal2.jpg" alt="alternative" style="width:400px; height:300px;">
                            </a>
                        </div>
                        <div class="element-item">
                            <a class="popup-with-move-anim" href="#appointment">
                                <div class="element-item-overlay"><span>Schedule an Appointment</span>
                                </div><img src="PHOTOS/appointment.jpg" alt="alternative" style="width:500px; height:300px;">
                            </a>
                        </div>
                        <div class="element-item">
                            <a class="popup-with-move-anim" href="#message">
                                <div class="element-item-overlay"><span>Leave Us a Message!</span>
                                </div><img src="PHOTOS/inboxicon.png" alt="alternative" style="width:500px; height:300px;">
                            </a>
                        </div>
                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->


    <!-- Project Lightboxes -->
    <!-- Lightbox -->
    <div id="journal" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-7">
                <img class="img-fluid" src="PHOTOS/journal2.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>My Personal Journal</h3>
                <hr class="line-heading">
                <p>Help us to understand you each and every day.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">
                        Siapa tau mau nambahin.</p>
                </div>
                <a class="btn-outline-reg mfp-close as-button" href="#journal">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="appointment" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-7">
                <img class="img-fluid" src="PHOTOS/appointment.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Schedule an Appointment</h3>
                <hr class="line-heading">
                <p>Connect with us and feel free to talk about anything to us!</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">
                        Siapa tau mau nahmbahin.
                    </p>
                </div>
                <a class="btn-outline-reg mfp-close as-button" href="#appointment">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="message" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-7">
                <img class="img-fluid" src="PHOTOS/inboxicon.png" alt="alternative" style="width:500px; height:300px;">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Leave Us a Message!</h3>
                <hr class="line-heading">
                <p>Send us your thoughts, because every mind should be free!</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">
                        Siapa tau mau nambahin.
                    </p>
                </div>
                <a class="btn-outline-reg mfp-close as-button" href="#message">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of lightbox -->
    <!-- end of project lightboxes -->

    <!-- member -->
    <div id="team" class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Our Great Team Member</h2>
                    <p class="p-heading">These are the great people who are behind the creation of this great project,
                        without them this project would not be completed.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{ asset('style/images/profile.png') }}"
                                            alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-author">Todoan - Founder
                                                <br>
                                                <span class="social-icons">
                                                    <span class="fa-stack">
                                                        <a href="#your-link">
                                                            <span class="hexagon"></span>
                                                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                                                        </a>
                                                    </span>
                                                    <span class="fa-stack">
                                                        <a href="#your-link">
                                                            <span class="hexagon"></span>
                                                            <i class="fab fa-twitter fa-stack-1x"></i>
                                                        </a>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{ asset('style/images/profile.png') }}" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-author">Zein - Co-Founder
                                                <br>
                                                <span class="social-icons">
                                                    <span class="fa-stack">
                                                        <a href="#your-link">
                                                            <span class="hexagon"></span>
                                                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                                                        </a>
                                                    </span>
                                                    <span class="fa-stack">
                                                        <a href="#your-link">
                                                            <span class="hexagon"></span>
                                                            <i class="fab fa-twitter fa-stack-1x"></i>
                                                        </a>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{ asset('style/images/profile.png') }}"
                                            alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-author">Leonard - Programmer 1
                                                <br>
                                                <span class="social-icons">
                                                    <span class="fa-stack">
                                                        <a href="#your-link">
                                                            <span class="hexagon"></span>
                                                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                                                        </a>
                                                    </span>
                                                    <span class="fa-stack">
                                                        <a href="#your-link">
                                                            <span class="hexagon"></span>
                                                            <i class="fab fa-twitter fa-stack-1x"></i>
                                                        </a>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{ asset('style/images/profile.png') }}"
                                            alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-author">Ika - Programmer 2
                                                <br>
                                                <span class="social-icons">
                                                    <span class="fa-stack">
                                                        <a href="#your-link">
                                                            <span class="hexagon"></span>
                                                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                                                        </a>
                                                    </span>
                                                    <span class="fa-stack">
                                                        <a href="#your-link">
                                                            <span class="hexagon"></span>
                                                            <i class="fab fa-twitter fa-stack-1x"></i>
                                                        </a>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{ asset('style/images/profile.png') }}"
                                            alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-author">Aria - Programmer 3
                                                <br>
                                                <span class="social-icons">
                                                    <span class="fa-stack">
                                                        <a href="#your-link">
                                                            <span class="hexagon"></span>
                                                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                                                        </a>
                                                    </span>
                                                    <span class="fa-stack">
                                                        <a href="#your-link">
                                                            <span class="hexagon"></span>
                                                            <i class="fab fa-twitter fa-stack-1x"></i>
                                                        </a>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{ asset('style/images/profile.png') }}"
                                            alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-author">Alya - Programmer 4
                                                <br>
                                                <span class="social-icons">
                                                    <span class="fa-stack">
                                                        <a href="#your-link">
                                                            <span class="hexagon"></span>
                                                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                                                        </a>
                                                    </span>
                                                    <span class="fa-stack">
                                                        <a href="#your-link">
                                                            <span class="hexagon"></span>
                                                            <i class="fab fa-twitter fa-stack-1x"></i>
                                                        </a>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of sliedr-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider -->
    <!-- end of member -->


    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTACT</div>
                        <h2 class="hkotak">Get In Touch With Us</h2>
                        <p class="pkotak">You can contact and give us feedback via:</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>1st Telekomunikasi Street, Bandung
                                City, West Java 40257, ID</li>
                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">+62 838 7908 1890</a></li>
                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">+62 822 1873 8143</a></li>
                            <li><i class="fas fa-envelope"></i><a
                                    href="mailto:youcounsel@gmail.com">youcounsel@gmail.com</a></li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->

@endsection
