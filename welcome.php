
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="display.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
	h1{
     text-align: center;
font-size: 40px;
color: yellow;

}
	</style>
	<title></title>
</head>
<body>
<h1 >welcome</h1><hr>
<div class="container">
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-6">

	<?php

      $conn = mysqli_connect('localhost', 'root' ,'','demo')  or die(mysql_error());

      $data =  "SELECT id,title, poem_add FROM addition  ";
      $result=mysqli_query($conn,$data);
       if (mysqli_num_rows($result)> 0) {
   
      while($row = mysqli_fetch_assoc($result)) {
      echo  "Id:".$row["id"]. "   </br> "."Title: " . $row["title"]. "   </br> "."Poem:   ". $row["poem_add"]."</br>";
    	?>
       
    <a href="delete.php?edit= <?php echo $row['id'];?>" >
    	<input type="button" class="btn btn-success" value="Delete" name="delete"> 
    
        
  </a>
    <a href="edit.php?edit= <?php echo $row['id'];?>"  >
   <input type="button" class="btn btn-success" value="edit" name="edit" >
         
   
        </br> 
        <hr>
 	 <?php }
}

?>
</div>
</form>
<div class="col-lg-4"></div>
</div>
</div>
</body>
</html>
