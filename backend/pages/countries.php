<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Manage Countries</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
thead { background-color:#eee;border:1px solid #ccc; }
tbody { border:1px solid #ccc; }
</style>
</head>

<body>
<!-- Add New Country Modal : Start -->
<?php include_once 'templates/manageGeography-countries-addCountry.php'; ?>
<?php include_once 'templates/manageGeography-countries-updateCountry.php'; ?>
<?php include_once 'templates/manageGeography-timezones-addTimezone.php'; ?>
<!-- Add New Country Modal : End -->
    <div id="wrapper">

        <!-- Navigation -->
        <?php include_once 'templates/header.php'; ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="page-header"><b>MANAGE COUNTRIES</b></h5>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
				<div class="row">
					<!-- Total Countries : Start -->
				    <div class="col-lg-3">
					  <div class="list-group">
						<div align="right" class="list-group-item" style="background-color:#eee;">
						    <b>TOTAL COUNTRIES</b>
						</div>
						<div class="list-group-item">
						   <h5 align="right"><b>0</b></h5>
						</div>
					  </div>
					</div>
					<!-- Total Countries : End -->
					<!-- Total Timezones : Start -->
				    <div class="col-lg-3">
					  <div class="list-group">
						<div align="right" class="list-group-item" style="background-color:#eee;">
						    <b>TOTAL TIMEZONES</b>
						</div>
						<div class="list-group-item">
						   <h5 align="right"><b>0</b></h5>
						</div>
					  </div>
					</div>
					<!-- Total Countries : End -->
					<div align="right" class="col-lg-6 pull-right">
					 <div>
				       <button class="btn btn-default" data-toggle="modal" data-target="#addNewCountryModal">
					      <b>(+) Add New Country</b>
					   </button>
					 </div>
					 <div class="mtop15p">
					   <button class="btn btn-default" data-toggle="modal" data-target="#addNewTimezoneModal">
					     <b>(+) Add New Timezone</b>
					   </button>
					 </div>
					 <div class="mtop15p">
					   <button class="btn btn-default" data-toggle="modal" data-target="#addNewLevelsModal">
					     <b>(+) Add Administration Levels</b>
					   </button>
					 </div>
				   </div>
				</div>
				<div class="row">
				   
				</div>
				<div class="row mtop15p">
				    <div class="col-lg-12">
					  <div class="table-responsive">
						<table align="center" class="table">
						  <thead>
							<tr>
							  <th>#</th>
						      <th>Country</th>
							  <th>Phone Code</th>
							  <th>Administration Levels</th>
							  <th>Currency</th>
							  <th>Timezone</th>
							  <th></th>
							</tr>
						  </thead>
						  <tbody>
						    <tr>
							  <td>1</td>
						      <td>India</td>
							  <td>+91</td>
							  <td><div><b>Level-1:</b> State</div>
							      <div><b>Level-2:</b> MP Constituency</div>
								  <div><b>Level-3:</b> MLA Constituency</div>
								  <div><b>Level-4:</b> Zilla Parishad (Rural) / Municipal Corporation (Urban)</div>
								  <div><b>Level-5:</b> Mandal Panchayat (Rural) / Municipality (Urban)</div>
								  <div><b>Level-6:</b> Grama Panchayat (Rural) / Nagar Panchayat (Urban)</div>
							  </td>
							  <td>India Rupee</td>
							  <td><div>Asia/Kolkatta</div>
							  </td>
							  <td align="right"><i class="fa fa-times-circle"></i></td>
							</tr>
							<tr>
							  <td>2</td>
						      <td>Country</td>
							  <td>PhoneCode</td>
							  <td><div><b>Level-1:</b></div>
							      <div><b>Level-2:</b></div>
								  <div><b>Level-3:</b></div>
								  <div><b>Level-4:</b></div>
								  <div><b>Level-5:</b></div>
								  <div><b>Level-6:</b></div>
							  </td>
							  <td>Currencies</td>
							  <td><div>Asia/Kolkatta</div>
								  <div>Asia/Kolkatta</div>
								  <div>Asia/Kolkatta</div>
							  </td>
							  <td align="right"><i class="fa fa-times-circle"></i></td>
							</tr>
						  </tbody>
						</table>
					  </div>
					</div>
				</div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
