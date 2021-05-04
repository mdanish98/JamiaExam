<?php
include("../../connection2.php");
session_start(); 
$enroll = $_SESSION['enroll'];

if(!isset($enroll))
	{
	header("location:../Studentlog.php?z=1");
	exit();
	}



?> 
<!DOCTYPE html>
<html>
    <title>Personal info</title>
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
<div class="headline" style="color:#060">Personal Info</div>

<!-- Download Terms & Conditions starts -->
<div class="DownloadPDF">
<div class="clear"></div>
</div>
<!-- Download Terms & Conditions starts -->
</div>

<div class="clear"></div>
 <table width="960" height="26" cellpadding="2" cellspacing="0" align="center" style="background-color:#45916b; border-radius:5px;">
    <tr>
      <td width="100" height="24" ><div class="1tab"><a href="personalinfo1.php"><input type="button" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Personal info&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" name="rm"></a></td><td width="100"><a href="coursesconstruction.php"><input name="rs" type="button" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Courses&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;">
      </a></div>
</td>
      <td width="100"><div class="1tab"><a href="Registration.php">
        <input type="button" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" name="cc">
      </a></div>
      <td width="100"><div class="1tab"></div>
</td>
<td align="center">
<?php echo "<b style='color:white;'>Welcome " . $enroll."</b>";  ?> 
</td>    
<td align="center">
<?php echo "<b style='color:white;'>";  
echo date('d-M-Y');
echo " [ ".date("h:i:sa")." IST ]";

?> 
</td>    

<td align="justify">
<?php echo "<a href='logout.php'><div id='log'>[ Sign-out ]</div></a>"  ?> 
</td>    

    </tr>
  </table>

<div class="clear"></div>
           <!--hyperlinks tab-->
