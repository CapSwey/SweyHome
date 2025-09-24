<?php
if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['message'])) {   
    echo 'Not all fields are filled in, message is NOT send!';   
    exit;   
} 
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);
$time = time();   
date_default_timezone_set("Europe/Amsterdam");
$date = strftime('%d-%m-%y %H:%M', $time);   
$ip = getenv('REMOTE_ADDR');   
$message = $name.' with e-mail address: '.$email.'. Has send (from IP address '.$ip.') on '.$date.' the following message:
______________________________________________

'.$message.'  
______________________________________________';

mail ('michelono@outlook.com', 'SWEY.NL', $message, 'From: '.$email);   
?>

<!doctype html>

<head>
<meta http-equiv="refresh" content="7;url=http://swey.nl"/>
<style type="text/css">
body {
	margin-top: 200px;
	background: black;
}
	
.ok {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 1.2em;
	width: 500px;
	color: #FFF;
	margin: 0 auto 0 auto;
	padding: 25px;
	display: block;
	text-align: center;
	border-radius: 15px;
	background: rgb(69,72,77);
    background: -moz-linear-gradient(top,  rgba(69,72,77,1) 0%, rgba(0,0,0,1) 100%);
    background: -webkit-linear-gradient(top,  rgba(69,72,77,1) 0%,rgba(0,0,0,1) 100%);
    background: linear-gradient(to bottom,  rgba(69,72,77,1) 0%,rgba(0,0,0,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#45484d', endColorstr='#000000',GradientType=0 );
}
	
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
print "<p class='ok'>Your mail has succesfully been send to CapSwey. You will automatically return to swey.nl within any seconds.</p>";
?>
</body>
