<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>รายละเอียด</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet' type='text/css'>
    <style>
		body {
		  font-family: 'Kanit', sans-serif;
		}
		h1,div {
		  font-family: 'Kanit', sans-serif;
		}
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php require_once('includes/navbar.php'); ?>
        <!-- Navbar End -->

        <?php
        $sql = "SELECT * FROM `view_land` WHERE `id` = '" . $_GET['id'] . "'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        ?>

        <!-- Call to Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                                    <img class="img-fluid w-100" src="img/land/<?php echo $row['image'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-4 text-primary"><?php echo $row['land'] ?>
                                        <?php if ($row['status'] == 'ว่าง') { ?> <a
                                            class="btn btn-info"><b><?php echo $row['for'] ?></b></a> <?php } ?></h1>
                                    <p><i class="fas fa-at text-primary me-2"></i>
                                        <?php echo $row['type'] ?></p>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>
                                        <?php echo $row['address'] ?></p>
                                    <p><i class="bi bi-bag-check-fill text-primary me-2"></i>
                                        <?php echo $row['rai'] . ' ชิ้น ' ; ?>
                                    </p>
                                    <h5><i class="fa fa-money-bill text-primary me-2"></i>
                                        <?php echo number_format($row['price'], 0); ?>
                                        ฿
                                    </h5>
                                </div>

                                <?php if ($row['status'] == 'ว่าง') { ?>
                                <a href="https://line.me/ti/p/~<?php echo $row['line'] ?>" target="_blank"
                                    class="btn btn-primary py-3 px-4 me-2"><i
                                        class="fab fa-line me-2"></i><?php echo $row['line'] ?></a>
                                <a href="tel:<?php echo $row['tel'] ?>" class="btn btn-dark py-3 px-4"><i
                                        class="fa fa-phone-alt me-2"></i><?php echo $row['tel'] ?></a>
                                    
                                        <?php
                                if (!$_SESSION['id']) { ?>
                                <a href="login.php" class="btn btn-info py-3 px-4 me-2">เข้าสู่ระบบเพื่อเพิ่มเรตติ้ง</a>
                                <?php } else { ?>
                                <a href="rating.php?user_id=<?php echo $_SESSION['id'];?>&id=<?php echo $row['id']; ?>" class="btn btn-info py-3 px-4 me-2">เพิ่มเรตติ้ง</a>
                                <a href="buying.php?sell_id=<?php echo $row['user_id'];?>&buy_id=<?php echo $_SESSION['id'];?>&land_id=<?php echo $_GET['id'];?>" class="btn btn-warning py-3 px-4 me-2">สั่งซื้อ</a>
                                <?php
                                    if ($_SESSION['id'] == $row['user_id']){
                                        $sql = "SELECT * FROM `sale` JOIN user ON user.id = sale.buy_id AND status = 1 AND land_id = " . $_GET['id'];
                                        $result = $conn->query($sql);
                                        while ($row = $result->fetch_assoc()) {
                            
                                            echo "<br><br><table class='table table-striped'><tr><th>Name</th><th> Accept</th></tr><tr><td>";
                                            echo $row["name"];
                                            echo" </td><td>";
                                            echo "<form method='post' action = 'accept.php?id=";
                                            echo $row["id"];
                                            echo "&land_id=";
                                            echo $_GET['id'];
                                            echo "'>";
                                            echo "<button type='submit' class='btn btn-danger'>Submit</button></form>";
                                            echo "</td></tr></table>";
                                        }
                                    }
                                ?>
                                <?php } ?>       
                                <?php } else { ?>
                                <h5 class="bg-danger rounded text-white position-absolute">
                                    <?php echo $row['status'] ?></h5>
                                <?php } ?>
                                

                            </div>
                        </div>

                        <div class="mx-auto mb-3 wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="text-center mb-3 mt-4">รายละเอียด</h1>
                            <?php echo $row['detail'] ?>
                        </div>
                        <hr>
                        <div class="text-right mx-auto mb-2 wow fadeInUp" data-wow-delay="0.1s">
                            <p class="text-muted">
                                ประกาศโดย : <?php echo $row['name'] ?> /
                                วันที่ลงประกาศ : <?php echo $row['created_date'];  ?>
                            </p>
                            <p>
                                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6321e296df71aadf"></script>

                                    <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox_sx8s"></div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">สินค้าอื่นๆของผู้ขาย <a class="btn btn-warning"><?php echo $row['name'] ?></a>
                    </h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

                    <?php
                    $sql_rand = "SELECT * FROM `view_land` WHERE `user_id` = '" . $row['user_id'] . "' ORDER BY RAND() LIMIT 12";
                    $result_rand = $conn->query($sql_rand);
                    while ($row_rand = $result_rand->fetch_assoc()) {
                    ?>

                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <?php if ($row_rand['status'] == 'ว่าง') { ?>
                            <h6 class="bg-info rounded text-white position-absolute">
                                <?php echo $row_rand['for'] ?></h6>
                            <?php } else { ?>
                            <h6 class="bg-danger rounded text-white position-absolute">
                                <?php echo $row_rand['status'] ?></h6>
                            <?php } ?>

                            <div class="d-flex align-items-center">
                                <a href="detail.php?id=<?php echo $row_rand['id']; ?>"><img
                                        class="img-fluid flex-shrink-0 rounded"
                                        src="img/land/<?php echo $row_rand['image'] ?>"
                                        style="width: 145px; height: 145px;">
                                </a>

                                <div class="ps-3">
                                    <a href="detail.php?id=<?php echo $row_rand['id']; ?>">
                                        <h6 class="fw-bold mb-1 text-primary"><?php echo $row_rand['land'] ?></h6>
                                    </a>
                                    <small><i class="fas fa-at text-primary me-2"></i>
                                        <?php echo $row_rand['type'] ?></small><br>
                                    <small><i class="fa fa-map-marker-alt text-primary me-2"></i>
                                        <?php echo $row_rand['address'] ?></small><br>
                                    <small><i class="bi bi-bag-check-fill text-primary me-2"></i>
                                        <?php echo $row_rand['rai'] . ' ชิ้น '; //. $row_rand['ngan'] . ' งาน ' . $row_rand['square_wa'] . ' ตารางวา ';// ?></small><br>
                                    <small><i class="fa fa-money-bill text-primary me-2"></i>
                                        <?php echo number_format($row_rand['price'], 0); ?>
                                        ฿</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Footer Start -->
        <?php require_once('includes/footer.php'); ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>