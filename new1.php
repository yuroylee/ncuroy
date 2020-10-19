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
