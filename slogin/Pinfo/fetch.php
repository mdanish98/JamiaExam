<?php
$con = mysql_connect("localhost", "root", "")or die (mysql_error());
$data = "students_info";
$db = mysql_select_db("$data")or die (mysql_error());
$run = mysql_query("SHOW tables FROM $data") or die (mysql_error());
 while($table = mysql_fetch_array($run))
 {
	 echo " <table>
	 
	 <tr>
	 <td>",$table[0], "</td>
	 </tr>
	 <tr>
	 <td>field</td>
	 <td>type</td>
	 <td>key</td>
	 <td>default</td>
	 <td>extra</td>
	 </tr>";
	 $i = 0;
	 $row = mysql_query("SHOW columns FROM  $table[0]") or die (mysql_error());
	 while($col = mysql_fetch_array($row))
	 {
		 echo " <tr>
		 <td>",$col[0], "</td>
		 <td>",$col[1], "</td>
		 <td>",$col[3], "</td>
		 <td>",$col[4], "</td>
		 <td>",$col[5], "</td>
		 </tr>";
		 $i++;
	 
	 }
	 echo "</table>";
 }
?>