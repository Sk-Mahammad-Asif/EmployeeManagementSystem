<?php
  session_start();

 $fname=$_POST['firstname'];
 $lname=$_POST['lastname'];
 $cityname=$_POST['ctname'];
 $adharno=$_POST['adnumber'];
 $dob=$_POST['date'];
 $email=$_POST['email'];
 $gender=$_POST['gender'];
 $selno=$_POST['phno'];
 $mbno=$_POST['mbnumber'];
 
  $addmbno=$selno.$mbno;




  $con=mysqli_connect('localhost','root');
  $sql=mysqli_select_db($con,'employee');
  if($sql)
  {
	  echo"connection successfully create <br/><br/>";
  }
   else{
	   echo"not connected<br/></br>";
	   
   }
  $s="SELECT * FROM emp_registration WHERE FIRST_NAME='$fname' && LAST_NAME='$lname' && CITY_NAME='$cityname ' && GENDER='$gender' && EMAIL_ID='$email' && DOB='$dob' && ADHAR_NUMBER=$adharno && MOBILE_NUMBER=$addmbno ";
  $t=mysqli_query($con,$s);
  $num=mysqli_num_rows($t);

  if($num>0)
  {
      echo"Duplicate value This value already exists insert new data.<br/>";
  }
  else
  {
  $q="INSERT INTO emp_registration (FIRST_NAME,LAST_NAME,CITY_NAME,GENDER,EMAIL_ID,DOB,ADHAR_NUMBER,MOBILE_NUMBER) values
  ('$fname','$lname','$cityname','$gender','$email','$dob',$adharno,$addmbno)";
  $status=mysqli_query($con,$q);
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
                padding-left: 1200px;
                color:blue;
                text-decoration: underline;
               font-weight: bold;
           }
           
           
           
       </style>
   </head>
   <body>
     <h1> Employee Record Management </h1>
	 <p> 
         <?php 
              
              if($status==1)
              {
                  
                 echo"Record inserted Sucessfully.";
              }
              else
              {
                  echo"Duplicate value This value already exists insert new data.<br/>";   
                 echo"**Insertion Failed Please Try Again! ";
              }
         ?>
       </p>
       <div>
	 Do you want to insert more record? <a href="Emp_RegistrationForm.php">
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
           @Thanks for Visit...
       </p1>
	 </body>
	 </html>