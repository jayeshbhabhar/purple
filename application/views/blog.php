<?php $this->load->View('inclueds/headerlink') ?>

<body class="custom-cursor">

    <div class="page-wrapper">

        <?php $this->load->View('inclueds/head') ?>


        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg1.png)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Blog</li>
                    </ul>
                    <h2>Our Blog</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--News details Start-->
        <!-- <section class="m-4">
            <div class="container element-4">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="news-details__left p-4">
                            <div class="news-details__img">
                                <img src="assets/images/blog/news-details-img-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="news-details__left">
                            <div class="news-details__content">
                                <h3 class="news-details__title">How does the malnutrition affect children?</h3>
                                <p class="news-details__text-1">There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some form, by injected
                                humour, or randomised words which don't look even slightly believable.Vestibulum sollicitudin varius
                                mauris non dignissim. Sed quis iaculis est.</p>

                            <a href="" class="m-4"><button type="submit" class="thm-btn contact-form__btn">Read more</button>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-5">
                        <div class="news-details__content">
                           
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!--Events Page Start-->
        <section class="events-carousel-page">
            <div class="container">
                <div class="row">
                    <?php
                    if (!empty($blog)) {
                        foreach ($blog as $row) { ?>
                            <div class="col-lg-4 col-sm-6 col-md-3 p-4">
                                <!--Events One Single Start-->
                                <div class="events-one__single">
                                    <div class="events-one__img">
                                        <img src="<?=  $row['image_type'] ?>" alt="<?=  $row['title'] ?>">
                                        <div class="events-one__date">
                                            <p><?=  $row['created'] ?></p>
                                        </div>
                                        <div class="events-one__content">
                                            <ul class="list-unstyled events-one__meta">
                                                <!-- <li><i class="fas fa-clock"></i>8:00pm<?=  $row[''] ?></li> -->
                                                <!-- <li><i class="fas fa-map-marker-alt"></i>New York<?=  $row['images'] ?></li> -->
                                            </ul>
                                            <h3 class="events-one__title"><a href="event-details.html"><?=  $row['title'] ?></a></h3>
                                        </div>
                                    </div>
                                </div>
                                <!--Events One Single End-->
                            </div>
                            <?php
                                }
                            }
                                    ?>
                </div>
            </div>
        </section>
        <!--Events Page End-->



        <!--News details End-->



        <!--Site Footer Start-->
        <?php $this->load->View('inclueds/footer') ?>
        <!--Site Footer End-->

    </div><!-- /.page-wrapper -->

    <?php $this->load->View('inclueds/mobile') ?>

    <?php $this->load->View('inclueds/footerlink') ?>

</body>



</html>