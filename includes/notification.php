<?php

if(isset($_GET['error'])){
  $mess = $_GET['error'];
  echo '<div class="notmes" style="background-color: rgb(236, 59, 59);color:white;padding:2px 5px; margin:10px 20%;text-align:center">'.$mess.'</div>';
}
else{
  echo '<div></div>';
}
?>
