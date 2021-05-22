<?php
session_start();
?>
<!DOCTYPE html>
<html >
    <head>
        <title>Kosova</title>
        <meta lang="en">
		<link rel="icon" type="image/jpg" href="Images/llogo.jpg" />
		<link rel="stylesheet" href="hf.css">
		<link rel="stylesheet" href="css/location.css">
        <script src="javascript/location.js"></script>


        <style>

body {
  margin:0%;
  background: linear-gradient(rgb(248, 248, 248),#80c9eb);
}

 html {
	scroll-behavior: smooth;
}
.navigimi{
  box-sizing: border-box;
	position: fixed;
	display: flex;
	flex-direction: row;
	justify-content: space-between;
	align-items: center;
	width: 100%;
	padding: 16px 104px;
	background:#fff;
	z-index: 100000;
  border-bottom: 1px solid #2e2b29;
  height: 80px;
}

#linqet_e_navigimit{
  margin:0%;
  padding: 0%;
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: center;
}

#linqet_e_navigimit li{
	list-style: none;
	padding-right:  30px;
}
#linqet_e_navigimit li a{
	text-decoration: none;
	font-size: 20px;
	font-weight: 500;
	color:#070606;
	padding: 10px 10px;
	font-family: Candara Light;
	cursor: pointer;
}

#linqet_e_navigimit li a:hover{
	color: #3a3838;
	border-bottom: 5px solid#3536368e;
	border-bottom-left-radius: 8px;
	border-bottom-right-radius:8px; 
	border-right: 1px solid#3536368e;
	border-top: 1px solid #3536368e;
	border-top-left-radius: 8px;
	border-top-right-radius: 8px;
	border-left: 1px solid#3536368e;
	transition: all 0.1s ease 0.1s;
}
#linqet_e_navigimit li a:active{
	border-bottom: 1px solidd#3536368e;
	background-color: #f0eae6;
}

.button11 {
  display: inline-flex;
  height: 40px;
  width: 150px;
  border: 2px solid #0505058e;
  margin: 20px 20px 20px 20px;
  color:#0707078e;
  text-transform: uppercase;
  text-decoration: none;
  font-size: .8em;
  letter-spacing: 1.5px;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}
.button11 a{
  color: #0000008e;
  text-decoration: none;
  letter-spacing: 1px;
  font-weight: bold;
}
#button-5 {
  position: relative;
  overflow: hidden;
  cursor: pointer;
}

#button-5 a {
  position: relative;
  transition: all .45s ease-Out;
}

#translate {
  transform: rotate(50deg);
  width: 100%;
  height: 250%;
  left: -200px;
  top: -30px;
  background: #000000;
  position: absolute;
  transition: all .3s ease-Out;
}

#button-5:hover #translate {
  left: 0;
}

#button-5:hover a {
  color: #ffffff;
}

