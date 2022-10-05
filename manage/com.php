<?php 

include 'config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form
    
	$sql = "INSERT INTO comments (`name`, `email`, `comment`)
			VALUES ('$name', '$email', '$comment')";


      

	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>คอมเมนต์</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- sweetalert2 -->
    <script src="../lib/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../lib/sweetalert2/dist/sweetalert2.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- Custom sweetalert2 Stylesheet -->
    <link href="../css/sweetalert2.css" rel="stylesheet">
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

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                            style="max-width: 600px;">
                            <h3 class="mb-3">คอมเมนต์</h3>
                            <a href="index.php" class="btn btn-secondary btn" style="width: 200px;"> ย้อนกลับ</a>
                        </div>
                    </div>
                    <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
					<div class="wrapper">
					<?php
        $sql = "SELECT * FROM `user` WHERE `id` = '" . $row_me['id'] . "'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        ?>
						<div class="align-items-center">
							<form action="" method="POST" class="form">
								<div class="row">
									<div class="input-group">
										<label for="name">Name</label>
										<input class="form-control" type="text" name="name" id="name" placeholder="Enter your Name"readonly required value="<?php echo $row['name']; ?>">
									</div>
									<div class="input-group">
										<label for="email">Email</label>
										<input class="form-control" type="email" name="email" id="email" placeholder="Enter your Email"readonly required value="<?php echo $row['email']; ?>">
									</div>
								</div>
								<div class="input-group textarea">
									<label for="comment">Comment</label>
									<textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
								</div>
                                <div class="row">
                                    <div class="input-group">
                                        <button name="submit" class="btn">Post Comment</button>                                  
                                    </div>

                                    <div class="input-group">
                                    <a href="com_edit.php?id=<?php echo $row['id']; ?>"
                                            class=" btn btn-danger btn-sm " style="background-color:red;">แก้ไข</a>                                 
                                    </div>
                                </div>
                            
							</form>
							<div class="prev-comments">
								<?php 
								 $sql = "SELECT * FROM `comments` WHERE 1 $wc_for $wc_status $wc_type $wc_kw ORDER BY `id` DESC";
                                 //}
                                 $result = $conn->query($sql);
                                 $num = ['0.1s', '0.3s', '0.5s'];
                                 $i = 0;
                                 while ($row = $result->fetch_assoc()) {
                                     if ($i >= 3) {
                                         $i = 0;
                                     }
                                 ?>
								
								<div class="single-item">
									<h4><?php echo $row['name']; ?></h4>
									<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
									<p><?php echo $row['comment']; ?></p>
								</div>
								<?php

									}
								
								
							?>
						</div>
					</div>
                </div>
            </div>

        </div>
        </div>
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
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>