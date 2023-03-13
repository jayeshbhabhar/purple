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
                        <li class="active">Blog Details</li>
                    </ul>
                    <h2>Our Blog Details</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--News details Start-->
        <section class="m-4">
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
                                <h3 class="font-1">How does the malnutrition affect children?</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-5">
                        <div class="news-details__content">
                            <p class="news-details__text-1 p-4">There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some form, by injected
                                humour, or randomised words which don't look even slightly believable. If you are
                                going to use a passage of Lorem Ipsum. Class aptent taciti sociosqu ad litora
                                torquent per conubia nostra, per inceptos himenaeos. Vestibulum sollicitudin varius
                                mauris non dignissim. Sed quis iaculis est. Nulla quam neque, interdum vitae
                                fermentum lacinia, interdum eu magna. Mauris non posuere tellus. Donec quis euismod
                                tellus.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News details End-->



        <!--Site Footer Start-->
        <?php $this->load->View('inclueds/footer') ?>
        <!--Site Footer End-->

    </div><!-- /.page-wrapper -->

    <?php $this->load->View('inclueds/mobile') ?>

    <?php $this->load->View('inclueds/footerlink') ?>

</body>



</html>