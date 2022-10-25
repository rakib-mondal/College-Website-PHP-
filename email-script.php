<?php
$to='test.emailcollegeproject.2021@gmail.com';
$subject='Contact Enquiry';
if (isset($_POST['send'])) {
 
    $fn =$_POST['fname'];
    $ln =$_POST['lname'];
    $mobi=$_POST['mobi'];
    $email=$_POST['fromEmail'];
    $msg=$_POST['message'];
    
    include("connection.php");

    mysqli_query($conn,"insert into contact(fname,lname,mobi,email,msg)
    values('$fn','$ln','$mobi','$email','$msg')");

    // $headers = "MIME-Version: 1.0" . "\r\n";
    // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
}
  
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


    $headers .= 'From: ' .$email . "\r\n";
    $headers .= 'Cc: myboss@example.com' . "\r\n";

    $message="<html >
    <head>
        <title>Document</title>
    </head >
    <body>
    <table>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Mobile</th>
    <th>Message</th>
    </tr>
    <tr>'.$fn'</tr>
    <td>' $ln '</td>
    <td>' $mobi '</td>
    <td>' $email '</td>



</table>
</html>";
   
   
if (isset($_POST['send'])) {
    if(@mail($to,$subject, $message, $headers)){
    echo '<script>alert("Email sent successfully !")</script>';
    // echo '<script>window.location.href="index.php";</script>';
    }
    else{
        echo '<script>alert("Email was not sent successfully !")</script>';
    }
}
// '<!doctype html>
// 			<html lang="en">
// 			<head>
// 				<meta charset="UTF-8">
// 				<meta name="viewport"
// 					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
// 				<meta http-equiv="X-UA-Compatible" content="ie=edge">
// 				<title>Document</title>
// 			</head>
// 			<body>
// 			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
// 				<div class="container">
//                 '.$fname' '.$lname' <br/>
//                 '.$mobi' <br/>
//                  '.$message.'<br/>
//                     Regards<br/>
//                   '.$fromEmail.'
// 				</div>
// 			</body>
// 			</html>';