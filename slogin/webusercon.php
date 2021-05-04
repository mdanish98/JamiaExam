<?php
$conninfo=array("UID"=>"webuser","PWD"=>"ceo2111webuser","Database"=>"examdemo","ReturnDatesAsStrings"=>"true");
$con=sqlsrv_connect("10.35.0.101",$conninfo) or die("Unable to connect");
?>