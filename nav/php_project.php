<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME TO TRAVEL FORM</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="pcte.jpg" alt"PCTE">
    <div class="container">
        <h1>Welcome to PCTE GROUP OF INSTITUTES Jaipur Trip Form</h1><br>
        <p>Enter your details and submit this form to confrim your participation in Trip</p>
       
        <form action="#" method="POST">
            <input type="text" name="t1" id="name" placeholder="Enter your name">
            
            <input type="text" name="t2" id="class" placeholder="Enter your class">
            
            <input type="text" name="t3" id="roll_no." placeholder="Enter your roll no.">
        
            <input type="text" name="t4" id="gender" placeholder="Enter your gender">

            <input type="text" name="t5" id="e_mail" placeholder="Enter your e_mail">

            <input type="text" name="t6" id="phone" placeholder="Enter your phone number">

            <textarea name="t7" id="desc" cols="30" rows="10" 
            placeholder="Enter any other information"></textarea>
            
            <button class="btn" name="b1">Submit</button>
            
            
        </form>
    </div>

    <?php
    if (isset($_POST['b1'])) {
        
        $nm = $_POST['t1'];
        $cl = $_POST['t2'];
        $rn = $_POST['t3'];
        $gn = $_POST['t4'];
        $em = $_POST['t5'];
        $ph = $_POST['t6'];
        $ms = $_POST['t7'];

        $con = new mysqli("localhost","root","","db_form");
        
        if ($con==true) {
            $cmd="insert into tbl_details values('$nm','$cl','$rn','$gn','$em','$ph','$ms')";

            if($con->query($cmd)==true){
                echo"<h2>"."Values Inserted"."</h2>";
            }
            else{
                echo"<h2>"."Query Problem in Insert"."</h2>";
            }
        }

        else{
            echo "<h2>"."Connection Problem"."</h2>";
        }
        
    }
    
    ?>



    <script src="index.js"></script>
</body>
</html>