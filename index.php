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