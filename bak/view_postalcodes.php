<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Postal Codes</title>
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

<div id="div_tbl_postalcode" class="container-fluid">
  <div class="row mtop15p">
    <div align="center" class="col-md-12 col-sm-12 col-xs-12"><h5 class="uppercase"><b>View Postal Codes List</b></h5></div>
  </div>
  <div class="row mtop15p">
	  <div align="center" class="col-md-2 col-sm-2 col-xs-12">
	     <b>AreaType :</b> RURAL / URBAN
	  </div>
	  <div align="center" class="col-md-3 col-sm-3 col-xs-12">
	     <b>Area01 :</b> Zilla Parishad / Municipal Corporation
	  </div>
	  <div align="center" class="col-md-3 col-sm-3 col-xs-12">
	     <b>Area02 :</b> Mandal Panchayat / Municipality
	  </div>
	  <div align="center" class="col-md-3 col-sm-3 col-xs-12">
	     <b>Area03 :</b> Grama Panchayat / Nagar Panchayat
	  </div>
  </div>
  <div class="row mtop15p">
	  <div id="postalCodeDataSize" class="col-md-6 col-sm-6 col-xs-12">
	    You have registered <b>1000</b> Postal Codes
	  </div>
	  <div align="right" class="col-md-6 col-sm-6 col-xs-12">
	     <div class="input-group">
			<input id="postalCodeSearch" type="text" class="form-control" placeholder="Search Postal Codes">
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
			    <th>Postal Id</th>
				<th>MP Constituency</th>
				<th>Postal Code</th>
				<th>AreaType</th>
				<th>Area03</th>
				<th>Area02</th>
				<th>Area01</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>1</td>
				<td>Anna</td>
				<td>Anna</td>
				<td>Pitt</td>
				<td>1</td>
				<td>Anna</td>
				<td>Anna</td>
			  </tr>
			</tbody>
		  </table>
	 </div>
	</div>
  </div>
</div>


</body>
</html>