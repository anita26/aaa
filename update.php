<?php


    $conn = mysqli_connect('localhost', 'root' ,'','demo')  or die(mysql_error());
if(isset($_GET["error"]))
{
	echo $_GET["error"];
}

  if (isset($_POST["update"]))
  {

echo $id= mysql_real_escape_string($_POST["id"]);
 
$poem_add=mysql_real_escape_string($_POST["poem_add"]);
 
    
     $sql = "UPDATE addition SET poem_add='$poem_add' WHERE id='$id'";
     if( mysqli_query($conn,$sql))
     {
          echo "record update";
          header("location:welcome.php");
 
     }

  }



?>