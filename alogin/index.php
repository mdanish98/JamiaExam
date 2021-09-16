<!DOCTYPE html>
<head>
    <title>Admin Login</title>
    <link rel="shortcut icon" href="../favicon.ico" >
<link rel="shortcut icon" href="http://jmi.ac.in/images/jamia.ico" type="image/x-icon" />
<link href="../pico.css" type="text/css" rel="stylesheet" />
<script language="JavaScript" type="text/JavaScript" src="/JOLF/javaScript/Administration/Admin.js"></script>
<script language="JavaScript" type="text/JavaScript" src="../jquery2.js"></script>
<link rel="stylesheet" href="../styles.css" type="text/css"/>
<script src="../utils.js" type="text/javascript"></script>
<script type="text/javascript" src="../jquery.jfontsize-1.0.js"></script>


<!--<SCRIPT LANGUAGE="JavaScript">

function popup(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=1280,height=1024');");
}

</script>
-->
<script type="text/javascript" src="../jquery-1.2.6.js"></script>

</head>



<body> 


<!--  Start Main Wrapper  -->

<div id="wrapper">

<!--  Start Top Header  -->
<div class="top-header">
<!--  Date and Time  -->
<div class="date">

<span id="clock"></span>
<!--  Date and Time  -->
&nbsp;Welcome Guest | <a href="http://jmi.ac.in/onlineclassroom/index.php" target="_blank">Sign In</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<script type="text/javascript">
   var date = new Date(); 
   var month = date.getMonth() + 1;
   var day = date.getDate();
   var year = date.getFullYear();
   var hours = date.getHours();
   var minutes = date.getMinutes();
   document.write(day + "/" + month + "/" + year + "     " + hours + ":" + minutes);
</script>
  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="span">Language :  </span><a href="http://jmi.ac.in/" style="color:#45916B;font-weight: bold;">English </a>| <a href="http://jmi.ac.in/construction.html" target="_blank">Hindi</a>
</div>

<div class="fontSize"><span class="span">Font Size : </span>
<a id="jfontsize-default" class="fontfocus" style="cursor: pointer;">A</a>| 
<a id="jfontsize-minus" class="fontnormal" style="cursor: pointer;">A-</a>| 
<a id="jfontsize-plus" class="fontnormal" style="cursor: pointer;">A+</a> 
</div>
&nbsp;&nbsp;


<div class="contactus"><a href="http://jmi.ac.in/feedback" title="Website Feedback">Website Feedback</a>
&nbsp;
<a href="http://jmi.ac.in/sitemap"><img src="../sitemap-icon.png" border="0" title="Sitemap">
</a>
</div>

<div class="clear"></div>
</div>
<!--  End Top Header  -->

<!--  Start Header  -->
<div class="header">
	
<div class="logo"><a href="http://jmi.ac.in/"><img src="../logo.png" border="0"></a></div>
<div class="header-right">
<div class="menu" >

<div class="tab_selected"><a href="http://jmi.ac.in/">Home</a></div>
<div class="tab"><a href="http://jmi.ac.in/aboutjamia">About Jamia</a></div>
<div class="tab"><a href="http://jmi.ac.in/studyatjamia">Study at Jamia</a></div>
<div class="tab"><a href="http://jmi.ac.in/bulletinboard">Bulletin Board</a></div>
<div class="tab"><a href="http://jmi.ac.in/universityreport/annual">University Reports</a></div>

</div>
<div class="search">
<form class="search-form" action="http://www.google.com/cse" name="frmSearch">
      
    <input type="hidden" name="ie" value="UTF-8">
    <input id="custom" name="cx" type="radio" value="010200137612988349174:pk1grjzjces" checked="checked">Jamia
    <input id="www" name="cx" type="radio" value="!010200137612988349174:pk1grjzjces">Web<br>
			
    <input type="hidden" name="cof" value="FORID:13;AH:left;CX:JAMIA;L:http://www.google.com/intl/en/images/logos/custom_search_logo_sm.gif;LH:30;LP:1;KMBOC:%23336699;">	  
    <input type="text" name="q" size="20" id="txtq" class="textbox">
    <input name="txtq" type="button" class="search-button" onclick="searchJamia()">
    <br><a href="http://jmi.ac.in/Jamia%20Online%20Fee%20Payment/paymentForm.html#" class="hover"></a><br>
    <input type="hidden" name="ie" value="UTF-8">
