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

					<!-- start: page -->
					<!-- Department start -->
					<div class="row">
						<div class="col-lg-12">
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>
									<h2 class="panel-title">Department</h2>
								</header>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-8">
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddNewDepartment">
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
													<th>Department Id</th>
													<th>Department Name</th>
													<th>Department Executive</th>
												</tr>
											</thead>
											<tbody>
		<!-- Edited start-->
      <?php
	  $servername = "localhost";
	  $username = "root";
	  $dbname = "FR_DB";
	   $conn = mysqli_connect($servername, $username,"", $dbname);
	  if (!$conn) 
	  {
	      die("Connection failed: " . mysqli_connect_error());
	  }									
		$sql    = "SELECT * FROM Department";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
			  echo " <tr> ";
			  echo "<td>
					<i class='fa fa-trash-o'></i>
					<i class='fa fa-pencil' style='margin-left:5px;' data-value='manish'
						onclick='test(this)' id='1'></i>
				    </td>";
			     echo "<td>" .$row['dept_id_1']. "</td>";
			     echo "<td>" .$row['dept_name_1']. "</td>";
			     echo "<td> abc@vit.edu.in </td>";
			echo "</tr>";			   
	    }
		?>	
											</tbody>
										</table>
										<!-- Table End -->
									</div>

									<div id="pager">
      									<ul id="pagination" class="pagination-sm">Pagination Code</ul>
									</div>
								</div>
							</section>
						</div>
					</div>

					<!-- Department End -->

					<!-- Academic Year Satrt -->
					<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
										<h2 class="panel-title">Academic Year</h2>
									</header>
									<div class="panel-body">
									<div class="row">
									<div class="col-md-8">	
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddNewAcadYear">
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
													<th>Department Id</th>
													<th>Academic Year</th>
												</tr>
											</thead>
											<tbody>
		<!-- Edited start-->
      <?php
		$sql    = "SELECT * FROM AcademicYear";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
			  echo " <tr> ";
			  echo "<td>
					<i class='fa fa-trash-o'></i>
					<i class='fa fa-pencil' style='margin-left:5px;' data-value='manish'
						onclick='test(this)' id='1'></i>
				    </td>";
			     echo "<td>" .$row['dept_id_2']. "</td>";
			     echo "<td>" .$row['year_2']. "</td>";
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

					<!-- Academic Year end -->

					<!-- Semester start -->
					<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
										<h2 class="panel-title">Semster</h2>
									</header>
									<div class="panel-body">
									<div class="row">
									<div class="col-md-8">	
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddNewSem">
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
													<th>Department Id</th>
													<th>academic Year</th>
													<th>Semster</th>
												</tr>
											</thead>
											<tbody>
		<!-- Edited start-->
      <?php
		$sql    = "SELECT * FROM Semester";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
			  echo " <tr> ";
			  echo "<td>
					<i class='fa fa-trash-o'></i>
					<i class='fa fa-pencil' style='margin-left:5px;' data-value='manish'
						onclick='test(this)' id='1'></i>
				    </td>";
			     echo "<td>" .$row['dept_id_3']. "</td>";
			     echo "<td>" .$row['year_3']. "</td>";
			     echo "<td>" .$row['semester_3']. "</td>";
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
					<!-- Semester End -->

					<!-- Division Start -->

					<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
										<h2 class="panel-title">Division</h2>
									</header>
									<div class="panel-body">
									<div class="row">
									<div class="col-md-8">	
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddNewDivision">
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
													<th>Department Id</th>
													<th>academic Year</th>
													<th>Semster</th>
													<th>Division</th>
												</tr>
											</thead>
											<tbody>
		<!-- Edited start-->
      <?php
		$sql    = "SELECT * FROM Division";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
			  echo " <tr> ";
			  echo "<td>
					<i class='fa fa-trash-o'></i>
					<i class='fa fa-pencil' style='margin-left:5px;' data-value='manish'
						onclick='test(this)' id='1'></i>
				    </td>";
			     echo "<td>" .$row['dept_id_4']. "</td>";
			     echo "<td>" .$row['year_4']. "</td>";
			     echo "<td>" .$row['semester_4']. "</td>";
			     echo "<td>" .$row['division_4']. "</td>";
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

					<!-- Division End -->

					<!-- Batch Start -->
					<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
										<h2 class="panel-title">Batch</h2>
									</header>
									<div class="panel-body">
									<div class="row">
									<div class="col-md-8">	
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddNewBatch">
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
													<th>Department Id</th>
													<th>academic Year</th>
													<th>Semster</th>
													<th>Division</th>
													<th>Batch</th>
												</tr>
											</thead>
											<tbody>
		<!-- Edited start-->
      <?php
		$sql    = "SELECT * FROM Batch";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
			  echo " <tr> ";
			  echo "<td>
					<i class='fa fa-trash-o'></i>
					<i class='fa fa-pencil' style='margin-left:5px;' data-value='manish'
						onclick='test(this)' id='1'></i>
				    </td>";
			     echo "<td>" .$row['dept_id_5']. "</td>";
			     echo "<td>" .$row['year_5']. "</td>";
			     echo "<td>" .$row['semester_5']. "</td>";
			     echo "<td>" .$row['division_5']. "</td>";
			     echo "<td>" .$row['batch_5']. "</td>";
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

					<!-- Batch End -->
					<!-- Student start -->
					<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
										<h2 class="panel-title">Student</h2>
									</header>
									<div class="panel-body">
									<div class="row">
									<div class="col-md-8">	
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddNewStudent">
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
													<th>Roll No</th>
													<th>Name</th>
													<th>Depatment</th>
													<th>Image</th>
												</tr>
											</thead>
											<tbody>
		<!-- Edited start-->
      <?php
		$sql    = "SELECT * FROM Student";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
			  echo " <tr> ";
			  echo "<td>
					<i class='fa fa-trash-o'></i>
					<i class='fa fa-pencil' style='margin-left:5px;' data-value='manish'
						onclick='test(this)' id='1'></i>
				    </td>";
			     echo "<td>" .$row['rollno_6']. "</td>";
			     echo "<td>" .$row['name_6']. "</td>";
			     echo "<td>" .$row['dept_id_6']. "</td>";
			     echo "<td>" .$row['imgEncoding_6']. "</td>";
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

					<!-- Student End -->
					

					<!-- Active Division start -->
					<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
										<h2 class="panel-title">Active Division</h2>
									</header>
									<div class="panel-body">
									<div class="row">
									<div class="col-md-8">	
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddNewActiveDivision">
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
													<th>Roll No</th>
													<th>Deparment</th>
													<th>Division</th>
													<th>Semester</th>
													<th>Year</th>
												</tr>
											</thead>
											<tbody>
		<!-- Edited start-->
      <?php
		$sql    = "SELECT * FROM Active_Division";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
			  echo " <tr> ";
			  echo "<td>
					<i class='fa fa-trash-o'></i>
					<i class='fa fa-pencil' style='margin-left:5px;' data-value='manish'
						onclick='test(this)' id='1'></i>
				    </td>";
			     echo "<td>" .$row['rollno_7']. "</td>";
			     echo "<td>" .$row['dept_id_7']. "</td>";
			     echo "<td>" .$row['division_7']. "</td>";
			     echo "<td>" .$row['semester_7']. "</td>";
			     echo "<td>" .$row['year_7']. "</td>";
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

					<!-- Active Division End -->
					<!-- Active Batch start -->
					<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
										<h2 class="panel-title">Active Batch</h2>
									</header>
									<div class="panel-body">
									<div class="row">
									<div class="col-md-8">	
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddNewActiveBatch">
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
													<th>Roll No</th>
													<th>Deparment</th>
													<th>Division</th>
													<th>batch</th>
													<th>Semester</th>
													<th>Year</th>
												</tr>
											</thead>
											<tbody>
		<!-- Edited start-->
      <?php
		$sql    = "SELECT * FROM Active_Batch";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
			  echo " <tr> ";
			  echo "<td>
					<i class='fa fa-trash-o'></i>
					<i class='fa fa-pencil' style='margin-left:5px;' data-value='manish'
						onclick='test(this)' id='1'></i>
				    </td>";
			     echo "<td>" .$row['rollno_8']. "</td>";
			     echo "<td>" .$row['dept_id_8']. "</td>";
			     echo "<td>" .$row['division_8']. "</td>";
			     echo "<td>" .$row['batch_8']. "</td>";
			     echo "<td>" .$row['semester_8']. "</td>";
			     echo "<td>" .$row['year_8']. "</td>";
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
					<!-- Active Batch End -->

					<!-- faculty start -->
					<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
										<h2 class="panel-title">Faculty</h2>
									</header>
									<div class="panel-body">
									<div class="row">
									<div class="col-md-8">	
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddNewFaculty">
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
													<th>Faculty ID</th>
													<th>Faculty Name</th>
													<th>Faculty Dept ID</th>
													<th>Show Image</th>
												</tr>
											</thead>
											<tbody>
		<!-- Edited start-->
      <?php
		$sql    = "SELECT * FROM Faculty";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
			  echo " <tr> ";
			  echo "<td>
					<i class='fa fa-trash-o'></i>
					<i class='fa fa-pencil' style='margin-left:5px;' data-value='manish'
						onclick='test(this)' id='1'></i>
				    </td>";
			     echo "<td>" .$row['fac_id_9']. "</td>";
			     echo "<td>" .$row['fac_name_9']. "</td>";
			     echo "<td>" .$row['dept_id_9']. "</td>";
			     echo "<td>  Show Image </td>";
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

					<!-- faculty End -->

					<!-- end: page -->
                </section>
            </div>
    </section>

    
    <!-- Vendor -->
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

		<!-- Department Modal start -->
		<div class="modal fade" id="AddNewDepartment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#34495E;color:#fff">
						<h5 class="modal-title" id="exampleModalLabel" >Add New Department</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
					<form class="form-horizontal form-bordered" action="mainfile.php" method="post">
						<div class="form-group">
							<div class="col-md-6">
								<input type="text" class="form-control input-rounded letterUpper add_department_id" name="deptID" onkeyup="myFunction(this)" id="department"
									placeholder="Department Id*">
							</div>
							<div class="col-md-6">
								<span id="" class="error_department" style="display:none; color:red;"></span>
								<a href="#" class="fa fa-check fa-2x noerror_department" style="display:none; color:green;"></a>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6">
								<input type="text" class="form-control input-rounded letterCapitalize" name="deptName" id="add_department_name"
									placeholder="Department Name">
							</div>
							<div class="col-md-6">
								<span id="error_department_name" style="display:none; color:red;"></span>
								<a href="#" id="noerror_department_name" class="fa fa-check fa-2x"
									style="display:none; color:green;"></a>
							</div>
						</div>
					<div class="modal-footer">
						<button type="Submit" name="addDepartmentbutton" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
					</form>
				</div>
			</div>
			</div>
		</div>
	</div>
		<!-- Department Modal End -->

		<!-- Academic Year Modal Start -->
		<div class="modal fade" id="AddNewAcadYear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#34495E;color:#fff">
						<h5 class="modal-title" id="exampleModalLabel" >Add New Academic Year</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
					<form class="form-horizontal form-bordered" action="mainfile.php" method="post">

 						<div class="form-group">
							<div class="col-md-6">
								<input type="text" list="department_ids_2" name="deptID1" class="form-control input-rounded" id="" placeholder="Department Id*">
									<datalist id="department_ids_2">
