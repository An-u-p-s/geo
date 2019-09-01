<?php
require_once 'app.initiator.php';
require_once 'app.database.php';
$jsonData=file_get_contents("http://localhost/geocer/php/english/countries/India/viewAllStates.json");
$dejsonData=json_decode($jsonData);
$statesData=$dejsonData->{'states'};
$queryBuilder='';
$dbObj=new Database();
for($index=0;$index<count($statesData);$index++){
 $stateName=$statesData[$index]->{'stateValue'};
 $id='LOC'.rand(111111111,999999999);
 /* Get state_Id By using stateName */
 
 $stateIdQuery="SELECT state_Id FROM states WHERE eng_stateName='".$stateName."';";
 echo $dbObj->getJSONData($stateIdQuery).'<br/>';
}
// echo $queryBuilder;


?>