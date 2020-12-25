<?php
session_start();
if(!isset($_SESSION['username']))
{

header('location:Admin_login1.php');
}
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
  $index="b".$j;
  if(isset($_POST[$index]))
  {
    $b_id[$i]=$_POST[$index];
  }
    else
    {
        $i--;
    }
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'employee');

for($k=1;$k<=$size;$k++)
{
    $q="delete from emp_registration where EMP_ID=".$b_id[$k];
    echo"Employee record deleted";
    mysqli_query($con,$q);
}
mysqli_close($con);

?>
<html>
   <head>
      <title>Insertion    </title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
       <style>
           
           *{
              margin:5px;
              padding: 10px;
    
             }
           body
           {
               background-image: url(add_employee.jpg);
               background-size: 100% 900px;
              background-repeat: no-repeat;
           }
           h1
           {
               text-align: center;
               font-weight: bold;
               font-style: italic;
               text-decoration: underline;
               font-size: 50px;
              
           }
           h1:hover
           {
               color:yellow;
           }
           p
           {
               text-align: center;
               padding-top: 50px;
               font-weight: bold;
               font-size: 20px;
               color: red;
               
               
           }
           div
           {
               padding-left: 160px;
               font-style: oblique;
               font-weight: bold;
               font-size: 25px;
           }
          
           div a
           {
               text-decoration: none;
               color:yellow;
               background-color:black;
               border-radius: 10px;
           }
           div a:hover
           {
               color:red;
           }
           p1
           {
                padding-left: 1000px;
                color:blue;
                text-decoration: underline;
               font-weight: bold;
           }
                  a
            {
                text-decoration: none;
                background-color: black;
                color: yellow;
                border-radius: 15px;
            }
            a:hover
            {
                color: red;
            }
           h2
            {
                padding-left: 1300px;
            }
           
           
       </style>
   </head>
   <body>
     <h1> Employee Record Management Admin"<?php echo $_SESSION['username']; ?>" </h1>
       <h2 ><a href="logout.php"> LOGOUT </a> </h2>
	 <p> 
         <?php 
              
               echo $size." Records deleted";
         ?>
       </p>
       <div>
	 Do you want to Delete more record? <a href="Emp_DeletionForm.php">
	 Click here </a><br/>
           <br>
           <br>
            View Databases?<a href="Emp_viewpage.php">
	 Click here </a><br/>
           <br>
           <br>
           Back To HomePage?<a href="Homepage.php">
	 Click here </a><br/>
       </div>
       <p1>
           @Thanks for Visit Copyright recived asif123.....
       </p1>
	 </body>
	 </html>