<?php
		$sql    = "SELECT dept_id_1 FROM Department";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['dept_id_1'].">";
	    }
?>
   							</datalist>
							</div>
							<div class="col-md-6">
								<span class="error_department" style="display:none; color:red;"></span>
								<a href="#" id="" class="fa fa-check fa-2x noerror_department" style="display:none; color:green;"></a>
							</div>
						</div>
 						
						<div class="form-group">
							<div class="col-md-6">
								<input type="text" name="year" class="form-control input-rounded" id="" placeholder="Academic Year*">
							</div>
							<div class="col-md-6">
								<span class="error_academic_year" style="display:none; color:red;"></span>
								<a href="#" id="" class="fa fa-check fa-2x noerror_academic_year" style="display:none; color:green;"></a>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" name="AddYearButton" class="btn btn-primary">Save</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Academic Year Modal End -->

		<!-- Semester Modal Start -->
		<div class="modal fade" id="AddNewSem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#34495E;color:#fff">
						<h5 class="modal-title" id="exampleModalLabel">Add New Semester</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal form-bordered" action="mainfile.php" method="post">
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="department_ids_suggestion_3"
										class="form-control input-rounded" name="SemDeptID" id="DID_SEM"
										placeholder="Department Id*">
									<datalist id="department_ids_suggestion_3">
