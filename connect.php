<html>
    <body>
        
<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="jopwebsite";
$con= new mysqli($servername,$username,$password,$dbname);
 
if($con)
    echo" connection successfully";
else
die("why : " . $con->connect_error);
if (isset($_POST["submit"]))
{
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$dob=$_POST['date'];
$password=$_POST['cpassword'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$s=" insert into usermanagementofficial(id,firstname,lastname,password,email,phone,dateofbirth)VALUES(1,$fname,$lname,$password,$email,$phone,$dob)";
$result=mysqli_query($con,$s);

if($result===true)
echo"user registered";
else
echo" erro occured :". mysqli_error($con);
}
?>
    </body>
</html>