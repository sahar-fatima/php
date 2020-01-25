<?php 
       
       if(isset($_POST['age'])){
           $age = $_POST['age'];
		   $result= 2020-$age;
           echo $result;
       }
       else{
		   //echo"check again";
	   }
       
    
?>
<!doctype html>
<html>
<head>
</head>
<body>
      <form method="POST">
          <label>your age</label>
          <input type="number" name="age">
          <input type="submit" value="Send">
     </form>
</body>
</html>