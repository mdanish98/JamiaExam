<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <title>Examination Results</title>
    <link rel="shortcut icon" href="favicon.ico" >
<link rel="shortcut icon" href="http://jmi.ac.in/images/jamia.ico" type="image/x-icon" />
<link href="pico.css" type="text/css" rel="stylesheet" />
<script language="JavaScript" type="text/JavaScript" src="/JOLF/javaScript/Administration/Admin.js"></script>
<script language="JavaScript" type="text/JavaScript" src="jquery2.js"></script>
<link rel="stylesheet" href="styles.css" type="text/css"/>
<script src="utils.js" type="text/javascript"></script>
<script type="text/javascript" src="jquery.jfontsize-1.0.js"></script>


<!--<SCRIPT LANGUAGE="JavaScript">

function popup(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=1280,height=1024');");
}

</script>
-->
<script type="text/javascript" src="jquery-1.2.6.js"></script>
<script type="text/javascript" src="thickbox.js"></script>

<link rel="stylesheet" href="thickbox.css" type="text/css" media="screen" />


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
<a href="http://jmi.ac.in/sitemap"><img src="sitemap-icon.png" border="0" title="Sitemap">
</a>
</div>

<div class="clear"></div>
</div>
<!--  End Top Header  -->

<!--  Start Header  -->
<div class="header">
	
<div class="logo"><a href="http://jmi.ac.in/"><img src="logo.png" border="0"></a></div>
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
<div class="headline" style="color:#060">Examination Results</div>
<!-- Download Terms & Conditions starts -->
<div class="DownloadPDF">
<div class="clear"></div>
</div>
<!-- Download Terms & Conditions starts -->
</div>

<div class="clear"></div>
        
<table width="960" height="26" cellpadding="2" cellspacing="0" align="center" style="background-color:#3CC; border-radius:5px;">
    <tr>
      <td width="144" height="24" ><div class="1tab"><a href="http://localhost/JamiaExam/ExaminationResults.php"><input type="button" value="Result & Marksheet" name="rm"></a></div>
</td>
      <td width="147"><div class="1tab"><a href="http://localhost/JamiaExam/Resultsheets/Resultsheets.php"><input name="rs" type="button" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Result sheets&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"></a></div>
      <td width="147"><div class="1tab"><a href="http://localhost/JamiaExam/CourseCurriculum/coursecurriculum.php"><input type="button" value="&nbsp;Course Curriculum&nbsp;&nbsp;" name="cc"></a></div>
</td>
      <td width="504"><div class="1tab"><a href="slogin/Studentlog.php"><input type="button" value="&nbsp;&nbsp;&nbsp;&nbsp;Student Log-in&nbsp;&nbsp;&nbsp;&nbsp;" name="cc"></a></div>
</td>
    </tr>
  </table>
<div class="clear"></div>
           <br/><br/>

  
        
        <div class="terms_condition_form">
        
        
        
        <p align="center" class="mymessage" style="color:#ffff99 "> </p>
          
        <div id="form" align="center">
  

<form name="myForm" id="dan" method="post" action="" >
<!--   tab work-->

  
  &nbsp;&nbsp;&nbsp;&nbsp;
        <table width="900" cellspacing="0" cellpadding="2">
          <tr>
            <td width="160">Enter your enrollment no:</td>
            <td width="160" align="center"><input type="text" id="g" value="<?php echo $_POST['enroll'];?>" name="enroll" size="55"> </td>
            <input type="hidden" value="value1" name="myselect" onclick="test(8);" id="id1"><label for="id1"></label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <td width="100" align="center"><input type="submit" name="submit1" id="submit" value="Go">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>OR</label>
           <!-- <input type="submit" name="submitbtn" id="submitbtn" value="Search">-->
           </td>
           <td>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="button" name="opener" value="Search Your Enrollment number" onClick="popUp();">
           </td>


<script language="JavaScript">
<!--
function selectItem(){
	var select_options=document.myForm.myselect;
	var len=select_options.length;
	var selindex=0;
	for (var i=0;i<len;i++){
		if (select_options[i].onclick) {selindex=select_options[i].value;}
	}
	if (selindex!=0) {document.myForm.enroll.value=selindex;}
}

var wi=null;
function popUp(){
   if (wi) wi.close();
   wi=window.open("knowyourenroll.php","","width=1200,height=500,location=center,scrollbars=yes,status=no");
}
//-->
</script>
          
            </td>
          </tr>
             <tr>
             <td></td>
            <td align="center"> <?php
			if(isset($_POST['submit1']))
		{
		echo '<span style="display:block; height: 10px;"></span>';
		include("index.php");
        echo '<span style="display:block; height: 30px;"></span>'; 
		}
		?></td>
        <td></td>
        <td></td>
          </tr>
          
          <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          </tr>
          
      </table>
  <br><br>
        </form>
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