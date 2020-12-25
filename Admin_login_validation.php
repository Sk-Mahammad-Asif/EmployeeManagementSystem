<?php

session_start();

/*header('location:Emp_login.php');*/

$con=mysqli_connect('localhost','root');
$database=mysqli_select_db($con,'employee');

if($con)
{
    echo"connection successful<br/>";
}
else
{
  echo"no connection<br/>";   
}


$name=$_POST['username'];
$pass=$_POST['password'];

    if( ! $database)
    {
        echo"database not connected<br/>";
    }
    else
    {
             echo"  connect database<br/>";
    }
$q="select * from admin where user_name='$name' && password='$pass' ";
$result=mysqli_query($con,$q);
   echo "Error: " . $q . "" . mysqli_error($con);
$num=mysqli_num_rows($result);

if($num>0)
{
    $_SESSION['username']=$name;
   header('location:Emp_DeletionForm.php');
   
}

else
{
    
  echo '<script type="text/JavaScript">  
     alert("emailid password wrong"); 
     </script>' ;
 header('location:Admin_login1.php'); 
}
     

mysqli_close($con);

?>