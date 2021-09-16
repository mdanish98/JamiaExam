<?php
include('../webusercon.php');
include('connection/connection2.php');
session_start(); 
$enroll = $_SESSION['enroll'];

if(!isset($enroll))
	{
	header("location:../Studentlog.php?z=1");
	exit();
	}
	
	
		
	$q=$_GET['q'];
	if($q == 1)
	{
		echo "<script type='text/javascript'> alert('Paper succesfully added!'); </script>";
	}
	if($q == 2)
	{
		echo "<script type='text/javascript'> alert('Paper succesfully deleted!'); </script>";
	}
	if($q == 3)
	{
		echo "<script type='text/javascript'> alert('Error Occurred While Submitting your form please Retry'); </script>";
	}
	
$stid = $_SESSION['stid'];
$name = $_SESSION['name'];
$dob = $_SESSION['dob'];
echo "examid = ".$examid = $_SESSION['examid'];
$cat = $_SESSION['cat'];
$sessionn = $_SESSION['sessionn'];
$i = $_SESSION['i']-1;
$part = $_SESSION['part'];
//database connectivity to find exam name

$query1 = "SELECT DISTINCT ExamName
FROM Exam WHERE ExamID='$examid';";
$run1=sqlsrv_query($con,$query1);
$row=sqlsrv_fetch_array($run1,SQLSRV_FETCH_ASSOC);
$acadname = $row['ExamName'];
$_SESSION['acadsessname'] = $acadname;


//trimming start
$course = $_SESSION['course'];
$part = $_SESSION['part'];
$strlenn = strlen($course);
$partt = substr($course, 0, $strlenn-1);
$newcourse = $partt." ".$part;
echo "classid=".$classsid = $_SESSION['classsid'];

echo "roll iddd = ".$roll_id = $_SESSION['roll_id'];
//trimming end
$enrollcat = $_SESSION['roll_id'];
$query = "SELECT RollID FROM RegisterExam WHERE RollID='$roll_id' and FormSubmitted=1";
$run = sqlsrv_query($con,$query);
$count  = sqlsrv_has_rows($run);
if($count>0)
{
	header("Location: Registration.php?q=5");
	exit();
}
echo "rollid = ".$roll_id."examid = ".$examid."cat = ".$cat."classsid = ".$classsid;

if(empty($roll_id) or empty($examid) or empty($cat))
{
	header("Location: Registration.php");
}


?>
<!DOCTYPE html>
<html>
    <title>Application Form</title>
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
<!-- PicShow starts -->
<script type="text/javascript">

function readURL(input) {
        if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(132.283464567)
                        .height(132.283464567);
                };

                reader.readAsDataURL(input.files[0]);
        
		    }
			return true;
		}
				
		
</script>
<!-- PicShow Ends -->

<!-- SignShow starts -->
<script type="text/javascript">

function readSign(sign) {
        if (sign.files && sign.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#sign')
                        .attr('src', e.target.result)
                        .width(188.976377953)
                        .height(37.795275591);
                };

                reader.readAsDataURL(sign.files[0]);
        
		    }
			return true;
		}
				
		
</script>
<!-- SIgnShow Ends -->
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
<!-- PapSel starts -->

<script type="text/javascript">
function paper()
{
	alert("Please add atleast one paper!");
	return false;
}

</script>

<!-- PapSel ends -->

<!-- File upload validation starts-->
<script>

