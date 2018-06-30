<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Countries</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.uppercase { text-transform:uppercase; }
.mtop15p { margin-top:15px; }
</style>
</head>
<body>
<div id="div_tbl_countries" class="container-fluid">
  <div class="row mtop15p">
    <div align="center" class="col-md-12 col-sm-12 col-xs-12"><h5 class="uppercase"><b>View Countries List</b></h5></div>
  </div>
  <div class="row mtop15p">
	  <div id="countriesDataSize" class="col-md-6 col-sm-6 col-xs-12">
	    You have registered <b>100</b> Countries
	  </div>
	  <div align="right" class="col-md-6 col-sm-6 col-xs-12">
	     <div class="input-group">
			<input id="countrySearch" type="text" class="form-control" placeholder="Search Country">
			<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i>&nbsp;<b>Search</b></span>
		 </div>
	  </div>
  </div>
  <div class="row mtop15p">
	  <div class="col-md-12 col-sm-12 col-xs-12">
	  <div class="table-responsive">          
		  <table class="table" style="border:1px solid #ccc;">
			<thead>
			  <tr style="background-color:#efefef;">
			    <th>Country Id</th>
				<th>Country Name</th>
				<th>PhoneNumber</th>
				<th>TimeZone</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>1</td>
				<td>Anna</td>
				<td>Pitt</td>
			  </tr>
			</tbody>
		  </table>
	 </div>
	</div>
  </div>
</div>
</body>
</html>