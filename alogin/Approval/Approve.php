<?php
include("../../connection2.php");
include("../../slogin/Pinfo/connection/connectionsql.php");
session_start(); 
$username = $_SESSION['username'];

if(!isset($username))
	{
	header("location:../index.php?z=1");
	exit();
	}
	
	echo "encat = ".$encat = $_POST['submit'];



?> 
<!DOCTYPE html>
<html>
    <title>Student's Detail</title>
    <link rel="shortcut icon" href="../../favicon.ico" >
<link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon" />
<link href="../../pico.css" type="text/css" rel="stylesheet" />
<script language="JavaScript" type="text/JavaScript" src="/JOLF/javaScript/Administration/Admin.js"></script>
<script language="JavaScript" type="text/JavaScript" src="../../jquery2.js"></script>
<link rel="stylesheet" href="../../styles.css" type="text/css"/>
<script src="../../utils.js" type="text/javascript"></script>
<style>
#details
{
	color:#999;
}
#log
{
	color:#FFF;
	text-decoration:none;
	text-decoration:underline;
}

</style>
<script>
function Sure()
{
	if (confirm("Are you sure you want to approve application\n\n form of <?php echo $encat;?>!") == true) {
        return true;
    } else {
        return false;
    }
}

</script>
<script>
function NotPaid()
{
	alert("Sorry! Unable to approve this form of <?php echo $encat;?>\n\nBecause of Pending Examination Fee!");
	return false;
	 
}

</script>
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
   var year = date.getFullYear()
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
<a href="http://jmi.ac.in/sitemap"><img src="../../sitemap-icon.png" border="0" title="Sitemap">
</a>
</div>

<div class="clear"></div>
</div>
<!--  End Top Header  -->

<!--  Start Header  -->
<div class="header">
	
<div class="logo"><a href="http://jmi.ac.in/"><img src="../../logo.png" border="0"></a></div>
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
<!--  End Header  -->



<div class="clear"></div>


<!--  Start Content  -->
<div class="content">

<!-- form starts -->
<div id="mainContent" style="background-color: #ffffff; margin-left:1em; margin-right:1em;" align="left">
<div class="">
<div class="headline" style="color:#060">Student Details</div>

<!-- Download Terms & Conditions starts -->
<div class="DownloadPDF">
<div class="clear"></div>
</div>
<!-- Download Terms & Conditions starts -->
</div>

<div class="clear"></div>
 <table width="960" height="26" cellpadding="2" cellspacing="0" align="center" style="background-color:#45916b; border-radius:5px;">
    <tr>
      <td width="100" height="24" ><div class="1tab"><a href="../Admin.php"><input type="button" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Go Back On the Main Page&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" name="rm"></a></td><td width="100"></div>
</td>
      <td width="100"><div class="1tab"></div></td>
      <td width="100"><div class="1tab"></div>
</td>

<td align="center">
<?php echo "<b style='color:white; font-size:12px;'>Welcome " . $username."</b>";  ?> 
</td>    
<td align="center">
<?php echo "<b style='color:white;  font-size:12px;'>";  
echo date('d-M-Y');
echo " [ ".date("h:i:sa")." IST ]</b>";

?> 
</td>    

<td align="justify">
<?php echo "<a href='../logout.php'><div id='log'>[ Sign-out ]</div></a>"  ?> 
</td>    
    </tr>
  </table>

<div class="clear"></div>
           <!--hyperlinks tab-->
<br/>

  
  
        
<div class="terms_condition_form">
<!--The Exam name goes here-->
<!--Main part starts-->

