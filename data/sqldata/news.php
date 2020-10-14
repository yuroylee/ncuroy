<div class="list-box">
<ul class="txt-list list-unstyled">
<?php
include 'sql.php';
while ($row =   $result->fetch_assoc())
{
    $hyperlink=$row['URL'];
    $content=$row['Content'];
    $Date=$row['Date'];
    ?>
  <li>
    <a href= "<?php echo $hyperlink; ?>">  
        <?php echo $content; ?>  
        <span> <?php echo $Date;?></span>
    </a>
</li>

<?php 
    }
?>
              </ul>
  </div>
<div class="btn-box">
  <a  role="button" class="btn btn-outline-primary" href="?page=1" >最前頁</a>
    <?php
  if($page==1) {
    ?>
      <a role="button" class="btn btn-outline-danger" href=<?php echo "?page=".($page+1);?> >後一頁</a>
        <?php    
  }elseif($page<$pages){
    ?>
      <a role="button" class="btn btn-outline-success" href=<?php echo "?page=".($page-1);?> >前一頁</a>
        <a role="button" class="btn btn-outline-danger" href=<?php echo "?page=".($page+1);?> >後一頁</a>
          <?php
  }else{
    ?>
      <a role="button" class="btn btn-outline-success" href=<?php echo "?page=".($page-1);?> >前一頁</a>
        <?php
  }
  ?>
    
    <a role="button" class="btn btn-outline-info" href=<?php echo "?Page=".$pages ;?>>最後頁</a>         
</div>