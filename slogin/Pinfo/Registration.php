<?php
ob_start();
include('../../connection2.php');
session_start(); 
$enroll = $_SESSION['enroll'];

if(!isset($enroll))
	{
	header("location:../Studentlog.php?z=1");
	exit();
	}
	

$name = $_SESSION['name'];
$student_id = $_SESSION['student_id'];
$DOB = $_SESSION['DOB'];
?>
<!DOCTYPE html>
<html>
    <title>Registration</title>
    <link rel="shortcut icon" href="favicon.ico" >
<link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon" />
<link href="../../pico.css" type="text/css" rel="stylesheet" />
<script language="JavaScript" type="text/JavaScript" src="../../jquery2.js"></script>
<link rel="stylesheet" href="../../styles.css" type="text/css"/>
<script src="../../utils.js" type="text/javascript"></script>
<!--<SCRIPT LANGUAGE="JavaScript">

function popup(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=1280,height=1024');");
}

</script>
-->
<script type="text/javascript" src="../../jquery-1.2.6.js"></script>
<!-- window close validation starts -->

<script>
function confirmation() {
    if (confirm("Are you sure you want to leave this page!") == true) {
        return true;
    } else {
        return false;
    }
}
</script>

<!-- window close validation ends -->

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
<div class="headline" style="color:#060;">Registration</div>

<!-- Download Terms & Conditions starts -->
<div class="DownloadPDF">
<div class="clear"></div>
</div>
<!-- Download Terms & Conditions starts -->
</div>

<div class="clear"></div>
        
 <table width="960" height="26" cellpadding="2" cellspacing="0" align="center" style="background-color:#45916b; border-radius:5px;">
    <tr>
      <td width="100" height="24" ><div class="1tab"><a href="personalinfo1.php"><input type="button" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Personal info&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" name="rm" onClick="return confirmation(this)"></a></td><td width="100"><a href="coursesconstruction.php"><input name="rs" type="button" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Courses&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" onClick="return confirmation(this)">
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
<?php echo "<a href='logout.php' style='color:white; text-decoration:none;'><div id='log'>[ Sign-out ]</div></a>"  ?> 
</td>    

    </tr>
  </table><div class="clear"></div>
           <br/><br/>

  
        
        <div class="terms_condition_form">
        <!-- Condition Check starts -->
		
    <?php
    $q = $_GET['q'];
    if($q==1)
	{
				echo "<br/>";
		echo "<h3 align='center' style='color:#F00;'><img src='../Images/techerror.png' height='40' width='40'>&nbsp;&nbsp;An error occurred while processing your application.Reason is either you are not eligible or else.<br/>Retry after some time or mail to the COE-JMI - <span style='color:#006;'><b>ceojamia@gmail.com</b></span> with the problems.</h3>";
		echo "<br/>";
	}
	if($q==2)
	{
				echo "<br/>";
		echo "<h3 align='center' style='color:#F00;'><img src='../Images/networkerror.png' height='40' width='40'>&nbsp;&nbsp;Network Error occurred.Retry after some time.<br/>If problem persist, mail to the COE-JMI - <span style='color:#006;'><b>ceojamia@gmail.com</b></span> with the problems.</h3>";
		echo "<br/>";
	}
	if($q==3)
	{
				
		echo "<script type='text/javascript'> alert('Please select atleast one paper'); </script>";
	}
	if($q==4)
	{
				
		echo "<script type='text/javascript'> alert('You have not filled your form yet'); </script>";
	}
	if($q==5)
	{
				
		echo "<script type='text/javascript'> alert('You have already applied for this program!'); </script>";
	}
	
	?>
        
          <!-- Condition Check starts -->
		
		
		<?php
		$query = "SELECT * FROM RollListCourse WHERE Enrollment='$enroll' and ClassActive<2;";
		$run=sqlsrv_query($con,$query);
