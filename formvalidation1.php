<?php
$nameErr="";
$emailErr="";
$surnameErr="";
$phoneErr="";
$genderErr="";
$passwordErr="";
$explorerErr="";
$FDname=$FDemail=$FDsurname=$FDphone=$FDbday=$FDgender=$FDpassword=$FDexplorer=$FDvendi=$FDlevel=$Fcourse=$Fgpa="";
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
	   $FDvendi=$_POST["FDvendi"];
	   $FDlevel=$_POST["FDlevel"];
	   $Fcourse=$_POST["course"];
	   $Fgpa=$_POST["FDgpa"];
   if(empty($_POST["FDname"])) {
      $nameErr = "Name is required";
     }
	 else {
		 $FDname = test_input($_POST["FDname"]);
		 if (!preg_match("/^[a-zA-Z]*$/",$FDname)) {
         $nameErr = "Only letters";

         }

       }
	   if(empty($_POST["FDsurname"])) {
      $surnameErr = "Name is required";
     }
	 else {
		 $FDsurname = test_input($_POST["FDsurname"]);
		 if (!preg_match("/^[a-zA-Z]*$/",$FDsurname)) {
         $surnameErr = "Only letters";

         }

       }
    if(empty($_POST["FDemail"])){
		$emailErr="Email is required";
	}
	else{
		$Femail=test_input($_POST["FDemail"]);

     if (!filter_var($_POST['FDemail'], FILTER_VALIDATE_EMAIL)) {
	  $emailErr = "Invalid email format";

	  }
	  else {
		  $FDemail=$_POST["FDemail"];
	  }
	  }
	   if(!isset($_POST['FDgender'])){
        $genderErr = "No radio buttons were checked.";
    }
	else {
		 $FDgender =$_POST["FDgender"];
	}
	if(empty($_POST["FDpassword"]))
	{
		$passwordErr = "Password is required to create your account";
	}
	else if (strlen($_POST['FDpassword']) <= 7) {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
    }
    else if(!preg_match("#[0-9]+#",$_POST['FDpassword'])) {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";
    }
    else if(!preg_match("#[A-Z]+#",$_POST['FDpassword'])) {
        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
    }
   else if(!preg_match("/\W/",$_POST['FDpassword'])) {
        $passwordErr = "Your Password Must Contain At Least 1 Special Character!";
    }
    else{
             $FDpassword=test_input($_POST["FDpassword"]);
	}
	if(empty($_POST["FDexplorer"])){
		$explorerErr="Required field";
	}
	else{
		$FDexplorer=test_input($_POST["FDexplorer"]);
		if(strlen($FDexplorer)>256)
		{
			$explorerErr="You can write only 255 characters";

		}
	}
		 $FDphone = test_input($_POST["FDphone"]);
   if (!preg_match("^[\+]\d{3} \d{2} \d{3} \d{3}$^",$FDphone)) {
         $phoneErr = "Invalid phone number format";

         }
	if(empty($nameErr) and empty($emailErr) and empty($surnameErr) and empty($phoneErr) and empty($genderErr) and empty($passwordErr) and empty($explorerErr))
	{
	  $name = $_POST['FDname'];
	  $surname = $_POST['FDsurname'];
	  $email = $_POST['FDemail'];
	  $phone = $_POST['FDphone'];
	  $bday= $_POST['bday'];
	  $gender = $_POST['FDgender'];
	  $pass = $_POST['FDpassword'];
	  $vendi = $_POST['FDvendi'];
	  $level = $_POST['FDlevel'];
	  $gpa = (int)$_POST['FDgpa'];
	  $course = $_POST['course'];
	  $explorer = $_POST['FDexplorer'];
	  $conn = mysqli_connect("localhost", "root", "root");
	  $db = mysqli_select_db($conn, "dbtest");
	  $query = mysqli_query($conn, "INSERT INTO form1(name,lname,email,tel,datat,gjinia,paswordi,vendi,niveli,gpa,course,explorer) VALUES('$name','$surname','$email','$phone','$bday','$gender','$pass','$vendi','$level','$gpa','$course','$explorer')");
	}



	  }
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
