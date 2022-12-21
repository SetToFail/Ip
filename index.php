<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>find ip in txt</title>
</head>
<body>
<?php
$file = file("ip.txt");
preg_match_all("/(([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\\.){3}([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])/im",$file[0],$ready);
print_r( $ready[0]);
?>
</body>
</html>