#bar{
	color:#ff5733;
	display: none;
}
        </style>
    </head>
    <body>
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
<p id="title" style="margin-top:-20%;margin-bottom:20%;">Kosova</p>
<article>
<section>
    <h3>Tourism types in Kosova</h3>
       <div style="float:left;">
           <ol style="float:left;"><li>Adventure travel
                <ul class="types"></br>
                    <li><a href="https://en.wikipedia.org/wiki/Hiking_in_Kosovo" target="_blank">Hiking</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Brezovica,_Kosovo" target="_blank">Skiing</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Forests_of_Kosovo" target="_blank">Camping</a></li>
                    <li><a href="http://www.unicycle50.com/new/Cycling_in_Kosovo.php" target="_blank">Cycling</a></li>
                </ul>
               </li></br>
            <li>Cultural tourism
                <ul class="types" style="list-style-type:circle;"></br>
                    <li><a href="https://en.wikipedia.org/wiki/Archaeology_of_Kosovo" target="_blank">Archaeology</a></li>
                           <li><a href="https://enjoypristina.wordpress.com/2012/07/27/dukagjini-bookstore/" target="_blank">Bookstore</a></li>
                </ul>
            </li></br>
            <li>Religious tourism
                <ul style="list-style-type:circle;" class="types"></br>
                    <li><a href="https://www.google.com/search?tbm=lcl&source=hp&ei=FTQwWuvKJsHIwA
                           L0uZfoDA&q=mosques+in+kosovo&oq=mosque&gs_l=psy-ab.3.0.35i39k1j0i67k1j0i
                           20i263i264k1j0j0i67k1j0i131k1j0l4.8641.10640.0.11829.10.7.1.0.0.0.294.12
                           85.0j5j2.7.0....0...1c.1.64.psy-ab..2.8.1291.0..0i20i264k1j0i10k1j0i20i2
                           63k1.0.CYI_18FA27g#rlfi=hd:;si:;mv:!1m3!1d370550.92305345234!2d21.0758542
                           5!3d42.515348949999996!2m3!1f0!2f0!3f0!3m2!1i529!2i378!4f13.1;tbs:lrf:!
                           2m1!1e2!2m4!1e17!4m2!17m1!1e2!3sIAE,lf:1,lf_ui:1" target="_blank">Muslim</a></li>
                    <li><a href="https://www.google.com/search?q=churches+in+kosovo&npsic=0&rflfq
                           =1&rlha=0&rllag=42474616,21306586,23731&tbm=lcl&ved=0ahUKEwiInv32n4XYA
                           hWRalAKHX_XDuEQtgMIKg&tbs=lrf:!2m4!1e17!4m2!17m1!1e2!2m1!1e2!2m1!1e3!3s
                           IAE,lf:1,lf_ui:1&rldoc=1#rlfi=hd:;si:;mv:!1m3!1d674248.5889059713!2d20.
                           87520245!3d42.350857299999994!2m3!1f0!2f0!3f0!3m2!1i249!2i343!4f13.1;tbs
                           :lrf:!2m1!1e2!2m1!1e3!2m4!1e17!4m2!17m1!1e2!3sIAE,lf:1,lf_ui:1" target="_blank">Christian</a></li>
                </ul>
            </li>
          </ol></div>
		  </section>
		  <section>
    <div class="textcolumns" style="float:left;">
     <h2 style="text-align:center; background-color: lightcyan;">Some facts about tourism in Kosova</h2>
Kosova is situated in south-eastern Europe. With its central
position in the Balkans, it serves as a link in the connection
between central and south Europe, the Adriatic Sea, and Black Sea.
Tourism in Kosova is characterized by archaeological heritage
from Illyrian, Dardanian, Roman, Byzantine, Serbian and Ottoman
times, traditional Albanian and Serbian cuisine, architecture, religious
heritage, traditions, and natural landscapes.The New York Times included
Kosova on the list of 41 Places to go in 2011. In the same year, Kosova saw
a jump of about 40 places on the Skyscanner flight search engine which rates
global tourism growth.Kosova's monuments are classified as common property
for which the society is responsible to maintain them in order to transmit
their authenticity to future generations.Kosova has a variety of natural
features. It is surrounded by mountains: the Sharr Mountains are located
in the south and southeast, bordering Macedonia, while the Kopaonik Mountains
rise in the north. The southwest borders with Montenegro and Albania are also
mountainous, and home to the country's highest peak, Gjeravica, 2,656 m (8,714 ft) high.
The central region is mainly hilly, but two large plains spread over Kosova's
west and east, respectively, Metohija plain and Kosova plain.The bulk of international
tourists going to Kosova are from Albania, Germany, Italy, the United States, the
United Kingdom, Croatia and Austria. Tourism is a growing sector with more tourists
visiting the country every year.
    </div>
	</section>
	<section>
    <table  style="border-collapse:collapse;"> </br>
        <caption><br> <br><h3>Best places to visit</h3></caption>
            <tr>
                <th>Place name</th>
                <th>Description</th>
                <th>View</th>
            </tr>
            <tr>
                <td><b>Germia</b> national park <i>Prishtina</i></br>
                Parku nacional i G&euml;rmis&euml; </td>
                <td class="twrap"> Germia national park is a regional park located in the northeast of Pristina,Kosovo, and covers an area of 62 square kilometres.This mountain massif is a part of the Rhodope Mountains,which lie from the Black Mountain of Skopje to Kopaonik mountains.Its highest point, Butos Peak, is 1050 meters above sea level andits lowest 663 meters above sea level.
                 <br />
                <a href="https://www.google.com/search?q=germia+prishtine&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiF_vikovbXAhWF3KQKHV7vBYMQ_AUICygC" target="_blank">Click for more photos</a>
                </td>
                    <td>
                        <img src="images/germia.jpg" alt="Germia national park" style="width:250px;height:200px;">
                    </td>
            </tr>
            <tr>
                <td><b>Prizren</b>fortress</br>
                Kalaja e Prizerenit</td>
                <td><pre>
