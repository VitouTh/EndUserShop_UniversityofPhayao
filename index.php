<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>รับฝากขายสินค้ามือสองฟรี</title>
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

        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <br>
                    <h1 class="display-5 animated fadeIn mb-4">ค้นหา สินค้ามือสองราคาถูก </span> สำหรับครอบครัวของคุณ</h1>
                    <p class="animated fadeIn mb-4 pb-2">
                        คุณสามารถสมัครสมาชิกและเข้าสู่ระบบเพื่อลงประกาศขายได้ด้วยตัวคุณเอง</p>

                    <?php
                    if (!$_SESSION['id']) { ?>
                    <a href="register.php" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">สมัครสมาชิก</a>
                    <?php } else { ?>
                    <a href="manage/index.php"
                        class="btn btn-primary py-3 px-5 me-3 animated fadeIn">จัดการประกาศของคุณ</a>
                    <?php } ?>


                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid"
                                src="https://image.ezymar.com/article/20190812/11/2bab803f-0411-478f-8086-b2f50568e239.jpg"
                                alt="" style="width: 700px;height: 500px;">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid"
                                src="http://f.ptcdn.info/050/031/000/1430837628-1115105298-o.jpg"
                                alt="" style="width: 700px;height: 500px;">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid"
                                src="https://www.smeleader.com/wp-content/uploads/2014/02/%E0%B8%82%E0%B8%B2%E0%B8%A2%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%AA%E0%B8%AD%E0%B8%87-%E0%B8%AA%E0%B9%88%E0%B8%87%E0%B8%95%E0%B8%A3%E0%B8%87%E0%B8%88%E0%B8%B2%E0%B8%81%E0%B8%8D%E0%B8%B5%E0%B9%88%E0%B8%9B%E0%B8%B8%E0%B9%88%E0%B8%99-%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%A5%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%84%E0%B8%99%E0%B8%88%E0%B8%B4-%E0%B8%AA%E0%B8%B4%E0%B8%99%E0%B8%84%E0%B9%89%E0%B8%B2%E0%B8%8D%E0%B8%B5%E0%B9%88%E0%B8%9B%E0%B8%B8%E0%B9%88%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%96%E0%B8%B9%E0%B8%81-4.jpg"
                                alt="" style="width: 700px;height: 500px;">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid"
                                src="http://i2.wp.com/www.thaismescenter.com/wp-content/uploads/2015/11/11.jpg"
                                alt="" style="width: 700px;height: 500px;">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid"
                                src="https://katojapanshop.yellowpages.co.th/sites/storage/files/styles/550x550/typmedia/olc/80009444/60fe3bba08210.jpg?itok=62dc3c32"
                                alt="" style="width: 700px;height: 500px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <form action="" method="POST">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <input type="text" name="txt_keyword" class="form-control border-0 py-3"
                                        placeholder="พิมพ์ชื่อจังหวัดหรือรายละเอียด"
                                        value="<?php if (isset($_POST['txt_keyword']) && !empty($_POST['txt_keyword'])) {
                                                                                                                                            echo $_POST['txt_keyword'];
                                                                                                                                        } ?>">
                                </div>
                                <div class="col-md-4">
                                    <select class="form-select border-0 py-3" name="type">
                                        <option selected>ประเภท :: ทั้งหมด</option>
                                        <option value="เครื่องใช้ไฟฟ้า" <?php if ($_POST['type'] == 'เครื่องใช้ไฟฟ้า') {
                                                                    echo 'selected';
                                                                } ?>>เครื่องใช้ไฟฟ้า</option>
                                        <option value="เสื้อผ้า" <?php if ($_POST['type'] == 'เสื้อผ้า') {
                                                                        echo 'selected';
                                                                    } ?>>เสื้อผ้า</option>
                                        <option value="ของใช้ทั่วไป" <?php if ($_POST['type'] == 'ของใช้ทั่วไป') {
                                                                        echo 'selected';
                                                                    } ?>>ของใช้ทั่วไป</option>
                                        <option value="รองเท้า" <?php if ($_POST['type'] == 'รองเท้า') {
                                                                        echo 'selected';
                                                                    } ?>>รองเท้า</option>
                                        <option value="กระเป๋า" <?php if ($_POST['type'] == 'กระเป๋า') {
                                                                        echo 'selected';
                                                                    } ?>>กระเป๋า</option>
                                        <option value="หนังสือ" <?php if ($_POST['type'] == 'หนังสือ') {
                                                                        echo 'selected';
                                                                    } ?>>หนังสือ</option>    
                                         <option value="อื่นๆ" <?php if ($_POST['type'] == 'อื่นๆ') {
                                                                        echo 'selected';
                                                                    } ?>>อื่นๆ</option>                                                                                                                                  
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-select border-0 py-3" name="status">
                                        <option selected>สถานะ :: ทั้งหมด</option>
                                        <option value="ว่าง" <?php if ($_POST['status'] == 'ว่าง') {
                                                                    echo 'selected';
                                                                } ?>>ว่าง</option>
                                        <option value="ไม่ว่าง" <?php if ($_POST['status'] == 'ไม่ว่าง') {
                                                                    echo 'selected';
                                                                } ?>>ขายแล้ว</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-dark border-0 w-50 py-3">ค้นหา</button>
                            <a href="index.php" class="btn btn-secondary border-0 w-45 py-3">รีเซ็ต</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Search End -->

        <?php
        // echo $_GET['for'];
        // echo $_POST['type'];
        // echo $_POST['status'];
        if (isset($_GET['for'])) {
            $for = $_GET['for'];
            $wc_for = "AND `for` = '" . $for . "'";
        } else {
            $for = 'ทั้งหมด';
            $wc_for = "";
        }
        if (isset($_POST['type']) && $_POST['type'] != 'ประเภท :: ทั้งหมด') {
            $type = $_POST['type'];
            $wc_type = "AND `type` = '" . $type . "'";
        } else {
            $type = 'ทั้งหมด';
            $wc_type = "";
        }
        if (isset($_POST['status']) && $_POST['status'] != 'สถานะ :: ทั้งหมด') {
            if ($_POST['status'] == 'ว่าง') {
                $status = $_POST['status'];
                $wc_status = "AND `status` = 'ว่าง'";
            } else {
                $status = 'ไม่ว่าง';
                $wc_status = "AND `status` <> 'ว่าง'";
            }
        } else {
            $status = 'ทั้งหมด';
            $wc_status = "";
        }
        if (isset($_POST['txt_keyword'])) {
            $kw = $_POST['txt_keyword'];
            $wc_kw = "AND (`land` LIKE '%$kw%' OR `address` LIKE '%$kw%' OR `detail` LIKE '%$kw%')";
        }
        ?>

        <?php //$for = isset($_GET['for']) ? $_GET['for'] : 'ทั้งหมด'; 
        ?>
        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h2 class="mb-3">รายการล่าสุด</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary  <?php echo $for == 'ทั้งหมด' ? 'active' : '' ?>"
                                    href="index.php">ทั้งหมด</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary <?php echo $for == 'ขาย' ? 'active' : '' ?>"
                                    href="index.php?for=ขาย">ขาย</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary <?php echo $for == 'รับซื้อ' ? 'active' : '' ?>"
                                    href="index.php?for=รับซื้อ">รับซื้อ</a>
                            </li>
                        
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <?php
                            //if ($for == 'ทั้งหมด') {
                            //    $sql = "SELECT * FROM `view_land` WHERE 1 $wc_status $wc_type ORDER BY `id` DESC";
                            //} else {
                            $sql = "SELECT * FROM `view_land` WHERE 1 $wc_for $wc_status $wc_type $wc_kw ORDER BY `id` DESC";
                            //}
                            $result = $conn->query($sql);
                            $num = ['0.1s', '0.3s', '0.5s'];
                            $i = 0;
                            while ($row = $result->fetch_assoc()) {
                                if ($i >= 3) {
                                    $i = 0;
                                }
                            ?>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo $num[$i]; ?>">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a target="_blank" href="detail.php?id=<?php echo $row['id']; ?>"><img
                                                class="img-fluid" src="img/land/<?php echo $row['image'] ?>"
                                                style="width: 408px;height: 271px;"></a>
                                        <?php if ($row['status'] == 'ว่าง') { ?>
                                        <div
                                            class="bg-info rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            <?php echo $row['for']; ?></div>
                                        <?php } else { ?>
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            <?php echo $row['status']; ?></div>
                                        <?php } ?>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            <?php echo $row['type']; ?></div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <a class="text-primary mb-3 d-block h5"
                                            href="detail.php?id=<?php echo $row['id']; ?>"
                                            target="_blank"><?php echo $row['land']; ?></a>
                                        <p><i
                                                class="bi bi-person-fill text-primary me-2"></i><?php echo $row['name']; ?>
                                        </p>
                                        <p><i
                                                class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $row['address']; ?>
                                        </p>
                                        <p><i
                                                class="bi bi-bag-check-fill text-primary me-2"></i><?php echo $row['rai'] . ' ชิ้น ' ; ?>
                                        </p>
                                        <p><i class="fa fa-money-bill text-primary me-2"></i>
                                            <?php echo number_format($row['price'], 0); ?>
                                            ฿
                                        </p>
                                        <p class="text-center">
                                            <a href="https://line.me/ti/p/~<?php echo $row['line'] ?>" target="_blank"
                                                type="button" class="btn btn-outline-primary btn-sm btn-block"
                                                style="width: 230px;"><i class="fab fa-line"
                                                    style="padding-right: 5px;"></i> ติดต่อ</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                                $i++;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->

        <!-- Footer Start -->
        <?php require_once('includes/footer.php'); ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <!--<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>-->
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
<!--Start of Tawk.to Script-->
<!--<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62ed0fae37898912e9616be1/1g9n0agm6';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>-->
<!--End of Tawk.to Script-->
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "124616495602092", // Facebook page ID
            line: "//line.me/ti/p/themonter555", // Line QR code URL
            call_to_action: "Message us", // Call to action
            button_color: "#A8CE50", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,line", // Order of buttons
        };
        var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<script type="text/javascript" src="https://www.counters-free.net/count/bczd"></script><br>
 <a href='https://www.versicherungen.at/'>Versicherungen Vergleichsportal</a> <script type='text/javascript' src='https://www.whomania.com/ctr?id=161104e5e948e48d8e58c5e48745667e9df95d77'></script>
<!-- /GetButton.io widget -->

</html>