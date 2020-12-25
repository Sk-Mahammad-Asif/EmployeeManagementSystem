<?php

session_start();

/*header('location:Emp_login.php');*/

$con=mysqli_connect('localhost','root');

if($con)
{
    echo"connection successful<br/>";
}
else
{
  echo"no connection<br/>";   
}

$database=mysqli_select_db($con,"register");
$name=$_POST['user'];
$pass=$_POST['password'];
    if( ! $database)
    {
        echo"database not connected<br/>";
    }
    else
    {
             echo"  connect database<br/>";
    }
$q="select * from emp_information where emailid='$name' && password='$pass' ";
$result=mysqli_query($con,$q);
   echo "Error: " . $q . "" . mysqli_error($con);
$num=mysqli_num_rows($result);

if($num==1)
{
    echo"Duplicate Data";
}
else
{
    $qy="insert into emp_information (emailid,password) values ('$name','$pass')";
    
    
    if (mysqli_query($con, $qy)) {
            
   
            } else {
               echo "Error: " . $qy . "" . mysqli_error($con);
            }
}

mysqli_close($con);

?>
