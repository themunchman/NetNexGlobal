<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $job = $_POST['job'];
    $company = $_POST['company'];

    $formcontent = "From : $name \n Phone : $phone \n Email : $email \n Job Title : $job \n Company : $company ";
    $recipient = "netnexgroup@gmail.com";
    $subject = "Data Next Speaker Form Submition";
    $mailheader = "From : $email \r\n ";
    mail($subject, $formcontent, $mailheader) or die("Error!");
    echo "" . "" . "<div style='margin:auto;display:flex;flex-direction:column;align-items:center;justify-content:center;width:400px;height:300px;background-color:white;text-align:center;'>
    <a href='https://www.nextechsummit.com/datanext/' style='text-decoration:none;color:black;font-size:55px;margin:auto;;'> Thank You</a><p style='text-align:center;color:black;font-size:30px'>We will contact you shortly! <a target='_blank' style='color:black;font-size:15px;margin:auto;text-align:center;' href='https://www.nextechsummit.com/datanext/' ><br> Go Back</a> </p></div>";
?>