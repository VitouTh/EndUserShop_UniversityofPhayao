<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
session_start();
require_once('includes/connect.php');
if (isset($_POST['submit'])) {
    $rate = $_POST['rate'];
    $remark = $_POST['remark'];
    $user_id = $_GET['user_id'];
    $land_id = $_GET['id'];

    $sql_check_land_id = "SELECT * FROM `rating_data` WHERE `land_id` = '" . $_GET['id'] . "' ";
    $check_land_id = $conn->query($sql_check_land_id);

    $sql_check_user_id = "SELECT * FROM `rating_data` WHERE `user_id` = '" . $_GET['user_id'] . "' ";
    $check_user_id = $conn->query($sql_check_user_id);

    $sql_check_rating = "SELECT * FROM `sale` WHERE status = 2 and `buy_id` = '" . $_GET['user_id'] . "' and land_id = '" . $_GET['id']. "' ";
    $check_rating = $conn->query($sql_check_rating);

    if($check_rating->num_rows){
        if (!$check_land_id->num_rows || !$check_user_id->num_rows) {
            $sql = "INSERT INTO `rating_data` (`user_id`, `remark`, `rating`, `land_id`) 
            VALUES ('" . $user_id . "', 
                    '" . $remark . "', 
                    '" . $rate . "',
                    '" . $land_id . "');";
        
            $result = $conn->query($sql);
            }else {
                $message = "rating already";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
    }
    else{
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal.fire({
              title: "ต้องทำการสั่งซื้อสินค้าก่อน!",
              text: "โปรดลองใหม่!",
              type: "warning",
              icon: "error"
            });';
        echo '}, 500 );</script>';

        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { 
                window.location.href = "index.php";';
        echo '}, 5000 );</script>';
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>เกี่ยวกับเรา</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }

        .rate:not(:checked)>input {
            position: absolute;
            top: -9999px;
        }

        .rate:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .rate:not(:checked)>label:before {
            content: '★ ';
        }

        .rate>input:checked~label {
            color: #ffc700;
        }

        .rate:not(:checked)>label:hover,
        .rate:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .rate>input:checked+label:hover,
        .rate>input:checked+label:hover~label,
        .rate>input:checked~label:hover,
        .rate>input:checked~label:hover~label,
        .rate>label:hover~input:checked~label {
            color: #c59b08;
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php require_once('includes/navbar.php'); ?>
        <!-- Navbar End -->

        <?php
        $query = mysqli_query($conn, "SELECT AVG(rating) as AVGRATE from rating_data JOIN user ON rating_data.user_id = user.id AND rating_data.land_id = " . $_GET['id']);
        $row = mysqli_fetch_array($query);
        $AVGRATE = $row['AVGRATE'];
        $query = mysqli_query($conn, "SELECT count(rating) as Total from rating_data JOIN user ON rating_data.user_id = user.id AND rating_data.land_id =" . $_GET['id']);
        $row = mysqli_fetch_array($query);
        $Total = $row['Total'];
        $query = mysqli_query($conn, "SELECT count(remark) as Totalreview from  rating_data JOIN user ON rating_data.user_id = user.id AND rating_data.land_id =" . $_GET['id']);
        $row = mysqli_fetch_array($query);
        $Total_review = $row['Totalreview'];
        $review = mysqli_query($conn, "SELECT remark,rating,name from rating_data JOIN user ON rating_data.user_id = user.id AND rating_data.land_id =" . $_GET['id']);
    
        $rating = mysqli_query($conn, "SELECT count(*) as Total,rating from rating_data JOIN user ON rating_data.user_id = user.id AND rating_data.land_id =" . $_GET['id'] . " group by rating order by rating desc");
        ?>

<?php
        $sql1 = "SELECT * FROM `view_land` WHERE `id` = '" . $_GET['id'] . "'";
        $result1 = $conn->query($sql1);
        $row1 = $result1->fetch_assoc();
        ?>
        <!-- About Start -->
        <form action="" method="post">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <h3><b>Rating & Reviews ของ <?php echo $row1['name']; ?></b></h3>
                            <div class="row">

                                <div class="col-md-6">
                                    <h3 align="center"><b><?php echo round($AVGRATE, 1); ?></b> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:#ff9f00;"></i></h3>
                                    <p><?= $Total; ?> ratings and <?= $Total_review; ?> reviews</p>
                                </div>
                                <div class="col-md-6">
                                    <?php
                                    while ($db_rating = mysqli_fetch_array($rating)) {
                                    ?>
                                        <h4 align="center"><?= $db_rating['rating']; ?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> Total <?= $db_rating['Total']; ?></h4>


                                    <?php
                                    }

                                    ?>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                while ($db_review = mysqli_fetch_array($review)) {
                                ?>
                                    <h4><?= $db_review['rating']; ?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> by <?= $db_review['name']; ?></h4>
                                    <p><?= $db_review['remark']; ?></p>
                                    <hr>
                                <?php
                                }

                                ?>
                            </div>
                        </div>
                        <div id="rating_div">
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text">1 star</label>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div><br>
                    <input type="hidden" name="demo_id" id="demo_id" value="1">
                    <div class="col-md-4">
                        <textarea class="form-control" rows="5" placeholder="Write your review here..." name="remark" id="remark" required></textarea><br>
                        <p><button class="btn btn-default btn-sm btn-info" id="srr_rating" id="submit" name="submit">Submit</button></p>

                    </div>
                </div>
            </div>
        </form>
        <!-- About End -->

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