<?php $this->load->View('inclueds/headerlink') ?>

<body class="custom-cursor">

    <div class="page-wrapper">

        <?php $this->load->View('inclueds/head') ?>

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style=" background-image:url(assets/images/backgrounds/page-header-bg1.png)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?= base_url() ?>home">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Project's</li>
                    </ul>
                    <h2>Our Project's</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Team One Start-->
        <section class="team-one">
            <div class="container">
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="<?= base_url() ?>assets/images/team/team-1-1.jpg" alt="">

                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="team-details.html">Sarah albert</a></h3>

                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="<?= base_url() ?>assets/images/team/team-1-2.jpg" alt="">

                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="team-details.html">Kevin martin</a></h3>

                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="<?= base_url() ?>assets/images/team/team-1-3.jpg" alt="">

                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="team-details.html">Aleesha eve</a></h3>

                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="<?= base_url() ?>assets/images/team/team-1-4.jpg" alt="">

                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="team-details.html">David cooper</a></h3>

                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="<?= base_url() ?>assets/images/team/team-1-5.jpg" alt="">

                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="team-details.html">Mike hardson</a></h3>

                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="<?= base_url() ?>assets/images/team/team-1-6.jpg" alt="">

                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="team-details.html">Jessica brown</a></h3>

                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="<?= base_url() ?>assets/images/team/team-1-7.jpg" alt="">

                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="team-details.html">Yoni smith</a></h3>

                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="800ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="<?= base_url() ?>assets/images/team/team-1-8.jpg" alt="">

                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="team-details.html">Christine rob</a></h3>

                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                </div>
            </div>
        </section>
        <!--Team One End-->




        <!--Site Footer Start-->
        <?php $this->load->View('inclueds/footer') ?>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->

    <?php $this->load->View('inclueds/mobile') ?>

    <?php $this->load->View('inclueds/footerlink') ?>
</body>



</html>