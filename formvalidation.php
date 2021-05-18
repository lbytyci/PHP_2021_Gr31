<?php
$nameErr="";
$emailErr="";


$Fname=$Femail=$Fselect=$Fnews="";

   if ($_SERVER["REQUEST_METHOD"] == "POST"){
	   $Fselect=$_POST['Fselect'];
       $Fnews=$_POST['Fnews'];
   if(empty($_POST["Fname"])) {
      $nameErr = "Name is required";
     } 
	 else {
		 $Fname = test_input($_POST["Fname"]);
		 if (!preg_match("/^[a-zA-Z]*$/",$Fname)) {
         $nameErr = "Only letters";
		 $Fname='';
		 
         }
	
       }
    if(empty($_POST["Femail"])){
		$emailErr="Email is required";
	}
	else{
		$Femail=test_input($_POST["Femail"]);
		
     if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$Femail)) {
	  $emailErr = "Invalid email format";
	  
	  }
	  }
	  
	if (empty($nameErr) and empty($emailErr)){
	  $Fselect=$_POST['Fselect'];
	  $Fname=$_POST['Fname'];
	  $Femail=$_POST['Femail'];
	  $Fnews=$_POST['Fnews'];
	  $conn = mysqli_connect("localhost", "root", "");
	  $db = mysqli_select_db($conn, "dbtest");
	  $query = mysqli_query($conn, "INSERT INTO form(name, email,fselect,news) VALUES('$Fname','$Femail','$Fselect','$Fnews')");
	  
	}
	
	  }
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

?>