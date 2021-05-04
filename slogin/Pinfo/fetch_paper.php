<?php
include("../../connection2.php");
session_start();
$enroll=$_SESSION['enroll'];
$exam_id = $_SESSION['examid'];
$cat = $_SESSION['cat'];
echo "classid=".$classsid = $_SESSION['classsid'];
$roll_id = $_SESSION['roll_id'];
echo 'rollid after post = '.$_SESSION['roll_id'] = $roll_id;
$part = $_SESSION['part'];

?>

<?php 
$sql = "SELECT PsetID,PaperID,PaperCode,PaperName FROM [PaperSet] where ClassSID='$classsid' AND PsetID NOT IN (SELECT PsetID From RegisterExam Where ExamID='$exam_id' and RollID='$roll_id') Order By PsetID";
$run = sqlsrv_query($con,$sql);
?> 
<script>
function Sure()
{
	if (confirm("Are you sure you want to proceed!") == true) {
        return true;
    } else {
        return false;
    }
}

</script>
<!--    <table align="center">
<tr>
<td width="150">Academic Session:</td>
<td width="400">  
<select name="exam1" id="drop4">
	<option value="">Please Select</option> -->
	<?php /*while ($row = sqlsrv_fetch_array($run, SQLSRV_FETCH_ASSOC)) { */?>
	<!--<option value="--><?php /*echo $row["PaperID"]; ?>"><?php echo $row['PaperCode']." : ".$row["PaperName"];  */?>  <!--</option>-->
	<?php //} ?>
<!--    
</select>
</td>
</tr>
</table>
-->
<br/>
<br/>
<form action="Add.php" method="post" name="formsub">

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
	while ($row = sqlsrv_fetch_array($run, SQLSRV_FETCH_ASSOC)) { ?>
	<tr>
<td align="center">  
    <input type="checkbox" name="check[]" value="<?php echo $row['PsetID'];
	 ?>" />
    </td>
    <td>
    <?php echo "psetid = ".$row['PsetID']." ".$row['PaperID']." : ".$row['PaperCode']." : ".$row["PaperName"];  ?>
	<?php 
	} ?>
    </td>
    </tr>
    <tr align="center">
    <td colspan="2">
    <input type="submit" name="btnsub" value="Add" onclick="return Sure(this)" />
    </td>
    
    </tr>
    
</table>
    </form>
<?php
session_start();
?> 