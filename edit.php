
    <?php
    
            $conn = mysqli_connect('localhost', 'root' ,'','demo')  or die(mysql_error());

if (isset($_GET["edit"])){
 $id= mysql_real_escape_string($_GET["edit"]);
 $sql="SELECT * FROM addition WHERE id='$id'";
 $result= mysqli_query($conn,$sql);
if(mysqli_num_row($result)>0)
 {
   
      while($row = mysqli_fetch_assoc($result)) {
    
      $id=$row["id"];
      $title=$row["title"];
      $poem_add=$row["poem_add"];
               }
      }
else{
  
  header("location:update.php?error="."Id is not valid");
  }
     
  }

 
       
  ?>



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
         <form action="update.php" method="POST" class="user_form" >
           <div class="form-group">
              <label for="id"> ID</label>
          

            <input type="text" class="form-control" id="title" placeholder="" name="id" value="<?php echo $id ; ?>" >
             <label for="title"> Poem Title</label>
           <input type="text" class="form-control" id="title" placeholder="" name="title" value="<?php echo $title ; ?>" >
           </div>
           <div class="form-group">
              <label for="poem"> Poem</label>
              <input type="text"class="form-control" id="poem"   name="poem_add" value="<?php echo $poem_add; ?>" rows="10">
           </div> 
         
             <input type="submit" class="btn btn-success" value="update" name="update">    
        
         </form>
     </div>
         <div class="col-lg-3"></div>

  </div>
    
  </div>
  
</div>
</body>
</html>