</form> 
</div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<!--  Start Content  -->
<div class="content">
<!-- form starts -->
<div id="mainContent" style="background-color: #ffffff; margin-left:1em; margin-right:1em;" align="left">
<div class="headline" style="color:#060">Admin Login</div>
<!-- Download Terms & Conditions starts -->
<div class="DownloadPDF">
<div class="clear"></div>
</div>
<!-- Download Terms & Conditions starts -->
</div>

<div class="clear"></div>
        
<table width="960" height="26" cellpadding="2" cellspacing="0" align="center" style="background-color:#45916b; border-radius:5px;">
    <tr>
      <td width="144" height="24" ><div class="1tab"><a href="http://localhost/JamiaExam/ExaminationResults.php"><input type="button" value="Result & Marksheet" name="rm"></a></div>
</td>
      <td width="147"><div class="1tab"><a href="http://localhost/JamiaExam/Resultsheets/Resultsheets.php"><input name="rs" type="button" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Result sheets&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"></a></div>
      <td width="147"><div class="1tab"><a href="http://localhost/JamiaExam/CourseCurriculum/coursecurriculum.php"><input type="button" value="&nbsp;Course Curriculum&nbsp;&nbsp;" name="cc"></a></div>
</td>
      <td width="504"><div class="1tab"><a href="Studentlog.php"><input type="button" value="&nbsp;&nbsp;&nbsp;&nbsp;Student Log-in&nbsp;&nbsp;&nbsp;&nbsp;" name="cc"></a></div>
</td>
    </tr>
  </table>
<div class="clear"></div>
           <br/><br/>

  
        
        <div class="terms_condition_form">
        
        
        
        <p align="center" class="mymessage" style="color:#ffff99 "> </p>
          
        <div id="form" align="center">
        <?php
		$s=$_GET['s'];
		$k=$_GET['k'];
		if($s==1)
		{
			echo '<div style="color:red; font-size:12px;">The enrollment Number or password is wrong.Please retry with the correct password or click forgot password to reset your password.</div>';
		}
		if($s==2)
		{
			echo '<div style="color:green; font-size:12px;">The Password has been reset now log-in.</div>';
		}
		if($s==3)
		{
			echo '<div style="color:red; font-size:12px;">Your Password has not been set please retry.</div>';
		}
		if($k==1)
		{
			echo '<div style="color:red; font-size:12px;">Wrong! Captcha please re-enter</div>';
		}
		if($k==2)
		{
			echo '<div style="color:red; font-size:12px;">Username or Password is wrong.please retry!</div>';
		}
		if($s==2)
		{
			
		}
		?>
        <?php
		$z=$_GET['z'];
		if($z==1)
		{
			echo '<div style="color:green; font-size:16px;">Please log-in! first</div>';
		}
		?>
        <?php
		
		$y=$_GET['y'];
		if($y==1)
		{
			echo '<div style="color:green; font-size:16px;">You have successfully logged out.</div>';
		}
		?>
        <?php
		
		$p=$_GET['p'];
		if($p==1)
		{
			echo '<div style="color:red; font-size:18px;">Your account has been Locked Reset Your password</div>';
		}
		
		$x=$_GET['x'];
		if($x==1)
		{
			echo '<div style="color:red; font-size:18px;">Your Enrollment number does not exist!</div>';
		}
		
		
		?>

