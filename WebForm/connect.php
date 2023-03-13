<?php
//nclude db connection 
$conn = mysqli_connect('localhost', 'root', '', 'htmlform');

if(isset($_POST['submit'])){
   $firstName=$_POST['firstName'];
   $lastName=$_POST['lastName'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $date=$_POST['date'];
   $gender=$_POST['gender'];
   $countries=$_POST['countries'];
   $districts=$_POST['districts'];
 
   $option = $_POST['qualification'];
   $opt="";
   foreach($option as $opti)
   {
      $opt .= $opti.",";
   }
   $educationLevel=$_POST['educationlevel'];
   $GraduationDate=$_POST['months'];
 
   $checkbox1=$_POST['future'];  
$chk="";  
foreach($checkbox1 as $chk1)  
  {  
     $chk .= $chk1.",";  
  } 
   
   $contactUs=$_POST['contactUs'];
   $image=$_FILES['file'];
   print_r($_FILES['file']);
   $img_loc=$_FILES['file']['tmp_name'];
   $img_name=$_FILES['file']['name'];
   $img_des="upload/".$img_name;


   move_uploaded_file($img_loc,'upload/'.$img_name);

  // insert data
 $success= mysqli_query($conn,"INSERT INTO `registrationform`(`fistName`, `lastName`, `email`,
   `password`, `date`, `gender`, `countries`, `districts`, `languagesMastered`, `resume`, 
   `educationLevel`, `GraduationDate`, `LanguagesYouWantToMaster`, `contactUs`) VALUES ('$firstName',  
   '$lastName','$email','$password','$date','$gender','$countries',
   '$districts','$opt','$img_des','$educationLevel','$GraduationDate','$chk',
   '$contactUs')");

  header("location:index.php");
  if($success==1)  
  {  
     echo'<script>alert("Inserted Successfully")</script>';  
  }  
else  
  {  
     echo'<script>alert("Failed To Insert")</script>';  
  }
}


?>