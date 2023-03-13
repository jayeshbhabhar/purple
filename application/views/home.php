<?php $this->load->View('inclueds/headerlink') ?>

<body class="custom-cursor">

    <div class="page-wrapper">

        <?php $this->load->View('inclueds/head') ?>

        <!--Main Slider Start-->
        <section>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url() ?>assets/images/slider/1.png" class="d-block w-100" alt="...">
                        <div class="centered font-weight-bold">
                            " Purple Mart are <br> paving the way for women entrepreneurs to succeed."
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url() ?>assets/images/slider/2.png" class="d-block w-100" alt="...">
                        <div class="centered font-weight-bold">"We empowering <br> women entrepreneurs <br>through their innovative platform,"</div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url() ?>assets/images/slider/3.png" class="d-block w-100" alt="...">
                        <div class="centered font-weight-bold">" Purple Mart is<br> a platform that provides<br> resources and support for success."</div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!--Main Slider End-->

        <!--About us Start-->
        <section class="about-one">
            <div class="about-one__shape-box-1">
                <div class="about-one__shape-1" style="background-image: url(assets/images/shapes/about-one-shape-1.png);"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="<?= base_url() ?>assets/images/resources/about-one-img-1.png" alt="">
                                </div>
                                <div class="about-one__img-border"></div>
                                <div class="about-one__curved-circle-box">
                                    <div class="curved-circle">
                                        <span class="curved-circle--item">
                                            25 YEARS EXPERIENCE OXPINS CHARITY CENTER
                                        </span>
                                    </div><!-- /.curved-circle -->
                                    <div class="about-one__curved-circle-icon">
                                        <img src="<?= base_url() ?>assets/images/icon/curved-circle-icon.png" alt="">
                                    </div>
                                </div>
                                <div class="about-one__shape-2 zoom-fade">
                                    <img src="<?= base_url() ?>assets/images/shapes/about-one-shape-2.png" alt="">
                                </div>
                                <div class="about-one__shape-3 float-bob-y">
                                    <img src="<?= base_url() ?>assets/images/shapes/about-one-shape-3.png" alt="">
                                </div>
                                <div class="about-one__shape-4 zoominout">
                                    <img src="<?= base_url() ?>assets/images/shapes/about-one-shape-4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Welcome to Purple initiative</span>
                                <h2 class="section-title__title">Who we are </h2>
                            </div>
                            <p class="about-one__text text-1">Purple Mart is a local mart which makes quality consumer products available at the local level, which is designed keeping in mind the local needs, requirements and purchasing power of the end-consumers. The responsibility to set up the mart lies with the Purple Initiative and the local women entrepreneurs.</p>

                            <p class="about-one__text text-1">
                                Purple Mart is an effort to ascertain a woman entrepreneur as a skilled trained businesswoman. In the near future, these selected
                                women would represent economically empowered
                                women entrepreneurs at the local level. These
                                women are expected to play a leadership role
                                at family and community level. This will
                                undoubtedly lead to innovation, strength,
                                progress and prosperity in the local urban
                                and rural economy.
                            </p>
                            <!-- <div class="about-one__fund">
                                <p class="about-one__fund-text">Helped fund <span>24,537</span> Projects in
                                    <span>24</span> Countries, Benefiting over <br> <span>8.2</span> Million people.
                                </p>
                            </div>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-volunteer"></span>
                                    </div>
                                    <div class="text">
                                        <h5><a href="become-volunteer.html">Join our team</a></h5>
                                        <p>Lorem ipsum dolor sit amet not quis mis notted.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-solidarity"></span>
                                    </div>
                                    <div class="text">
                                        <h5><a href="donate-now.html">Start donating</a></h5>
                                        <p>Lorem ipsum dolor sit amet not quis mis notted.</p>
                                    </div>
                                </li>
                            </ul> --><br>
                            <img src="<?= base_url('assets/images/mart.png') ?>" /><br>
                            <a href="#" class="thm-btn about-one__btn mt-5">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About us End-->

        <!--Gallery Start-->
        <section class="gallery-one">
            <div class="gallery-one__top">
                <h3 class="gallery-one__top-title">Our photo gallery</h3>
            </div>
            <div class=" pt-3 ">
                <div class="gallery-one__container">
                    <ul class="list-unstyled gallery-one__list">
                        <li class="gallery-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="gallery-one__img">
                                <img src="<?= base_url() ?>assets/images/gallery/1.png" alt="">
                                <a href="assets/images/gallery/1.png" class="img-popup"></a>
                            </div>
                        </li>
                        <li class="gallery-one__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="gallery-one__img">
                                <img src="<?= base_url() ?>assets/images/gallery/2.png" alt="">
                                <a href="assets/images/gallery/2.png" class="img-popup"></a>

                            </div>
                        </li>
                        <li class="gallery-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="gallery-one__img">
                                <img src="<?= base_url() ?>assets/images/gallery/3.png" alt="">
                                <a href="assets/images/gallery/3.png" class="img-popup"></a>

                            </div>
                        </li>
                        <li class="gallery-one__single wow fadeInUp" data-wow-delay="400ms">
                            <div class="gallery-one__img">
                                <img src="<?= base_url() ?>assets/images/gallery/4.png" alt="">
                                <a href="assets/images/gallery/4.png" class="img-popup"></a>

                            </div>
                        </li>
                        <li class="gallery-one__single wow fadeInUp" data-wow-delay="500ms">
                            <div class="gallery-one__img">
                                <img src="<?= base_url() ?>assets/images/gallery/12.png" alt="">
                                <a href="assets/images/gallery/12.png" class="img-popup"></a>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Gallery End-->

        <!--products Start-->
        <section class="news-one">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Our Products
                    </h2>
                </div>
                <div class="row">
                    <!--News One Single Start-->
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="<?= base_url() ?>assets/images/product/1.png" alt="">
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content-inner">
                                    <div class="news-one__content">

                                        <h3 class="news-one__title text-2"><a href="#">Cosmetics Products
                                            </a></h3>
                                    </div>
                                    <div class="news-one__bottom d-none">
                                        <div class="news-one__read-more">
                                            <a href="#"> <span class="icon-right-arrow text-2"></span> View
                                                More</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="<?= base_url() ?>assets/images/product/2.png" alt="">
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content-inner">
                                    <div class="news-one__content">
                                        <h3 class="news-one__title text-2"><a href="#">Health and Hygiene Products
                                            </a></h3>
                                    </div>
                                    <div class="news-one__bottom d-none">
                                        <div class="news-one__read-more">
                                            <a href="#"> <span class="icon-right-arrow"></span> View
                                                More</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="<?= base_url() ?>assets/images/product/3.png" alt="">
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content-inner">
                                    <div class="news-one__content">
                                        <h3 class="news-one__title text-2"><a href="#">Mobile Accessories
                                            </a></h3>
                                    </div>
                                    <div class="news-one__bottom d-none">
                                        <div class="news-one__read-more">
                                            <a href="#"> <span class="icon-right-arrow"></span> View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="<?= base_url() ?>assets/images/product/4.png" alt="">
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content-inner">
                                    <div class="news-one__content">
                                        <h3 class="news-one__title text-2"><a href="#">Baby Products
                                            </a></h3>
                                    </div>
                                    <div class="news-one__bottom d-none">
                                        <div class="news-one__read-more">
                                            <a href="#"> <span class="icon-right-arrow"></span> View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="<?= base_url() ?>assets/images/product/5.png" alt="">
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content-inner">
                                    <div class="news-one__content">
                                        <h3 class="news-one__title text-2"><a href="#"> Nutritional Products
                                            </a></h3>
                                    </div>
                                    <div class="news-one__bottom d-none">
                                        <div class="news-one__read-more">
                                            <a href="#"> <span class="icon-right-arrow"></span> View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="<?= base_url() ?>assets/images/product/6.png" alt="">
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content-inner">
                                    <div class="news-one__content">
                                        <h3 class="news-one__title text-2"><a href="#"> safe drinking water Products
                                            </a></h3>
                                    </div>
                                    <div class="news-one__bottom d-none">
                                        <div class="news-one__read-more">
                                            <a href="#"> <span class="icon-right-arrow"></span> View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="<?= base_url() ?>assets/images/product/7.png" alt="">
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content-inner">
                                    <div class="news-one__content">
                                        <h3 class="news-one__title text-2"><a href="#">Electronic Products
                                            </a></h3>
                                    </div>
                                    <div class="news-one__bottom d-none">
                                        <div class="news-one__read-more">
                                            <a href="#"> <span class="icon-right-arrow"></span> View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="<?= base_url() ?>assets/images/product/8.png" alt="">
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content-inner">
                                    <div class="news-one__content">
                                        <h3 class="news-one__title text-2"><a href="#">Electrical Appliance
                                            </a></h3>
                                    </div>
                                    <div class="news-one__bottom d-none">
                                        <div class="news-one__read-more">
                                            <a href="#"> <span class="icon-right-arrow"></span> View
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                </div>
            </div>
        </section>
        <!--products End-->

        <!--what we do Start-->
        <section class="causes-one">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">What WE DO...</h2>
                </div>
                <div class="row">
                    <!--Causes One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="<?= base_url() ?>assets/images/resources/causes-1-1.png" alt="">
                                <!-- <div class="causes-one__cat">
                                    <p>Education</p>
                                </div> -->
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title text-2"><a href="#">Our Project's</a>
                                </h3>
                                <p class="causes-one__text text-1">A project is a temporary endeavor with a specific goal or objective. It typically involves a team of individuals working together to accomplish a common goal within a certain timeframe and budget.</p>
                                <!-- <div class="causes-one__progress">
                                    <div class="causes-one__progress-shape" style="background-image: url(assets/images/shapes/causes-one-progress-shape-1.png);">
                                    </div>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                    <div class="causes-one__goals">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!--Causes One Single End-->
                    <!--Causes One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="<?= base_url() ?>assets/images/resources/causes-1-2.png" alt="">
                                <!-- <div class="causes-one__cat">
                                    <p>Medical</p>
                                </div> -->
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title text-2"><a href="#">Our Approach</a>
                                </h3>
                                <p class="causes-one__text text-1">Approach refers to the way or method that is used to achieve a specific goal or objective. The approach can vary depending on the context, and the desired outcome. there are different approaches that can be used.</p>
                                <!-- <div class="causes-one__progress">
                                    <div class="causes-one__progress-shape" style="background-image: url(assets/images/shapes/causes-one-progress-shape-1.png);">
                                    </div>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                    <div class="causes-one__goals">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!--Causes One Single End-->
                    <!--Causes One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="<?= base_url() ?>assets/images/resources/causes-1-3.png" alt="">
                                <!-- <div class="causes-one__cat">
                                    <p>Food</p>
                                </div> -->
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title text-2"><a href="#">Event's</a>
                                </h3>
                                <p class="causes-one__text text-1">An event is a planned and organized occasion that is typically held for a specific purpose or to celebrate a particular milestone. Events can be social, cultural, educational, and can range from small gatherings to large-scale productions.</p>
                                <!-- <div class="causes-one__progress">
                                    <div class="causes-one__progress-shape" style="background-image: url(assets/images/shapes/causes-one-progress-shape-1.png);">
                                    </div>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                    <div class="causes-one__goals">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!--Causes One Single End-->
                </div>
            </div>
        </section>
        <!--what we do End-->

        <!--baner tag line Start-->
        <section class="become-volunteer-one">
            <div class="become-volunteer-one__bg-box">
                <div class="become-volunteer-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/images/backgrounds/become-volunteer-one-bg.png);"></div>
            </div>
            <div class="become-volunteer-one__shape-1" style="background-image: url(assets/images/shapes/become-volunteer-shape-1.png);"></div>
            <div class="container">
                <div class="become-volunteer-one__inner">
                    <h3 class="become-volunteer-one__title">Creating Entrepreneurs ! <br>
                        Shaping Future !

                    </h3>
                    <!-- <div class="become-volunteer-one__btn-box">
                        <a href="become-volunteer.html" class="thm-btn become-volunteer-one__btn">Discover More</a>
                    </div> -->
                </div>
            </div>
        </section>
        <!--baner tag line End-->

        <!--clintes Start-->
        <!-- <section class="brand-one">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                            "0": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "375": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "575": {
                                "spaceBetween": 30,
                                "slidesPerView": 3
                            },
                            "767": {
                                "spaceBetween": 50,
                                "slidesPerView": 4
                            },
                            "991": {
                                "spaceBetween": 50,
                                "slidesPerView": 5
                            },
                            "1199": {
                                "spaceBetween": 100,
                                "slidesPerView": 6
                            }
                        }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?= base_url() ?>assets/images/brand/brand-1-1.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= base_url() ?>assets/images/brand/brand-1-2.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= base_url() ?>assets/images/brand/brand-1-3.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= base_url() ?>assets/images/brand/brand-1-4.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= base_url() ?>assets/images/brand/brand-1-5.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= base_url() ?>assets/images/brand/brand-1-6.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= base_url() ?>assets/images/brand/brand-1-1.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= base_url() ?>assets/images/brand/brand-1-2.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= base_url() ?>assets/images/brand/brand-1-3.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= base_url() ?>assets/images/brand/brand-1-4.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= base_url() ?>assets/images/brand/brand-1-5.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= base_url() ?>assets/images/brand/brand-1-6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--clintes End-->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/images/backgrounds/testimonial-one-bg.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Our Testimonials</span>
                                <h2 class="section-title__title">What they are talking about Purple Initiative</h2>
                            </div>
                            <p class="testimonial-one__text-1 text-1">Purple Initiative Private Limited is a profit-making company set up by experienced development professionals to encourage women entrepreneurs to start "PURPLE MART". </p>
                            <a href="#" class="thm-btn testimonial-one__btn">all testimonials</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-one__right">
                            <!-- <div class="testimonial-one__img-1 zoom-fade">
                                <img src="<?= base_url() ?>assets/images/testimonial/1.png" alt="">
                            </div>
                            <div class="testimonial-one__img-1 testimonial-one__img-2 zoom-fade">
                                <img src="<?= base_url() ?>assets/images/testimonial/2.png" alt="">
                            </div>
                            <div class="testimonial-one__img-1 testimonial-one__img-3 zoom-fade">
                                <img src="<?= base_url() ?>assets/images/testimonial/1.png" alt="">
                            </div>
                            <div class="testimonial-one__img-1 testimonial-one__img-4 zoom-fade">
                                <img src="<?= base_url() ?>assets/images/testimonial/2.png" alt="">
                            </div> -->
                            <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 50,
                                "nav": true,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 1
                                    },
                                    "992": {
                                        "items": 1
                                    },
                                    "1200": {
                                        "items": 1
                                    }
                                }
                            }'>
                                <div class="item">
                                    <!--Testimonial One Single Start-->
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__shape-1" style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                        </div>
                                        <div class="testimonial-one__client-img">
                                            <img src="<?= base_url() ?>assets/images/testimonial/1.png" alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <h3 class="testimonial-one__client-name">Kevin martin</h3>
                                            <p class="testimonial-one__client-sub-title">Volunteer</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-double-quotes"></span>
                                        </div>
                                        <p class="testimonial-one__text-2 text-1">"I am thrilled to have been a part of the Purple Mart community. The support and encouragement provided by Purple Initiative Private Limited to women entrepreneurs is truly inspiring. Their commitment to empowering women is commendable, and I am grateful for the opportunity to be a part of such an incredible initiative."</p>
                                    </div>
                                    <!--Testimonial One Single End-->
                                </div>
                                <div class="item">
                                    <!--Testimonial One Single Start-->
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__shape-1" style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                        </div>
                                        <div class="testimonial-one__client-img">
                                            <img src="<?= base_url() ?>assets/images/testimonial/2.png" alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <h3 class="testimonial-one__client-name">Jessica brown</h3>
                                            <p class="testimonial-one__client-sub-title">Volunteer</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-double-quotes"></span>
                                        </div>
                                        <p class="testimonial-one__text-2">"Purple Mart is an excellent platform for women entrepreneurs to showcase their talents and creativity. The range of products available is impressive, and it's evident that each item is made with passion and care. I am grateful to Purple Initiative Private Limited for creating such a wonderful opportunity for women to succeed in business."</p>
                                    </div>
                                    <!--Testimonial One Single End-->
                                </div>
                                <div class="item">
                                    <!--Testimonial One Single Start-->
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__shape-1" style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                        </div>
                                        <div class="testimonial-one__client-img">
                                            <img src="<?= base_url() ?>assets/images/testimonial/1.png" alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <h3 class="testimonial-one__client-name">Mike hardson</h3>
                                            <p class="testimonial-one__client-sub-title">Volunteer</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-double-quotes"></span>
                                        </div>
                                        <p class="testimonial-one__text-2">"As a customer of Purple Mart, I am consistently impressed by the quality of the products and the level of customer service provided. It's evident that Purple Initiative Private Limited takes pride in their work, and I am proud to support a company that is committed to empowering women."</p>
                                    </div>
                                    <!--Testimonial One Single End-->
                                </div>
                                <div class="item">
                                    <!--Testimonial One Single Start-->
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__shape-1" style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                        </div>
                                        <div class="testimonial-one__client-img">
                                            <img src="<?= base_url() ?>assets/images/testimonial/1.png" alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <h3 class="testimonial-one__client-name">Kevin martin</h3>
                                            <p class="testimonial-one__client-sub-title">Volunteer</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-double-quotes"></span>
                                        </div>
                                        <p class="testimonial-one__text-2">"Purple Initiative Private Limited is a shining example of what can be accomplished when passionate individuals come together to create positive change. Their dedication to women's entrepreneurship is truly inspiring, and I am excited to see what the future holds for Purple Mart and the women entrepreneurs it supports."</p>
                                    </div>
                                    <!--Testimonial One Single End-->
                                </div>
                                <div class="item">
                                    <!--Testimonial One Single Start-->
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__shape-1" style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                        </div>
                                        <div class="testimonial-one__client-img">
                                            <img src="<?= base_url() ?>assets/images/testimonial/2.png" alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <h3 class="testimonial-one__client-name">Jessica brown</h3>
                                            <p class="testimonial-one__client-sub-title">Volunteer</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-double-quotes"></span>
                                        </div>
                                        <p class="testimonial-one__text-2">"Purple Mart has been a game-changer for me and my business. Thanks to Purple Initiative Private Limited, I was able to connect with other women entrepreneurs and learn from their experiences. I highly recommend Purple Mart to any woman who wants to start or grow her business."</p>
                                    </div>
                                    <!--Testimonial One Single End-->
                                </div>
                                <div class="item">
                                    <!--Testimonial One Single Start-->
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__shape-1" style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                        </div>
                                        <div class="testimonial-one__client-img">
                                            <img src="<?= base_url() ?>assets/images/testimonial/1.png" alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <h3 class="testimonial-one__client-name">Mike hardson</h3>
                                            <p class="testimonial-one__client-sub-title">Volunteer</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-double-quotes"></span>
                                        </div>
                                        <p class="testimonial-one__text-2">"I'm grateful for the support and guidance that Purple Initiative Private Limited has provided me as I started my business. Their team of experienced professionals has helped me navigate the challenges of entrepreneurship and find success." </p>
                                    </div>
                                    <!--Testimonial One Single End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--Counter One Start-->
        <section class="counter-one">
            <div class="container">
                <div class="counter-one__inner">
                    <div class="counter-one-bg" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/images/backgrounds/counter-one-bg.jpg);"></div>
                    <ul class="list-unstyled counter-one__list">
                        <li class="counter-one__single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="500">00</h3>
                                <span class="counter-one__letter">m</span>
                            </div>
                            <p class="counter-one__text">Total Women Empowerment</p>
                        </li>
                        <li class="counter-one__single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="20">00</h3>
                                <span class="counter-one__letter">k</span>
                            </div>
                            <p class="counter-one__text">Product Distributed</p>
                        </li>
                        <li class="counter-one__single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="70">00</h3>
                                <span class="counter-one__letter">%</span>
                            </div>
                            <p class="counter-one__text">Business Margin</p>
                        </li>
                        <li class="counter-one__single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="50">00</h3>
                                <span class="counter-one__letter"></span>
                            </div>
                            <p class="counter-one__text">Our Team</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Counter One End-->

        <!--Contact Three Start-->
        <section class="contact-three">
            <div class="contact-three-shape" style="background-image: url(assets/images/shapes/contact-three-shape.png);"></div>
            <div class="container element-1">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Contact with us</h2>
                </div>
                <div class="contact-page__form-box">
                    <form action="" class="contact-page__form contact-form-validated" novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Your name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="email" placeholder="Email address" name="email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Phone" name="phone">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Subject" name="subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-form__input-box text-message-box">
                                    <textarea name="message" placeholder="Write a message"></textarea>
                                </div>
                                <div class="contact-form__btn-box">
                                    <button type="submit" class="thm-btn contact-form__btn">Send a message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--Contact Three End-->

        <!--Site Footer Start-->
        <?php $this->load->View('inclueds/footer') ?>
        <!--Site Footer End-->

    </div><!-- /.page-wrapper -->

    <?php $this->load->View('inclueds/mobile') ?>

    <?php $this->load->View('inclueds/footerlink') ?>
</body>



</html>