<?php
		$sql    = "SELECT DISTINCT dept_id_2 FROM AcademicYear";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['dept_id_2'].">";
	    }
?>
									</datalist>
								</div>
								<div class="col-md-6">
									<span class="error_department" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_department"
										style="display:none; color:green;"></a>
								</div>
							</div>
						<div class="form-group">
								<div class="col-md-6">
									<input type="text" name="SemYear" list="academic_year_suggestion_3"
										class="form-control input-rounded" id=""
										placeholder="Academic Year*">
									<datalist id="academic_year_suggestion_3">

<?php
		$sql    = "SELECT DISTINCT year_2 FROM AcademicYear";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['year_2'].">";
	    }
?>
									</datalist>
								</div>
								<div class="col-md-6">
									<span class="error_academic_year" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_academic_year"
										style="display:none; color:green;"></a>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="number" name="SemNo" class="form-control input-rounded add_semester" id=""
										placeholder="Semester*">
								</div>
								<div class="col-md-6">
									<span class="error_semester" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_semester"
										style="display:none; color:green;"></a>
								</div>
							</div>
					<div class="modal-footer">
						<button type="Submit" name="SemesterButton" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Semester Modal End -->

			<!-- Division Model Start -->
		<div class="modal fade" id="AddNewDivision" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#34495E;color:#fff">
						<h5 class="modal-title" id="exampleModalLabel">Add New Division</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal form-bordered" action="mainfile.php" method="post">
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="department_ids_suggestion_4"
										class="form-control input-rounded" name="DivDeptID" id=""
										placeholder="Department Id*">
									<datalist id="department_ids_suggestion_4">
