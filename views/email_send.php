<?php

    include "../code/class.email.php";
    $emailsus = $_POST["suscribe"];
    $obj = new Email();

    $message = "Thnk you for suscribing, all the data you need
                will be available following the next link, please click here
                and follow the instructions in order to complete your suscription.";

    $obj->sendEmail($emailsus, "FOR YOU", "HI! THANK YOU FOR YOUR SUPPORT!", $message);

    header('Location: index.php');
?>