<?php
$query = "Select * From registeration WHERE EnrollCat='$encat';";
$run = mysql_query($query);
$count = mysql_num_rows($run);
if($count>0)
{
?>
<div style="background-color:#066; padding:3px 0;">
                    <p align="center" class="pageSubHeading" style="color: #ffffff; margin:0; padding:0; font-weight:bold; font-size:12px; text-align:left;">&nbsp;
                        Part I: Personal Details.</p>                                        
</div> 
<br/>
<form action="approveprocess.php" method="post" name="formapproval">
<table align="center" cellpadding="3" cellspacing="3" width="80%" style="border-style:ridge;">

<?php
while($row = mysql_fetch_array($run))
{
	$stid = $row['StudentID'];
	$enrollment = $row['Enrollment'];
	$name = $row['Name'];
	$dob = $row['DOB'];
	$acadsess = $row['AcadSess'];
	
	$cat = $row['CAT'];
	$course = $row['Course'];
	$session = $row['Session'];
	$papercount = $row['PaperCount'];
	for($i=1;$i<=$papercount;$i++)
	{
	  $subject[$i] = $row['sub'.$i];
	}
	//trimming start propic
	$profilepic = $row['ProfilePic'];
	$strlenn = strlen($profilepic);
	$nprofilepic = substr($profilepic, 3, $strlenn);
	$nprofilepic = "../../slogin/".$nprofilepic;
	//trimming end propic
	
	
	//trimming start sign
	$signature = $row['Signature'];
	$strlenn = strlen($signature);
	$nsignature = substr($signature, 3, $strlenn);
	$nsignature = "../../slogin/".$nsignature;
	//trimming end sign

	
	$filldate = $row['FilledOn'];
	$fathname = $row['FatherName'];
	
	$classname = $row['ClassName'];
	$add1 = $row['Add1'];
	$add2 = $row['Add2'];
	$add3 = $row['Add3'];
	
	$city = $row['City'];
	$state = $row['State'];
	$pin = $row['PIN'];
	$mobile = $row['Mobile'];
	
	$roll = $row['Roll'];
	$bookingno = $row['Bookingno'];
	$bookingstatus = $row['BookingStatus'];

}

?>
<tr>
<td style="border-style:ridge;">
Name
</td>
<td style="border-style:ridge;">

<?php echo $name;?>
</td>
<td align="center" style="border-style:ridge;" colspan="3" rowspan="6">
<img src="<?php echo $nprofilepic;?>" height="132.283464567px" width="132.283464567px" />
</td>
</tr>
<tr>
<td style="border-style:ridge;">

Father's Name
</td>
<td style="border-style:ridge;">

<?php echo $fathname;?>
</td>
</tr>
<tr>
<td style="border-style:ridge;">

Date Of Birth
</td>
<td style="border-style:ridge;">

<?php echo $dob;?>
</td>
</tr>
<tr>
<td style="border-style:ridge;">

Address
</td>
<td style="border-style:ridge;">

<?php echo $add1;?>
</td>
</tr>
<tr>
<td style=" border:none;">

</td>
<td style="border-style:ridge;">

<?php echo $add2;?>
</td>
</tr>
<tr>
<td style=" border:none;">

</td>
<td style="border-style:ridge;">

<?php echo $add3;?>
</td>
</tr>
<tr>
<td style=" border:none;">

</td>
<td style="border-style:ridge;">

<?php echo $city. " ".$state." ".$pin;?>
</td>
<td align="center" style="border-style:ridge;" colspan="3" rowspan="2">
<img src="<?php echo $nsignature;?>" alt="Signature not available" height="37.795275591px" width="188.976377953px" />

</td>
</tr>
<tr>
<td style="border-style:ridge;">

Mobile
</td>
<td style="border-style:ridge;">

<?php echo $mobile;?>
</td>
</tr>
</table>
<!-- end of personal details table -->
<br/>
<!-- Start of Academic details table -->
<div style="background-color:#066; padding:3px 0;">
                    <p align="center" class="pageSubHeading" style="color: #ffffff; margin:0; padding:0; font-weight:bold; font-size:12px; text-align:left;">&nbsp;
                        Part II: Academic Details.</p>                                        
</div> 
<br/>
<table align="center" cellpadding="3" cellspacing="3" width="80%" style="border-style:ridge;">
<tr>
<td style="border-style:ridge;">
Enrollment
</td>
<td style="border-style:ridge;">
<?php echo $enrollment;?>
</td>
</tr>
<tr>
<td style="border-style:ridge;">
Student ID
</td>
<td style="border-style:ridge;">

<?php echo $stid;?>
</td>
</tr>
<tr>
<td style="border-style:ridge;">

Roll No
</td>
<td style="border-style:ridge;">

<?php echo $roll;?>
</td>
</tr>
<tr>
<td style="border-style:ridge;">

Academic Session
</td>
<td style="border-style:ridge;">

<?php echo $acadsess;?>
</td>
</tr>
<tr>
<td style="border-style:ridge;">

Category
</td>
<td style="border-style:ridge;">

<?php 

if($cat==1)
{
echo "Regular"; 
}
else if($cat==2)
{
	echo "Ex-Regular";
}
else if($cat==3)
{
	echo "CR/DI";
}
else if($cat==4)
{
	echo "Compartment";
}

?>
</td>
</tr>
<tr>
<td style=" border-style:ridge;">
Course Name
</td>
<td style="border-style:ridge;">

<?php echo $course;?>
</td>
</tr>
<tr>
<td style=" border-style:ridge;">
Transaction No
</td>
<td style="border-style:ridge;">

<?php 
if($cat != 1)
{
	echo "<b>".$bookingno."</b>";
}
else
{
	echo "<b>NA</b>";
}
?>
</td>
</tr>
<tr>
<td style=" border-style:ridge;">
Transaction Status
</td>
<td style="border-style:ridge;">

<?php 
if($cat != 1)
{
	if($bookingstatus == 1)
	{
		echo "<b>Paid</b>";
	}
	else
	{
		echo "<b>Not Paid</b>";
	}
}
else
{
	echo "<b>NA</b>";
}
?>
</td>
</tr>
</table>
<!-- end of academic details table -->
<!-- start of paper table -->
<br/>
<div style="background-color:#066; padding:3px 0;">
                    <p align="center" class="pageSubHeading" style="color: #ffffff; margin:0; padding:0; font-weight:bold; font-size:12px; text-align:left;">&nbsp;
                        Part III: Paper Name with Codes.</p>                                        
</div> 
<br/>

<table align="center" cellpadding="3" cellspacing="3" width="80%" style="border-style:ridge;">
<tr>
<th style=" border-bottom:thin; border-bottom-color:#000; background-color:#090; color:#FFF; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-top: solid black 1.0pt; border-right: solid black 1.0pt;">
Sl. No
</th>
<th style="background-color:#090; color:#FFF; border-bottom:thin; border-bottom-color:#000; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-top: solid black 1.0pt; border-right: solid black 1.0pt;">
Paper Name with Code
</th>
</tr>
<?php
for($i=1;$i<=$papercount;$i++)
{
 ?>
<tr>
<td style="border-style:ridge;">
<?php echo $i;?>
</td>
<td style="border-style:ridge;">
<?php echo $subject[$i];?>
</td>
</tr>
<?php
}
?>
</table>

<br/><br/>
<input type="hidden" name="enrcat" value="<?php echo $encat; ?>" />
<?php
if($cat!=1 && $bookingstatus==0)
{
?>
<center>
    <input type="button" name="submit" id="submit" value="Approve" onclick="return NotPaid(this)" />
</center>


<?php
}
else
{
?>
  <center>
    <input type="submit" name="submit" id="submit" value="Approve" onclick="return Sure(this)" />
</center>
<?php
}
?>
</form>
<?php

}//endif first count>0
?>
<!--Main part ends-->
</div>        
        <p align="center" class="mymessage" style="color:#ffff99 "> </p>
          
  <div id="form" align="center">
      
  </div>
</div>
<div class="clear"></div>


<div style="background-color:#45916b; padding:3px 0;">
                    <p align="center" class="pageSubHeading" style="color: #ffffff; margin:0; padding:0; font-weight:bold; font-size:12px; text-align:left;">&nbsp;
                        Instructions:Click on the edit button alongside specific fields to update your record.</p>                                        
</div> 
<div class="footer" align="center">
<div>
Page created by Ghazanfar Danish , Shahbaz , Talha (DCS-5th Sem-2014)
<br/>
 © 2014&nbsp;Jamia Millia Islamia. All rights reserved</div>
       
</body></html>
