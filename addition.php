
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//create connection
$conn = mysqli_connect('localhost', 'root' ,'','demo')  or die(mysql_error());
$error=array();

//validation

if (isset($_POST["add"])) {


$title=mysql_real_escape_string($_POST["title"]);
$poem_add=mysql_real_escape_string($_POST["poem_add"]);

if ( $title== "" || $poem_add== "" )
   {
		array_push($error, "Please fill all the field") ;

   }

  

  if(count($error)==0){
	

 $sql= "INSERT INTO addition( title, poem_add) 
              VALUES ('$title', '$poem_add')";
              

    mysqli_query($conn, $sql );
    header('location: welcome.php');
	}
}


if(count($error)>0)
{
   foreach ($error as $errors) {
   	echo $errors."</br>";
   

   }
}
  

?>
</body>
</html>


