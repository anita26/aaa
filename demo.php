<?php

function table($num){
$i=1;
while ($i<11)
 {
$result=$i*$num;
	echo $result."</br>";
	$i++;
	# code...
}
}

?>

<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title></title>
</head>
<body>
<div class="container">
	
    <div class="row">
    	<?php
    	$i=1;
    	for($i=1; $i<11;$i++)
    	{ ?>
    	<div class="col-lg-1">
    	<?php table($i);?>
    	</div>
    	<?php } ?>


    	

    </div>
</div>
</body>
</html>
