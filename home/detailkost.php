<?php
// Include your database connection file
include "../koneksi.php";

// Initialize variables to store fetched data
$namakos = $alamatkos = $harga = $gambar = $untuk = $username = $jumlahkamar = $luas = $km = $kasur = $tv = $ac = '';

// Retrieve the ID from the query string
$id = $_GET['id'];

// Validate and sanitize the ID parameter
$id = filter_var($id, FILTER_VALIDATE_INT);
if (!$id || $id <= 0) {
    die("Invalid ID parameter.");
}

// Prepare and execute the query
$query = "SELECT * FROM data_kos WHERE id_kos = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Check for errors in query execution
if (!$result) {
    die("Database query failed."); // Handle gracefully in production
}

// Fetch the accommodation details
$row = mysqli_fetch_assoc($result);
if ($row) {
    $namakos = htmlspecialchars($row['namakos']); // Escape output to prevent XSS
    $alamatkos = htmlspecialchars($row['alamatkos']); // Escape output to prevent XSS
    $harga = $row['harga'];
    $gambar = htmlspecialchars($row['gambar_kos']); // Escape output to prevent XSS
    $untuk = htmlspecialchars($row['untuk']); // Assuming this field exists, escape output
    $username = htmlspecialchars($row['username']); // Assuming this field exists, escape output
    $jumlahkamar = $row['jumlahkamar']; // Assuming this field exists
    $luas = $row['luas']; // Assuming this field exists
    $km = $row['km']; // Assuming this field exists
    $kasur = $row['kasur']; // Assuming this field exists
    $tv = $row['tv']; // Assuming this field exists
    $ac = $row['ac']; // Assuming this field exists
} else {
    die("Accommodation not found."); // Handle gracefully in production
}

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>

<!doctype html>
<html lang="en">

<head>
<?php @include('head.php');?>
</head>

<body>
    <!--================Header Area =================-->
    <?php @include('navbar.php');?>
    <!--================Header Area =================-->
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="<?php echo $gambar; ?>" alt="<?php echo $namakos; ?>">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="blog_info text-left">
                                <div class="post_tag">
                                    <a href="#">Kost untuk <?php echo $untuk; ?></a>
                                </div>
                                <ul class="blog_meta list_style">
                                    <li><a href="#"><i class="lnr lnr-user left-icon"></i> pemilik: <?php echo $username; ?></a></li>
                                    <li><a href="#"><i class="lnr lnr-home left-icon"></i> kamar: <?php echo $jumlahkamar; ?></a></li>
                                    <li><a href="#"><i class="lnr lnr-map left-icon"></i> area: <?php echo $luas; ?></a></li>
                                    <li><a href="#"><i class="lnr lnr-tag left-icon"></i> harga: <?php echo $harga; ?>/bulan</a></li>
                                </ul>
                                <ul class="blog_meta list_style">
                                    <li><a href="#"><i class="lnr lnr-drop left-icon"></i> kamar mandi <?php echo $km; ?></a></li>
                                    <li><a href="#"><i class="lnr lnr-screen left-icon"></i> TV: <?php echo $tv; ?></a></li>
                                    <li><a href="#"><i class="lnr lnr-sun left-icon"></i> AC: <?php echo $ac; ?></a></li>
                                </ul>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook left-icon"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter left-icon"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github left-icon"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance left-icon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2><?php echo $namakos; ?></h2>
                            <p class="excert">
                                Berlokasi strategis dekat dengan Jalan Kaliurang dan berbagai macam fasilitas. Universitas di sekitaran antara lain UNY, USadhar, UPN Veteran, UGM, UAJY, AMIKOM, UII, dsb.
                            </p>
                            <p>
                                Kost eksklusif dengan desain modern dan fasilitas premium, termasuk kolam renang dan gym. Berada di kawasan elit, dekat dengan UGM dan pusat bisnis. Cocok untuk mahasiswa dan profesional muda yang menginginkan kenyamanan ekstra.

                            </p>
                            <p>
                                Kost ini berada di lingkungan yang tenang dan aman, ideal untuk mahasiswa yang membutuhkan suasana belajar yang kondusif. Dekat dengan UIN Sunan Kalijaga dan STIE YKPN. Menawarkan kamar yang luas dan bersih dengan harga terjangkau.</p>
                        </div>
                        <div class="col-lg-12">
                            <div class="quotes">
                                Kos ini bisa di-booking dan dibayar di situs dan aplikasi, tanpa harus ketemuan dengan pemilik.</div>
                            <div class="row">
                                <div class="col-6">
                                    <img class="img-fluid" src="image/blog/post-img1.jpg" alt="">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="image/blog/post-img2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 boking_table">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker11'>
                                            <input type='text' class="form-control" placeholder="Mulai Kost" />
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <select class="wide">
                                            <option data-display="Per Bulan">Durasi</option>
                                            <option value="1">Bulan</option>
                                            <option value="2">Tahun</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="input-group">
                                        <select class="wide">
                                            <option data-display="No Kamar">No Kamar</option>
                                            <option value="1">Room 01</option>
                                            <option value="2">Room 02</option>
                                            <option value="3">Room 03</option>
                                        </select>
                                    </div>
                                    <a class="book_now_btn button_hover" href="#">Pesan Sekarang</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <a class="book_now_btn genric-btn primary-border" href="#">Tanya Pemilik</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="navigation-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="detials">
                                    <p>Prev Post</p>
                                    <a href="#">
                                        <h4>Review</h4>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="comments-area">
                        <h4>05 Comments</h4>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="../public/image/blog/c1.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Emilly Blunt</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="../public/image/blog/c2.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Elsie Cunningham</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="../public/image/blog/c3.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Annie Stephens</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="../public/image/blog/c4.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Maria Luna</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="../public/image/blog/c5.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Ina Hayes</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form>
                            <div class="form-group form-inline">
                                <div class="form-group col-lg-6 col-md-6 name">
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 email">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                            </div>
                            <a href="#" class="primary-btn button_hover">Post Comment</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

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
    <script src="../public/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="../public/vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="../public/js/mail-script.js"></script>
    <script src="../public/js/stellar.js"></script>
    <script src="../public/vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="../public/js/custom.js"></script>
</body>

</html>