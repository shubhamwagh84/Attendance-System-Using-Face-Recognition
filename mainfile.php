	<?php
	  $servername = "localhost";
	  $username = "root";
	  $dbname = "FR_DB";
      $conn = mysqli_connect($servername, $username,"", $dbname);
	  if (!$conn) 
	  {
	      die("Connection failed: " . mysqli_connect_error());
	  }	

   	if(isset($_POST['addDepartmentbutton']))
	{
	  echo "Add Department Done";
	  $a=$_POST['deptID'];
	  $b=$_POST['deptName'];
	  $sql="insert into Department(dept_id_1,dept_name_1) values('$a','$b')";	
	  $result = mysqli_query($conn,$sql);
	}
	 else if(isset($_POST['AddYearButton']))
	 {
		$a=$_POST['deptID1'];	 	
	    $b=$_POST['year'];
		     echo "insert into AcademicYear(year_2,dept_id_2) values('$b','$a')<br/>";
		     $sql="insert into AcademicYear(year_2,dept_id_2) values('$b','$a')";	
			 $result1 = mysqli_query($conn,$sql);
	 }
	  else if(isset($_POST['SemesterButton']))
	 {
	  echo "Add Semester Done";	 	
	  $a=$_POST['SemDeptID'];
	  $b=$_POST['SemYear'];
	  $c=$_POST['SemNo'];
		     echo "insert into Semester(dept_id_3,year_3,semester_3) values('$a','$b','$c')<br/>";
			  $sql="insert into Semester(dept_id_3,year_3,semester_3) values('$a','$b','$c')";	
			  $result1 = mysqli_query($conn,$sql);
	 }
	 else if(isset($_POST['DivisionButton']))
	 {
	  echo "Add Division Done";	 	
	  $a=$_POST['DivDeptID'];
	  $b=$_POST['DivYear'];
	  $c=$_POST['DivSem'];
	  $d=$_POST['Divi'];
	  echo "insert into Division(dept_id_4,year_4,semester_4,division_4) values('$a','$b','$c','$d')";
	  $sql="insert into Division(dept_id_4,year_4,semester_4,division_4) values('$a','$b','$c','$d')";	
	  $result = mysqli_query($conn,$sql);
	 }
	 else if(isset($_POST['BatchButton']))
	 {
	  echo "Add Batch Done";	 	
	  $a=$_POST['BatchDeptID'];
	  $b=$_POST['BatchYear'];
	  $c=$_POST['BatchSem'];
	  $d=$_POST['BatchDiv'];
	  $e=$_POST['Batch'];
	  echo "insert into Batch(dept_id_5,year_5,batch_5,division_5,semester_5) values('$a','$b','$e','$d','$c')";
	  $sql="insert into Batch(dept_id_5,year_5,batch_5,division_5,semester_5) values('$a','$b','$e','$d','$c')";	
	  $result = mysqli_query($conn,$sql);
	 }
	 else if(isset($_POST['StudentButton']))
	 {
	  echo "Add Student Done";	 	
	  $a=$_POST['StudRollNo'];
	  $b=$_POST['studName'];
	  $c=$_POST['StudDeptID'];
	$i1file=$_FILES['studImage']['name'];
  	$target_path1 = "/opt/lampp/htdocs/Projects/Attendance/RegisterImg/";  
	$target_path1 = $target_path1.''.basename( $_FILES['studImage']['name']);   
	$fname=$_FILES['studImage']['tmp_name'];
		if(move_uploaded_file($fname, $target_path1)) {  
		    echo "";  
		}
		 else
		{  
		    echo "Sorry, file not uploaded, please try again!";  
		}  
	  $d=$target_path1;
	  $e="image encoding";
	  $sql="insert into Student(rollno_6,name_6,dept_id_6,image_6,imgEncoding_6) values('$a','$b','$c','$d','$e')";	
	  echo "insert into Student(rollno_6,name_6,dept_id_6,image_6,imgEncoding_6) values('$a','$b','$c','$d','$e')";
	  $result = mysqli_query($conn,$sql);
	 }	 
	 else if(isset($_POST['ActiveDivisionButton']))
	 {
	  echo "Add Batch Done";	 	
	  $a=$_POST['ActiveDivDeptID'];
	  $b=$_POST['ActiveYear'];
	  $c=$_POST['ActiveSem'];
	  $d=$_POST['ActiveDivi'];
	  $e=$_POST['ActiveRollNo'];
	  echo"insert into Active_Division(dept_id_7,year_7,semester_7,division_7,rollno_7) values('$a','$b','$c','$d','$e')";
	  $sql="insert into Active_Division(dept_id_7,year_7,semester_7,division_7,rollno_7) values('$a','$b','$c','$d','$e')";
	  $result = mysqli_query($conn,$sql);
	 }
	 else if(isset($_POST['FacultyButton']))
	 {
	  echo "Add Faculty Done";	 	
	  $a=$_POST['FacID'];
	  $b=$_POST['FacName'];
	  $c=$_POST['FacDeptID'];
	$i1file=$_FILES['FacImg']['name'];
  	$target_path1 = "/opt/lampp/htdocs/Projects/Attendance/RegisterImg/";  
	$target_path1 = $target_path1.''.basename( $_FILES['FacImg']['name']);   
	$fname=$_FILES['FacImg']['tmp_name'];
		if(move_uploaded_file($fname, $target_path1)) {  
		    echo "";  
		}
		 else
		{  
		    echo "Sorry, file not uploaded, please try again!";  
		}  
	  $d=$target_path1;
	  $e="Img Encoding";
	  // $e="image encoding";
	  echo "insert into Faculty(fac_id_9,fac_name_9,dept_id_9,image_9,imgencoding_9) values('$a','$b','$c','$d','$e')";
	  $sql="insert into Faculty(fac_id_9,fac_name_9,dept_id_9,image_9,imgencoding_9) values('$a','$b','$c','$d','$e')";	
	  $result = mysqli_query($conn,$sql);
	 }	 
	 else if(isset($_POST['courseButton']))
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
	 else if(isset($_POST['ActiveBatchButton']))
	 {
	  echo "Add Batch Done";	 	
	  $a=$_POST['ActiveDivDeptID1'];
	  $b=$_POST['ActiveYear1'];
	  $c=$_POST['ActiveSem1'];
	  $d=$_POST['ActiveDivi1'];
	  $e=$_POST['ActiveRollNo1'];
	  $f=$_POST['ActiveBatch1'];
	  echo"insert into Active_Batch(dept_id_8,year,semester,division,batch,rollno)values('$a','$b','$c','$d','$f','$e')";
	  $sql="insert into Active_Batch(dept_id_8,year_8,semester_8,division_8,batch_8,rollno_8)values('$a','$b','$c','$d','$f','$e')";
	  $result = mysqli_query($conn,$sql);
	 }

	  mysqli_close($conn);
     header('location:details.php');      	  
?>
