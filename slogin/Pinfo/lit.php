<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['submit'])){
	$query = mysql_query("UPDATE student SET firstname='$firstname' WHERE id='$id'");
	echo "<form action='lit.php' method='post'>
	<input type='text' value='".$row['firstname']."'>
	<input type='submit' name='submit' value='save' > 
	";
}
?>
</body>
</html>