<!-- Edited -->
<?php
		$sql    = "SELECT DISTINCT dept_id_3 FROM Semester";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['dept_id_3'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
								<div class="col-md-6">
									<span class="error_department" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_department"
										style="display:none; color:green;"></a>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6">
									<input type="text" name="DivYear" list="academic_year_suggestion_4"
										class="form-control input-rounded" id=""
										placeholder="Academic Year*">
									<datalist id="academic_year_suggestion_4">
<!-- Edited -->
<?php
		$sql    = "SELECT DISTINCT year_3 FROM Semester";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['year_3'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
								<div class="col-md-6">
									<span class="error_academic_year" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_academic_year"
										style="display:none; color:green;"></a>
								</div>
							</div>


							<div class="form-group">
								<div class="col-md-6">
									<input type="text" name="DivSem" list="sem_suggestion_4"
										class="form-control input-rounded" id=""
										placeholder="Semster*">
									<datalist id="sem_suggestion_4">
<!-- Edited -->
<?php
		$sql    = "SELECT DISTINCT semester_3 FROM Semester";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['semester_3'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
								<div class="col-md-6">
									<span class="error_academic_year" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_academic_year"
										style="display:none; color:green;"></a>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6">
									<input type="text" name="Divi" class="form-control input-rounded" id=""
										placeholder="Division*">
								</div>
								<div class="col-md-6">
									<span class="error_semester" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_semester"
										style="display:none; color:green;"></a>
								</div>
							</div>
					<div class="modal-footer">
						<button type="Submit" name="DivisionButton" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
						</form>
					</div>
				</div>
			</div>
		</div>
			<!-- Division Model End -->

		<!-- Batch Modal Start -->
		<div class="modal fade" id="AddNewBatch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#34495E;color:#fff">
						<h5 class="modal-title" id="exampleModalLabel">Add New Batch</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal form-bordered" action="mainfile.php" method="post">
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="department_ids_suggestion_5"
										class="form-control input-rounded" name="BatchDeptID" id=""
										placeholder="Department Id*">
									<datalist id="department_ids_suggestion_5">
<!-- Edited -->
<?php
		$sql    = "SELECT DISTINCT dept_id_4 FROM Division";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['dept_id_4'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
								<div class="col-md-6">
									<span class="error_department" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_department"
										style="display:none; color:green;"></a>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6">
									<input type="text" name="BatchYear" list="academic_year_suggestion_5"
										class="form-control input-rounded" id=""
										placeholder="Academic Year*">
									<datalist id="academic_year_suggestion_5">
<!-- Edited -->
<?php
		$sql    = "SELECT DISTINCT year_4 FROM Division";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['year_4'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
								<div class="col-md-6">
									<span class="error_academic_year" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_academic_year"
										style="display:none; color:green;"></a>
								</div>
							</div>


							<div class="form-group">
								<div class="col-md-6">
									<input type="text" name="BatchSem" list="sem_suggestion_5"
										class="form-control input-rounded" id=""
										placeholder="Semester*">
									<datalist id="sem_suggestion_5">
<!-- Edited -->
<?php
		$sql    = "SELECT DISTINCT semester_4 FROM Division";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['semester_4'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
								<div class="col-md-6">
									<span class="error_academic_year" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_academic_year"
										style="display:none; color:green;"></a>
								</div>
							</div>


							<div class="form-group">
								<div class="col-md-6">
									<input type="text" name="BatchDiv" list="div_suggestion_5"
										class="form-control input-rounded" id=""
										placeholder="Division*">
									<datalist id="div_suggestion_5">
<!-- Edited -->
<?php
		$sql    = "SELECT DISTINCT division_4 FROM Division";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['division_4'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
								<div class="col-md-6">
									<span class="error_academic_year" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_academic_year"
										style="display:none; color:green;"></a>
								</div>
							</div>


							<div class="form-group">
								<div class="col-md-6">
									<input type="text" name="Batch" class="form-control input-rounded" id=""
										placeholder="Batch*">
								</div>
								<div class="col-md-6">
									<span class="error_semester" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_semester"
										style="display:none; color:green;"></a>
								</div>
							</div>
					<div class="modal-footer">
						<button type="Submit" name="BatchButton" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Batch Modal End -->

		<!-- Student Modal Start -->
		<div class="modal fade" id="AddNewStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#34495E;color:#fff">
						<h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal form-bordered" enctype="multipart/form-data" action="mainfile.php" method="post">
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" class="form-control input-rounded letterUpper add_roll" id="" name="StudRollNo" 
										placeholder="Roll No*">
								</div>
								<div class="col-md-6">
									<span class="error_roll" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_roll"
										style="display:none; color:green;"></a>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="semster_suggestion" name="studName" 
										class="form-control input-rounded letterCapitalize" id="inputRounded"
										placeholder="Name">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="department_ids_suggestion"
										class="form-control input-rounded letterUpper" id="inputRounded" name="StudDeptID" 
										placeholder="Department Id*">
									<datalist id="department_ids_suggestion">
<!-- Edited -->
<?php
		$sql    = "SELECT DISTINCT dept_id_4 FROM Division";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['dept_id_4'].">";
	    }
?>
<!-- edited -->									
									</datalist>
								</div>
								<div class="col-md-6">
									<span class="error_department" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_department"
										style="display:none; color:green;"></a>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<!-- <img id="student_image" src="http://via.placeholder.com/150x150"
										style="border-radius:50%" /> -->
									<input type="file" val="" name="studImage" id="student_file" style="display: block;"/>
								</div>
												<!-- <div class=" col-md-1">
									<h3 style="text-align:left;">OR</h3>
								</div> -->
								<!-- <div class="col-md-3">
									<div class="" id="camera">
										<img src="assets/images/camera-icon.png" alt="" id="clickedimage"
											style="height:150px; width:150px;border-radius:50%">
									</div>
									<button class="btn btn-success" id="clickphoto" style="display:none;">Submit</button>
									<a class="mb-xs mt-xs mr-xs modal-basic btn btn-default" >Center Icon</a>
								</div> -->
							</div>
				<div class="modal-footer">
					<button type="submit" name="StudentButton" class="btn btn-primary">Save</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- Student Modal End -->

		<!-- Active Division Modal Start -->
		<div class="modal fade" id="AddNewActiveDivision" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#34495E;color:#fff">
						<h5 class="modal-title" id="exampleModalLabel">Add New Active Division</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal form-bordered" action="mainfile.php" method="post">
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="department_ids_suggestion"
										class="form-control input-rounded letterUpper" id=""
										placeholder="Department Id*" name="ActiveDivDeptID">
									<datalist id="department_ids_suggestion">
<!-- Edited -->
<?php
		$sql    = "SELECT DISTINCT dept_id_4 FROM Division";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['dept_id_4'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
								<div class="col-md-6">
									<span class="error_department" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_department"
										style="display:none; color:green;"></a>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="academic_year_suggestion"
										class="form-control input-rounded " id="inputRounded"
										placeholder="Academic Year*" name="ActiveYear">
									<datalist id="academic_year_suggestion">
<!-- Edited -->
<?php
		$sql    = "SELECT DISTINCT year_4 FROM Division";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['year_4'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
								<div class="col-md-6">
									<span class="error_academic_year" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_academic_year"
										style="display:none; color:green;"></a>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="number" list="semster_suggestion"
										class="form-control input-rounded " id="inputRounded"
										placeholder="Semester*" name="ActiveSem">
									<datalist id="semster_suggestion">
<!-- Edited -->
<?php
		$sql    = "SELECT DISTINCT semester_4 FROM Division";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['semester_4'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
								<div class="col-md-6">
									<span class="error_semester" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_semester"
										style="display:none; color:green;"></a>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="division_suggestion"
										class="form-control input-rounded letterUpper" id="inputRounded"
										placeholder="Division*" name="ActiveDivi">
									<datalist id="division_suggestion">
<!-- Edited -->
<?php
		$sql    = "SELECT DISTINCT division_4 FROM Division";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['division_4'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
								<div class="col-md-6">
									<span class="error_division" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_division"
										style="display:none; color:green;"></a>
								</div>
							</div>



							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="Act_RollNO_suggestion"
										class="form-control input-rounded letterUpper" id="inputRounded"
										placeholder="Rollno*" name="ActiveRollNo">
									<datalist id="Act_RollNO_suggestion">
<!-- Edited -->
<?php
		$sql    = "SELECT rollno_6 FROM Student";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['rollno_6'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
							</div>

					<div class="modal-footer">
						<button type="submit" name="ActiveDivisionButton" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>			
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--Active Division Modal End -->

		<!-- Active Batch Modal Start -->
		<div class="modal fade" id="AddNewActiveBatch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#34495E;color:#fff">
						<h5 class="modal-title" id="exampleModalLabel">Add New Active Batch</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>		
					<div class="modal-body">
						<form class="form-horizontal form-bordered" action="mainfile.php" method="post">
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="department_ids_suggestion_8"
										class="form-control input-rounded letterUpper" id=""
										placeholder="Department Id*" name="ActiveDivDeptID1">
									<datalist id="department_ids_suggestion_8">
<!-- Edited -->
<?php
		$sql    = "SELECT DISTINCT dept_id_5 FROM Batch";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['dept_id_5'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
								<div class="col-md-6">
									<span class="error_department" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_department"
										style="display:none; color:green;"></a>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="academic_year_suggestion_8"
										class="form-control input-rounded " id="inputRounded"
										placeholder="Academic Year*" name="ActiveYear1">
									<datalist id="academic_year_suggestion_8">
<!-- Edited -->
<?php
		$sql    = "SELECT DISTINCT year_5 FROM Batch";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['year_5'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
								<div class="col-md-6">
									<span class="error_academic_year" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_academic_year"
										style="display:none; color:green;"></a>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="number" list="semster_suggestion_8"
										class="form-control input-rounded " id="inputRounded"
										placeholder="Semester*" name="ActiveSem1">
									<datalist id="semster_suggestion_8">
<!-- Edited -->
<?php
		$sql    = "SELECT DISTINCT semester_5 FROM Batch";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['semester_5'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
								<div class="col-md-6">
									<span class="error_semester" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_semester"
										style="display:none; color:green;"></a>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="division_suggestion_8"
										class="form-control input-rounded letterUpper" id="inputRounded"
										placeholder="Division*" name="ActiveDivi1">
									<datalist id="division_suggestion_8">
<!-- Edited -->
<?php
		$sql    = "SELECT DISTINCT division_5 FROM Batch";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['division_5'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
								<div class="col-md-6">
									<span class="error_division" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_division"
										style="display:none; color:green;"></a>
								</div>
							</div>



							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="Act_RollNO_suggestion_8"
										class="form-control input-rounded letterUpper" id="inputRounded"
										placeholder="Rollno*" name="ActiveRollNo1">
									<datalist id="Act_RollNO_suggestion_8">
<!-- Edited -->
<?php
		$sql    = "SELECT DISTINCT rollno_6 FROM Student";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['rollno_6'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="Act_RollNO_suggestion1_8"
										class="form-control input-rounded letterUpper" id="inputRounded"
										placeholder="Batch*" name="ActiveBatch1">
									<datalist id="Act_RollNO_suggestion1_8">
<!-- Edited -->
<?php
		$sql    = "SELECT DISTINCT batch_5 FROM Batch";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['batch_5'].">";
	    }
?>
<!-- edited -->
									</datalist>
								</div>
							</div>

					<div class="modal-footer">
						<button type="submit" name="ActiveBatchButton" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>			
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Active Batch Modal End -->

		<!-- Faculty Modal Start -->
		<div class="modal fade" id="AddNewFaculty" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#34495E;color:#fff">
						<h5 class="modal-title" id="exampleModalLabel">Add New Faculty</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal form-bordered" enctype="multipart/form-data"  action="mainfile.php" method="post">
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" name="FacID" class="form-control input-rounded add_faculty_id" id="inputRounded"
										placeholder="Faculty Id*">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6">
									<input type="text" name="FacName" class="form-control input-rounded add_faculty_id" id="inputRounded"
										placeholder="Faculty Name*">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="Act_DEPT_suggestion1_9"
										class="form-control input-rounded letterUpper" id="inputRounded"
										placeholder="Department*" name="FacDeptID">
									<datalist id="Act_DEPT_suggestion1_9">
<?php
		$sql    = "SELECT dept_id_1 FROM Department";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    while ($row   = mysqli_fetch_array($result))
	    {
		echo "<option value=".$row['dept_id_1'].">";
	    }
?>

									</datalist>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-6">
									<span>Fac Image</span>
									<input type="file" class="" name="FacImg">
								</div>
							</div>							
					<div class="modal-foot">
						<button type="submit" name="FacultyButton" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Faculty Modal End -->
		<!-- Course Modal Start -->
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
						<form class="form-horizontal form-bordered" action="mainfile.php" method="post">
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
		<!-- Course Modal End -->
		<!-- Assigned Theory Modal Start -->

		<div class="modal fade" id="AddNewAssginedTheory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#34495E;color:#fff">
						<h5 class="modal-title" id="exampleModalLabel" >Assign Theory</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal form-bordered" enctype="multipart/form-data"  action="mainfile.php" method="post">

							<div class="form-group">
								<div class="col-md-6">
									<input type="text" name="FacID" class="form-control input-rounded add_faculty_id" id="inputRounded"
										placeholder="Faculty Id*">
								</div>
								<div class="col-md-6">
									<span class="error_faculty" style="display:none; color:red;"></span>
									<a href="#" id="" class="fa fa-check fa-2x noerror_faculty"
										style="display:none; color:green;"></a>
								</div>
							</div>							
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</form>
				</div>
			</div>
		</div>
		<!-- Assigned Theory Modal End -->
		<!-- Assigned Practical Modal Start -->
		<div class="modal fade" id="AddNewAssignedPractical" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#34495E;color:#fff">
						<h5 class="modal-title" id="exampleModalLabel">Assign Practical</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal form-bordered" method="get">
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="course_code_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Course Code">
									<datalist id="course_code_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="faculty_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Faculty Id">
									<datalist id="faculty_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="department_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Department Id">
									<datalist id="department_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="academic_year_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Academic Year">
									<datalist id="academic_year_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="semester_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Semester">
									<datalist id="semester_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="division_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Division">
									<datalist id="division_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="batch_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Batch">
									<datalist id="batch_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Assigned Practical Modal End -->
		<!-- Theory Session Modal Start -->
		<div class="modal fade" id="AddNewTheorySession" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#34495E;color:#fff">
						<h5 class="modal-title" id="exampleModalLabel">Add New Theory Session</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal form-bordered" method="get">
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="course_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Course Code">
									<datalist id="course_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="faculty_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Faculty Id">
									<datalist id="faculty_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="department_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Department Id">
									<datalist id="department_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="academic_year_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Academic Year">
									<datalist id="academic_year_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="semster_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Academic Year">
									<datalist id="semster_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="semster_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Semester">
									<datalist id="semster_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="division_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Division">
									<datalist id="division_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="day_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Day">
									<datalist id="day_suggestion">
										<option value="Monday">
										<option value="Tuesday">
										<option value="Wadnesday">
										<option value="Thursday">
										<option value="Friday">
										<option value="Saturday">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="Start Time">
								</div>
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="End Time">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" class="form-control input-rounded" id="inputRounded"
										placeholder="Room No">
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Theory Session Modal End -->
		<!-- Practical Session Modal Start -->
		<div class="modal fade" id="AddNewPracticalSession" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#34495E;color:#fff">
						<h5 class="modal-title" id="exampleModalLabel">Add New Practical Session</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal form-bordered" method="get">
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="course_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Course Code">
									<datalist id="course_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="faculty_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Faculty Id">
									<datalist id="faculty_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="department_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Department Id">
									<datalist id="department_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="academic_year_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Academic Year">
									<datalist id="academic_year_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="semster_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Academic Year">
									<datalist id="semster_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="semster_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Semester">
									<datalist id="semster_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="division_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Division">
									<datalist id="division_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="batch_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Batch">
									<datalist id="batch_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="day_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Day">
									<datalist id="day_suggestion">
										<option value="Monday">
										<option value="Tuesday">
										<option value="Wadnesday">
										<option value="Thursday">
										<option value="Friday">
										<option value="Saturday">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="Start Time">
								</div>
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="End Time">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" class="form-control input-rounded" id="inputRounded"
										placeholder="Lab No">
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Practical Session Modal End -->
		<!-- Conducted Thoery Session Modal Start -->
		<div class="modal fade" id="AddNewConductedTheory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#34495E;color:#fff">
						<h5 class="modal-title" id="exampleModalLabel">Add New Conducted Theory</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal form-bordered" method="get">
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="course_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Course Code">
									<datalist id="course_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="faculty_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Faculty Id">
									<datalist id="faculty_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="department_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Department Id">
									<datalist id="department_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="academic_year_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Academic Year">
									<datalist id="academic_year_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="semster_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Academic Year">
									<datalist id="semster_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="semster_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Semester">
									<datalist id="semster_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="division_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Division">
									<datalist id="division_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="batch_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Batch">
									<datalist id="batch_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="day_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Day">
									<datalist id="day_suggestion">
										<option value="Monday">
										<option value="Tuesday">
										<option value="Wadnesday">
										<option value="Thursday">
										<option value="Friday">
										<option value="Saturday">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="Start Time">
								</div>
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="End Time">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" class="form-control input-rounded" id="inputRounded"
										placeholder="Room No">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="Actual Start Time">
								</div>
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="Actual End Time">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="faculty_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Faculty By Id">
									<datalist id="faculty_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" class="form-control input-rounded" id="inputRounded"
										placeholder="Conducted Room No">
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Conducted Theory Session Modal End -->
		<!-- Conducted Practical Session Modal Start -->
		<div class="modal fade" id="AddNewConductedPractical" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#34495E;color:#fff">
						<h5 class="modal-title" id="exampleModalLabel">Add New conducted Practical</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal form-bordered" method="get">
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="course_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Course Code">
									<datalist id="course_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="faculty_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Faculty Id">
									<datalist id="faculty_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="department_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Department Id">
									<datalist id="department_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="academic_year_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Academic Year">
									<datalist id="academic_year_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="semster_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Academic Year">
									<datalist id="semster_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="semster_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Semester">
									<datalist id="semster_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="division_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Division">
									<datalist id="division_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="batch_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Batch">
									<datalist id="batch_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="day_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Day">
									<datalist id="day_suggestion">
										<option value="Monday">
										<option value="Tuesday">
										<option value="Wadnesday">
										<option value="Thursday">
										<option value="Friday">
										<option value="Saturday">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="Start Time">
								</div>
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="End Time">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" class="form-control input-rounded" id="inputRounded"
										placeholder="Room No">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="Actual Start Time">
								</div>
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="Actual End Time">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="faculty_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Faculty By Id">
									<datalist id="faculty_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" class="form-control input-rounded" id="inputRounded"
										placeholder="Conducted Lab No">
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Conducted Practical Session Modal End -->
		<!-- Theory Attendance Modal Start -->
		<div class="modal fade" id="AddNewTheoryAttendance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#34495E;color:#fff">
						<h5 class="modal-title" id="exampleModalLabel">Add New Theory Attendance</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal form-bordered" method="get">
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="course_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Course Code">
									<datalist id="course_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="faculty_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Faculty Id">
									<datalist id="faculty_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="department_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Department Id">
									<datalist id="department_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="academic_year_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Academic Year">
									<datalist id="academic_year_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="semster_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Academic Year">
									<datalist id="semster_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="semster_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Semester">
									<datalist id="semster_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="division_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Division">
									<datalist id="division_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="batch_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Batch">
									<datalist id="batch_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="day_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Day">
									<datalist id="day_suggestion">
										<option value="Monday">
										<option value="Tuesday">
										<option value="Wadnesday">
										<option value="Thursday">
										<option value="Friday">
										<option value="Saturday">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="Start Time">
								</div>
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="End Time">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" class="form-control input-rounded" id="inputRounded"
										placeholder="Room No">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="Actual Start Time">
								</div>
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="Actual End Time">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="faculty_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Faculty By Id">
									<datalist id="faculty_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" class="form-control input-rounded" id="inputRounded"
										placeholder="Conducted Room No">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" class="form-control input-rounded" id="inputRounded"
										placeholder="Roll No">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="date" class="form-control input-rounded" id="inputRounded"
										placeholder="Date">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" class="form-control input-rounded" id="inputRounded"
										placeholder="Status">
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Theory Attendance Modal End -->
		<!-- Practical Attendance Modal Start -->
		<div class="modal fade" id="AddNewPracticalAttendance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#34495E;color:#fff">
						<h5 class="modal-title" id="exampleModalLabel">Add New Practical Attendance</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form-horizontal form-bordered" method="get">
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="course_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Course Code">
									<datalist id="course_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="faculty_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Faculty Id">
									<datalist id="faculty_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="department_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Department Id">
									<datalist id="department_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="academic_year_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Academic Year">
									<datalist id="academic_year_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="semster_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Academic Year">
									<datalist id="semster_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="semster_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Semester">
									<datalist id="semster_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="division_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Division">
									<datalist id="division_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="batch_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Batch">
									<datalist id="batch_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="day_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Day">
									<datalist id="day_suggestion">
										<option value="Monday">
										<option value="Tuesday">
										<option value="Wadnesday">
										<option value="Thursday">
										<option value="Friday">
										<option value="Saturday">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="Start Time">
								</div>
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="End Time">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" class="form-control input-rounded" id="inputRounded"
										placeholder="Room No">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="Actual Start Time">
								</div>
								<div class="col-md-3">
									<input type="time" class="form-control input-rounded" id="inputRounded"
										data-toggle="tooltip" data-placement="top" title="Actual End Time">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" list="faculty_suggestion" class="form-control input-rounded"
										id="inputRounded" placeholder="Faculty By Id">
									<datalist id="faculty_suggestion">
										<option value="CMPN">
										<option value="IT">
										<option value="ETRX">
										<option value="BIOM">
									</datalist>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" class="form-control input-rounded" id="inputRounded"
										placeholder="Conducted Lab No">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" class="form-control input-rounded" id="inputRounded"
										placeholder="Roll No">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="date" class="form-control input-rounded" id="inputRounded"
										placeholder="Date">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" class="form-control input-rounded" id="inputRounded"
										placeholder="Status">
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Practical Attendance Modal End -->

<?php
      mysqli_close($conn);
?>
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