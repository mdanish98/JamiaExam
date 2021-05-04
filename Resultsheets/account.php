<?php
session_start();
require_once 'openid.php';
$openid = new LightOpenID("http://localhost/JamiaExam/Resultsheets/Resultsheets.php");

if ($openid->mode) {

    if ($openid->mode == 'cancel') {

        echo "Error: User has canceled authentication ! Please go back to the index page to try again";

    } elseif($openid->validate()) {
        $data = $openid->getAttributes();

        $email = $data['contact/email'];
        $first = $data['namePerson/first'];
		$homecountry =  $data['contact/country/home'];
		
		
		
        $_SESSION['email'] = $email;
		$_SESSION['firstname'] = $first;
        $_SESSION['home'] = $homecountry;
				
        
		?>
        <table border="1">
        <tr>
        <td>Email:</td>
        <td><?php echo $email; ?> </td>
        </tr>
        <tr>
        <td>firstname:</td>
        <td><?php echo $first; ?> </td>
        </tr>
        <tr>
        <td>home:</td>
        <td><?php echo $homecountry; ?> </td>
        </tr>
        <?
		
		
		   				
 		header('http://localhost/JamiaExam/Resultsheets/Resultsheets.php ');
			
	
    } else {
        echo "Error: The user has not logged in";
    };

} else {
    echo "Error: Go to index page to log in.";
};

?>
