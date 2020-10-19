<section class="ftco-section bg-light" id="NEWS">
  <div class="container">
  <div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-10 heading-section text-center ftco-animate">
					<span class="subheading">最新消息</span>
					<h2 class="mb-4">Latest NEWS Updates</h2>
				</div>
			</div>
    <div class="row d-flex">
      <?php
          echo include_once "sql/sqlnew.php";
      while ($row = $result->fetch_assoc()){
            $ID=$row['ID'];
            $title=$row['title'];
            $content=$row['Content'];
            $Date=$row['Date'];
            $IMAGE='images/newimage/image_'.$ID.'.jpg';
            echo '<div class="col-lg-4 ftco-animate">';
            echo '<div class="blog-entry">';
            echo '<a href="##" class="block-20" style="background-image: url('.$IMAGE.');"></a>';
            echo '<div class="text d-block">';
            echo '<div class="meta">';
            echo '<p>';
            echo '<span class="fa fa-calendar mr-2">'.$Date. '</span>';
            echo '</p>';
            echo '</div>';
            echo '<h3 class="heading">'.$title.'</h3>';
            echo '<p>'.substr($content,0,50).'...'.'</p>';
            echo '<form action="newdetials.php" method="post">';
            echo '<input type="hidden" value='.$ID.' id="news">';
            echo '<button type="submit" class="btn btn-secondary py-2 px-3">Read more</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    ?>
  </div>

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
              if ( $page-3 < $i && $i < $page+3 ) {
              if($i==$page){
                  echo '<ii class="active">';
                  echo '<span>'.$i.'</span>';
                 echo '</ii>';
                }else{
                echo "<ii><a href=?page=".$i."#NEWS>".$i."</a></ii>";
              }
              }
            }
            if($page==$pages){
                echo '<li><a href="##">&lt;</a></li>';
                }else{
                  echo '<li><a href=?page='.($page+1).'#NEWS>&gt;</a></li>';
              }?>     
              </ul>
          </div>
        </div>
      </div>
  </div>
</section>