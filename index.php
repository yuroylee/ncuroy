<!doctype html>
<html lang="zh-tw">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="docs/4-0/assets/img/favicons/NCU.ico">
    <title>大會資訊/Conference</title>
    <link rel="canonical" href="docs/4.0/examples/carousel/">
    <!-- Bootstrap core CSS -->
    <link href="docs/4-0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="docs/4-0/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="docs/4-0/examples/carousel/carousel.css" rel="stylesheet">
    <!--style-->
    <link href="docs/4-0/dist/css/style.css" rel="stylesheet">
    
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">中央大學統計所</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
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
      </nav>
    </header>
    <main role="main">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="data/image/NCU.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>主辦單位-國立中央大學統計所</h1>
                <p>中央大學統計所成立於民國六十八年，為全國最早成立之獨立統計所，並於民國七十六年增設博士班，歷屆校友在產、官、學界均有傑出的表現。本所教師之學術研究在各領域皆為翹楚，且致力於學術之傳承。近年在新進教研人員的加入後，授課內容及統計學術研究之涵蓋面更趨多元與完備，且成果豐碩。</p>
                <p><a class="btn btn-lg btn-primary"  href="http://www.stat.ncu.edu.tw/" role="button">NCU STAT</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>會議主講人-</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>協辦單位-(誰給錢就放誰)</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
      <div class="container marketing">
        <!-- START THE FEATURETTES -->
        
        <div class="row ">
          <div class="col-md-12">
            <h2 class="featurette-heading">最新訊息<span class="text-muted"></span></h2>
            <?php include 'data/sqldata/news.php';?>
        </div>
          <div class="container text-center my-4">
            <h2 class="featurette-heading">需求與問題<span class="text-muted"></span></h2>

           <p class="font-weight-bold"></p>

          <a class="btn btn-primary mb-4" href="https://docs.google.com/forms/d/e/1FAIpQLSfUu1rLsbfwNPQHjvhEMlMCiDrgWDcdDiNmHPHCmaoS4pw8mQ/viewform?usp=sf_link" role="button" target="_blank">需求填表</a>
     </div>

     
      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2020 國立中央大學統計所:李協諭、閃電小軒 &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery-3.2.1.slim.min.js" ></script>
    <script>window.jQuery || document.write('<script src="docs/4-0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="docs/4-0/assets/js/vendor/popper.min.js"></script>
    <script src="docs/4-0/dist/js/bootstrap.min.js"></script>
    <script src="docs/4-0/dist/js/bootstrap.js"></script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="docs/4-0/assets/js/vendor/holder.min.js"></script>
</html>