function FileUpload(input,signature)  
{   
var field = input.value;   
var sign = signature.value;
//var declare = declaration.value;

if(document.getElementById('ChkDec').checked)
{
if(field=="" || sign=="")  
{   
alert("Please choose a file");  
return false;  
}  
else
{
	
	var FileName  = input.value;
		var FileExt = FileName.substr(FileName.lastIndexOf('.')+1);
        var FileSize = input.files[0].size;
        var FileSizeMB = (FileSize/1000).toFixed(2);
		
		var FileSign  = signature.value;
		var FileSignExt = FileSign.substr(FileSign.lastIndexOf('.')+1);
        var FileSignSize = signature.files[0].size;
        var FileSignSizeMB = (FileSignSize/1000).toFixed(2);

        if ( (FileExt != "jpg" && FileExt != "jpeg" && FileExt != "png") || FileSize>20000  || (FileSignExt != "jpg" && FileSignExt != "jpeg" && FileSignExt != "png") || FileSignSize>20000)
        {
            var error = "File Photo type : "+ FileExt+"\n\n";
			error += "File Signature type : "+ FileSignExt+"\n\n"
            error += "Photo Size: " + FileSizeMB + " KB \n\n";
			error += "Signature Size: " + FileSignSizeMB + " KB \n\n";
            error += "Please make sure your file is in jpg/jpeg or png format and less than 20 KB.\n\n";
            alert(error);
            return false;
        }
		else
        {
		if (input.files && input.files[0] && signature.files && signature.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(132.283464567)
                        .height(132.283464567);
                };
				reader.onload = function (e) {
                    $('#sign')
                        .attr('src', e.target.result)
                        .width(188.976377953)
                        .height(37.795275591);
                };

                reader.readAsDataURL(signature.files[0]);
        
		    }
			return true;
		}
		
}   //else end

}//end of 1st if
else
{
	alert("Please accept the declaration");  
return false;  
}


}  //function end


		//signature starts
		/*var FileSign  = signature.value;
		var FileSignExt = FileSign.substr(FileSign.lastIndexOf('.')+1);
        var FileSignSize = signature.files[0].size;
        var FileSignSizeMB = (FileSignSize/10485760).toFixed(2);

        if ( (FileSignExt != "jpg" && FileSignExt != "jpeg" && FileSignExt != "png") || FileSize>20000)
        {
            var error = "File type : "+ FileSignExt+"\n\n";
            error += "Size: " + FileSignSizeMB + " MB \n\n";
            error += "Please make sure your signature is in jpg/jpeg or png format and less than 20 KB.\n\n";
            alert(error);
            return false;
        }
		else
        {
		if (signature.files && signature.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(132.283464567)
                        .height(132.283464567);
                };

                reader.readAsDataURL(signature.files[0]);
        
		    }
			return true;
		}
		
		
		
		//signature ends
		
		*/
		
	
	
</script>


<!-- File upload validation ends -->
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
<a href="http://jmi.ac.in/sitemap"><img src="sitemap-icon.png" border="0" title="Sitemap">
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
<div class="headline" style="color:#060;">Application Form</div>

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
        <input type="button" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" name="cc" onClick="return confirmation(this)">
      </a></div>
      <td width="100"><div class="1tab"></div>
</td>
<td align="center">


<?php echo "<span style='color:white; font-size:12px;'>Welcome " . $enroll."</span>";   ?> 
</td>    
<td align="center">
<?php echo "<span style='color:white; font-size:12px;'>";  
echo date('d-M-Y');
echo " [ ".date("h:i:sa")." IST ]</span>";

?> 
</td>    

<td align="justify">
<?php  echo "<a href='logout.php' style='text-decoration: none; color:white; font-size:12px; '><div id='log'>[ Sign-out ]</div></a>";  ?> 
</td>    

    </tr>
  </table>
  
  <div class="clear"></div>
           <br/><br/>

  
        
        <div class="terms_condition_form">
<!-- Main content starts onchange="return readURL(this);"-->
<!-- Personal part Starts -->
<div style="float: left;background-color:#066; padding:3px 0; width: 100%;
  margin:0 auto;"><p align="center" class="pageSubHeading" style="color: #ffffff; margin:0; padding:0; font-weight:bold; font-size:12px; text-align:left;">&nbsp;Academic Details</p>                                        
</div>
<br/>
<br/>
<?php
$query4 = "select CourseName from RollList where Enrollment='$enroll' and ExamID='$examid' and CAT='$cat' and ClassSID='$classsid'";
$run4 = sqlsrv_query($conceo,$query4);
$row3 = sqlsrv_fetch_array($run4,SQLSRV_FETCH_ASSOC);
echo "coursename = ".$coursename = $row3['CourseName'];


