<?php
$ip = getenv("REMOTE_ADDR"); 
echo 'current ip address is= '.$ip;
$ip = ip2long($ip);
echo 'current ip address is= '.$ip;
?>