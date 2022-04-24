<?php include 'include/session.php'; ?>
<?php if (isset($_SESSION['user']) && $_SESSION['user'] !== '') { ?>


	<!DOCTYPE html>
	<html lang="th">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>ยินดีตอนรับ | MiyukiShop</title>
		<?php include 'include/head.php'; ?>
	</head>

	<body>

		<div class="container">

			<?php include 'include/nav.php'; ?>

			<!-- Main content -->
			<div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/img1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/img2.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/img3.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <br>
          <div class="row" style=" text-align: center;">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-rocket" aria-hidden="true"></i>
                        <br>
                        รวดเร็ว</h3>
                  <h5 class="card-title" style="font-size: 18px;">MiyukiShop</h5>
                  <p class="card-text" style="font-size: 18px;">ทีมงานตอบไวตอบตลอด24ชั่วโมง!!</p>
                </div>
              </div>
            </div>
            <br>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                    <h3> <i class="fa fa-shield" aria-hidden="true"></i>
                        <br>
                        ปลอดภัย</h3>
                  <h5 class="card-title" style="font-size: 18px;">MiyukiShop</h5>
                  <p class="card-text" style="font-size: 18px;">ทางร้านของเรานำเข้าสินค้าที่มีคุณภาพตรงปกทุกอย่างค่ะ</p>
                </div>
              </div>
            </div>
          </div>
    </div>
    <?php include 'include/bestselling.php'; ?>

			<?php include 'include/main.php'; ?>
    
		<?php include 'include/scripts.php'; ?>

		<?php include 'include/footer.php'; ?>
  </body>

	</html>
<?php } else {
	echo "<script>location.href = 'login.php';</script>";
} ?>