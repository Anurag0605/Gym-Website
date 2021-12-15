<!-- Anurag Yadav 
SEIT-B (Batch->3)
Roll Number: 48 -->


<!-- PHP Script -->

<?php

//If insertion failed
$insert=false;

//The whole code will run onnly if name is set in the website
if (isset($_POST["name"])) {
    //Details of the database to which we are connecting
$server="localhost";
$username="root";
$password="";

//passing connection objects to the funtions
$con=mysqli_connect($server,$username,$password);

if($con){
    // echo"Connection Successful";
    
}
else{
    //If connection is unsuccessfull
    echo"Connection Unsuccessful because: ". myqsli_error();
}

//Taking all the inputs from the website into their corresponding variables
$name = $_POST['name'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$plan = $_POST['plan'];


//Insertions qury into DB
$sql= "INSERT INTO `pcpf_mproj`.`users` ( `name`, `age`, `contact`, `plan`) VALUES ('$name', '$age', '$contact', '$plan');";

// echo $sql; 
//To check whether the query is executed successfully or not


//Checking if the insertion qury was executed successfully.
if ($con->query($sql)==true) {
//    echo "Inserted successfully!1";
$insert=true;
}
else{
    //If not executed successfully
    echo " NOT Inserted successfully..";
}


//Closing connection with the Database after all the operations done
// con->mysqli_close();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness HUB</title>

    <style>
        body{
            margin: 0;
            padding: 0;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(gymbg5.jpg);
            background-attachment: fixed;
            background-size: cover;
        }

        #logo {
            height: 167px;
            width: 190px;
            margin-top: -20px;
            /* margin-top: 1%; */
            /* margin-left: 0.5%; */
        }

        #head {
            font-size: 80px;
            color: aliceblue;
        }

        #subs {
            font-size: 60px;
            margin-left: 20px;
            color: aliceblue;
            margin-bottom: 20px;
            width: 900px;
        }

        .c1 {
            align-items: center;
            border: 5px solid rgb(108, 205, 230);
            border-radius: 30px;
            /* margin-top: 60px; */
            height: 750px;
            width: 1500px;
            margin-left: auto;
            margin-right: auto;
            display: inline-block;
            color: aliceblue;
            border-radius: 50px;
            /* background-color: blue; */
        }

        form {
            /* display:block; */
            color: aliceblue;
            font-size: 30px;
        }



        /* label{
            list-style: none;
            display: block;
        } */
        input {
            /* display: flex; */
            border: 3px solid rgb(212, 58, 200);
            color: rgb(3, 3, 3);
            margin: 5px;
            padding: 10px;
            font-size: 25px;
            width: 400px;
            border-radius: 10px;
            border-radius: 50px;

        }

        input[type="radio"] {
            height: 30px;
            width: 30px;
            margin: 10px;
            /* border: 1px solid rgb(240, 56, 178); */

        }

        .inp {

            /* margin-top: 20px; */
            border: 5px solid rgb(233, 92, 226);
            width: 833px;
            border-radius: 50px;
    
        }

        ul {

            align-items: center;
            color: white;
            /* background-color: black; */
            list-style: none;
            margin-left: 700px;
            margin-top: 20px;
            /* position: relative; */

        }

        ul li {
            display: inline-block;
            
           
        }

        ul li a{
            text-decoration: none;
            color: white;
            margin: 10px;
            border: 1px solid white;
            padding: 10px;
            border-radius: 10px;
            transition: 0.4s ease;
        }

        ul li a:hover {
            background-color: rgb(250, 250, 250);
            color: rgb(3, 3, 3);
            font-size: 27px;
        }
        
        .navbar {
            font-size: 25px;
            
        }

        .btn{
            margin-top: 30px;
            list-style: none;
            /* background-color: black; */
            color: rgb(14, 13, 13);
            font-size: 30px;
            padding: 10px;
            background-color: rgb(156, 247, 252);
            border: 3px solid rgb(238, 90, 218);
            border-radius: 10px;
            transition: 0.4s ease;
            width: 300px;
        }

        .btn:hover{
            background-color: black;
            color: white;
            cursor: pointer;
            
        }

        .last{
        font-weight: bolder;
        margin-top: 80px;
        color: lime;
        font-size: 37px;
        }
    </style>
</head>

<body>

    <!-- inserting logo img to page -->
    <img Align="left" id="logo" src="gymlogo.png" alt="">

        <!-- NAVBAR -->
    <nav>
        <div class="navbar">
            <ul>
                <li><a href="#"> Home</a></li>
                <li><a href="#"> About us</a></li>
                <li><a href="#"> Services</a></li>
                <li><a href="#"> Contact us</a></li>
                
            </ul>
        </div>
    </nav>


    <div class="c1" Align="Center">
        <h1 id="subs">Subscribe us!!</h1>

        <div class="d2">

        <!-- Creating  the Form to take user inputs -->

            <form action="index.php" method="post">
                <p>
                    <label style="margin-top: 50px;" for="">Enter Your Name</label>
                    <input name="name" type="text">
                    <br>
                    <label for="">Enter Your Age</label>
                    <input name="age" style="margin-left: 30px;" type="text">
                    <br>
                    <label for="">Contact Number</label>
                    <input name="contact" style="margin-left: 20px;" type="text">
                <div class="inp">

                <!-- Radio buttons for chosing the plan -->
                    <h2><b>Select preferred plan</b> </h2>
                    <br>
                    <input type="radio" name="plan" value="1 Month">1 Month

                    <input type="radio" name="plan" value="3 Months">3 Months

                    <input type="radio" name="plan" value="5 Months">5 Months

                    <input type="radio" name="plan" value="6 Months">6 Months

                    <input type="radio" name="plan" value="1 Year">1 Year
                    </p>
                    
                </div>

                <button type="submit" class="btn">Submit</button>
            </form>

        </div>

        <?php
        

//Displaying the success message if everything was finee.
if($insert==true)
        echo "<p class='last'>Thank You for Subscribing us!!</p>"

?>

    </div>  
</body>
</html>