?>
<table align="center" border="1" width="581" cellpadding="5" cellspacing="2">
<tr>
<td>
<span style="font-size:13px; color:#000; font-weight:bold;">
Name
</span>
</td>
<td>
<span style="font-size:12px; color:#000;">
<?php echo $name; ?>
</span>
</td>

</tr>
<tr>
<td>
<span style="font-size:13px; color:#000; font-weight:bold;">
Student ID
</span>
</td>
<td>
<span style="font-size:12px; color:#000;">
<?php echo $stid; ?>
</span>
</td>
</tr>
<tr>
<td>
<span style="font-size:13px; color:#000; font-weight:bold;">
Enrollment Number
</span>
</td>
<td>
<span style="font-size:12px; color:#000;">
<?php echo $enroll; ?>
</span>
</td>
</tr>
<tr>
<td>
<span style="font-size:13px; color:#000; font-weight:bold;">
Date Of Birth
</span>
</td>
<td>
<span style="font-size:12px; color:#000;">
<?php echo $dob; ?>
</span>
</td>
</tr>
<tr>
<td>
<span style="font-size:13px; color:#000; font-weight:bold;">
Academic Session
</span>
</td>
<td>
<span style="font-size:12px; color:#000;">
<?php echo $acadname; ?>
</span>
</td>
</tr>
<tr>
<td>
<span style="font-size:13px; color:#000; font-weight:bold;">
Category
</span>
</td>
<td>
<span style="font-size:12px; color:#000;">
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
</span>
<tr>
<td>
<span style="font-size:13px; color:#000; font-weight:bold;">
Course

</span>
</td>
<td>
<span style="font-size:12px; color:#000;">
<?php echo $coursename; ?>
</span>
</td>
</tr>
<tr>
<td>
<span style="font-size:13px; color:#000; font-weight:bold;">
Session
</span>
</td>
<td>
<span style="font-size:12px; color:#000;">
<?php echo $sessionn; ?>
</span>
</td>
</tr>


</td>
</tr>


</table>

<!-- Personal part ends -->

<!-- Paper part starts -->
<br/>
<br/>
<div style="float: left;background-color:#066; padding:3px 0; width: 100%;
  margin:0 auto;"><p align="center" class="pageSubHeading" style="color: #ffffff; margin:0; padding:0; font-weight:bold; font-size:12px; text-align:left;">&nbsp;Paper available to be taken for this examination.</p>                                        
</div><br/>
<?php 
include('fetch_paper.php');
?>

<?php
$query2 = "SELECT PsetID,PaperID,PaperCode,PaperName FROM RegisterExam where ExamID='$exam_id' and RollID='$roll_id' Order By PsetID";
$run2 = sqlsrv_query($con,$query2);
$count2 = sqlsrv_has_rows($run2);
if($count2>0)
{
?>

<br/>
<div style="float: left;background-color:#066; padding:3px 0; width: 100%; margin:0 auto;"><p align="center" class="pageSubHeading" style="color: #ffffff; margin:0; padding:0; font-weight:bold; font-size:12px; text-align:left;">&nbsp;Paper You have chosen</p>                                        
</div><br/>


<form action="Delete.php" method="post" name="formsub">

    <table align="center" border="1" width="581" cellpadding="5" cellspacing="5">
    <tr>
<th style=" border-bottom:thin; border-bottom-color:#000; background-color:#090; color:#FFF; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-top: solid black 1.0pt; border-right: solid black 1.0pt;">
Select
</th>
<th style="background-color:#090; color:#FFF; border-bottom:thin; border-bottom-color:#000; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-top: solid black 1.0pt; border-right: solid black 1.0pt;">
Paper Name with Code
</th>
</tr>
	<?php 
	
	while ($row2 = sqlsrv_fetch_array($run2, SQLSRV_FETCH_ASSOC)) { ?>
	<tr>
<td align="center">  
    <input type="checkbox" name="check1[]" value="<?php //echo $row["PaperID"];
	echo $row2['PsetID'];
	 ?>" />
    </td>
    <td>
    <?php echo $row2['PaperID']." : ".$row2['PaperCode']." : ".$row2["PaperName"];  ?>
	<?php 
	
	} ?>
    </td>
    </tr>
    <tr align="center">
    <td colspan="2">
    <input type="submit" name="btnsub" value="Delete" onclick="return Sure(this)" />
    </td>
    
    </tr>
    
</table>
</form>
<?php
}
?>
<br/>
<br/>
<!-- Pic Upload starts -->
<br/>
<div style="float: left;background-color:#066; padding:3px 0; width: 100%; margin:0 auto;"><p align="center" class="pageSubHeading" style="color: #ffffff; margin:0; padding:0; font-weight:bold; font-size:12px; text-align:left;">&nbsp;Upload your recent photo & signature</p>                                        
</div><br/>
<br/>
<form action="Validate.php"  method="post" name="formsubmit" onSubmit="return FileUpload(document.formsubmit.photo,document.formsubmit.signature)" enctype="multipart/form-data">
<table align="center" width="265px" style="border-style:ridge;" cellpadding="2" cellspacing="2">
<tr>
<td style="border-style:ridge;">
<h2 style="color:#060;" align="left">Photo </h2></td>
<td style="border-style:ridge;">
<h2 style="color:#060;" align="left">Signature </h2></td>

