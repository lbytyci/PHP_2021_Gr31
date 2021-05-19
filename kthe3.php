<?php
$PlaceErr="";
$DaysErr="";
$PeopleErr="";
$HotelErr="";
$TimeErr="";
$QuesErr="";
$EmailErr="";
$ResultErr="";

$Place='';
$Days='';
$People='';
$Hotel='';
$Time='';
$Ques='';
$Email='';

$Result='';
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
	   try 
	   {
		   if($_POST["People"]=="0" || empty($_POST["People"]))
			  
		   {
			   throw new Exception("People field is 0 or empty, please write a positive number!");
		   }
		  else{
		    $People=$_POST["People"];
	         }
	   }
	   catch (Exception $e) {
	   $PeopleErr= $e->getMessage() ;
	   
	   }
	  
	   
    if(($_POST["Place"])=='1') {
      $PlaceErr = "Please choose a place";
     } 
	else{
		$Place=$_POST["Place"];
	}
	if(empty($_POST["days"])) {
      $DaysErr = "You should write number of days";
     } 
	 else{
		 $Days=$_POST['days'];
	 }
	
	if(($_POST["Hotel"])=='nothing') {
      $HotelErr = "You should choose Hotel Category";
     } 
	 else
	 {
		 $Hotel=$_POST["Hotel"];
	 }
    if(($_POST["Time"])=='nothing') {
      $TimeErr = "Please choose which time you want to go";
     } 	 
	 else
	 {
		 $Time=$_POST['Time'];
	 }
    if(!empty($_POST["Ques"]))  {
		if(strlen($_POST["Ques"])>256)
		{
			$QuesErr="You can write only 255 characters";
		}
		else if(empty($_POST["email"]))
		{
			$EmailErr="Please write even your email ";
	    }
		else if(!filter_var(($_POST["email"]), FILTER_VALIDATE_EMAIL)){
			$EmailErr="Invalid email";
		}
		else {
			$Ques=$_POST["Ques"];
			$Email=$_POST["email"];
		}
	}
	if(!empty($_POST["email"])){
	   if(!filter_var(($_POST["email"]), FILTER_VALIDATE_EMAIL)){
			$EmailErr="Invalid email";
	}
	else{
		$Email=$_POST["email"];
	}
	
	}  
   if(empty($PlaceErr) and empty($TimeErr) and empty($DaysErr) and empty($PeopleErr) and empty($EmailErr) and empty($QuesErr) and empty($HotelErr))
   {
	   if(!empty($_POST["email"]) and !empty($_POST["Ques"])) {
	   $to = 'lferizaj74@gmail.com';
      $subject = 'Question Website From:'.$Email;
	  $message= $Ques;
	  $headers = "From:" . $Email;
	 
       mail($to, $subject, $message,$headers);
	   }
	   $ResultErr=" "; 
	   if($Hotel=="3")
	   {
		   $res=new three();
		   $Result=$res->placee();
		 
	   }
	   else if($Hotel=="4")
	   {
		   $res=new four();
		   $Result=$res->placee();
	   }
	   else if($Hotel=="5")
	   {
		   $res=new five();
		   $Result=$res->placee();
	   }
   }
   }
   class first{
	   public $price;
	   public $people;
	   public $days;
	   
	 function __construct(){
	 $this->people=(int)$_POST['People'];
		 $this->days=(int)$_POST['days'];
		 
	 }
	 function __destruct() {
        
    }
	   
   }
   class three extends first {
	   public $Result;
	   public function placee(){
		   if($_POST['Place']=='2')
		   {
			   $this->price=10;
			   $Result=$this->price*$this->days*$this->people;
			   return($Result);
		   }
		   else if($_POST['Place']=='3')
		   {
			   $this->price=50;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='4')
		   {
			   $this->price=60;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='5')
		   {
			   $this->price=45;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='6')
		   {
			   $this->price=60;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='7')
		   {
			   $this->price=70;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='8')
		   {
			   $this->price=89;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='9')
		   {
			   $this->price=90;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
	   }
	   
   }
   class four extends first{
	   public $Result;
	   
	    public function placee(){
		   if($_POST['Place']=='2')
		   {
			   $this->price=30;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='3')
		   {
			   $this->price=100;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='4')
		   {
			   $this->price=120;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='5')
		   {
			   $this->price=130;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='6')
		   {
			   $this->price=140;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='7')
		   {
			   $this->price=150;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='8')
		   {
			   $this->price=160;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='9')
		   {
			   $this->price=170;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
	   }
   }
   class five extends first{
	   public $Result;
	    public function placee(){
		   if($_POST['Place']=='2')
		   {
			   $this->price=120;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='3')
		   {
			   $this->price=455;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='4')
		   {
			   $this->price=560;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='5')
		   {
			   $this->price=600;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='6')
		   {
			   $this->price=350;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='7')
		   {
			   $this->price=500;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='8')
		   {
			   $this->price=400;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
		   else if($_POST['Place']=='9')
		   {
			   $this->price=350;
			   $Result=$this->price*$this->people*$this->days;
			   return($Result);
		   }
	   }
   }
?>
