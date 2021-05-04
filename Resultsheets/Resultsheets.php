<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <title>Result Sheets</title>
    <link rel="shortcut icon" href="favicon.ico" >
<link rel="shortcut icon" href="http://jmi.ac.in/images/jamia.ico" type="image/x-icon" />
<link href="../pico.css" type="text/css" rel="stylesheet" />
<script language="JavaScript" type="text/JavaScript" src="../jquery2.js"></script>
<link rel="stylesheet" href="../styles.css" type="text/css"/>
<script src="../utils.js" type="text/javascript"></script>
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
<!--  End Header  -->



<div class="clear"></div>


<!--  Start Content  -->
<div class="content">

<!-- form starts -->
<div id="mainContent" style="background-color: #ffffff; margin-left:1em; margin-right:1em;" align="left">
<div class="">
<div class="headline" style="color:#060;">Result Sheets</div>

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
      <td width="504"><div class="1tab"><a href="../slogin/Studentlog.php"><input type="button" value="&nbsp;&nbsp;&nbsp;&nbsp;Student Log-in&nbsp;&nbsp;&nbsp;&nbsp;" name="cc"></a></div>
</td>
    </tr>
  </table>
<div class="clear"></div>
           <br/><br/>

  
        
        <div class="terms_condition_form">
        
        
        
        <p align="center" class="mymessage" style="color:#ffff99 "> </p>
          
        <div id="form" align="center">
        
        
        
        
<table align="center">
<tr>
<td width="150">Academic Session:</td>
<td width="400"><select name="academic" id="drop1">
<option value="Select" selected>Select</option>
<option value="11">2011-12</option>
<option value="12">2012-13</option>
<option value="13">2013-14</option>
<option value="14">2014-15</option> 
</select>
 </td>
</tr>
</table>







<div class="cascade" id="degree"></div> 

          <div id="exam" class="cascade"></div>
           
          <div id="course" class="cascade"></div>
          
          <div id="submitt" class="cascade"></div> 
          
        </div>
    </div>

<script src="jquery-1.9.0.min.js"></script>
<script>
$(document).ready(function(){
$("select#drop1").change(function(){

	var acad_id =  $("select#drop1 option:selected").attr('value'); 
// alert(country_id);	
	$("#degree").html( "" );
	$("#exam").html( "" );
    $("#course").html( "" );
	$("#submitt").html( "" ); 	
	if (acad_id.length > 0 ) { 
		
	 $.ajax({
			type: "POST",
			url: "fetch_degree.php",
			data: "acad_id="+acad_id,
			cache: false,
			beforeSend: function () { 
				$('#degree').html('<img src="loader.gif" alt="" width="24" height="24">');
			},
			success: function(html) {    
				$("#degree").html( html );
			}
		});
	} 
});
});
</script>
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