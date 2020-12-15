<?php
  include "sql/sqlnew.php";
  $sql = "SELECT * FROM `news` ORDER BY `Date` DESC"; //修改成你要的 SQL 語法
  $connect->query("SET NAMES 'utf8'");
//呼叫query方法(SQL語法)
  $status = $connect->query( $sql );
  $numRows =$status ->num_rows ;
  $per = 3; //每頁顯示項目數量
  $pages = ceil($numRows/$per); //取得不小於值的下一個整數
  if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
      $page=1; //則在此設定起始頁數
  } else {
      $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
  }
  $start = ($page-1)*$per; //每一頁開始的資料序號
  $result = $connect->query($sql.' LIMIT '.$start.', '.$per) or die("Error");
?>

<section class="ftco-section bg-light" >
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-10 heading-section text-center ftco-animate">
					<span class="subheading" id="NEWS">最新消息</span>
					<h2 class="mb-4">Latest NEWS Updates</h2>
        </div>
        <div class="row d-flex">
        <?php
    
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
            <form action="infodetail.php" method="get">
              <input type="hidden" name="NewsID" value=<?php echo $ID;?> />
              <input type="submit" value="Read more" class="btn btn-secondary py-2 px-3">
            </form>
          </div>
        </div>
      </div>
  <?php

    if($numRows%$per>0&&$page==$pages){
      $j=0;  
        while(($per-$numRows%$per)>($j)){
 ?>
        <div class="col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="##" class="block-20" style="background-image: url('images/newimage/image_1.jpg');"></a>
              <div class="text d-block">
                <div class="meta">
                  <p><span class="fa fa-calendar mr-2">2020-xx-xx</span></p>
                </div>
                <h3 class="heading"> 敬啟期待 </h3>
                <p>明天要報告. 時間Wed Apr 6 21:43:10 2011. 明天要報告還沒做完PTT 好開心幹是ppt不是ptt 幹怎麼那麼像-- ※ 發信站: 批踢踢實業坊(ptt.cc) ◇ From: ... </p>
                <button type="submit" class="btn btn-secondary py-2 px-3">READ more </button>
              </div>
            </div>
          </div>   
<?php
        $j++; 
        }
      }
   }
  ?>
</div>
      <!--BUTTON-->
</br>
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