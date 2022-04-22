<?php 


ini_set('sendmail_from', 'touravel.manager@gmail.com');
ini_set('auth_username', 'smtp-username');
ini_set('auth_password', 'smtp-password');

if(isset($_POST['Submit'])){
    $to = "lukewattchera@gmail.com"; // this is your Email address
    $from = "touravel.manager@gmail.com"; // this is the sender's Email address
    $name = $_POST['Name'];
    $subject = $_POST['Subject'];
    $message = $name . " sent you a message:" . "\n\n" . $_POST['Message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    echo "<a href='../pages/Touravel_OurStory.php'>hi</a>";
    }
?>