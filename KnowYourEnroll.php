<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html> 
<head>
 <script language="JavaScript">
function test(ii,j){
	//alert(ii);
	
	myselect = "myselect"+j;
	tt = document.getElementById("btn"+j);
	//alert(tt.value);
	window.opener.document.myForm.enroll.value=tt.value;
	if (tt!=0) {
		window.close();
	}
	/*
	var select_options=document.popUpForm.myselect;
	var len=select_options.length;
	var selindex=0;
//	alert("select options= ",+select_options);
	for (var i=0;i<len;i++){
		if (select_options[i].onclick) {selindex=select_options[i].value;}
	
	}
	selindex=select_options.value;
	alert(selindex);
	
		var opener_form=window.opener.document.myForm;
		var opener_options=opener_form.myselect;
		var len=opener_options.length;
		for (var i=0;i<len;i++){
			if (opener_options[i].onclick) {opener_options[i].onclick=false;}
		}
		window.opener.document.myForm.enroll.value=selindex;
	}*/

}
//-->    

function test1(ii)
{
	alert("dgfdgfdg"+ii);
	window.opener.document.myForm.enroll.value=ii;
	}
 
  </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Know Your Enrollment Number</title>
    <link rel="shortcut icon" href="favicon.ico" >
<link rel="stylesheet" href="knowroll.css" type="text/css" />

</head>

<body>
<img src="jamia_logo.jpg" height="120" width="120" style="position:absolute;top:10px;"/>
<h1 align="center" style="color:#060"><b>Jamia Millia Islamia</b></h1>
<h2 align="center" style="color:#060"><b>Know Your Enrollment Number</b></h2>
<br />
<p align="center" style="background-color:#45916b; color:#FFF; font-size:14px; ">Instruction: Enter your Name or Your Father's Name or Your Exam ID or Your Class Roll Number.</p>
<form name="popUpForm" action="" method="post" id="form1">
<table width="278" cellspacing="0" cellpadding="2" align="center">
  <tr>
    <td width="184"><input type="text" value="" name="enroll" id="enroll" class="enroll" size="30" /></td>
    <td width="84"><input type="submit" value="Search" name="submitbtn" id="submitbtn" class="submitbtn" /></td>
  </tr>
</table>
<?php
include("connection2.php");
?>

<?php
if(isset($_POST['submitbtn']))
{
	if(empty($_POST['enroll']))
	{
		$msg="Please enter your name,or your father's name or your class roll no.";
	echo '<script> alert("Please enter your name,or your fathers name or your class roll no.");</script>';
	}
	
	if(empty($msg))
	{
$enroll=$_POST['enroll'];
$query="SELECT F1,F0 FROM FindRolls
WHERE F0 LIKE '%$enroll%';";
$run=sqlsrv_query($con,$query);
$count=sqlsrv_has_rows($run);
$i=0;
if(isset($_POST['submitbtn']))
{
	if($count>0)
	{
		echo "<br/><br/>";
	echo "<table align='center' bordercolordark='#006600' border='1'>";
	    echo "<tr align='center'>";
		echo "<td><b>Name</b>";
		echo "</td>";
		echo "<td><b>Enrollment no.</b>";
		echo "</td>";
		echo "</tr>";
	while($row=sqlsrv_fetch_array($run,SQLSRV_FETCH_ASSOC))
	{
		//$enrollment=$row['F1'] ;""
		$enrollment= $row['F1']; 
		echo "<tr>";
		echo "<td><p style='font-size:11px'>". $row['F0']."</p>";
		echo "</td>";
		$i++;
		
		echo '<td><form name="popUpForm">
 <input type="button" value="'.$enrollment.'" name="myselect'.$i.'" onclick="test(\''.$enrollment.'\','.$i.')" onclick11="selectItem()" id="btn'.$i.'"><label for="id1"></label></td>'; 
		echo "</td>";
		
			}
	echo "</table>";
	}
	else
	{
		echo "<p style='color:RED; letter-spacing:1px; align='center''>Sorry! We couldn't find your match.Please search with another parameters (Father's name or Exam Roll or your name)</p>";
	}
}

	
	}//end of 2nd if.
}//end of 1st if.
?>
</form>
</body>
</html>