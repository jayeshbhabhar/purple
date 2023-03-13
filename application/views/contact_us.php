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
                        <li class="active">Contact</li>
                    </ul>
                    <h2>Contact us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Three Start-->
        <section class="mb-5">
            <div class="container">
                <div class="row">
                <div class="col-xl-4 col-lg-5 p-4 element-3">
                    
                        <div class="col-12 mt-5">
                        <h2 class="p-4">Social media</h2>
                                   <!--  -->
                                   <a href="#" class="faaa fa fa-facebook m-2"></a>
                                   <a href="#" class="faaa fa fa-instagram m-2"></a>
                                   <a href="#" class="faaa fa fa-youtube m-2"></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="donate-now__left">
                            <div class="donate-now__personal-info-box">
                                <form class="donate-now__personal-info-form">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <input type="text" placeholder="First name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <input type="text" placeholder="Last name" name="last-name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <input type="text" placeholder="Phone" name="phone">
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="donate-now__personal-info-input donate-now__personal-info-message-box">
                                                <textarea name="message" placeholder="Write message"></textarea>
                                            </div>
                                            <div class="contact-form__btn-box m-4">
                                                <button type="submit" class="thm-btn contact-form__btn">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <!--Contact Three End-->

        <!--Contact One Start-->
        <section class="contact-one">
            <div class="container">
                <div class="contact-one__inne">
                    <ul class="list-unstyled contact-one__list">
                        <li class="contact-one__single">
                            <div class="contact-one__icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="contact-one__content">
                                <p class="contact-one__sub-title">Helpline</p>
                                <h3 class="contact-one__number"><a href="tel:9752524301">+ 91-9752524301</a></h3>
                            </div>
                        </li>
                        <li class="contact-one__single">
                            <div class="contact-one__icon">
                                <span class="icon-message"></span>
                            </div>
                            <div class="contact-one__content">
                                <p class="contact-one__sub-title">Send email</p>
                                <h3 class="contact-one__number"><a href="mailto:support@purpleinitiative.co.in">support@purpleinitiative.co.in</a></h3>
                            </div>
                        </li>
                        <li class="contact-one__single">
                            <div class="contact-one__icon">
                                <span class="icon-location"></span>
                            </div>
                            <div class="contact-one__content">
                                <p class="contact-one__sub-title">A-346, Kendriya Vihar, Sector-55, </p>
                                <h3 class="contact-one__number">Gurgaon, Haryana 122011 </h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Contact One End-->

        <!--Google Map Start-->
        <section class="google-map google-map-two">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7017.7546523235105!2d77.08669864545399!3d28.42295822454694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d2206984f0435%3A0xf328d34ce2d12efe!2sKendriya%20Vihar%2C%20Sector%2056%2C%20Gurugram%2C%20Haryana%20122011!5e0!3m2!1sen!2sin!4v1678522314352!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <!--Google Map End-->


        <!--Site Footer Start-->
        <?php $this->load->View('inclueds/footer') ?>
        <!--Site Footer End-->




    </div><!-- /.page-wrapper -->

    <?php $this->load->View('inclueds/mobile') ?>

    <?php $this->load->View('inclueds/footerlink') ?>
</body>



</html>