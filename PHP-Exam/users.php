<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chassis</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
     
	<?php

     $ch = curl_init();

     curl_setopt($ch, CURLOPT_URL, "http://localhost/php-exam/api.php?view=user");
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

     $response = curl_exec($ch);

     if ($response === false) {
         echo "cURL Error: " . curl_error($ch);
     } else { 
         $user = json_decode($response, true);
     }
	 
     curl_close($ch);

    ?> 
    
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong><?php echo $user[0]['type']; ?> Chassis</strong></a>
            </div>

             <ul class="nav navbar-top-links navbar-right">
			    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                       <i class="fa fa-desktop"></i>
                    </a>
                </li>  
				
				<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
			   
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-gear fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                         <i class="fa fa-dashboard"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">28% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                            <span class="sr-only">28% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">85% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                            <span class="sr-only">85% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                  		 <li><a href="#" _id="1" class="update-type"><i class="fa fa-pencil fa-fw"></i> Writer</a>
                        </li>
						 <li class="divider"></li>
						 <li><a href="#" _id="2" class="update-type"><i class="fa fa-user fa-fw"></i> Editor</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Exit Chassis</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
		<div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="index.php"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="all-media.php"> All Media</a>
                    </li>
					<li>
                        <a href="account-settings.php"> Account Settings</a>
                    </li>
					<?php if ($user[0]['type'] == "Editor") { ?>
					<li>
                        <a href="company.php"> Company</a>
                    </li>
					<li>
                        <a class="active-menu" href="users.php"> Users</a>
                    </li>
					<?php } ?>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Walbro - Users <br>
							<small>Manage users for Walbro.</small><br>
		                </h1>	
		  </div>
            <div id="page-inner">
			    
				<div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="well well-lg">
                        <h4>Users</h4>
                         <!--   Basic Table  -->
						 <h5 style="text-align:center;color:red" id="_error"></h5><br/>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
									    <tr>
										   <input type="hidden" class="form-control" id="_id">
										   <td><input type="type" class="form-control" id="firstname"></td>
										   <td><input type="type" class="form-control" id="lastname"></td>
										   <td><input type="type" class="form-control" id="type"></td>
										   <td><input type="type" class="form-control" id="status"></td>
										   <td id="_button"><button class="btn btn-primary" id="add">ADD</button></td>
										</tr>
									    <tr>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									    <?php

										$ch = curl_init();

									    curl_setopt($ch, CURLOPT_URL, "http://localhost/php-exam/api.php?view=users");
										curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
										$response = curl_exec($ch);

										if ($response === false) {
											echo "cURL Error: " . curl_error($ch);
										} else {
											$users = json_decode($response, true);
										}
									    curl_close($ch);
																
										foreach ($users as $a) {
										   
									    ?>
                                        <tr>
                                            <td><?php echo $a['firstname']; ?></td>
                                            <td><?php echo $a['lastname']; ?></td>
                                            <td><?php echo $a['type']; ?></td>
                                            <td><?php echo $a['status']; ?></td>
											<td><button class="btn btn-warning edit" _id="<?php echo $a['id']; ?>">EDIT</button></td>
                                        </tr>
										<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
					</div>
                </div>
			    </div>
		
				<footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p>
				
        
				</footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
     <script src="assets/js/jquery.js"></script>
      <script>
         $(document).ready(function(){
			  
			  $("#add").click(function(){
				   if ($("#firstname").val() == "" || $("#lastname").val() == "" || $("#type").val() == "" || $("#status").val() == "") {
				       $("#_error").html("Please provide a value for empty field.");
					   return;
				   }
				   $.ajax({
					   url : "create-user.php",
					   method : "post",
					   data : {
						   "firstname" : $("#firstname").val(),
						   "lastname" : $("#lastname").val(),
						   "type" : $("#type").val(),
						   "status" : $("#status").val()
					   },
					   success : function(data) {
						   if (data == 1) {
							   alert("User successfully created.");
							   window.location.reload();
						   }
					   }
				   });
			 });
			 
			 $(".edit").click(function(){
				  $.ajax({
					   url : "get-user.php",
					   method : "post",
					   data : {
						   "id" : $(this).attr("_id")
					   },
					   success : function(data) {
						   var jsonobj = $.parseJSON(data);
						   $("#_id").val(jsonobj[0]['id']);
						   $("#firstname").val(jsonobj[0]['firstname']);
						   $("#lastname").val(jsonobj[0]['lastname']);
						   $("#type").val(jsonobj[0]['type']);
						   $("#status").val(jsonobj[0]['status']);
						   $("#_button").html('<button class="btn btn-success" id="update">UPDATE</button>');
					       
						    $("#update").click(function(){
								 
								 if ($("#firstname").val() == "" || $("#lastname").val() == "" || $("#type").val() == "" || $("#status").val() == "") {
									$("#_error").html("Please provide a value for empty field.");
									return;
								 } 
								
								 $.ajax({
								   url:"update-user.php",
								   method:"post",
								   data : {
									   "id" : $("#_id").val(),
									   "firstname" : $("#firstname").val(),
									   "lastname" : $("#lastname").val(),
									   "type"  : $("#type").val(),
									   "status"  : $("#status").val()
								   },
								   success : function(data) {
										if (data == 1) {
											alert("User successfully updated.");
											location.reload();
										}
								   }
							   });
							});
					   }
				   });
			 });
			 
			  $(".update-type").click(function(){
				   $.ajax({
					   url : "update-type.php",
					   method : "post",
					   data : {
						   "id" : $(this).attr("_id")
					   },
					   success : function(data) {
						   if (data == 1) {
							  window.location.href = "index.php"
						   }
					   }
				   });
			 });
		 });
      </script>

</body>

</html>