<?php
require 'config/config.php';
require 'engine/Controller.php';
session_start();
$db = new PDO (dsn:'sqlite:data/db.db');

$auth = $_SESSION['auth'] ?? null;
if (isset($_SESSION['naim']))
{
   $naim =  $_SESSION['naim'];
}
else {
  $naim = "";
};


$coment_stmt = $db->prepare(query:'SELECT username,comment,date FROM comments');
$coment_stmt->execute();
$users = $coment_stmt->fetchAll(mode:PDO::FETCH_ASSOC);
//var_dump($users);



?>



<!DOCTYPE html>
<html lang="ru">
 <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/rest.css">
<link rel="stylesheet" href="css/gellery.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/comment.css">
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
  </div>

<div class="conteiner_comemetn"> 


 <?php
foreach ($users  as $brand => $items)
{
 
  echo  "<div class = 'comemetn'>";
    foreach ($items as $key => $value)
    {
     echo "<div class = 'com_{$key}'>$value</div>"  ;  
    }
    echo  "</div>";
    
   
  }
  ?>

</div>


 <?php
  if (isset($_SESSION['naim']) )
  {
    include ('templates/form_coments.php');
  }
  ?>
  
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