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

$database=mysqli_select_db($con,'register');
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

if($num>0)
{
    $_SESSION['username']=$name;
    header('location:Homepage.php');
   
}
else
{
    
    
/*echo '<script type="text/JavaScript">  
     alert("emailid password wrong"); 
     </script>' ; */

    header('location:Emp_login.php');
   
}

mysqli_close($con);

?>