Prizren Fortress, also known as Kalaja, is a medieval fortress in
Prizren, Kosovo, which once served as the capital of the Serbian Empire.
 It was built on a hill above Prizren river, around which the modern
city developed. The first fort, erected on this location by the Byzantines,
was further expanded by Emperor Stefan Dušan. The fort then came under the
control of the Ottomans for four centuries. It was declared a Monument
of Culture of Exceptional Importance in 1948</pre>
                <a href="https://www.google.com/search?tbm=isch&sa=1&ei=01goWqDvENCukwWylInQCQ&q=kalaja+e+prizerenit&oq=kalaja+e+prizerenit&gs_l=psy-ab.3...141726.147136.0.147692.23.16.0.0.0.0.794.794.6-1.1.0....0...1c.1.64.psy-ab..22.1.793...0.0.FpCP-O3vqBo" target="_blank">Click for more photos</a>
                </td>
                <td>
                    <img src="images/prizren.jpg" alt="Prizren fortress" style="width:250px;height:200px;">
                </td>
            </tr>
            <tr>
                <td><b>Gadimja</b> cave <i>Lipjan</i></br>
                Shpella e Gadimes Lipjan</td>
                <td class="twrap">
The Marble Cave (Albanian: Shpella e Mermerit) is a karst
limestone cave in the village of Gadime e Ulët (Donje Gadimlje),
in the municipality of Lipljan in Kosovo.Much of it is still
unexplored. The cave was found in 1966 by a villager, Ahmet Asllani,
who was working on his garden.
                    <br />
                <a href="https://www.google.com/search?tbm=isch&sa=1&ei=j1koWsuVB430kwX7p6CwCg&q=shpella+e+gadimes&oq=shpella+e+gadimes&gs_l=psy-ab.3...35332.38660.0.38803.17.10.0.0.0.0.0.0..0.0....0...1c.1.64.psy-ab..17.0.0....0.9m9oY1NWidM" target="_blank">Click for more photos</a>
                </td>
                    <td>
                        <img src="images/shpella.jpg" alt="Gadimja Cave" style="width:250px;height:200px;">
                    </td>
            </tr>
            <tr>
                <td><b>Rugova</b> canyon <i>Peja</i></br>
                Gryka e Rugov&euml;s Pej&euml;</td>
                <td><pre>
Rugova Canyon or Rugova Gorge (Albanian: Gryka e Rugovës) is a river canyon
near Peja in Western Kosova, in the Prokletije mountains, close to the border
with Montenegro. With a length of 25 km (16 mi) and a depth up to 1,000 meters,
Rugova is considered to be one of Europe's longest and deepest canyons. It was
created by water erosion and the retreat of the Peja glacier. The Peja river cuts
through the canyon.</pre>
                <a href="https://www.google.com/search?tbm=isch&sa=1&ei=wlkoWtjLI5CisAfs2I_QCg&q=gryka+e+rugoves&oq=gryka+e+rugoves&gs_l=psy-ab.3...29506.32001.0.32289.15.9.0.0.0.0.0.0..0.0....0...1c.1.64.psy-ab..15.0.0....0.mTKU8MpjFYY" target="_blank">Click for more photos</a>
                </td>
                <td>
                    <img src="images/rugova.jpg" alt="Rugova canyon" style="width:250px;height:200px;">
                </td>
            </tr>
            <tr>
                <td><b>Brezovica</b> ski resort <i>Ferizaj</i></br>
                    Aren&euml; skijimi Brezovic&euml; Ferizaj</td>
                <td class="twrap">
