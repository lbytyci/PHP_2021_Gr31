<?php
session_start();
include 'dbh.php';
?>
<!DOCTYPE html>
<html >
<head>
<meta lang="en">
<title>Contact Us</title>
<link rel="icon" type="image/jpg" href="images/llogo.jpg">
<link rel="stylesheet" href="hf.css">
<link rel="stylesheet" href="css/form1.css">
<link rel="stylesheet" href="css/paginaton.css">
<link rel="stylesheet" href="css/location.css">
<script src="javascript/location.js"></script>
<style>

#show{

  width: 200px;
  }
#all{
  margin-left: 6%;
  padding: 30px;
  border-radius: 10px;
  background: white;
  margin-top: 100px;
  margin-bottom: -800px;
  width: 460px;
}
#comments{
  padding: 5px;
  border-radius: 10px;
  background-color: rgba(231,232,237,0.2);
  margin-left: -200px;
  width: 400px;
  margin: auto;
  position: relative;

}
#section{

  font-family: 'Tahoma', sans-serif;
  color: #002d56;
  background: white;
  padding: 10px;
  width: 400px;;

}
</style>
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    var commentCount = 2;
    $(".boton").click(function(){
      commentCount = commentCount +2;
      $("#comments").load("load-comments.php",{
        commentNewCount: commentCount
      });
    });
    $("#comment").click(function(){
        var data = $("#commentform").serializeArray();
        $.post($("#commentform").attr("action"),data,function(info){$("#result").html(info);})
    });
    $("#commentform").submit(function(){
      return false;
    });
  });
</script>
</head>
<body >
<?php require 'header.php';?>
<div style="left:-300px;">
<?php
if(isset($_SESSION['username']))
{
  $user = $_SESSION['username'];
  echo "<p><b>User:</b> $user</p>";
}
?>
</div>
<p id="title" style="margin-top:-20%;margin-bottom:20%;">Contact Us</p>
<article  style="width:100%;" >

<section>
  <div class="pagination">
    <table>
     <tr><td> <a href="#" title="There is no further">&laquo;</a></td>
     <td> <a href="#" class="active">Subscribe</a></td>
     <td> <a href="form2.php" >Be Part of Us</a></td>
     <td> <a href="form3.php">Suggest a place</a></td>
     <td><a href="form2.php">&raquo;</a></td></tr>
    </table>
  </div>
</section>

<h1>Get latest news for tourism</h1>
<!--Formulari-->
<section>
<?php  include('formvalidation.php');?>
<form id="first" action="<?php $_SERVER['PHP_SELF'];?>" method="Post" >
  <fieldset>
   <legend>Subscribe to our Newsletter</legend>

    <p><label>Your name:</label><input type="text" id="name" class="input" name="Fname"  placeholder="Write your name " value="<?php echo $Fname; ?>" autocomplete="on" <?php if(!empty($nameErr)) { ?> autofocus <?php } ?>>    <!-- perdorimi autocomplete faza2-->
     <span style="font-size:12px;color:rgb(190,0,0);margin-bottom:-6px;margin-left:25%;"><?php echo $nameErr;?></span></p>

    <p><label >Email: </label><input type="text" id="email" class="input" name="Femail" value="<?php echo $Femail; ?>" placeholder="ex: someone@hotmail.com" autocomplete="on"  <?php if(!empty($emailErr)) { ?> autofocus <?php } ?>>  <!--perdorimi i riquired faza2-->
       <span style="font-size:12px;color:rgb(190, 0, 0);margin-bottom:6px;margin-left:15%;"><?php echo $emailErr;?></span></p>
	 <p><label>Travel news for</label><br>
    <select class="input" name="Fselect" >
     <option value="all" <?php if($Fselect == "all") {?> selected <?php } ?>>All</option>
     <option value="europe" <?php if($Fselect == "europe") {?> selected <?php } ?>>Europe</option>
     <option value="NAmerica" <?php if($Fselect == "NAmerica") {?> selected <?php } ?>>North America</option>
     <option value="SAmerica" <?php if($Fselect == "SAmerica") {?> selected <?php } ?>>South America</option>
     <option value="Asia" <?php if($Fselect == "Asia") {?> selected <?php } ?>>Asia</option>
     <option value="Africa" <?php if($Fselect == "Africa") {?> selected <?php } ?>>Africa</option>
     <option value="Australia" <?php if($Fselect == "Australia") {?> selected <?php } ?>>Australia</option>
    </select>

  <p>You want to get news :<br>
    <input   type="radio" name="Fnews" value="Daily"  <?php if($Fnews != "Weekly" and $Fnews != "Monthly") {?> checked <?php }?>></input><label style="font-size:15px;" > Daily</label><br>
    <input  type="radio" name="Fnews" value="Weekly" <?php if($Fnews == "Weekly") {?> checked <?php }?>><label style="font-size:15px;"> Weekly</label><br>
    <input  type="radio" name="Fnews" value="Monthly" <?php if($Fnews == "Monthly") {?> checked <?php }?>><label style="font-size:15px;"> Monthly</label></p>
     <br>
    <input type="submit" value="Subscribe" name="submit" id="submit"  > <!--formtarget qe tregon se ku do te hapet mesazhi nga serveri per parnimin e te dhenave pasi te shtypet submit-->

  </fieldset>
