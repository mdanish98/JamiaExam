<?php
include("../connection2.php");
include("../slogin/Pinfo/connection/connectionsql.php");
session_start(); 
$username = $_SESSION['username'];

if(!isset($username))
	{
	header("location:../index.php?z=1");
	exit();
	}


?> 
<!DOCTYPE html>
<html>
    <title>Admin</title>
    <link rel="shortcut icon" href="../favicon.ico" >
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
<link href="../pico.css" type="text/css" rel="stylesheet" />
<script language="JavaScript" type="text/JavaScript" src="/JOLF/javaScript/Administration/Admin.js"></script>
<script language="JavaScript" type="text/JavaScript" src="../jquery2.js"></script>
<link rel="stylesheet" href="../styles.css" type="text/css"/>
<script src="../utils.js" type="text/javascript"></script>
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
<!--  End Header  -->



<div class="clear"></div>


<!--  Start Content  -->
<div class="content">

<!-- form starts -->
<div id="mainContent" style="background-color: #ffffff; margin-left:1em; margin-right:1em;" align="left">
<div class="">
<div class="headline" style="color:#060">Admin</div>

<!-- Download Terms & Conditions starts -->
<div class="DownloadPDF">
<div class="clear"></div>
</div>
<!-- Download Terms & Conditions starts -->
</div>

<div class="clear"></div>
 <table width="960" height="26" cellpadding="2" cellspacing="0" align="center" style="background-color:#45916b; border-radius:5px;">
    <tr>
      <td width="100" height="24" ><div class="1tab"><a href="Admin.php"><input type="button" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approve&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" name="rm"></a></td><td width="100"><a href="ViewForm.php"><input name="rs" type="button" value="&nbsp;&nbsp;View All Forms&nbsp;&nbsp;">
      </a></div>
</td>
      <td width="100"><div class="1tab"><a href="viewbyenroll.php">
        <input type="button" value="&nbsp;&nbsp;View By Enrollment&nbsp;&nbsp;" name="cc">
      </a></div>
</td>
<td width="100"><div class="1tab"><a href="Registration.php">
        <input type="button" value="&nbsp;&nbsp;User Status&nbsp;&nbsp;" name="cc">
      </a></div>
</td>
<td width="100"><div class="1tab"><a href="Registration.php">
        <input type="button" value="&nbsp;&nbsp;Create User&nbsp;&nbsp;" name="cc">
      </a></div>
</td>
<td align="center">
<?php echo "<b style='color:white;'>Welcome " . $username."</b>";  ?> 
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
<!-- main part starts-->
<?php
$page = $_GET['page'];
if($page=="" || $page=="1")
{
	$page1 = 0;
}
else
{
	$page1 = ($page*10)-10;
}
$query = "Select EnrollCat,StudentID,Enrollment,Name,CAT,Course,Roll From registeration WHERE FormApproved=0 limit $page1,10";
$run = mysql_query($query);
$count = mysql_num_rows($run);
if($count>0)
{
?>
<form action="Approval/Approve.php" name="formapprove" method="post">
<table align="center" style=" border-style:ridge;" cellpadding="2" cellspacing="2">
<tr>
<th style="border-style:ridge;">
Student ID
</th>
<th style="border-style:ridge;">
Enrollment
</th>
<th style="border-style:ridge;">
Name
</th>
<th style="border-style:ridge;">
CAT
</th>
<th style="border-style:ridge;">
Course
</th>
<th style="border-style:ridge;">
Roll
</th>
<th style="border-style:ridge;">
Approve
</th>
</tr>
<?php
while($row = mysql_fetch_array($run))
{
	?>
	<tr>
    <td style="border-style:ridge;">
    <?php echo $row['StudentID']; ?>
    </td>
    <td style="border-style:ridge;">
    <?php echo $row['Enrollment']; ?>
    </td>
    <td style="border-style:ridge;">
    <?php echo $row['Name']; ?>
    </td>
    <td style="border-style:ridge;">
    <?php echo $row['CAT']; ?>
    </td>
    <td style="border-style:ridge;">
    <?php echo $row['Course']; ?>
    </td>
    <td style="border-style:ridge;">
    <?php echo $row['Roll']; ?>
    </td>
    <td style="border-style:ridge;">
    <input type="hidden" name="encat" value="<?php echo $row['EnrollCat']; ?>" />
    <button type="submit" name="submit" id="submit" value="<?php echo $row['EnrollCat']; ?>">Approve</button>
    </td>
    </tr>
    
	
<?php	
}
?>

</table>
</form>
<?php
$query1 = "Select EnrollCat,StudentID,Enrollment,Name,CAT,Course,Roll From registeration WHERE FormApproved=0";
$run1 = mysql_query($query1);
$count1 = mysql_num_rows($run1);

$a = $count1/10;
$a = ceil($a);
?>
<br/>
<br/>
<br/>
<center>Pages->&emsp;
<?php
for($b=1;$b<=$a;$b++)
{
	?> 
    
	<a href="Admin.php?page=<?php echo $b; ?>" style="text-decoration:none;"><?php echo $b." "; ?></a>
	
	<?php
}


}//endif count>0
else
{
	echo "<h3 align='center'>No new forms are available for approval.</h3>";
}
?>
</center>
<!-- main part ends -->
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
 ?? 2014&nbsp;Jamia Millia Islamia. All rights reserved</div>
       
</body></html>
