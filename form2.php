<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
   <meta lang="en">
   <title>Contact Us</title>
   <link rel="icon" type="image/jpg" href="images/llogo.jpg">
   <link rel="stylesheet" type="text/css" href="css/paginaton.css">
   <link rel="stylesheet" href="hf.css">
   <link rel="stylesheet" href="css/location.css">
   <script src="javascript/location.js"></script>

   <style>
      #bodyy {
         background-color: #e7e8ed;
         margin-left: 0;
         background-image: url("images/ren.jpg");
         background-repeat: no-repeat;
         margin-bottom: 0;
         background-position: center;
         background-attachment: fixed;
      }

      .input {
         width: 35%;
         margin-left: 2%;
         font-style: italic;
         font-family: Cambria;
         font-size: 16px;
         height: 8%;
         padding: 10px 18px;
         font-size: 15px;
         border: 2px solid #ccc;
         border-radius: 4px;
         background-color: #f8f8f8;
         opacity: 0.7;
         outline: 0;
      }

      textarea {
         width: 50%;
         margin-left: 2%;
         height: 150px;
         padding: 10px 18px;
         border: 2px solid #ccc;
         border-radius: 4px;
         background-color: #f8f8f8;
         font-size: 16px;
         resize: none;
         font-style: italic;
         font-family: Cambria;
         opacity: 0.7;
         outline: 0;
      }

      select {
         width: 40%;
         margin-left: 2%;
         font-size: 15px;
         padding: 12px 18px;
         border: 2px solid #ccc;
         border-radius: 4px;
         background-color: #f8f8f8;
         opacity: 0.7;
         cursor: pointer;
         outline: 0;
      }

      label {
         font-size: 18px;
         margin-left: 3%;
         margin-bottom: 2%;
      }

      span {
         font-size: 16px;
      }

      #radio {
         width: 13px;
         height: 13px;
         margin-left: 3%;
         cursor: pointer;
         outline: 0;
      }

      .submit {
         border-radius: 5px;
         background-color: rgb(50, 50, 50);
         color: white;
         width: 6%;
         font-size: 15px;
         padding: 1%;
         height: 4%;
         float: right;
         margin-bottom: 3%;
         outline: none;
      }

      .submit:hover {
         width: 8%;
         height: 5%;
         font-size: 16px;
         cursor: pointer;
         outline: none;
      }

      .submit:active {
         outline: none;
      }
   </style>
</head>

