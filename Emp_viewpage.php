<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'employee');
$qv="SELECT * FROM emp_registration";

$result=mysqli_query($con,$qv);
$num=mysqli_num_rows($result);

mysqli_close($con);

?>
<!DOCTYPE html>
<html>
    <head>
        <title> view book reccords</title>
      
   
        <style >
            
            *{
               margin:0;
              padding: 0;
    
            }
             body
             {
               background-image: url(image/flowershow.jpg);
               background-size: 100% 900px;
               background-repeat: no-repeat;
              }
            h1
            {
                text-align: center;
                margin-top: 10px;
                text-decoration:underline;
                font-style: italic;
                font-weight:100px;
                font-size: 40px;
                background-color: black;
                color: yellow;
            }
            h1:hover
            {
                color: red;
                
            }
            table,th,td
            {
                width: 80%;
                margin:auto;
                border: 1.5px solid red;
                text-align: center;
                font-size: 20px;
               font-weight: bold;
               
                margin-top: 80px
            }
            th,td
            {
                
                padding:20px;
            }
            
            #tbheader
            {
                background-color: black;
                color: yellow;
            }
            #tbheader:hover
            {
                color: red;
                
            }
            #trheader:hover
            {
                background-color: white;
            }
            
            #tnk
           {
                padding-left: 1300px;
                color:black;
                text-decoration: underline;
               font-weight: bold;
               padding-top: 130px;
               
           }
            #tnk:hover
            {
                color:yellow;
            }
            #home
            {
              padding-top: 50px;
              padding-left: 50px;
              font-size: 30px;
            font-weight: bold;
                font-style: italic;
                
            }
            a
            {
                text-decoration: none;
                background-color: black;
                color: yellow;
                border-radius: 10px;
            }
            a:hover
            {
                color: red;
            }
           
            
        </style>
        
    </head>
    <body>
        <h1>
            EMPLOYEE RECORDS MANAGEMENT
        </h1>
        <table id="view_table">
            <tr id="tbheader">
                <th>EMP_ID</th>
                <th>FIRST_NAME</th>
                <th>LAST_NAME</th>
                <th>CITY_NAME</th>
                <th>GENDER</th>
                <th>DOB</th>
                <th>EMAIL_ID</th>
                <th>ADHAR_NO</th>
                <th>MOBILE_NO</th>
            </tr>
            <?php
                  for($i=1; $i<=$num; $i++)
                  {
                      $row=mysqli_fetch_array($result);
                  
            
            ?>
            <tr id="trheader">
                <td><?php echo $row['EMP_ID'] ?> </td>
                <td><?php echo $row['FIRST_NAME'] ?> </td>
                <td><?php echo $row['LAST_NAME'] ?> </td>
                <td><?php echo $row['CITY_NAME'] ?>  </td>
                <td><?php echo $row['GENDER'] ?>  </td>
                <td><?php echo $row['DOB'] ?>  </td>
                <td><?php echo $row['EMAIL_ID'] ?>  </td>
                <td><?php echo $row['ADHAR_NUMBER'] ?>  </td>
                <td><?php echo $row['MOBILE_NUMBER'] ?>  </td>
              <?php
              
                    }
                ?>
            </tr>
            
        </table>
        <div id="home">
               Back To HomePage?<a href="Homepage.php">
	 Click here </a><br/>
            
        </div>
       <div id="tnk">
           <p1>
           @Thanks for Visit...
       </p1>
           
        </div>
    </body>
    
</html>
