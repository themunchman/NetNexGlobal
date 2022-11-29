
<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $job = $_POST['job'];
    $company = $_POST['company'];

    $formcontent = " From: $name \n Phone: $Phone \n Email: $Email \n Job Title: $job \n Company Name: $company ";
    $recipient = "shreyas@netnexglobal.com";
    $subject = "CMO Stratech Attendee form submission";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "" . " -" . "<div style='margin:auto;display:flex;flex-direction:column;align-items:center;justify-content:center;width:400px;height:300px;background-color:#3EB875;box-shadow:6px 6px 12px #1D153A;text-align:center;'><a href='https://netnexglobal.com/' style='text-decoration:none;color:#022C47;font-size:55px;margin:auto;;'> Thank You</a><p style='text-align:center;color:#FFFFFF;font-size:30px'>We will contact you shortly! <a target='_blank' style='color:#022C47;font-size:15px;margin:auto;text-align:center;' href='https://netnexglobal.com/' >www.netnexglobal.com</a> </p></div>";
?>