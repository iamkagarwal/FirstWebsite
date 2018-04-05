<?php


$servername = "localhost";
$username="root";
$password= "";
$dbname="form";
$fname="";
$lname="";
$gender="";
$dob="";


$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("connection failed:" . $conn->connect_error);
}

if(isset($_POST["submit"]))
{
    $fname=$_POST["firstName"];
    $lname=$_POST["lastName"];
    $gender=$_POST["gender"];
    $dob=$_POST["birthday"];
    
    if($fname == "" ||$lname == "" ||$gender == "" ||$dob == "" )
    {
        
    }
    
    
    $sql = "INSERT INTO first (FNAME,LNAME,GENDER,BIRTHDATE) VALUES ('$fname','$lname','$gender','$dob')";
    
    if($conn -> query($sql) === TRUE)
    {
        echo "New record created successfully";
    }
    else
    {
        echo "error:".$sql."<br>".$conn->error;
    }
}

?>