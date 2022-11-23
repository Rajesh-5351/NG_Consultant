<?php

$name = $_POST['name'];
$from  = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$subject = "Enquiry Message form" .$name;
$to = "	rajesh.s@siaadigital.com, info@ngconsultant.com";

$message = "
			<html>
				<head>
					<title> NG Consultant Enquiry Message</title>
				</head>
				<body>
					<p align='left'>
					  <font face='Verdana'><u><b><font size='4' color='#800000'>
					  NG Consultant Enquiry Message</font></b></u></font>
					 </p>
					<table>
						<tr>
							<td align='right'><strong>Name:</strong></td>
							<td >&nbsp;</td>
							<td>$name</td>
						</tr>

						<tr>
							<td align='right'><strong>Mail Id:</strong></td>
							<td >&nbsp;</td>
							<td>$from</td>
						</tr>

						<tr>
							<td align='right'><strong>Subject:</strong></td>
							<td >&nbsp;</td>
							<td>$phone</td>
						</tr>

						<tr>
							<td align='right'><strong>Subject:</strong></td>
							<td >&nbsp;</td>
							<td>$subject</td>
						</tr>

						<tr>
							<td align='right'><strong>Message:</strong></td>
							<td >&nbsp;</td>
							<td>$message</td>
						</tr>
					</table>
				</body>
			</html>
			";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From: $from" . "\r\n";

if(mail($to,$subject,$message,$headers))
{
	echo "<script>alert(' Thanks for Reaching Out to Us. We will contact you soon'); window.location = 'index.html'</script>";
}
else{
	echo "<script>alert('Sending Failed... Due to server error Please try later.'); window.location = 'index.html'</script>";
}

?>
