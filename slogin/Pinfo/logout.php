
<?php
    session_start();
    session_destroy();
	
    header('Location: ../Studentlog.php?y=1 ');
?>