Brezovica is the most visited winter tourist destinations in Kosovo.
The ski resort area is ideally situated on the north and
northwest-facing slopes of the Sharr National Park. The ridge line spans
39,000 hectares of high alpine mountain terrain and forests, with a highly
diverse and abundant flora and fauna. Located within 90 minutes of two
international airports, the Brezovica resort area represents one of the
last remaining under-developed ski resort areas in Southeast Europe.<br />
                <a href="https://www.google.com/search?tbm=isch&sa=1&ei=C1ooWvqaK8zSsAf0s7iYBg&q=brezovica&oq=brezovica&gs_l=psy-ab.3...17687.19763.0.19895.9.7.0.0.0.0.0.0..0.0....0...1c.1.64.psy-ab..9.0.0....0.ZeuB9Hb5cxw" target="_blank">Click for more photos</a>
                </td>
                <td>
                    <img src="images/brezovica.jpg" alt="Brezovica" style="width:250px;height:200px;">
                </td>
            </tr>
            <tr>
                <td><b>Nerodime</b> bifurcation <i>Ferizaj</i></br>
                Bifurkacioni i lumit Nerodime Ferizaj</td>
                <td><pre>
The Nerodimka (Albanian: Nerodimja, Nerodime), is a river in the Nerodimje
region of Kosovo, a 41 km-long left tributary to the Lepenac river. It
represents Europe's only instance of a river bifurcation flowing into two
seas, dividing into two irreversible branches. The left branch flows into
the Black Sea, and the right branch flows into the Aegean Sea.</pre>
                <a href="https://www.google.com/search?tbm=isch&q=nerodime&spell=1&sa=X&ved=0ahUKEwiakYXbo_bXAhXL_qQKHVWsDTkQvwUIOygA" target="_blank">Click for more photos</a>
                </td>
                <td>
                    <img src="images/nerodime.jpg" alt="Nerodime bifurcation" style="width:250px;height:200px;">
                </td>
            </tr>
            <tr>
                <td><b>Ibri</b> river <i>Mitrovica</i></br>
                    Lumi i Ibrit Mitrovic&euml;</td>
                <td class="twrap">
The Ibar, also known as the Ibër and Ibri, is a river that flows through
eastern Montenegro, Serbia and Kosovo, with a total length of 276 km (171 mi).
The river begins in the Hajla mountain, in Rozhaje, eastern Montenegro,
passes through Kosovo and flows into the West Morava river, Central Serbia,
near Kraljevo<br />
                <a href="https://www.google.com/search?tbm=isch&sa=1&ei=S1ooWurhLdLTkwWpp5OQBw&q=ibri&oq=ibri&gs_l=psy-ab.3...19515.19992.0.20305.4.4.0.0.0.0.0.0..0.0....0...1c.1.64.psy-ab..4.0.0....0.z2zA1cbzHnw" target="_blank">Click for more photos</a>
                </td>
                <td>
                    <img src="images/ibri.jpg" alt="Iber lake" style="width:250px;height:200px;">
                </td>
            </tr>
            <tr>
                <td><b>Gjakova</b> ethnographic museum</br>
                Muzeu etnografik Gjakov&euml;</td>
                <td><pre>
Ethnographic museum is situated in the “Citizen Traditional House”, a house
with the most interesting characteristics in the city, representing the
typical urban residence. This house has been built already in 1830 by
masters from Dibra. </pre>
                <a href="https://www.google.com/search?tbm=isch&sa=1&ei=bVooWqz7GNGNkwXp0ocQ&q=muzeu+etnografik+i+gjakoves&oq=muzeu+etnografik+i+gjakoves&gs_l=psy-ab.3...0.0.1.3191.0.0.0.0.0.0.0.0..0.0....0...1c..64.psy-ab..0.0.0....0.SKZSamp19c8" target="_blank">Click for more photos</a>
                </td>
                <td>
                    <img src="images/gjakova.jpg" alt="Gjakova museum" style="width:250px;height:200px;">
                </td>
            </tr>
            <tr>
                <td>Horse farm <b>Gjilan</b></br>
                Ferma e kuajve Gjilan</td>
                <td class="twrap">
