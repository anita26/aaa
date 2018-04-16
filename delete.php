<?php

   
      $conn = mysqli_connect('localhost', 'root' ,'','demo')  or die(mysql_error());

      if (isset($_GET["edit"])){

 $id= mysql_real_escape_string($_GET["edit"]);


      $sql = "DELETE FROM addition WHERE id=$id";
      if(mysqli_query($conn,$sql))
      {
      echo "record delete";
      header("location:welcome.php");
  }}
?>
