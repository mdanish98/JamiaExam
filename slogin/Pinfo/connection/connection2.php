<?php
$conninfo=array("UID"=>"ceo","PWD"=>"ceo2111","Database"=>"examdemo","ReturnDatesAsStrings"=>"true" );
$conceo=sqlsrv_connect("10.35.0.101",$conninfo) or die("Unable to connect");
?>