@extends('templates.folio.layouts.base')


@section('main')

<!-- ======= Hero Section ======= -->
@include('templates.folio.partials.hero')

<main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="paddsection">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-lg-4 ">
                    <div class="div-img-bg">
                        <div class="about-img">
                            <img src="folio/img/lenn-on-chair.jpeg" class="img-responsive" alt="me">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-descr">

                        <p class="p-heading">Im a problem solver and lifelong learner who likes solving problems through technology. I am also a huge supporter of youth development & the UN's SDGs </p>
                        <p class="separator">All it took was a simple intro to computer science course in varisty and I have been hooked for life. Not only to learning how to use technology to solve problems but also how to be a lifelong learner & contributing member of society.</p>

                    </div>

                </div>
            </div>
        </div>
    </div><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <div id="services">
        <div class="container">

            <div class="services-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="services-block">
                            <i class="bi bi-briefcase"></i>
                            <span>UI/UX DESIGN</span>
                            <p class="separator">To an English person, it will seem like simplified English,told me what </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="services-block">
                            <i class="bi bi-card-checklist"></i>
                            <span>BRAND IDENTITY</span>
                            <p class="separator">To an English person, it will seem like simplified English,told me what </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="services-block">
                            <i class="bi bi-bar-chart"></i>
                            <span>WEB DESIGN</span>
                            <p class="separator">To an English person, it will seem like simplified English,told me what </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="services-block">
                            <i class="bi bi-binoculars"></i>
                            <span>MOBILE APPS</span>
                            <p class="separator">To an English person, it will seem like simplified English,told me what </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="services-block">
                            <i class="bi bi-brightness-high"></i>
                            <span>Analytics</span>
                            <p class="separator">To an English person, it will seem like simplified English,told me what </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="services-block">
                            <i class="bi bi-calendar4-week"></i>
                            <span>PHOTOGRAPHY</span>
                            <p class="separator">To an English person, it will seem like simplified English,told me what </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </div><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="paddsection">

        <div class="container">
            <div class="section-title text-center">
                <h2>My Portfolio</h2>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="folio/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <a href="folio/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="folio/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="folio/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="folio/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>App</p>
                        <a href="folio/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="folio/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <a href="folio/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="folio/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <a href="folio/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="folio/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>App</p>
                        <a href="folio/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

            </div>

        </div>

    </div><!-- End Portfolio Section -->

    <!-- ======= Journal Section ======= -->
    <div id="journal" class="text-left paddsection">

        <div class="container">
            <div class="section-title text-center">
                <h2>journal</h2>
            </div>
        </div>

        <div class="container">
            <div class="journal-block">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="journal-info">

                            <a href="blog-single.html"><img src="folio/img/blog-post-1.jpg" class="img-responsive" alt="img"></a>

                            <div class="journal-txt">

                                <h4><a href="blog-single.html">SO LETS MAKE THE MOST IS BEAUTIFUL</a></h4>
                                <p class="separator">To an English person, it will seem like simplified English
                                </p>

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="journal-info">

                            <a href="blog-single.html"><img src="folio/img/blog-post-2.jpg" class="img-responsive" alt="img"></a>

                            <div class="journal-txt">

                                <h4><a href="blog-single.html">WE'RE GONA MAKE DREAMS COMES</a></h4>
                                <p class="separator">To an English person, it will seem like simplified English
                                </p>

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="journal-info">

                            <a href="blog-single.html"><img src="folio/img/blog-post-3.jpg" class="img-responsive" alt="img"></a>

                            <div class="journal-txt">

                                <h4><a href="blog-single.html">NEW LIFE CIVILIZATIONS TO BOLDLY</a></h4>
                                <p class="separator">To an English person, it will seem like simplified English
                                </p>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div><!-- End Journal Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="paddsection">
        <div class="container">
            <div class="contact-block1">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="contact-contact">

                            <h2 class="mb-30">GET IN TOUCH</h2>

                            <ul class="contact-details">                                
                                <li><span>+264 81 395 8732</span></li>
                                <li><span>lensig13@gmail.com</span></li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row gy-3">

                                <div class="col-lg-6">
                                    <div class="form-group contact-block1">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>

                                <div class="mt-0">
                                    <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Contact Section -->

</main><!-- End #main -->

@endsection