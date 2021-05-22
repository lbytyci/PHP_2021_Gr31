<?php
include("page.php");
include("loginserv.php");
$login = new Page();
$login->titulli="Home";
$login->pageContent="Faqja Home - BALLINA";
$login->ShfaqPermbajtjen();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>
<h1 align="center" id="logo">Hug The World</h1>
<div class="login">
<h1 align="center" style="background-color:rgba(255, 255, 255, 0);font-family:'Script MT Bold'; opacity:0.6;color:black">Welcome</h1>
<form action="" method="post" style="text-align:center; background-color:rgba(255, 255, 255, 0);opacity:0.7;">
<input type="text" placeholder="Username" id="user" name="user" style="background-color:rgba(255, 255, 255, 0.1);border-color:grey; border-radius: 8px"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass" style="background-color:rgba(255, 255, 255, 0.1	);border-color:grey; border-radius:8px"><br/><br/>
<input type="submit" value="Login" name="submit">
<span><?php echo $error; ?></span>
</body>
</html>