$count = sqlsrv_has_rows($run);
$row=sqlsrv_fetch_array($run,SQLSRV_FETCH_ASSOC);
$classactive = $row['ClassActive'];
//change require
if($classactive<2)
{
    
 	$query1 = "SELECT DISTINCT ExamID,ExamName
FROM RollListCourse
WHERE Enrollment='$enroll' and ExamID IN (select ExamID from exam where getdate() between RegOpenDate and RegCloseDate);";
		$run1=sqlsrv_query($con,$query1);
$count1 = sqlsrv_has_rows($run1);
if($count1>0)
{   
    
    ?>
 
 
 	
	<center><a href="HomePage.php"><input type="button" name="btnhome" id="btnhome" value="Home Page" /></a></center>
	<br/>
    <br/>
    
    <div style="background-color:#066; padding:3px 0;">
                    <p align="center" class="pageSubHeading" style="color: #ffffff; margin:0; padding:0; font-weight:bold; font-size:12px; text-align:left;">&nbsp;
                        Part I: Academic Details.</p>                                        
</div> 

    <table align="center" cellpadding="5" cellspacing="5">
    <tr>
    <td>
    Name:
    </td>
    <td>
    <?php 
	$_SESSION['name'] = $name;
	echo $name; ?>
   
    </td>
    </tr>
    <tr>
    <td>
    Enrollment No.:
    </td>
    <td>
    <?php echo $enroll; ?>
   
    </td>
    </tr>
    <tr>
    <td>
    Student ID:
    </td>
    <td>
    <?php 
	$_SESSION['stid'] = $student_id;
	echo $student_id; ?>
   
    </td>
    </tr>
    
    <tr>
    <td>
    DOB:
    </td>
    <td>
    <?php 
	$_SESSION['dob'] = $DOB;
	echo $DOB; ?>
   
    </td>
    </tr>
    
    
<tr>
<td width="150">Academic Session:</td>
<td width="400">
    
    <select name="exam" id = "drop1">
              <option value="">Please Select</option>

			  <?php while ($row = sqlsrv_fetch_array($run1, SQLSRV_FETCH_ASSOC)) { ?>
              <option value="<?php if(empty($_POST['exam_id'])) { echo $row["ExamID"]; }else  {  echo $_POST['exam_id']; } ?>"&nbsp;&nbsp;&nbsp;&nbsp; id="opt1" > <?php echo $row['ExamName']; ?>  </option>

<?php
	
			  }
	?>
    
</select>
    
    
    
    
    </td>
</tr>
</table>

    
    
	           <div class="cascade" id="exam"></div> 

          <div id="inexam" class="cascade"></div> 
         
         <div class="cascade" id="exam1"></div>
         
         <div class="cascade" id="roll"></div>
         <div class="cascade" id="wait"></div> 

<script src="jquery-1.9.0.min.js"></script>
<script>
$(document).ready(function(){
$("select#drop1").change(function(){

	var exam_id =  $("select#drop1 option:selected").attr('value'); 
// alert(country_id);	
	$("#exam").html( "" );
	$("#inexam").html( "" );
	$("#exam1").html( "" );
	
	$("#wait").html( "" );
	if (exam_id.length > 0 ) { 
		
	 $.ajax({
			type: "POST",
			url: "fetchcat.php",
			data: "exam_id="+exam_id,
			cache: false,
			beforeSend: function () { 
				$('#exam').html('<img src="../../loader.gif" alt="" width="24" height="24">');
			},
			success: function(html) {    
				$("#exam").html( html );
			}
		});
	} 
});
});
</script>
    
<?php
} //end if of 2nd query
//2nd query else starts
else
{
	echo "<br/>";
		echo "<h2 align='center' style='color:#F00;'>Sorry! The registration date is over,Or it is not started yet.</h2>";
		echo "<br/>";
		header( "refresh:10;url=personalinfo1.php" );
}

//2nd query else ends
?>               
               
<?php

}//End if of 1st query

else
{
	echo "<br/>";
	echo "<h3 align='center' style='color:red;'>You Are Not Allowed for Registration.</h3>";
	echo "<br/>";
	echo "<br/>";
echo	"&emsp;<p> <span style='font-size:15px;'>Dear&nbsp;</span> <b><span style='font-size:14px; font-style:bold;'>  ". $name ." </span></b>
 <br/><br/>
<p> You are not allowed for registration due to any of the following reason: </p>
<p>
1.You have not submitted the fees.
<br/>
2.You are detained due to IA(Internal Assessment).
<br/>
3.You are detained due to Attendance.
<br/>
4.You are debarred or rusticated from this university.
<br/>
<br/>
<br/>
<span style='color:red; font-size:24px;'>*</span> If above reason doesn't meets you.Please visit controller of examination office or mail to COE-JMI- <span style='color:#006;'>ceojamia@gmail.com</span>
</p>";


}//condition classactive check ends


	/*echo "<br/><br/>";
	echo "<table align='center' bordercolordark='#006600' border='1'>";
	    echo "<tr align='center'>";
		echo "<td><b>ExamID</b>";
		echo "</td>";
		echo "<td><b>RegOpendate</b>";
		echo "</td>";
		echo "<td><b>Regclosedate</b>";
		echo "</td>";
		echo "</tr>";
	while($row=sqlsrv_fetch_array($run,SQLSRV_FETCH_ASSOC))
	{
		//$enrollment=$row['F1'] ;""
		$enrollment= $row['ExamID'];
		$fname= $row['Enrollment'];
		$lname= $row['ExamName']; 
		
		echo "<tr>";
		echo "<td><p style='font-size:11px'>". $enrollment."</p>";
		echo "</td>";
		echo "<tr>";
		echo "<td><p style='font-size:11px'>". $fname."</p>";
		echo "</td>";
		
		
		echo "<td><p style='font-size:11px'>". $lname."</p>";
		echo "</td>";
		echo "</td>";
		echo "<td><p style='font-size:11px'></p>";
		echo "</td>";
		echo "</td>";
		echo "<td><p style='font-size:11px'></p>";
		echo "</td>";
		echo "</tr>";
	}
		
		*/
		
		?>
        
        </table>
        
        <br/>
        <br/><br/><br/><br/><br/>
        
        
        <p align="center" class="mymessage" style="color:#ffff99 "> </p>
          
        <div id="form" align="center">

<div class="cascade" id="degree"></div> 

          <div id="exam" class="cascade"></div>
           
          <div id="course" class="cascade"></div>
          
          <div id="submitt" class="cascade"></div> 
          
        </div>
    </div>

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