Vali Ranch is an all-in-one stop for travelers that is located in eastern Kosovo,
just outside of Gjilan. Vali ranch offers fast service, a restaurant that
serves both traditional and international dishes, and a wide range of activities
including (but not limited to), miniature golf, and horseback riding. <br />
                <a href="https://www.google.com/search?tbm=isch&sa=1&ei=v1ooWqPwE8zWkwXxrK6YDw&q=vali+ranch&oq=vali+ranch&gs_l=psy-ab.3..0l5j0i30k1l2j0i5i30k1l3.15396.17980.0.18255.11.9.0.0.0.0.478.478.4-1.2.0....0...1c.1.64.psy-ab..9.1.477.0...394.sli65lmbXy4" target="_blank">Click for more photos</a>
                </td>
                <td>
                    <img src="images/gjilan.jpg" alt="Ghilan horse farm" style="width:250px;height:200px;">
                </td>
            </tr>
            <tr>
                <td><b>Trofta</b> fish farm <i>Istog</i></br>
                Ferma e peshkut Trofta Istog</td>
                <td><pre>
Everyone in Kosovo knows Istog as the little city in the mountains to Montenegro,
but also everyone connects Istog automatically with TROFTA or vice versa. The fish
restaurant with extremely large garden directly at the fish farm is just beautiful. </pre>
                <a href="https://www.google.com/search?tbm=isch&sa=1&ei=4looWtKZFYLWkwWP2Kb4Ag&q=trofta+istog&oq=trofta+istog&gs_l=psy-ab.3...35719.37826.0.37988.12.8.0.0.0.0.0.0..0.0....0...1c.1.64.psy-ab..12.0.0....0.-rvbKhTC1as" target="_blank">Click for more photos</a>
                </td>
                <td>
                    <img src="images/trofta.png" alt="Trofta" style="width:250px;height:200px;">
                </td>
            </tr>
        </table> </section><br /><br /><br />


  <section><br>
  <div style="height:200px;margin-left:20%;margin-bottom:3%;">
<div style="float:left;">
   <svg viewBox="0 0 64 64" class="pie">
      <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 48.3 100;"></circle>
      <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 19.32 100; stroke: #936a6c; stroke-dashoffset: -48.3; animation-delay: 0.29s;"></circle>
   <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 9.66 100; stroke: #003349; stroke-dashoffset: -67.5; animation-delay: 0.29s;">
  </circle>
 <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 13.29 100; stroke: #862f42; stroke-dashoffset: -77.2; animation-delay: 0.5s;">
  </circle>
   <circle r="25%" cx="50%" cy="50%" style="stroke-dasharray: 9.9 100; stroke: #004345; stroke-dashoffset: -90.5; animation-delay: 0.75s;">
  </circle>
  </svg>
  </div>

 <!--    -->
 <div style="float:left;margin-top:8%;margin-left:5%;">
  <span style="color:black;font-weight:bold;margin-left:-5%;font-size:19px;">Foreign visitors mostly come from:</span><br>

<svg width="10" height="10" >
         <circle cx="5" cy="5" r="5" fill="#404040" /><span style="color:black;font-weight:bold;margin-left:3px;">Others</span>
 </svg><br>
 <svg width="10" height="10" >
          <circle cx="5" cy="5" r="5" fill="#936a6c" /><span style="color:black;font-weight:bold;margin-left:3px;">Albania</span>
 </svg><br>

<svg width="10" height="10" >
              <circle cx="5" cy="5" r="5" fill="#003349" /><span style="color:black;font-weight:bold;margin-left:3px;">Italy</span>
 </svg><br>
 <svg width="10" height="10" >
    <circle cx="5" cy="5" r="5" fill="#862f42" /><span style="color:black;font-weight:bold;margin-left:3px;">Germany</span>
 </svg>
           <br>
 <svg width="10" height="10" >
          <circle cx="5" cy="5" r="5" fill="#004345" /><span style="color:black;font-weight:bold;margin-left:3px;">Turkey</span>
 </svg>

 </div>
 </div>
        </section><br><br>
		</article>

      <?php require 'footer.php';?>

    </body>
</html>
