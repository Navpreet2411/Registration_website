<!doctype>
<html>
<head>

<link rel="stylesheet" type="text/css" href="page2.css">

</head>
<body>

<div class="container"> 
<div id="logo"> <img id="img" src="a.png"> </div>
<br>
</div>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="page3.html">Details</a>
  <a href="page4.html">Registration</a>
  <a href="page5.html">Contact Us</a>

</div>

<div class="header">

   
    <div class="container">
        <h1>Welcome to PCTE GROUP OF INSTITUTES Jaipur Trip Form</h1><br>
        <p>Enter your details and submit this form to confrim your participation in Trip</p>
    
        <div class="frm">
        
        <form action="#" method="POST">
            <input type="text" name="t1" id="name" placeholder="Enter your name"><br>
            
            <input type="text" name="t2" id="class" placeholder="Enter your class"><br>
            
            <input type="text" name="t3" id="roll_no." placeholder="Enter your roll no."><br>
        
            <input type="text" name="t4" id="gender" placeholder="Enter your gender"><br>
        
            <input type="text" name="t5" id="e_mail" placeholder="Enter your e_mail"><br>
        
            <input type="text" name="t6" id="phone" placeholder="Enter your phone number"><br>
        
            <textarea name="t7" id="desc" cols="30" rows="10" 
            placeholder="Enter any other information"></textarea><br>
            
            <input type="submit" value="Register" name="b1">
        </div>
    </div>
</div>

    <div class="footer"> 
    
    <h4>Copyright © 2022 travel_club. all rights reserved</h4>
    </div>


    <?php



if(isset($_POST['b1'])){

   $name = $_POST['t1'];
   $class = $_POST['t2'];
   $roll = $_POST['t3'];
   $gender = $_POST['t4'];
   $gender = $_POST['t4'];
   $gender = $_POST['t4'];

   $con = new mysqli("localhost", "root","","ms_wedding");

   if($con==true){

    $cmd = "insert into tbl_contact values('','$name', '$email', '$phone', '$message')";

    if($con->query($cmd)==true){
        //echo "Thanks";
        $_SESSION['success'] = "Thanks For Contacting Us";
        header('Location: index.php');
    }

    else{
        //echo "Something went wrong!";
        $_SESSION['status'] = "Something Went Wrong";
        header('Location: index.php');
    }


 }
}
 
?>
</body>
</html>