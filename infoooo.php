<?php
include "connection2.php";
//$query="SELECT FirstName,LastName,EnrollPWD,Email,Enrollment FROM enroll
//WHERE Enrollment='14-0541';";
$query="SELECT * FROM enroll
WHERE Enrollment='1211113';";
$run=sqlsrv_query($con,$query);
$count = sqlsrv_has_rows($run);
if($count>0)
{
	echo "rows more than 1";
}
else
{
	echo "empty";
}

	echo "<br/><br/>";
	echo "<table align='center' bordercolordark='#006600' border='1'>";
	    echo "<tr align='center'>";
		echo "<td><b>Name</b>";
		echo "</td>";
		echo "<td><b>password no.</b>";
		echo "</td>";
		echo "</tr>";
	while($row=sqlsrv_fetch_assoc($run,SQLSRV_FETCH_ASSOC))
	{
		//$enrollment=$row['F1'] ;""
		$enrollment= $row['0'];
		$fname= $row['1'];
		$lname= $row['2']; 
		$email= $row['3']; 
		$enroll= $row['4']; 
		echo "<tr>";
		echo "<td><p style='font-size:11px'>". $fname."</p>";
		echo "</td>";
		echo "<tr>";
		echo "<td><p style='font-size:11px'>". $lname."</p>";
		echo "</td>";
		
		
		echo "<td><p style='font-size:11px'>". $enrollment."</p>";
		echo "</td>";
		echo "</td>";
		echo "<td><p style='font-size:11px'>". $email."</p>";
		echo "</td>";
		echo "</td>";
		echo "<td><p style='font-size:11px'>". $enroll."</p>";
		echo "</td>";
		echo "</tr>";
	}
	?>