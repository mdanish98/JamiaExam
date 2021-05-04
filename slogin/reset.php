<?php
session_start();
$email=$_SESSION['email'];
$enroll=$_SESSION['enroll'];
$everr=$_SESSION['ever'];
$mverr=$_SESSION['mver'];
/*
echo 'email'.$email;
echo 'enroll'.$enroll;
echo 'Ever'.$everr;
echo 'Mver'.$mverr;
*/
?>
<html>
<head>
<script>
function stringlength(inputtxt)  
{   
var field = inputtxt.value;   
var mnlen = 6;  
var mxlen = 12;  
  
if(field.length<mnlen || field.length> mxlen)  
{   
alert("Please input the userid between " +mnlen+ " and " +mxlen+ " characters");  
return false;  
}  
}  
</script>
</head>
<body>
<form action="resetp.php" method="post" name="form1" onSubmit="return stringlength(document.form1.newpass)">
<table align="center" cellpadding="5" cellspacing="5">
<tr>
<td>
<label for="newpass" id="maincontentlabelev">Enter new password:</label></td>
<td>
<input type="password" name="newpass" maxlength="12"  />
</td>
</tr>
<tr>
<td>
<label for="repass" id="maincontentlabelmv">Re-type password:</label>
</td>
<td>
<input type="password" name="repass" maxlength="12"  />
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="submit" name="resetpass" value="Continue"  />
</td>
</tr>
</table>
</form>
</body>
</html>