<body>


   <?php require 'header.php'; ?>
   <div style="left:-300px;">
      <?php
      if (isset($_SESSION['username'])) {
         $user = $_SESSION['username'];
         echo "<p><b>User:</b> $user</p>";
      }
      ?>
   </div>
   <p id="title" style="margin-top:-20%;margin-bottom:20%;">Contact Us</p>
   <section id="bodyy">
      <section>
         <div class="pagination">
            <table>
               <tr>
                  <td> <a href="form1.php">&laquo;</a></td>
                  <td> <a href="form1.php">Subscribe</a></td>
                  <td> <a href="#" class="active">Be Part of Us</a></td>
                  <td> <a href="form3.php">Suggest a place</a></td>
                  <td><a href="form3.php">&raquo;</a></td>
               </tr>
            </table>
         </div>
      </section>
      <h1 align="center">Apply to be part of our group</h1>
      <p align="center">If You Want To Be Part Of Us Please Fill The Form</p>
      <section>
         <?php include('formvalidation1.php'); ?>
         <form action="<?php $_SERVER['PHP_SELF']; ?>" method="Post">
            <p>
               <label>Your Name *</label><span style="font-size:12px;color:rgb(190,0,0);margin-top:-13px;margin-left:2%;"><?php echo $nameErr; ?></span>
               <label style="margin-left:29%;">Surname *</label><span style="font-size:12px;color:rgb(190,0,0);margin-top:-13px;margin-left:2%;"><?php echo $surnameErr; ?></span><br>
               <input type="text" name="FDname" class="input" id="emri" placeholder="Write your name" value="<?php echo $FDname; ?>" <?php if (!empty($nameErr)) { ?> autofocus <?php } ?>>
               <!--Perdorimi i autofocus,placeholder,required,(3)-->
               <input type="text" name="FDsurname" class="input" id="mbiemri" placeholder="Your Surname" value="<?php echo $FDsurname; ?>" <?php if (!empty($surnameErr)) { ?> autofocus <?php } ?>>
            </p>


            <p>
               <label>Email *</label><span style="font-size:12px;color:rgb(190,0,0);margin-bottom:-6px;margin-left:2%;"><?php echo $emailErr; ?></span>
               <label style="margin-left:33%;">Phone Number (+bbb bb bbb bbb) *</label><span style="font-size:12px;color:rgb(190,0,0);margin-bottom:-6px;margin-left:2%;"><?php echo $phoneErr; ?></span><br>
               <input type="email" name="FDemail" class="input" id="email1" placeholder="Ex. someone@hotmail.com" value="<?php echo $FDemail; ?>" <?php if (!empty($emailErr)) { ?> autofocus <?php } ?>>
               <input type="tel" name="FDphone" class="input" value="<?php echo $FDphone; ?>" <?php if (!empty($phoneErr)) { ?> autofocus <?php } ?>>
            </p>

            <!--perdorimi i pattern per te kontrolluar formatin e pranimit te dhenave per kete input -->

            <p>
               <label>Birthday</label><br>
               <input type="date" name="FDbday" value="<?php echo $FDbday; ?>" class="input">
            </p>
            <p>
               <label>Gender *</label><span style="font-size:12px;color:rgb(190,0,0);margin-left:2%;"><?php echo $genderErr; ?></span><br>
               <input type="radio" name="FDgender" value="Female" id="radio" <?php if ($FDgender == "Female") { ?> checked <?php } ?>><span>Female</span><br>
               <input type="radio" name="FDgender" value="Male" id="radio" <?php if ($FDgender == "Male") { ?> checked <?php } ?>><span>Male</span><br>
               <input type="radio" name="FDgender" value="Other" id="radio" <?php if ($FDgender == "Other") { ?> checked <?php } ?>><span>Other</span><br>
            </p>
            <p>
               <label>Write a password which you will use later *</label><span style="font-size:12px;color:rgb(190,0,0);margin-bottom:-6px;margin-left:2%;"><?php echo $passwordErr; ?></span><br>
               <input type="password" name="FDpassword" class="input" id="pas" placeholder="Please write 8 or more characters" value="<?php echo $FDpassword; ?>" <?php if (!empty($passwordErr)) { ?> autofocus <?php } ?>>
            </p>
            <!--Perdorimi i password inputit-->

            <p>
               <label>Country &#9662;</label><br>
               <!--Perdorimi i enitetit-->
               <input list="Vendet" name="FDvendi" class="input" value="<?php echo $FDvendi; ?>">
               <datalist id="Vendet">
                  <option value="USA">
                  <option value="Kosova">
                  <option value="France">
                  <option value="Germany">
                  <option value="Great Britain">
                  <option value="Albania">
                  <option value="Argentina">
                  <option value="Brazil">
                  <option value="Canada">
                  <option value="India">
                  <option value="South Africa">
               </datalist>
            </p>
            <p>
               <label>The level of Education</label><br>
               <input type="radio" name="FDlevel" value="Primary" id="radio" <?php if ($FDlevel != "HighSchool" and $FDlevel != "University") { ?> checked <?php } ?>><span>Primary School</span><br>
               <!--Default e shtypur do te jete shkolla fillore-->
               <input type="radio" name="FDlevel" value="HighSchool" id="radio" <?php if ($FDlevel == "HighSchool") { ?> checked <?php } ?>><span>High School</span><br>
               <input type="radio" name="FDlevel" value="University" id="radio" <?php if ($FDlevel == "University") { ?> checked <?php } ?>><span>University</span><br>
            </p>
            <p>
               <label>Your GPA(between 6-10)</label><label style="margin-left:25%;">Study (if you have finished or you are following) </label><br>
               <input type="number" name="FDgpa" min="6" max="10" class="input" value="<?php echo $Fgpa; ?>">


               <select name="course">
                    <optgroup label="Science">
                     <!--Ndarja e opsioneve ne seksione te caktuara te cilat jane te pashtypura-->
                         <option value="geo" <?php if ($Fcourse == "geo") { ?> selected <?php } ?>>Geography</option>
                         <option value="sc" <?php if ($Fcourse == "sc") { ?> selected <?php } ?>>Computer Science</option>
                     <option value="bio" <?php if ($Fcourse == "bio") { ?> selected <?php } ?>>Biology</option>
                     <option value="phy" <?php if ($Fcourse == "phy") { ?> selected <?php } ?>>Physics</option>
                      
                  </optgroup>
                    <optgroup label="Engineering">
                         <option value="comp" <?php if ($Fcourse != "geo" and $Fcourse != "sc" and $Fcourse != "bio" and $Fcourse != "phy" and $Fcourse != "elec") { ?> selected <?php } ?>>Computer Engineering</option>
                     <!--default e paraqitur do jete Computer Engineering-->
                         <option value="elec" <?php if ($Fcourse == "elec") { ?> selected <?php } ?>>Electrical Engineering</option>
                      
                  </optgroup>
               </select>
            </p>

            <label>Your exploration skills *</label><span style="font-size:12px;color:rgb(190,0,0);margin-left:1%;"><?php echo $explorerErr; ?></span><br>
            <textarea name="FDexplorer" id="text" placeholder="Write here ..." rows="10" cols="20" value="<?php echo $FDexplorer; ?>" <?php if (!empty($explorerErr)) { ?> autofocus <?php } ?>></textarea><br>
            <p>
               <input type="submit" value="Send" name="submit" class="submit" style="margin-right:10%;">
               <!--mbishkrimi i metodes me te cilen do te percillen te dhenat ne server/database permes formmethod -->
               <input type="reset" value="Reset" class="submit" style="margin-right:2%;">
            </p>

            <br><br><br>
         </form>
         <?php
         if (isset($_SESSION['username'])) {

            echo '<a href="participants.php">Show all participants!</a>';
         }
         ?>
      </section>
      </ section>

      <?php require 'footer.php'; ?>

</body>

</html>
