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
                        <li class="active">Registration Form</li>
                    </ul>
                    <h2>Registration Form</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Three Start-->
        <section class="contact-three">
            <div class="contact-three-shape" style="background-image: url(assets/images/shapes/contact-three-shape.png);"></div>
            <div class="container element-1">
                <div class="section-title text-center">
                </div>
                <div class="contact-page__form-box">
                    <form action="" class="contact-page__form contact-form-validated" novalidate="novalidate" method="post">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <label for="name">Full Name</label>

                                    <input type="text" placeholder="Your Name" name="name" id="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <label for="email">Email address</label>
                                    <input type="email" placeholder="Email address" name="email_address" id="email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" placeholder="Phone" name="phone_number" id="phone">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <label for="address">Adderss</label>
                                    <input type="text" placeholder="Address" name="address" id="address">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <label for="work">Type of work</label>
                                    <select class="form-select element-2" aria-label="Default select example" name="work_type" id="work">
                                        <option selected>Select type of work</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="birthday">Date of dirth</label>
                                <div class="contact-form__input-box  ">
                                    <input class="element-2 " type="date" id="birthday" name="dob">
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <label for="Gender">Gender</label>
                                <div class="contact-form__input-box element-2 element-3" id="gender" >

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="" value="male" checked>
                                        <label class="form-check-label" for="">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="female" id="">
                                        <label class="form-check-label" for="">
                                            Female
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="Other" id="">
                                        <label class="form-check-label" for="">
                                            Other
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-form__input-box text-message-box">
                                    <label for="birthday">Additional Notes</label>
                                    <textarea name="message" placeholder="Write a message"></textarea>
                                </div>
                                <div class="contact-form__btn-box">
                                    <button type="submit" class="thm-btn contact-form__btn m-5">Submit</button>
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