<?php
require 'config/config.php';
require 'engine/Controller.php';

session_start();
$auth = $_SESSION['auth'] ?? null;
if (isset($_SESSION['naim']))
{
   $naim =  $_SESSION['naim'];
}
else {
  $naim = "";
};

?>



<!DOCTYPE html>
<html lang="ru">
 <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/rest.css">
<link rel="stylesheet" href="css/gellery.css">
<link rel="stylesheet" href="css/form.css">
<title>slider</title>
 </head>
 <body> 
            <?php  if (isset($_SESSION['naim']) )
            {
              include ('templates/get_out.php');
           }
        else 
        {
          echo '<div class="login "><a href="login.php">войти</a></div>';
        }
          ?>

      </div>
    </div>


<div class = "gallery">
<?php
if (isset($_SESSION['naim']) ) {   

  include ('templates/loading.php'); 

}
?>
<div class = "modal">
<div class ="numbering" >
<div class ="number" id ="number">1</div><div class ="number">/</div><div class ="number"><?php  echo count($files1)-1;  ?></div>
</div>
<img src ='<?php echo UPLOAD_DIR. URL . $files1[1];?>' id = "1"  alt="1"  class ="img_modal" />
 </div>
 <div class ="conteiner" >
  <div class ="conteiner_bloc" >

  <?php

foreach($files1  as $key => $value) {
    if($key == 0 ){continue;}

    echo '<div  class ="conteiner_img"><img src="img/'.$value.'"  id = "'.$key.'" alt="1" class ="img_fit"/>';

       if (isset($_SESSION['naim']) ) {   
 echo ' <form method="post" action="engine/function_delete.php">
 <input   type="hidden" name="delete" value="'.$value.'">
<button type="submit" class="delete" aria-label="Close">
    <span aria-hidden="true"></span>
</button>
</form></div>';

}

else {

  echo '</div>';
}

}

?>
  

  </div>
  <div class ="pointers_bloc_left">
  <div class ="pointers_left"></div>
  </div>
  <div class ="pointers_bloc_right">
  <div class ="pointers_right"></div>
  </div>



  <form action="#" method="post">
  
  <textarea id="read" name="cread" rows="5" cols="33"   readonly class = "coment_read"></textarea >
  <?php 
  
  if (isset($_SESSION['naim']) )
  {
  echo '<textarea id="coment" name="coment" rows="5" cols="33"  class = "coment_write"></textarea >
   <div class = "submit_coment" >
   <input type="submit" value="отправить"></p>
   </div>';
  }
  ?>
  </form>
  

</div>


</div>
<div  id ="modalB" class = "modalBig hide" >  
<div  class ="modalB_img">
<img src="img/1.jpg"  id = "1" alt="1" class ="modalB_Img_fit"/>
</div>
<div class = "closeModalB">
<div class="close"></div>
</div>
<div class ="modalB_pointers_bloc_left">
  <div class ="modalB_pointers_left"></div>
  </div>
  <div class ="modalB_pointers_bloc_right">
  <div class ="modalB_pointers_right"></div>
  </div>
</div>




<script src="js/qwe.js"></script>
<script src="js/form.js"></script>



 </body>
</html>