</form>

</section>


<section>
 <p style="float:left;font-weight:bold;margin:10% 0 1% 20%;" >Our Location:</p>
 <!---Google maps -->
 <div id="map" style="width:35%;height:300px;;float:left;margin: 1% 2% 0% 20%;"></div>

<script>
function Harta() {
  var Vendi = new google.maps.LatLng(42.64840941942564,21.1671245098114); /*percaktimi i kordinatave per ne UP*/
  var mapCanvas = document.getElementById("map");  /*Lidhja permes id me div elementin ne html qe perdoret per shfaqjen e hartes*/
  var Opsionet = {center: Vendi, zoom: 18};    /*Percaktimi i disa karakterisikave per harte si zmadhimi 18*/
  var map = new google.maps.Map(mapCanvas, Opsionet);
  var marker = new google.maps.Marker({position:Vendi}); /*percaktimi i pozites se pikes qe na tregon vendin e zgjedhur permes funksionit latlong*/
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKxF6JLKEdy9qQhSFGUclftHAVs1oCTHc&callback=Harta"></script> <!-- thirrja e funksionit te hartes te rregulluar sipas nevojave tone duke perdorur api nga google dhe thirrjen me call-->

</section>
</article>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="all">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<div id="section">
<form method="post" action="like.php" id="commentform">
  <label><h2>Comment Section</h2></label>
Author:<br><input type="text" placeholder="Write your name!" name="author"><br><br>
Message:<br><textarea placeholder="Write your comment!" name="message"></textarea><br><br>
<button  id="comment">Comment</button>
</form>
<span id="result"></span>
<div id="comments">
<?php
  $sql = "SELECT * FROM  komentet LIMIT 2";
  $res = mysqli_query($conn,$sql);
  if(mysqli_num_rows($res)>0)
  {
    while ($row = mysqli_fetch_assoc($res))
    {
      echo "<p><b>";
      echo $row['AUTHOR'];
      echo "</b><br>";
      echo $row['MESSAGE'];
      echo "</p>";
    }
  }
  else
  {
      echo "<p>There are no comments!</p>";
  }
?>
</div>
<div id="show">
<a href="#" class="boton">Show more</a>
<div class="fb-like" data-href="https://web.facebook.com/upisconference/" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
</div>
</div>
</div>

<footer style="margin-bottom:-3%;margin-top:60%;display:block;">
<br>
  <div style="margin-left:8%;margin-top:4%;">
     <p><strong>Where to find us:</strong></p>
    <address><img src="images/location.png" alt="Address" ><span > Kodra e diellit,St.&#199;ajupi 25,10000 Prishtin&#235;,Republika e Kosov&#235;s</span></address><br>

	<p>
	<img src="images/telephone.png" alt="Telephone"><span class="findfooter"> +386(49)280-103 </span>
    <img src="images/fax.png" alt="Fax"><span> +377(44)321-645 </span>
	</p>

	<p>
    <a href="mailto:info@travel.com?Subject=Dream%20Travel" style="text-decoration:none;color:black;"><img src="images/email.png" alt="Email"><span class="findfooter"> info@travel.com </span></a>
       <img src="images/web.png" alt="Web"><span> www.travel-dream.com </span></p>
    <!-- Data -->
    <p id="Clock" style="float:right;margin-top:-12%;margin-right:28%;font-size:17px;"></p>
	<script src="javascript/clock.js"></script>

    <div style="float:right;margin-top:-5%;margin-right:10%;">
      <button onclick="getLocation()" class="Location">Your location</button>
      <p id="loc" ></p>
    </div>
  </div>


   <nav id="llogo" >
     <a href="https://vimeo.com/user9435667" target="_blank">                     <img src="images/vimeo.png" alt="Vimeo" id="imglogo"></a>
     <a href="https://twitter.com/dreamtravelma" target="_blank">                 <img src="images/twitterlogo.png" alt="Twitter" id="imglogo"></a>
     <a href="https://web.facebook.com/www.dreamtravel.com.au" target="_blank">   <img src="images/facebooklogo.png" alt="Facebook" id="imglogo"></a>
     <a href="https://www.tumblr.com/tagged/dream-travel" target="_blank">        <img src="images/tumblrlogo.png" alt="Tumblr" id="imglogo" ></a>
     <a href="https://plus.google.com/+dreamworldtravel" target="_blank">         <img src="images/googlepluss.png" alt="G+" id="imglogo"></a>
     <a href="https://www.instagram.com/dreaming_travel/" target="_blank">        <img src="images/instagramlogo.png" alt="Insta" id="imglogo"></a>
     <a href="https://www.youtube.com/channel/UCrBPPGyR_7aOd882VpMRkRg" target="_blank">  <img src="images/youtubelogo.png" alt="YT" id="imglogo"></a>
     <a href="https://www.pinterest.com/explore/family-travel/" target="_blank">   <img src="images/pinterestlogo.png" alt="P" id="imglogo"></a></nav>

</footer>
</body>
</html>
