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
                        <li class="active">Gallery's</li>
                    </ul>
                    <h2>Our Gallery's</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->


        <!--Gallery Page Start-->
        <section >
            <div class="container  text-center">
                <div class="m-5" id="myBtnContainer">
                    <button class="btn-1 active-1" onclick="filterSelection('all')"> Show all</button>
                    <button class="btn-1" onclick="filterSelection('photos')">Photo's</button>
                    <button class="btn-1" onclick="filterSelection('media')">Media's</button>
                    <button class="btn-1" onclick="filterSelection('videos')">Video's</button>
                </div>

                <div class="row">
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 column photos">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="<?= base_url() ?>assets/images/gallery/1.png" alt="">
                                <a href="<?= base_url() ?>assets/images/gallery/1.png" class="img-popup"></a>
                                <!-- /.img-popup -->

                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 column photos">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="<?= base_url() ?>assets/images/gallery/2.png" alt="">
                                <a href="<?= base_url() ?>assets/images/gallery/2.png" class="img-popup"></a>
                                <!-- /.img-popup -->

                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 column photos">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="<?= base_url() ?>assets/images/gallery/3.png" alt="">
                                <a href="<?= base_url() ?>assets/images/gallery/3.png" class="img-popup"></a>
                                <!-- /.img-popup -->

                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 column media">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="<?= base_url() ?>assets/images/gallery/4.png" alt="">
                                <a href="<?= base_url() ?>assets/images/gallery/4.png" class="img-popup"></a>
                                <!-- /.img-popup -->

                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 column media">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="<?= base_url() ?>assets/images/gallery/5.png" alt="">
                                <a href="<?= base_url() ?>assets/images/gallery/5.png" class="img-popup"></a>
                                <!-- /.img-popup -->

                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 column media">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="<?= base_url() ?>assets/images/gallery/6.png" alt="">
                                <a href="<?= base_url() ?>assets/images/gallery/6.png" class="img-popup"></a>
                                <!-- /.img-popup -->

                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 column videos">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="<?= base_url() ?>assets/images/gallery/7.png" alt="">
                                <a href="<?= base_url() ?>assets/images/gallery/7.png" class="img-popup"></a>
                                <!-- /.img-popup -->

                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 column videos">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="<?= base_url() ?>assets/images/gallery/8.png" alt="">
                                <a href="<?= base_url() ?>assets/images/gallery/8.png" class="img-popup"></a>
                                <!-- /.img-popup -->

                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                    <!--Gallery Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 column videos">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="<?= base_url() ?>assets/images/gallery/9.png" alt="">
                                <a href="<?= base_url() ?>assets/images/gallery/9.png" class="img-popup"></a>
                                <!-- /.img-popup -->

                            </div>
                        </div>
                    </div>
                    <!--Gallery Page Single End-->
                </div>
            </div>
        </section>
        <!--Gallery Page End-->


        <!--Site Footer Start-->
        <?php $this->load->View('inclueds/footer') ?>
        <!--Site Footer End-->




    </div><!-- /.page-wrapper -->

    <?php $this->load->View('inclueds/mobile') ?>

    <?php $this->load->View('inclueds/footerlink') ?>

    <script>
        filterSelection("all")

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("column");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }


        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>

</body>



</html>