<?php
session_start();
$enroll = $_SESSION['enroll'];

if(!isset($enroll))
	{
	header("location:../Studentlog.php?z=1");
	exit();
	}

include('../../connection2.php');
include('connection/connectionsql.php');


$stid = $_SESSION['stid'];
$enroll = $_SESSION['enroll'];
$name = $_SESSION['name'];
$dob = $_SESSION['dob'];
$examid = $_SESSION['examid'];
$cat = $_SESSION['cat'];
echo "<br/>course without change = ".$course = $_SESSION['course'];
echo "<br/>part without change = ".$partm = $_SESSION['part'];
$strlenn = strlen($course);
echo "<br/>Only removing last , partt new course =".$partt = substr($course, 0, $strlenn-1);
echo "<br/>Now full classname after changing = ".$newcourse = $partt." ".$partm;

$sessionn = $_SESSION['sessionn'];
$i = $_SESSION['i']-1;
$acadname = $_SESSION['acadsessname']."-".$examid;
$arrval = $_SESSION['arrval'];
echo "<br/>enrollcat = ".$enrollcat = $_SESSION['roll_id'];
$query = "SELECT EnrollCat FROM registeration WHERE EnrollCat='$enrollcat'";
$run = mysql_query($query);
$count  = mysql_num_rows($run);
if($count>0)
{
	header("Location: Registration.php?q=5");
	exit();
}





$val = array();
for($paperno=1;$paperno<=$arrval;$paperno++)
{
    $val[$paperno]=$_POST['pap'.$paperno];
}

//Fetch data from server starts
$query = "SELECT DISTINCT Enroll.FatherName,RollListCourse.Part,RollListCourse.CourseName,Enroll.LocalStreet1,Enroll.LocalStreet2,Enroll.LocalStreet3,Enroll.LocalCity,Enroll.LocalState,Enroll.LocalPin,Enroll.Mobile,RollListCourse.RNO From Enroll,RollListCourse where Enroll.Enrollment='$enroll' And RollListCourse.Enrollment='$enroll' And RollListCourse.ExamID='$examid';";
$run=sqlsrv_query($con,$query);
$count = sqlsrv_has_rows($run);
if($count==0)
{
	header("Location: Registration.php?q=1");
}
else
{	
$examstr = substr($examid, 0, 1);
while($row=sqlsrv_fetch_array($run,SQLSRV_FETCH_ASSOC))
{
	$fathername = $row['FatherName'];
	$part = $row['Part'];
	if($examstr!="A")
	{
	    $classname = $row['CourseName']." SEM-".$part;
	}
	else
	{
		$classname = $row['CourseName']." Year-".$part;
	}
	$add1 = $row['LocalStreet1'];
	$add2 = $row['LocalStreet2'];
	$add3 = $row['LocalStreet3'];
	$city = $row['LocalCity'];
	$state = $row['LocalState'];
	$pin = $row['LocalPin'];
	$mobile = $row['Mobile'];
	$roll = $row['RNO'];
	"Data Print end<br/>";
}
//Fetch data from server ends

if($examstr!="A")
	{
	    $newcourse = $newcourse." SEM";
	}
	else
	{
		$newcourse = $newcourse." Year";
	}


//date start
$today = date('d-M-Y')." ".date("h:i:sa");
//date end
//photo upload start
$temp = explode(".",$_FILES["photo"]["name"]);
$photo =  '../uploads/'.$enroll."-".$examid.".".end($temp);
if (move_uploaded_file($_FILES["photo"]["tmp_name"], $photo)) {
        //photo has been uploaded
    } else {
        //there was an error uploading photo
    }
//photo upload end
//sign upload start
$temp2 = explode(".",$_FILES["signature"]["name"]);
$signature =  '../uploads/'.$enroll."-".$examid."-sign.".end($temp2);
if (move_uploaded_file($_FILES["signature"]["tmp_name"], $signature)) {
        //signature uploaded
    } else {
        //there was an error uploading signature
    }

//sign upload end
$sql = "INSERT INTO `mylocation`.`registeration`(`EnrollCat`,`StudentID`,`Enrollment`,`Name`,`DOB`,`AcadSess`,`CAT`,`Course`,`Session`,`sub1`,`sub2`,`sub3`,`sub4`,`sub5`,`sub6`,`sub7`,`sub8`,`sub9`,`sub10`,`sub11`,`sub12`,`sub13`,`sub14`,`sub15`,`sub16`,`FormFilled`,`FormApproved`,`PaperCount`,`ProfilePic`,`Signature`,`FilledOn`,`FatherName`,`ClassName`,`Add1`,`Add2`,`Add3`,`City`,`State`,`PIN`,`Mobile`,`Roll`,`Bookingno`,
`BookingStatus`) VALUES('$enrollcat','$stid','$enroll','$name','$dob','$examid','$cat','$newcourse','$sessionn','$val[1]','$val[2]','$val[3]','$val[4]','$val[5]','$val[6]','$val[7]','$val[8]','$val[9]','$val[10]','$val[11]','$val[12]','$val[13]','$val[14]','$val[15]','$val[16]',1,0,'$arrval','$photo','$signature','$today','$fathername','$newcourse','$add1','$add2','$add3','$city','$state','$pin','$mobile','$roll','',0);";
$run = mysql_query($sql);
if($run)
{
	header("Location: HomePage.php");
}
else
{
	echo '<script> alert("Network Error occurred"); </script>';
	header("Location: Registration.php?q=2");
	exit();
}

}//1st else end

?>