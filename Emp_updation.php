<?php
session_start();
if(!isset($_SESSION['username']))
{

header('location:Admin_login1.php');
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'employee');
$size=sizeof($_POST);
$records=$size/9;
//echo"size:.$size";
//echo"records:.$records";

for($i=1; $i<=$records;$i++)
{
    $index1="emp_id".$i;
    $emp_id[$i]=$_POST[$index1];
    
    $index2="firstname".$i;
    $fname[$i]=$_POST[$index2];
    
    $index3="lastname".$i;
    $lname[$i]=$_POST[$index3];
    
    $index4="ctname".$i;
    $ctname[$i]=$_POST[$index4];
    
    $index5="gender".$i;
    $gender[$i]=$_POST[$index5];
    
     $index6="date".$i;
    $date[$i]=$_POST[$index6];
    
     $index7="email".$i;
    $email[$i]=$_POST[$index7];
    
     $index8='adnumber'.$i;
    $adnumber[$i]=$_POST[$index8];
     
     $index9='mobilenumber'.$i;
     $mobilenumber[$i]=$_POST[$index9];
   
}

for($i=1;$i<=$records; $i++)
{
    $q="update emp_registration SET FIRST_NAME='$fname[$i]', LAST_NAME='$lname[$i]' ,CITY_NAME='$ctname[$i]',GENDER='$gender[$i]', DOB='$date[$i]',EMAIL_ID='$email[$i]', ADHAR_NUMBER=$adnumber[$i], MOBILE_NUMBER=$mobilenumber[$i] WHERE EMP_ID=$emp_id[$i]";
  //  echo "Error: " . $q . "" . mysqli_error($con);
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
               background-image: url(./image/flowershow.jpg);
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
                padding-left: 800px;
                color:blue;
                text-decoration: underline;
               font-weight: bold;
           }
             h2
            {
                padding-left: 1300px;
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
           
       </style>
   </head>
   <body>
     <h1> Employee Record Management Admin"<?php echo $_SESSION['username']; ?>" </h1>
       
       <h2 ><a href="logout.php"> LOGOUT </a> </h2>
       
	 <p> 
         <?php 
              
               echo $size." Records updated";
         ?>
       </p>
       <div>
	 Do you want to Update more record? <a href="Emp_DeletionForm.php">
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
           @Thanks for Visit Copyright recived asif123...
       </p1>
	 </body>
	 </html>