<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="display.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-lg-3"></div>
	   <div class="col-lg-6">
		 <h1>Add your Poem</h1>	
         <form action="addition.php" method="POST" class="user_form" >
           <div class="form-group">
              <label for="title"> Poem Title</label>
              <input type="text" class="form-control" id="title"  placeholder="Write your Poem" name="title" value="">
           </div>
           <div class="form-group">
              <label for="poem"> Poem</label>
              <textarea  class="form-control" id="poem"  placeholder="Write your Poem" name="poem_add" value="" rows="10"></textarea>
           </div> 
         
             <input type="submit" class="btn btn-success" value="additon" name="add">   
 	      
         </form>
     </div>
         <div class="col-lg-3"></div>

	</div>
		
	</div>
	
</div>
</body>
</html>