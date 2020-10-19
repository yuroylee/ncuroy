<section class="ftco-section bg-light" >
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-10 heading-section text-center ftco-animate">
					<span class="subheading" id="NEWS">最新消息</span>
					<h2 class="mb-4">Latest NEWS Updates</h2>
        </div>
        <div class="row d-flex">
        <?php
         include "sql/sqlnew.php";
         while ($row = $result->fetch_assoc()){
          $ID=$row['ID'];
          $title=$row['title'];
          $content=$row['Content'];
          $Date=$row['Date'];
          $IMAGE='images/newimage/image_'.$ID.'.jpg';
          ?>
      <div class="col-lg-4 ftco-animate">
        <div class="blog-entry">
          <a href="##" class="block-20" style="background-image: url('<?php echo $IMAGE; ?>');"></a>
          <div class="text d-block">
            <div class="meta">
              <p><span class="fa fa-calendar mr-2"><?php echo $Date;?></span></p>
            </div>
            <h3 class="heading"><?php echo $title?></h3>
            <p> <?php echo substr($content,0,50).'...';?></p>
            <form action="newdetials.php" method="post">
              <input type="hidden" value=<?php echo $ID;?> id="news">
              <button type="submit" class="btn btn-secondary py-2 px-3">Read more</button>
            </form>
          </div>
        </div>
      </div>
  <?php
      }
  ?>
</div>
      <!--BUTTON-->

      <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
        <ul>
          <?php
            if($page==1){
                echo '<li><a href="##">&lt;</a></li>';
                }else{
                echo '<li><a href=?page='.($page-1).'#NEWS>&lt;</a></li>';
             }
          for( $i=1 ; $i<=$pages ; $i++ ) {
            if($i==$page){
              ?>
                <li class="active"><span><?php echo $i;?> </span></li>
              <?php
              }else{
                ?>
              <li><a href="?page=<?php echo $i;?>#NEWS"> <?php echo $i;?> </a></li>
              <?php
            }
          }
          if($page==$pages){
            echo '<li><a href="##">&gt;</a></li>';
            }else{
              echo '<li><a href=?page='.($page+1).'#NEWS>&gt;</a></li>';
          }
            ?>     
            </ul>
        </div>
      </div>
    </div>
<!--FIN-->
  </div>
</section>