<br/><br/>

  
  
        
<div class="terms_condition_form">
<!--The Exam name goes here-->
<?php
$query="select DateEnroll,FirstName,LastName,Sex,StudentID,Enrollment,DOB,LocalStreet1,LocalStreet2,LocalStreet3,LocalCity,LocalState,LocalPin,PermanentStreet1,PermanentStreet2,PermanentStreet3,PermanentCity,PermanentState,PermanentPin,Nationality,LocalPhone,Mobile,FatherName,Email,Email1 from [enroll] where Enrollment='$enroll'";
$run=sqlsrv_query($con,$query);
$_SESSION['enroll']=$enroll;
while($row=sqlsrv_fetch_array($run,SQLSRV_FETCH_ASSOC))
{
?>

<table width="581" cellspacing="0" cellpadding="2" align="center">
  
  <tr>
    <td width="243" height="25"><b id="details">Student ID:</b></b></td>
    <td width="310" height="25"><?php	echo $_SESSION['student_id'] = $row['StudentID']; ?>
</td>
  </tr>
  
  
  <tr>
    <td width="243" height="25"><b id="details">Name:</b></b></td>
    <td width="310" height="25"><?php	echo $_SESSION['name'] = $row['FirstName']." ".$row['LastName']; ?>
</td>
  </tr>
  <tr>
    <td width="243" height="25"><b id="details">Father's/Spouse Name:</b></td>
    <td width="310" height="25"><?php echo $row['FatherName']; ?>
</td>
  </tr>
  
  <tr>
    <td width="243" height="25"><b id="details">Gender:</b></td>
    <td width="310" height="25"><?php echo $row['Sex']; ?>
</td>
  </tr>
  
  
  <tr>
    <td width="243" height="25"><b id="details">Date of Birth:</b></td>
    <td width="310" height="25"><?php	


$DOB = new DateTime($row['DOB']);
$result = $DOB->format('d-m-Y');
echo $_SESSION['DOB'] = $result;
	//echo 'date= '.$name; 
	
	 ?>
  
    </td>
  </tr>
  <tr>
    <td width="243" height="25"><b id="details">Date of Enrollment:</b></td>
    <td width="310" height="25"><?php	
$DOE = new DateTime($row['DateEnroll']);
$result2 = $DOE->format('d-m-Y');
echo $result2;
	//echo 'date= '.$name; 
	
	 ?>
  
    </td>
  </tr>
  <tr>
    <td width="243" height="25"><b id="details">Local Phone:</b></td>
    <td width="310" height="25"><?php echo  $row['LocalPhone']; ?></td>
  
  
  <td>
  <?php
  
  echo "<form action='fetching.php' method='post'>";
  echo "<input type='hidden' name='tempid'>";
  echo "<input type='submit' name='buttont' value='edit'>";
  echo "</form>";
?>

  </td>
  
  </tr>
  <tr>
    <td width="243" height="25"><b id="details">Mobile:</b></td>
    <td width="310" height="25"><?php echo  $row['Mobile']; ?></td>
  
  <td>
  <?php
  
  echo "<form action='edit2.php' method='post'>";
  echo "<input type='hidden' name='tempid'>";
  echo "<input type='submit' name='buttont' value='edit'>";
  echo "</form>";
?>

  </td>
  
  
  
  
  
  </tr>
  
  
  
  <tr>
    <td width="243" height="25"><b id="details">Email:</b></td>
    <td width="310" height="25"><?php echo  $row['Email']; ?></td>
  <td>
  <?php
  
  echo "<form action='edit5.php' method='post'>";
  echo "<input type='hidden' name='tempid'>";
  echo "<input type='submit' name='buttont' value='edit'>";
  echo "</form>";
?>

  </td>
  
  
  </tr>
  <tr>
    <td width="243" height="25"><b id="details">Alternate Email:</b></td>
    <td width="310" height="25"><?php echo  $row['Email1']; ?></td>
  
  <td>
  <?php
  
  echo "<form action='edit3.php' method='post'>";
  echo "<input type='hidden' name='tempid'>";
  echo "<input type='submit' name='buttont' value='edit'>";
  echo "</form>";
?>

  </td>
  
  
  
  </tr>
    <tr>
    
    <td width="243" height="25"><hr><b id="details">Present Address:</b></td>
    <td width="310" height="25"><hr><?php echo  $row['LocalStreet1']; ?></td>
  
  <td>
  <?php
  
  echo "<form action='edit4.php' method='post'>";
  echo "<input type='hidden' name='tempid'>";
  echo "<input type='submit' name='buttont' value='edit'>";
  echo "</form>";
?>

  </td>
  
  
  </tr>
  
  <tr>
    <td width="243" height="25"></td>
    <td width="310" height="25"><?php echo  $row['LocalStreet2']; ?></td>
  </tr>
  
  
  <tr>
    <td width="243" height="25"></td>
    <td width="310" height="25"><?php	echo $row['LocalStreet3']; ?></td>
  </tr>
  
  <tr>
    <td width="243" height="25"><b id="details">City:</b></td>
    <td width="310" height="25"><?php echo  $row['LocalCity']; ?></td>
  </tr>
  
  
  <tr>
    <td width="243" height="25"><b id="details">State:</b></td>
    <td width="310" height="25"><?php	echo $row['LocalState']; ?></td>
  </tr>
  
  <tr>
    <td width="243" height="25"><b id="details">PIN:</b></td>
    <td width="310" height="25"><?php	echo $row['LocalPin']; ?></td>
  </tr>
 
  <tr>
    <td width="243" height="25"><hr><b id="details">Permanent Address:</b></td>
    <td width="310" height="25"><hr><?php echo  $row['PermanentStreet1']; ?></td>
  </tr>
  
  <tr>
    <td width="243" height="25"></td>
    <td width="310" height="25"><?php echo  $row['PermanentStreet2']; ?></td>
  </tr>
  
  
  <tr>
    <td width="243" height="25"></td>
    <td width="310" height="25"><?php	echo $row['PermanentStreet3']; ?></td>
  </tr>
  
  <tr>
    <td width="243" height="25"><b id="details">City:</b></td>
    <td width="310" height="25"><?php echo  $row['PermanentCity']; ?></td>
  </tr>
  
  
  <tr>
    <td width="243" height="25"><b id="details">State:</b></td>
    <td width="310" height="25"><?php	echo $row['PermanentState']; ?></td>
  </tr>
  
  <tr>
    <td width="243" height="25"><b id="details">PIN:</b></td>
    <td width="310" height="25"><?php	echo $row['PermanentPin']; ?></td>
  </tr>
  
  
  <tr>
    <td width="243" height="25"><b id="details">Country:</b></td>
    <td width="310" height="25"><?php echo $row['Nationality']; ?></td>
  </tr>
  <?php }?>
  </table>






        
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
<?php
session_start();
/*
$_SESSION['enroll']=$enroll;
*/
?>