</tr>
<tr>
<td height="132.283464567px" style="border-style:ridge;">
<img id="blah" src="Image.png" alt="Upload valid photo" height="132.283464567px" width="132.283464567px" />
</td>
<td height="37.795275591px" style="border-style:ridge;">
<img id="sign" src="Image.png" alt="Upload valid signature" height="37.795275591px" width="188.976377953px" />
</td>

</tr>
<tr>
<td style="border-style:ridge;">
<input type='file' name="photo" id="photo"  onchange="return readURL(this);"   />
</td>
<td style="border-style:ridge;">
<input type='file' name="signature" id="signature"  onchange="return readSign(this);"   />
</td>

</tr>

</table>



<!-- Pic Upload Ends -->
<!-- Signature upload part starts -->

<br/>
<div style="float: left;background-color:#066; padding:3px 0; width: 100%; margin:0 auto;"><p align="center" class="pageSubHeading" style="color: #ffffff; margin:0; padding:0; font-weight:bold; font-size:12px; text-align:left;">&nbsp;Declaration</p>                                        
</div><br/>
<br/>


<table width="581px" align="center" style="border-style:ridge;" cellpadding="2" cellspacing="2">
<tr>
<td style="border-style:ridge;">
<input type="checkbox" name="ChkDec" id="ChkDec" value="Declare" />
&nbsp; <span style="color:#060;"> Declaration</span>

</td>
</tr>
<td style="border-style:ridge;">
<p>I hereby declare that all entries in the form are correct to the best of my knowledge and belief.If any falsification is found in this connection,the <b>Jamia Millia Islamia</b> has right to cancel the examination at any time.</p>

</td>
</tr>
<tr>
<td align="center" style="border-style:ridge;">
<!--<input type="submit" name="btnfillsbmt" value="Submit" />-->
<?php    
$query3 = "SELECT * FROM RegisterExam Where RollID='$roll_id';";
$run3 = sqlsrv_query($con, $query3);
$count3 = sqlsrv_has_rows($run3);
if($count3>0)
{
?>
<button type="submit" name="rollid" value="<?php echo $roll_id; ?>">Submit</button>
<?php
}
else
{
	?>
	<input type="button" name="PapSel" onClick="return paper(this)" value="Submit" />
<?php
}

?>
</td>
</tr>
</table>



</form>

<!-- Signature upload part Ends -->

<!--
<center>
<form action="Validate.php" method="post" name="formvalidate">
<button type="submit" name="rollid" id="rollid" value="<?php echo $roll_id; ?>">Submit</button>
</form>
</center>
-->
<!--
</td>
</tr>
<tr>
<td align="center" colspan="2">
<a href="Registration.php"><input type="button" name="btnprev" value="Modify" /></a>
&emsp;
<input type="submit" name="btnfillsbmt" value="Proceed" />

</td>
</tr>
</table>
-->

<!-- Paper part starts -->
<!-- Main content ends -->
</div>
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