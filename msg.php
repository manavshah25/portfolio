<?php 
if(isset($_POST['submit']) )
{
    $email=$_POST['email'];
    $to = "$email";
$subject = "From Manav Shah";

$message = "
<html>
<head>
<title></title>
</head>
<body>
<p>hey bro congo!!</p>
<table>
<tr>
<th></th>
<th></th>
</tr>
<tr>
<td>ma</td>
<td>shah</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
 $headers .= 'From: <webmaster@example.com>' . "\r\n";
//$headers .= 'Cc:mmmm' . "\r\n";


if (mail($to, $subject, $message, $headers))
?><script>alert("thank you!!");</script><?php

}
?>