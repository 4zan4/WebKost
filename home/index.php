<?php 

?>
<!doctype html>
<html lang="en">

<head>
    <?php @include('head.php'); ?>

    <style>
        .hotel_img {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 200px;
            /* Tentukan tinggi gambar sesuai kebutuhan */
        }

        .hotel_img img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
    </style>

</head>

<body>
    <!--================Header Area =================-->
    <?php @include('navbar.php'); ?>
    <!--================Header Area =================-->

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Cari Kost Gampang</h2>
                    <p>Jika Anda sedang mencari tempat yang nyaman untuk tinggal,
                        kami menyediakan kost dengan fasilitas lengkap dan lingkungan yang aman. Nikmati hidup Anda dengan tenang di lingkungan yang bersih, nyaman, dan terjaga.
                    </p>
                    <a href="../index.php" class="btn theme_btn button_hover">Get Started</a>
                </div>
            </div>
        </div>

    </section>
    <!--================Banner Area =================-->

    <!--================ Accomodation Area  =================-->
    <?php @include('kost.php'); ?>
    <!--================ Accomodation Area  =================-->

    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_w">Fasilitas Kost</h2>
                <p>Tempat tinggal nyaman dengan berbagai fasilitas modern.</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Ruang Makan</h4>
                        <p>Ruang makan bersama yang nyaman untuk menikmati makanan dan berkumpul bersama teman.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Parkir Motor</h4>
                        <p>Fasilitas tempat parkir yang aman dan nyaman untuk kendaraan pribadi Anda.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Laundry</h4>
                        <p>Layanan laundry untuk membersihkan pakaian Anda dengan mudah dan nyaman.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-car"></i>Parkir Mobil</h4>
                        <p>Fasilitas tempat parkir yang aman dan nyaman untuk kendaraan pribadi Anda.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Keamanan 24 Jam</h4>
                        <p>Penjagaan keamanan 24 jam untuk kenyamanan dan keamanan penghuni.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Kafe</h4>
                        <p>Kafe nyaman dengan berbagai pilihan minuman dan makanan ringan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================ Facilities Area  =================-->

    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content">
                        <h2 class="title title_color">Tentang Kami <br>Sejarah Kami<br>Misi & Visi</h2>
                        <p>Kami adalah platform pemesanan kost yang bertujuan untuk menyediakan pengalaman tinggal yang nyaman dan aman bagi pelanggan kami. Kami memahami pentingnya lingkungan yang bersih dan fasilitas yang lengkap bagi para penghuni kost. Dengan komitmen kepada layanan dan kualitas, kami menawarkan berbagai pilihan kost yang sesuai dengan kebutuhan Anda.</p>
                        <a href="#" class="button_hover theme_btn_two">Minta Informasi Lebih Lanjut</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="../public/image/blog/post-img2.jpg" alt="img">
                </div>
            </div>
        </div>
    </section>

    <!--================ About History Area  =================-->

    <!--================ Testimonial Area  =================-->
    <section class="testimonial_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Testimonial from our Clients</h2>
                <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
            </div>
            <div class="testimonial_slider owl-carousel">
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="../public/image/testtimonial-2.jpg" alt="">
                    <div class="media-body">
                        <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                        <a href="#">
                            <h4 class="sec_h4">Fanny Spencer</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="../public/image/testtimonial-1.jpg" alt="">
                    <div class="media-body">
                        <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                        <a href="#">
                            <h4 class="sec_h4">Fanny Spencer</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="../public/image/testtimonial-2.jpg" alt="">
                    <div class="media-body">
                        <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                        <a href="#">
                            <h4 class="sec_h4">Fanny Spencer</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="../public/image/testtimonial-1.jpg" alt="">
                    <div class="media-body">
                        <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                        <a href="#">
                            <h4 class="sec_h4">Fanny Spencer</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">About Agency</h6>
                        <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Navigation Links</h6>
                        <div class="row">
                            <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Feature</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Newsletter</h6>
                        <p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>
                        <div id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                    <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>
                                </div>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h6 class="footer_title">InstaFeed</h6>
                        <ul class="list_style instafeed d-flex flex-wrap">
                            <li><img src="../public/image/instagram/Image-01.jpg" alt=""></li>
                            <li><img src="../public/image/instagram/Image-02.jpg" alt=""></li>
                            <li><img src="../public/image/instagram/Image-03.jpg" alt=""></li>
                            <li><img src="../public/image/instagram/Image-04.jpg" alt=""></li>
                            <li><img src="../public/image/instagram/Image-05.jpg" alt=""></li>
                            <li><img src="../public/image/instagram/Image-06.jpg" alt=""></li>
                            <li><img src="../public/image/instagram/Image-07.jpg" alt=""></li>
                            <li><img src="../public/image/instagram/Image-08.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border_line"></div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../public/js/jquery-3.2.1.min.js"></script>
    <script src="../public/js/popper.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="../public/js/jquery.ajaxchimp.min.js"></script>
    <script src="../public/js/mail-script.js"></script>
    <script src="../public/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="../public/vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="../public/js/mail-script.js"></script>
    <script src="../public/js/stellar.js"></script>
    <script src="../public/vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="../public/js/custom.js"></script>
</body>

</html>