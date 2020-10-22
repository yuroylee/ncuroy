<?php
$ID=$_GET['NewsID'];
$start=0;
$per=3;
include "sql/sqlnew.php";
$sql = "SELECT * FROM `news` WHERE `ID`=".$ID; //修改成你要的 SQL 語法
$connect->query("SET NAMES 'utf8'");
      //呼叫query方法(SQL語法)
$status = $connect->query( $sql )->fetch_assoc() or die("Error");
//取前三筆當最新訊息
$sql = "SELECT * FROM `news` ORDER BY `Date` DESC";
$result = $connect->query($sql.' LIMIT '.$start.', '.$per) or die("Error");
?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
<title>最新資訊</title>	<meta charset="utf-8">
	<link rel="icon" href="images/NCU.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">
	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container d-flex align-items-center">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
          	<ul class="navbar-nav mr-auto">
            	<li class="nav-item active">
              	<a class="nav-link" href="index.php">大會資訊/Conference <span class="sr-only">(current)</span></a>
            	</li>
           	 	<li class="nav-item">
              	<a class="nav-link" href="Program.php">研討會議程 / Program</a>
            	</li>
            	<li class="nav-item">
              	<a class="nav-link" href="information.php">講者資訊</a>
            	</li>
            	<li class="nav-item">
             	 <a class="nav-link" href="Registration.php">報名 / Registration</a>
            	</li>
            	<li class="nav-item">
              	<a class="nav-link" href="Other.php">其他資訊 / Others</a>
            	</li>
          	</ul>
        	</div>	
		</div>
	</nav>
</header>

<?php
      $ID=$status['ID'];
	  $titles_new=$status['title'];
	  $content=$status['Content'];
	  $Date=$status['Date'];
	  
?>


<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate">
		<h2 class="mb-3"><?php echo $titles_new;?></h2>
		<h3 class="mb-3"><?php echo $Date;?></h3>
        <p><?php echo $content?></p>
        <p>
          <img src="images/NCU3.jpg" alt="" class="img-fluid">
        </p>
	  </div> <!-- .col-md-8 -->
	  

    <div class="col-lg-4 sidebar ftco-animate">

      <div class="sidebar-box ftco-animate">
		<h3 class="heading-sidebar">Recent news</h3>
		<?php
		  while ($row = $result->fetch_assoc()){
			$ID=$row['ID'];
			$title=$row['title'];
			$content=$row['Content'];
			$Date=$row['Date'];
			$IMAGE='images/newimage/image_'.$ID.'.jpg';
		?>
        <div class="block-21 mb-4 d-flex">
          <a class="blog-img mr-4" style="background-image: url('<?php echo $IMAGE; ?>');"></a>
          <div class="text">
            <h3 class="heading"><a href="?NewsID=<?php echo $ID;?>"><?php echo $title; ?></a></h3>
            <div class="meta">
              <div><a href="?NewsID=<?php echo $ID;?>"><span class="icon-calendar"></span> <?php echo $Date;?></a></div>
            </div>
          </div>
        </div>
		<?php
		  }
		?>
      </div>



      <div class="sidebar-box ftco-animate">
        <h3 class="heading-sidebar">Paragraph</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
      </div>
    </div>

  </div>
  </div>
</section> <!-- .section -->



<?php include_once "sponsor.php" ?>
	<?php include_once "footer.php" ?>
	</body>
	</html>