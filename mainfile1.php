<?php
	  $servername = "localhost";
	  $username = "root";
	  $dbname = "FR_DB";
      $conn = mysqli_connect($servername, $username,"", $dbname);
	  if (!$conn) 
	  {
	      die("Connection failed: " . mysqli_connect_error());
	  }	

	 if(isset($_POST['courseButton']))
	 {
	  echo "Add Batch Done";	 	
	  $a=$_POST['CDeptID'];
	  $b=$_POST['CYear'];
	  $c=$_POST['CSem'];
	  $d=$_POST['CCode'];
	  $e=$_POST['CName'];
	  echo"insert into Course(dept_id,year,semester,course_code,name) values('$a','$b','$c','$d','$e')";
	  $sql="insert into Course(dept_id,year,semester,course_code,name) values('$a','$b','$c','$d','$e')";
	  $result = mysqli_query($conn,$sql);
	 }

	  mysqli_close($conn);
     header('location:timeTable.php');      	  
?>
