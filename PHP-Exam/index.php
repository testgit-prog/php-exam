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
                <a class="navbar-brand" href="index.html"><strong><?php echo $user[0]['type']?> Chassis</strong></a>
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
                        <a class="active-menu" href="index.php"></i> Dashboard</a>
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
                        <a href="users.php"> Users</a>
                    </li>
					<?php } ?>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Welcome to Walbro <?php echo $user[0]['type']; ?> Dashboard <br>
							<small>Data as of <?php echo date("M d, Y i:m A"); ?></small><br>
							
							<!-- Button trigger modal -->
							<?php if ($user[0]['type'] == "Writer") { ?>
							<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
							  CREATE ARTICLE
							</button>
							<?php } ?>
							<!-- Modal -->
							<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							  <div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<h5 class="modal-title" id="exampleModalCenterTitle">CREATE ARTICLE</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								  </div>
								  <div class="modal-body">
									    <div class="panel-body">
                                           <div class="row">
                                              <div class="col-lg-6">
                                                <form role="form">
														<p>Image</p>
														<input class="form-control" id="image">
														<input type="" class="form-control" id="image">
														<p>Title</p>
														<input class="form-control" id="title">
														<p>Link</p>
														<input class="form-control" id="link">
														<p>Date</p>
														<input type="date" class="form-control" id="datePicker">
														<p>Content</p>
                                                        <textarea class="form-control" rows="3" id="content"></textarea>
											    </form>
												<p id="error-message" style="color:red"><p>
											  </div>
										   </div>
										</div>
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-success" id="submit">Submit</button>
								  </div>
								</div>
							  </div>
							</div>

                        </h1>	
		</div>
            <div id="page-inner">
			    
				 <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="panel panel-default">
                         <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">TODAY</a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab">ADVANCE</a>
                                </li>
                                <li class=""><a href="#messages" data-toggle="tab">LAST</a>
                                </li>
                                <li class=""><a href="#settings" data-toggle="tab">SENT BACK</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                        			<div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed"><center>Customers</center></a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
										   <table border="0" width="100%">
										      <tr>
											      <td><span class="glyphicon glyphicon-pencil"></span></td>
												  <td>Deeside Golf Club bolsters Toro fleet</td>
												  <td></td>
											  </tr>
											  <tr>
											      <td><span class="glyphicon glyphicon-plus-sign"></span></td>
												  <td>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												  </td>
												  <td><span class="glyphicon glyphicon-comment"></span></td>
											  </tr>
											  <tr>
											      <td><span class="glyphicon glyphicon-file"></span></td>
												  <td>
												    Created on Oct 8, 2021 3:12 PM<br>
													[0 | 0] . Source Date Oct 7, 2021<br>
													Media Date Oct 8, 2021
												  </td>
												  <td></td>
											  </tr>
										   </table>
										   <hr>
										    <table border="0" width="100%">
										      <tr>
											      <td><span class="glyphicon glyphicon-pencil"></span></td>
												  <td>Deeside Golf Club bolsters Toro fleet</td>
												  <td></td>
											  </tr>
											  <tr>
											      <td><span class="glyphicon glyphicon-plus-sign"></span></td>
												  <td>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												  </td>
												  <td><span class="glyphicon glyphicon-comment"></span></td>
											  </tr>
											  <tr>
											      <td><span class="glyphicon glyphicon-file"></span></td>
												  <td>
												    Created on Oct 8, 2021 3:12 PM<br>
													[0 | 0] . Source Date Oct 7, 2021<br>
													Media Date Oct 8, 2021
												  </td>
												  <td></td>
											  </tr>
										   </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><center>Competitors</center></a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" style="height: auto;">
                                        <div class="panel-body">
										    <table border="0" width="100%">
										      <tr>
											      <td><span class="glyphicon glyphicon-pencil"></span></td>
												  <td>Deeside Golf Club bolsters Toro fleet</td>
												  <td></td>
											  </tr>
											  <tr>
											      <td><span class="glyphicon glyphicon-plus-sign"></span></td>
												  <td>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												  </td>
												  <td><span class="glyphicon glyphicon-comment"></span></td>
											  </tr>
											  <tr>
											      <td><span class="glyphicon glyphicon-file"></span></td>
												  <td>
												    Created on Oct 8, 2021 3:12 PM<br>
													[0 | 0] . Source Date Oct 7, 2021<br>
													Media Date Oct 8, 2021
												  </td>
												  <td></td>
											  </tr>
										   </table>
										   <hr>
										    <table border="0" width="100%">
										      <tr>
											      <td><span class="glyphicon glyphicon-pencil"></span></td>
												  <td>Deeside Golf Club bolsters Toro fleet</td>
												  <td></td>
											  </tr>
											  <tr>
											      <td><span class="glyphicon glyphicon-plus-sign"></span></td>
												  <td>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												  </td>
												  <td><span class="glyphicon glyphicon-comment"></span></td>
											  </tr>
											  <tr>
											      <td><span class="glyphicon glyphicon-file"></span></td>
												  <td>
												    Created on Oct 8, 2021 3:12 PM<br>
													[0 | 0] . Source Date Oct 7, 2021<br>
													Media Date Oct 8, 2021
												  </td>
												  <td></td>
											  </tr>
										   </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed"><center>Products</center></a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
										    <table border="0" width="100%">
										      <tr>
											      <td><span class="glyphicon glyphicon-pencil"></span></td>
												  <td>Deeside Golf Club bolsters Toro fleet</td>
												  <td></td>
											  </tr>
											  <tr>
											      <td><span class="glyphicon glyphicon-plus-sign"></span></td>
												  <td>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												  </td>
												  <td><span class="glyphicon glyphicon-comment"></span></td>
											  </tr>
											  <tr>
											      <td><span class="glyphicon glyphicon-file"></span></td>
												  <td>
												    Created on Oct 8, 2021 3:12 PM<br>
													[0 | 0] . Source Date Oct 7, 2021<br>
													Media Date Oct 8, 2021
												  </td>
												  <td></td>
											  </tr>
										   </table>
										   <hr>
										    <table border="0" width="100%">
										      <tr>
											      <td><span class="glyphicon glyphicon-pencil"></span></td>
												  <td>Deeside Golf Club bolsters Toro fleet</td>
												  <td></td>
											  </tr>
											  <tr>
											      <td><span class="glyphicon glyphicon-plus-sign"></span></td>
												  <td>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												       <span class="glyphicon glyphicon-star-empty"></span>
												  </td>
												  <td><span class="glyphicon glyphicon-comment"></span></td>
											  </tr>
											  <tr>
											      <td><span class="glyphicon glyphicon-file"></span></td>
												  <td>
												    Created on Oct 8, 2021 3:12 PM<br>
													[0 | 0] . Source Date Oct 7, 2021<br>
													Media Date Oct 8, 2021
												  </td>
												  <td></td>
											  </tr>
										   </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>---NO AVAILABLE DATA---</h4>
                                </div>
                                <div class="tab-pane fade" id="messages">
								    <h4>---NO AVAILABLE DATA---</h4>
                                </div>
                                <div class="tab-pane fade" id="settings">
								    <h4>---NO AVAILABLE DATA---</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="col-md-4">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Writer Production
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Assigned</th>
                                            <th>Submitted</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Writer User 1</td>
                                            <td>7</td>
                                            <td>7</td>
                                        </tr>
                                         <tr>
                                            <td>Writer User 2</td>
                                            <td>3</td>
                                            <td>2</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>
				
				<div class="col-md-8">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Article List Preview
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                        			<div class="panel-group" id="accordion1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" class="collapsed"><center>Customers</center></a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne1" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
										    <?php

												$ch = curl_init();

												curl_setopt($ch, CURLOPT_URL, "http://localhost/php-exam/api.php?view=article");
												curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
												$response = curl_exec($ch);

												if ($response === false) {
													echo "cURL Error: " . curl_error($ch);
												} else {
													$article = json_decode($response, true);
												}
													curl_close($ch);
																
												foreach ($article as $a) {
											    				   
											?>
										    <table border="0" width="100%" cellpadding="10px">
											  <tr>
												<th rowspan="2"><center><img src=<?php echo $a['Image']; ?> width="100px" height="100px"></center></th>
												<td>
												    &nbsp;&nbsp;<span class="btn btn-warning for-edit">For Editing</span>&nbsp;&nbsp;<a href=""><?php echo $a['title']; ?></a>
												</td>
											  </tr>
											  <tr>
												<td><span><?php echo $a['content']; ?></span></td>
											  </tr>
											  <tr>
											     <td>
												     <center>
													 <button class="btn btn-success">Safe to use</button><br>
													 <span>archintel</span>
												 </center></td>
											  </tr> 
											  <tr><td><br></td></tr>
											  <tr>
											     <td><center><a href="">VIEW DETAILS</a></td>
											  </tr>
											</table><br/>
												<?php } ?>
						                </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1"><center>Competitors</center></a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo1" class="panel-collapse collapse" style="height: auto;">
                                        <div class="panel-body">
										     ---NO AVAILABLE DATA---
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1" class="collapsed"><center>Products</center></a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree1" class="panel-collapse collapse">
                                        <div class="panel-body">
										      ---NO AVAILABLE DATA---
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Profile Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>Messages Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <h4>Settings Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
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
         $(document).ready(function() {
			 
			 document.getElementById('datePicker').valueAsDate = new Date();
			 
             $("#submit").click(function(){
				   
				   $message = "";
				   $error = 0;
				   
				   if ($("#image").val() == "") {
					    $message += "Required image.<br/>";
						$error = 1;
				   } else if ($("#title").val() == "") {
					   $message += "Required title.<br/>";
                       $error = 1;					   
				   } else if ($("#link").val() == "") {
					   $message += "Required link.<br/>";
					   $error = 1;
				   } else if ($("#content").val() == "") {
					   $message += "Required content.<br/>";
					   $error = 1;
				   }
				   
				    if(/^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test($("#image").val())){
					} else {
					   $message += "Invalid image url.<br/>";
					   $error = 1;
					}
					
					if(/^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test($("#link").val())){
					} else {
					   $message += "Invalid link url.";
					   $error = 1;
					}
				   
				   if ($error == 1) {
				      $("#error-message").html($message);
					  return;
				   }
				   
				   $.ajax({
					   url:"create-article.php",
					   method:"post",
					   data : {
						   "image" : $("#image").val(),
						   "title" : $("#title").val(),
						   "link"  : $("#link").val(),
						   "date"  : $("#datePicker").val(),
						   "content" : $("#content").val()
					   },
					   success : function(data) {
						    if (data == 1) {
								alert("Article successfully created.");
							    location.reload();
							}
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