
<?php
/*echo   '<video controls="true" width="100%" height="450px" autoplay>
    <source src="'.$_REQUEST['video'].'" type="video/ogg"> 
  </video>';  */

echo '<object class="embed-responsive-item" data="'.$_REQUEST['video'].'"></object>';
?>
