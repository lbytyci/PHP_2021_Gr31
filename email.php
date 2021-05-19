<?php
$nameErr="";
$emailErr="";
$feedbackErr="";
$Hname=$Hemail=$Hfeedback="";
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
   if(empty($_POST["Hname"])) {
      $nameErr = "Name is required";
     } 
	 else {
		 $Hname = test_input($_POST["Hname"]);
		 if (!preg_match("/^[a-zA-Z]*$/",$Hname)) {
         $nameErr = "Only letters";
		 
         }
	
       }
    if(empty($_POST["Hemail"])){
		$emailErr="Email is required";
	}
	else{
		$Hemail=$_POST["Hemail"];
		
     if (!filter_var($Hemail, FILTER_VALIDATE_EMAIL)) {
	  $emailErr = "Invalid email format";
	  
	  }
	}	  
	if(empty($_POST["Hfeedback"])){
		$feedbackErr="Required field";
	}
	else{
		$Hfeedback=test_input($_POST["Hfeedback"]);
		if(strlen($Hfeedback)>256)
		{
			$feedbackErr="You can write only 255 characters";
			
		}
		
	}
	
	if (empty($nameErr) and empty($emailErr) and empty($feedbackErr)){
		
      $to = 'lferizaj74@gmail.com';
      $subject = 'HUG THE WORLD: Name:'.$Hname.' Email:'.$Hemail;
	  $message= $Hfeedback;
	  $headers = "From:" . $Hname;
	 
      mail($to, $subject, $message,$headers);
        
          $Hname = $Hemail =$Hfeedback= '';
       
	  }
  }
		 
	
    
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
