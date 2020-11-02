<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dashboard | V-Attendance | Admin-Portal</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

		<!-- Pagination cdn -->
		<!-- <script src="assets/vendor/twbs-pagination-master/jquery.twbsPagination.js"></script> -->

		<!-- Custom css -->
		<link rel="stylesheet" href="assets/stylesheets/custom.css">

	</head>
	<body>
        <section class="body">
<?php
				require 'header.php';			
			 ?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php
					require 'sidebar.php';
				?>		
		
                <section role="main" class="content-body">
					<header class="page-header">
						<h2>Details</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Details</span></li>
								<!-- <li><span>Insert / Upadte / Delete</span></li> -->
							</ol>
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- Course Start -->
				<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
										<h2 class="panel-title">Cource</h2>
									</header>
									<div class="panel-body">
									<div class="row">
									<div class="col-md-8">	
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddNewCourse">
  											Add
										</button>
									</div>
										<div class="col-md-4">
											<form class="form-inline d-flex justify-content-center">
  												<input class="form-control-sm searchBox" id="SearchDepartment" type="text" placeholder="Search" aria-label="Search">
											</form>
										</div>
									</div>
									<!-- table -->
									<div class="table-responsive">
										<table class="table table-hover" id="DepartmentTable">
											<thead>
												<tr>
													<th>Action</th>
													<th>Course Code</th>
													<th>Course Name</th>
													<th>Department</th>
													<th>Year</th>
													<th>Sem</th>
												</tr>
											</thead>
											<tbody>
		<!-- Edited start-->
      <?php
	  $servername = "localhost";
	  $username = "root";
	  $dbname = "DB";
	   $conn = mysqli_connect($servername, $username,"", $dbname);
	  if (!$conn) 
	  {
	      die("Connection failed: " . mysqli_connect_error());
	  }									

		$sql    = "SELECT * FROM Course";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
			  echo " <tr> ";
			  echo "<td>
					<i class='fa fa-trash-o'></i>
					<i class='fa fa-pencil' style='margin-left:5px;' data-value='manish'
						onclick='test(this)' id='1'></i>
				    </td>";
			     echo "<td>" .$row['course_code']. "</td>";
			     echo "<td>" .$row['name']. "</td>";
			     echo "<td>" .$row['dept_id']. "</td>";
			     echo "<td>" .$row['year']. "</td>";
			     echo "<td>" .$row['semester']. "</td>";
			echo "</tr>";			   
	    }
		?>	
								</tbody>
										</table>
										<!-- Table End -->
									</div>									
								</div>	
								</section>
							</div>
					</div>

					<!-- Course End -->

				<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
										<h2 class="panel-title">Cource</h2>
									</header>
									<div class="panel-body">
									<div class="row">
									<div class="col-md-8">	
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddNewCourse">
  											Add
										</button>
									</div>
										<div class="col-md-4">
											<form class="form-inline d-flex justify-content-center">
  												<input class="form-control-sm searchBox" id="SearchDepartment" type="text" placeholder="Search" aria-label="Search">
											</form>
										</div>
									</div>
									<!-- table -->
									<div class="table-responsive">
										<table class="table table-hover" id="DepartmentTable">
											<thead>
												<tr>
													<th>Action</th>
													<th>Course Code</th>
													<th>Course Name</th>
													<th>Department</th>
													<th>Year</th>
													<th>Sem</th>
												</tr>
											</thead>
											<tbody>
		<!-- Edited start-->
      <?php
	  $servername = "localhost";
	  $username = "root";
	  $dbname = "DB";
	   $conn = mysqli_connect($servername, $username,"", $dbname);
	  if (!$conn) 
	  {
	      die("Connection failed: " . mysqli_connect_error());
	  }									

		$sql    = "SELECT * FROM Course";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
			  echo " <tr> ";
			  echo "<td>
					<i class='fa fa-trash-o'></i>
					<i class='fa fa-pencil' style='margin-left:5px;' data-value='manish'
						onclick='test(this)' id='1'></i>
				    </td>";
			     echo "<td>" .$row['course_code']. "</td>";
			     echo "<td>" .$row['name']. "</td>";
			     echo "<td>" .$row['dept_id']. "</td>";
			     echo "<td>" .$row['year']. "</td>";
			     echo "<td>" .$row['semester']. "</td>";
			echo "</tr>";			   
	    }
		?>	
								</tbody>
										</table>
										<!-- Table End -->
									</div>									
								</div>	
								</section>
							</div>
					</div>
<!-- 	` -->




				</section>
				</div>	
		</section>
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/pnotify/pnotify.custom.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

		<!-- custome javascript for validation -->
		<script src="assets/javascripts/forms/formInput.js" defer></script>
		<script src="assets/javascripts/forms/callValidation.js" defer></script>
		<script src="assets/javascripts/tables/Pagination.js"></script>
		<!-- Add New Cource Panel -->
		<div class="modal fade" id="AddNewCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#34495E;color:#fff">
						<h5 class="modal-title" id="exampleModalLabel">Add New Course</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal form-bordered" action="mainfile1.php" method="post">
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="department_suggestion" class="form-control input-rounded" name="CDeptID" 
										id="inputRounded" placeholder="Department Id">
									<datalist id="department_suggestion">
<!-- Edited -->
<?php
		$sql    = "SELECT dept_id FROM Department";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['dept_id'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="academic_year_suggestion" class="form-control input-rounded" name="CYear" 
										id="inputRounded" placeholder="Academic Year">
									<datalist id="academic_year_suggestion">
<!-- Edited -->
<?php
		$sql    = "SELECT year FROM AcademicYear";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['year'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="semester_suggestion" class="form-control input-rounded" name="CSem" 
										id="inputRounded" placeholder="Semester">
									<datalist id="semester_suggestion">
<!-- Edited -->
<?php
		$sql    = "SELECT semester FROM Semester";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['semester'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" class="form-control input-rounded" id="inputRounded"
										placeholder="Course Code" name="CCode">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" class="form-control input-rounded" id="inputRounded"
										placeholder="Course Name" name="CName">
								</div>
							</div>
					<div class="modal-footer">
						<button type="submit" name="courseButton" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script>


						function test(obj){
							let tableDataEdit = obj.closest('tr');
							let len = tableDataEdit.getElementsByTagName("td").length;
							var classes = $('#'+obj.id).attr('class');

							if(classes.includes('fa-pencil')){
								$('#'+obj.id).removeClass('fa-pencil');
								$('#'+obj.id).addClass('fa-floppy-o');
								for(let i = 1; i<len; i++){
									let d = tableDataEdit.getElementsByTagName("td")[i].setAttribute("contenteditable", "true");
									tableDataEdit.getElementsByTagName("td")[i].style.backgroundColor = "#34495E";
									tableDataEdit.getElementsByTagName("td")[i].style.color = "#fff";
							
								}
						
							}
							else{
								$('#'+obj.id).addClass('fa-pencil');
								$('#'+obj.id).removeClass('fa-floppy-o');
							
								for(let i = 1; i<len; i++){
									let d = tableDataEdit.getElementsByTagName("td")[i].setAttribute("contenteditable", "false");
									tableDataEdit.getElementsByTagName("td")[i].style.backgroundColor = "";
									tableDataEdit.getElementsByTagName("td")[i].style.color = "";
							
								}
							}
							
						}

						$("#SearchDepartment").keyup(function() {
          					var value = $(this).val().toLowerCase();
          					$("#DepartmentTable tbody tr").filter(function() {
          						$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        					});
     					});

					</script>
	</body>
	</html>
