<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="hf.css">
<link rel="stylesheet" type="text/css" href="hh.css">
</head>
<body>
<article id="p">
  <header style="margin-top:-7px;">
    <div id="hf">
    <div class="menu">
      <h3 id="logo">HUG THE WORLD</h3 >
      <nav>
          <ul>
						<li><a href="home.php">Home</a></li>
            <li><a href="tour.html">Tour</a></li>
            <li><a href="stats.php">Stats</a></li>
            <li><a href="kosova.php">Kosova</a></li>
            <li><a href="aboutus.php">About us</a></li>
            <li><a href="form1.php">Contact us</a></li>
        </ul>
      </nav>
    </div>
        </div>
    <p id="title" style="text-transform: uppercase;">Stats</p>
    <style type="text/css">

table {
width: 100%;

}
td, th {
height: 90px;

}

th {
font-weight: bold;
}

td {
text-align: center;
}
.flat-table {
  width: 100%;
  display: block;
  font-family: sans-serif;
  -webkit-font-smoothing: antialiased;

  overflow: auto;

  border-radius: 15px;
  }
  th {
    background-color: rgb(112, 196, 105);
    color: white;
    font-weight: normal;

    text-align: center;
  }
  td {
    background-color: rgb(238, 238, 238);
    color: rgb(111, 111, 111);

  }
  

caption{
  margin-bottom: 5%;
}
#button1{
  position: relative;
  left: 3.5%;
  bottom: 25%;
  width: 10%;
  height: 45%;
}
textarea{
  margin-top: 3%;
}

    </style>
    </header>

<form method="post" action="saved.php">
<table class="tabela" class="flat-table">
<caption>Disa nga vendet me te bukura</caption>


<?php



printf("<tr><th>Kontinenti</th><th>Shteti</th><th>Qyteti</th><th>Vendi</th><th>Pershkrimi</th></tr>");


$file=fopen("file.txt","r");
while(!feof($file)) {
  echo fgetc($file);
}
fclose($file);

?>

<tr><td><input type="text" name="kontinenti"></td><td><input type="text" name="shteti"></td><td><input type="text" name="qyteti"></td><td><input type="text" name="vendi"></td><td><textarea wrap="off" name="pershkrimi" rows="4" cols="80"></textarea><input type="submit" name="shto" value="Shto" id="button1"></td></tr>




</table>

</form>



    <footer style="margin-top:4%;"><br>
  <div style="margin-left:8%;margin-top:2%;">
     <p><b>Where to find us:</b></p>
    <address><img src="images/location.png" alt="Address" ><span > Kodra e diellit,St.&#199;ajupi 25,10000 Prishtin&#235;,Republika e Kosov&#235;s</span></address><br>

  <p>
  <img src="images/telephone.png" alt="Telephone"><span class="findfooter"> +386(49)280-103 </span>
    <img src="images/fax.png" alt="Fax"><span> +377(44)321-645 </span>
  </p>

  <p>
    <a href="mailto:info@travel.com?Subject=Hug%20The%20World" style="text-decoration:none;color:black;"><img src="images/email.png" alt="Email"><span class="findfooter"> info@travel.com </span></a>
       <img src="images/web.png" alt="Web"><span><u>www.hug-the-world.com </u></span></p>
<!-- Data -->
    <p id="Clock" style="float:right;margin-top:-12%;margin-right:28%;font-size:17px;"></p>
  <script src="javascript/clock.js"></script>

    <div style="float:right;margin-top:-5%;margin-right:10%;">
      <button onclick="getLocation()" class="Location">Your location</button>
      <p id="loc" ></p>
    </div>
  </div>
	<?php
	if(isset($_SESSION['username']))
	{
		$user = $_SESSION['username'];
		echo "<p><b>User:</b> $user</p>";
	}
	?>
   <nav  id="llogo" >

<a href="https://vimeo.com/search?q=hug%20the%20world" target="_blank">                     <img src="images/vimeo.png" alt="Vimeo" id="imglogo"></a>
<a href="https://twitter.com/World" target="_blank">                 <img src="images/twitterlogo.png" alt="Twitter" id="imglogo"></a>
<a href="https://www.facebook.com/Hug-The-World-100636051710043" target="_blank">   <img src="images/facebooklogo.png" alt="Facebook" id="imglogo"></a>
<a href="https://www.instagram.com/hug__the__world/" target="_blank">        <img src="images/instagramlogo.png" alt="Insta" id="imglogo"></a>
<a href="https://www.youtube.com/channel/UCrBPPGyR_7aOd882VpMRkRg" target="_blank">  <img src="images/youtubelogo.png" alt="YT" id="imglogo"></a>
<a href="https://www.pinterest.com/explore/family-travel/" target="_blank">   <img src="images/pinterestlogo.png" alt="P" id="imglogo"></a></nav>

</footer>

</body>
</html>