<form action="validate/validate.php" method="post">
<table border="0" cellpadding="5" cellspacing="5">
<tr>
<td align="left">
<label for="username" id="maincontentlabel">User Name:</label></td>
<td align="left">
<input name="username" type="text" maxlength="10" id="mainusername" class="textEntry" oncopy="return false" onpaste="return false" oncut="return false" autocomplete="off">
</td>
</tr>
<tr>
<td align="left">
<label for="password" id="maincontentpasslabel">Password:</label>
</td>
<td align="left">
<input name="password" type="password" maxlength="50" id="mainpassword" size="39" class="textEntry" oncopy="return false" onpaste="return false" oncut="return false">
</td>
</tr>
<tr align="left">
<td>Enter Security Code:</td>
<td align="left"><input type="text" name="captcha" maxlength="4" size="20" autocomplete="off"></td>
</tr>
<tr>
<td></td>
<td><img src="validate/captcha.php"></td>
</tr>
<tr>
<td></td>
<td>
<input type="radio" name="tbname" value="alogin" id="Alogin" /><b>Admin</b>
&emsp;&emsp;
<input type="radio" name="tbname" value="user" id="user" /><b>User</b>
</td>
</tr>

<tr>
<td></td>
<td align="left"><input type="submit" value="Log in" name="btnsubmit"></td>
</tr>
<tr>
<td></td>
<td align="left"><br><input type="button" value="Forgot your password?" id="forgot" name="forgot"></td>
</tr>
</table>
<div id="div1"></div>

<script>
$(document).ready(function(){
  $("#forgot").click(function(){
    $.ajax({url:"forgotpass.php",success:function(result){
      $("#div1").html(result);
    }});
  });
});
</script>
</form>
<?php
$l=$_GET['l'];
if($l==1)
{
	echo '<div style="color:green; font-size:12px;">Your Email and Mobile verification code has been sent to your email address please enter it below.</div>';
	echo "<br/><br/>";
include 'validation.php';
}
?>
<?php
$m=$_GET['m'];
if($m==1)
{
	echo '<div style="color:red; font-size:12px;">Your Email and enroll doesnt match please retry.</div>';
	echo "<br/><br/>";
	include 'forgotpass.php';
}
?>
<?php
$o=$_GET['o'];
if($o==1)
{
	echo '<div style="color:green; font-size:12px;">Reset your Password.</div>';
	echo "<br/><br/>";
include 'reset.php';
}
if($o==2)
{
	echo '<div style="color:red; font-size:12px;">Your Mobile verification or email verification is invalid.Please retry.</div>';
	echo "<br/><br/>";
	include 'validation.php';
}
?>
        </div>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="clear"></div>
<div style="background-color:#45916b; padding:3px 0;">
                    <p align="center" class="pageSubHeading" style="color: #ffffff; margin:0; padding:0; font-weight:bold; font-size:12px; text-align:left;">&nbsp;
                        Instructions: Enter the Enrollment number if you dont know your Enrollment number please press search button inorder to know your Enrollment number.</p>                                        
</div> 
<div class="footer" align="center">
<div>
Page created by Ghazanfar Danish , Shahbaz , Talha (DCS-5th Sem-2014)
<br/>
 © 2014&nbsp;Jamia Millia Islamia. All rights reserved</div>
       
</body></html>

<script>
window.onbeforeunload = function() {
   // This template uses no error checking, it's just concept code to be
   // expanded on.
	 
   // Create a new XMLHttpRequest object
   var AJAX=new XMLHttpRequest();  
	 
   // Handle ready state changes ( ignore them until readyState = 4 )
   AJAX.onreadystatechange= function() { if (AJAX.readyState!=4) return false; }
	 
   // we're passing false so this is a syncronous request.
   // The script will stall until the document has been loaded.
   // the open statement depends on a global variable titled _userID.
   AJAX.open("GET", 'http://someurl.com/endsession.php?id='+_userID, false);
   AJAX.send(null);
}
</script>
<?php
session_start(); 
$_SESSION['enrolm'] = $_POST['enroll'];
?> 