<?php
session_start();
?>
<!DOCTYPE html>
<html >
<head >
<title>Contact Us</title>
<link rel="icon" type="image/jpg" href="images/llogo.jpg">
<link rel="stylesheet" type="text/css" href="css/paginaton.css">
<link rel="stylesheet" type="text/css" href="css/range.css">
<link rel="stylesheet" href="hf.css">
<link rel="stylesheet" href="css/location.css">
<script src="javascript/location.js"></script>

<style>
      body{
        background-image: url("images/for3.jpg");
        background-repeat:repeat;
        width:100%;
       }
      .input {
         width:35%;
         margin-left:1%;
         margin-top: 2%;
         font-style: italic;
         font-family: Cambria;
         font-size: 16px;
         height: 8%;
         padding: 10px 18px;
         font-size:15px;
         border: 2px solid rgb(90,90,90);
         border-radius: 4px;
         background-color: #f8f8f8;
         opacity: 0.8;
         outline:0;
       }

      textarea {
        margin-left:2%;
        padding: 10px 18px;
        border: 2px solid rgb(90,90,90);
        border-radius: 4px;
        background-color: #f8f8f8;
        font-size: 16px;
        font-style: italic;
        font-family: Cambria;
        opacity: 0.8;
        outline:none;
      }

      label{
        margin-left:2%;
        font-size:1.1em;
       }

      .checkbox{
         margin-left:3%;
         height:14px;
         width:14px;
         outline:0;
       }

	   /*Css lidhur me butonat submit dhe reset*/
      #buttons {
        border-radius:4px;
        background-color:rgb(180,180,180);
        color:black;
        width:8%;
        font-size:16px;
        padding: 1%;
        height: 5%;
        border: 2px solid rgb(90,90,90);
        float:left;
		outline:none;
       }
      #buttons:hover{
        background-color:rgb(90,90,90);
        color:white;
        width:9%;
        height: 6%;
        font-size:17px;
        text-align: center;
        cursor:pointer;
		outline:none;
      }
      #buttons:active{
        outline:none;
       }

     /*Css lidhur me input te tipit file*/
      input[type=file]::-webkit-file-upload-button{
        max-width:100%;
        border-radius:4px;
        border: 1px solid rgb(90,90,90);
        font-size:17px;
        background-color:rgb(180,180,180);
        margin-right:2%;
        height:7%;
        color:black;
        margin-left:
      }
       input[type=file]::-webkit-file-upload-button:hover {
        cursor:pointer;
        background-color: rgb(90,90,90);
        }
     input[type=file]::-webkit-file-upload-button:active{
        text-decoration:underline;
        outline:none;
      }

</style>
</head>
<body>
<article>
<section>
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
</section>
<!-- Pagination ne forme menyje , perdorimi i tabelave per realizimin -->
<section>
  <div class="pagination">
   <table>
      <tr><td> <a href="form2.php">&laquo;</a></td>
          <td> <a href="form1.php" >Subscribe</a></td>
          <td> <a href="form2.php" >Be Part of Us</a></td>
          <td> <a href="#" class="active">Suggest a place</a></td>
          <td><a href="#" title="There is no further">&raquo;</a></td></tr>
   </table>
  </div>
</section>

<h1 >Suggest a place</h1>
<section>
<!--Formulari-->
<?php  include('kthe3.php');?>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"  >
   <label> Place : </label>
     <select class="input" name="Place" <?php if(!empty($PlaceErr)) { ?> autofocus <?php } ?> >
     <option value="1" ></option>
     <option value="2" <?php if($Place == "2") {?> selected <?php } ?>>Albania</option>
     <option value="3" <?php if($Place == "3") {?> selected <?php } ?>>Paris</option>
     <option value="4" <?php if($Place == "4") {?> selected <?php } ?>>London</option>
     <option value="5" <?php if($Place == "5") {?> selected <?php } ?>>Maldives</option>
     <option value="6" <?php if($Place == "6") {?> selected <?php } ?>>New York</option>
     <option value="7" <?php if($Place == "7") {?> selected <?php } ?>>Los Angeles</option>
	 <option value="8" <?php if($Place == "8") {?> selected <?php } ?>>Buenos Aires</option>
	 <option value="9" <?php if($Place == "9") {?> selected <?php } ?>>Rio De Janeiro</option>
    </select><?php echo $PlaceErr;?><br>
   <label> How many days:  </label><input type="number" name="days" id="age" class="input" min='1' placeholder='Write the number of days you want to stay' <?php if(!empty($DaysErr)) { ?> autofocus <?php } ?>  value="<?php echo $Days; ?>" min='1'><?php echo $DaysErr;?><br>

   <p><label style="margin-left:2%;"> How many people:</label>
     <input type="text" name="People" id="pl"  placeholder="Please write the number of people" class="input" style="margin-top:1%;margin-left:0;"  <?php if(!empty($PeopleErr)) { ?> autofocus <?php } ?> value="<?php echo $People; ?>"><?php echo $PeopleErr;?><br></p>



    <label> Type of hotel: </label>
	<select class="input" name="Hotel" <?php if(!empty($HotelErr)) { ?> autofocus <?php } ?>>
     <option value="nothing"></option>
     <option value="3" <?php if($Hotel == "3") {?> selected <?php } ?>>3 stars</option>
     <option value="4" <?php if($Hotel == "4") {?> selected <?php } ?>>4 stars</option>
     <option value="5" <?php if($Hotel == "5") {?> selected <?php } ?>>5 stars</option>

    </select><?php echo $HotelErr;?><br><br>
   <label> In which time of year you want to go: </label>
	<select class="input" name="Time" <?php if(!empty($TimeErr)) { ?> autofocus <?php } ?>>
     <option value="nothing"></option>
     <option value="winter" <?php if($Time == "winter") {?> selected <?php } ?>>December-February</option>
     <option value="spring" <?php if($Time == "spring") {?> selected <?php } ?>>March-May</option>
     <option value="summer" <?php if($Time == "summer") {?> selected <?php } ?>>June-August</option>
	 <option value="autumn" <?php if($Time == "autumn") {?> selected <?php } ?>>September-November</option>

    </select><?php echo $TimeErr;?><br><br>


	<label>If you have any specific question please write here and we will contact you  </label><?php echo $QuesErr;?><br>
    <textarea name="Ques" id="text" placeholder="Write your question or opinion here..."  rows="5" cols="50" <?php if(!empty($QuesErr)) { ?> autofocus <?php } ?> value="<?php echo $Ques; ?>"></textarea><br><br>
    <label>Email:</label><input type="text" class="input" name="email" placeholder="Your email" <?php if(!empty($EmailErr)) { ?> autofocus <?php } ?> value="<?php echo $Email; ?>"><?php echo $EmailErr;?>

<p><input type="submit" value="TRY" id="buttons"   style="margin-left:45%;margin-right:3%;" >
   <input type="reset" value="Reset" id="buttons"  ></p><br><br>
</form>
<br><br><label>Result (Price in euro):</label><input type="text" class="input" name="result" placeholder="output"  value="<?php echo $Result; ?>" <?php if(!empty($ResultErr)) { ?> autofocus <?php } ?>>

</section>
</article>
<?php require 'footer.php';?>
</body>
</html>
