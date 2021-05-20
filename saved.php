<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$kontinenti=$_POST["kontinenti"];
$shteti=$_POST["shteti"];
$qyteti=$_POST["qyteti"];
$vendi=$_POST["vendi"];
$pershkrimi=trim($_POST["pershkrimi"]);

$myfile=fopen("file.txt", "a");

$teksti="<tr><td>$kontinenti</td><td>$shteti</td><td>$qyteti</td><td>$vendi</td><td style=\"overflow:auto; \">$pershkrimi</td></tr>";


fwrite($myfile, $teksti);


header("Location: stats.php", true, 301);
?>
</body>
</html>
