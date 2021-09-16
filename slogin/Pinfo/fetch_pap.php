<?php
session_start();
$roll_id = $_POST['roll_id'];
echo 'rollid after post = '.$_SESSION['roll_id'] = $roll_id;
?>