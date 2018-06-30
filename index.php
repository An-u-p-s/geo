<!DOCTYPE html>
<html lang="en">
<head>
  <title>Geocer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.uppercase { text-transform:uppercase; }
.mtop15p { margin-top:15px; }
.hide-block { display:none; }
</style>
<script type="text/javascript">
function displayForm(id){
 var arry_Id=["addCountriesForm","addStatesForm","addMPConstitencyForm","addMLAConstitencyForm","addPostalCodeForm"];
 for(var index=0;index<arry_Id.length;index++){
   if(arry_Id[index]===id){
     if($('#'+arry_Id[index]).hasClass('hide-block')) { $('#'+arry_Id[index]).removeClass('hide-block'); }
   } else {
     if(!$('#'+arry_Id[index]).hasClass('hide-block')) { $('#'+arry_Id[index]).addClass('hide-block'); }
	}
 }
}
</script>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12">
	 <div class="col-md-12 col-sm-12 col-xs-12">
      <h5><b>GEOCER</b></h5>
      <div align="justify">
	   Country is divided into States. States are divided into MP Constituencies.
	   MP Constituencies are divided into  MLA Constituencies. MLA Constituencies 
	   are divided into Postal Code Areas.
	  </div>
	 </div>
	  <div class="col-md-12 col-sm-12 col-xs-12">
	  <!-- Add List --> 
      <button class="btn btn-default" onclick="javascript:displayForm('addCountriesForm');"><b>Add Country</b></button>
	  <button class="btn btn-default" onclick="javascript:displayForm('addStatesForm');"><b>Add States</b></button>
	  <button class="btn btn-default" onclick="javascript:displayForm('addMPConstitencyForm');"><b>Add MP Constituencies</b></button>
	  <button class="btn btn-default" onclick="javascript:displayForm('addMLAConstitencyForm');"><b>Add MLA Constituencies</b></button>
	  <button class="btn btn-default" onclick="javascript:displayForm('addPostalCodeForm');"><b>Add Postal Codes</b></button>
	  
	  <a href="view_countries.php" target="_blank"><button class="btn btn-default"><b>View Countries List</b></button></a>
	  <a href="view_states.php" target="_blank"><button class="btn btn-default"><b>View States List</b></button></a>
	  <a href="view_mpconstituency.php" target="_blank"><button class="btn btn-default"><b>View MP Constituencies List</b></button></a>
	  <a href="view_mlaconstituency.php" target="_blank"><button class="btn btn-default"><b>View MLA Constituencies List</b></button></a>
	  <a href="view_postalcodes.php" target="_blank"><button class="btn btn-default"><b>View Postal Codes List</b></button></a>
    </div>
  
    </div>
	
	 <div class="col-md-4 col-sm-4 col-xs-12">
	 
		<div id="addCountriesForm" class="mtop15p hide-block">
		   <div><h5><b>Add Countries</b></h5><hr/></div>
		   <div class="form-group">
		     <label>Country</label>
			 <input type="text" class="form-control" placeholder="Enter your Country"/>
		   </div>
		   <div>
		    <button class="btn btn-default form-control"><b>Add Country</b></button>
		   </div>
		</div>
		
		<div id="addStatesForm" class="mtop15p hide-block">
		   <div><h5><b>Add States</b></h5><hr/></div>
		   <div class="form-group">
		     <label>State</label>
			 <input type="text" class="form-control" placeholder="Enter your State"/>
		   </div>
		   <div class="form-group">
		     <label>State Type</label>
			 <select class="form-control">
				<option value="">Select your State Type</option>
				<option value="STATE">State</option>
				<option value="UNION_TERRITORY">Union Territory</option>
			 </select>
		   </div>
		   <div class="form-group">
		     <label>Country</label>
			 <select class="form-control">
				<option value="">Select your Country</option>
			 </select>
		   </div>
		   <div>
		    <button class="btn btn-default form-control"><b>Add State</b></button>
		   </div>
		</div>
		<div id="addMPConstitencyForm" class="mtop15p hide-block">
		   <div><h5><b>Add MP Constituency</b></h5><hr/></div>
		   <div class="form-group">
		     <label>MP Constituency</label>
			 <input type="text" class="form-control" placeholder="Enter your MP Constituency"/>
		   </div>
		   <div class="form-group">
		     <label>State</label>
			 <select class="form-control">
				<option value="">Select your State</option>
			 </select>
		   </div>
		   <div class="form-group">
		     <label>Country</label>
			 <select class="form-control">
				<option value="">Select your Country</option>
			 </select>
		   </div>
		   <div>
		    <button class="btn btn-default form-control"><b>Add MP Constituency</b></button>
		   </div>
		</div>
		<div id="addMLAConstitencyForm" class="mtop15p hide-block">
		  <div><h5><b>Add MLA Constituency</b></h5><hr/></div>
		   <div class="form-group">
		     <label>MLA Constituency</label>
			 <input type="text" class="form-control" placeholder="Enter your MLA Constituency"/>
		   </div>
		   <div class="form-group">
		     <label>MP Constituency</label>
			 <select class="form-control">
				<option value="">Select your MP Constituency</option>
			 </select>
		   </div>
		   <div class="form-group">
		     <label>State</label>
			 <select class="form-control">
				<option value="">Select your State</option>
			 </select>
		   </div>
		   <div class="form-group">
		     <label>Country</label>
			 <select class="form-control">
				<option value="">Select your Country</option>
			 </select>
		   </div>
		   <div>
		    <button class="btn btn-default form-control"><b>Add MLA Constituency</b></button>
		   </div>
		</div>
		<div id="addPostalCodeForm" class="mtop15p hide-block">
		   <div><h5><b>Add Postal Code Region</b></h5><hr/></div>
		   <div class="form-group">
		     <label>Country</label>
			 <select class="form-control">
				<option value="">Select your Country</option>
			 </select>
		   </div>
		   <div class="form-group">
		     <label>State</label>
			 <select class="form-control">
				<option value="">Select your State</option>
			 </select>
		   </div>
		   <div class="form-group">
		     <label>MP Constituency</label>
			 <select class="form-control">
				<option value="">Select your MP Constituency</option>
			 </select>
		   </div>
		   <div class="form-group">
		     <label>MLA Constituency</label>
			 <select class="form-control">
				<option value="">Select your MLA Constituency</option>
			 </select>
		   </div>
		   <div class="form-group">
		     <label>Area Type</label>
			 <select class="form-control">
				<option value="">Select Area Type</option>
				<option value="RURAL">Rural</option>
				<option value="URBAN">Urban</option>
			 </select>
		   </div>
		   <div class="form-group">
		     <label>Postal Number</label>
			 <input type="text" class="form-control" placeholder="Enter Postal Number"/>
		   </div>
		   <div class="form-group">
		     <label>Region</label>
			 <input type="text" class="form-control" placeholder="Enter Region"/>
		   </div>
		   <div class="form-group">
		     <label id="area01type">Area01</label>
			 <input type="text" class="form-control" placeholder="Enter AreaName"/>
		   </div>
		   <div class="form-group">
		     <label id="area02type">Area01</label>
			 <input type="text" class="form-control" placeholder="Enter AreaName"/>
		   </div>
		   <div class="form-group">
		     <label id="area03type">Area01</label>
			 <input type="text" class="form-control" placeholder="Enter AreaName"/>
		   </div>
		   <div>
		    <button class="btn btn-default form-control"><b>Add MLA Constituency</b></button>
		   </div>
		</div>
	 </div>
	 
	 <div class="col-md-4 col-sm-4 col-xs-12">
	    <div align="center"><h4><b>Registered Data Information</b></h4></div>
		<div align="right">
		   <h5><b>100</b> Countries</h5>
		   <h5><b>1000</b> States</h5>
		   <h5><b>10000</b> MP Constituencies</h5>
		   <h5><b>10000</b> MLA Constituencies</h5>
		   <h5><b>100000</b> Postal Code Region</h5>
		</div>
	 </div>
  </div>

</div>
 

</body>
</html>
