<?php
session_start();
if(!isset($_SESSION['username']))
{

header('location:Admin_login1.php');
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'employee');
$qv="SELECT * FROM EMP_REGISTRATION";

$result=mysqli_query($con,$qv);
$num=mysqli_num_rows($result);

mysqli_close($con);

?>
<!DOCTYPE html>
<html>
    <head>
        <title> update employee reccords</title>
     
   
        <style >
            
            *{
               margin:0;
              padding: 0;
    
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
                width: 10px;
                margin:auto;
                border: 1.5px solid red;
                text-align: center;
                font-size: 22px;
               font-weight: bold;
               margin-left: 40px;
                
                
                margin-top: 80px
            }
            th,td
            {
                
                padding:0px;
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
                border-radius: 15px;
            }
            a:hover
            {
                color: red;
            }
           #sub
{
    width:200px;
    padding: 7px;
    font-size: 16px;
    font-family: sans-serif;
    font-style: italic;
    font-weight: 600;
    border:none;
    border-radius: 3px;
    outline: 0;
}
#sub:hover
{
    background-color: aqua;
}
         
            h2
            {
                padding-left: 1400px;
            }
            
            
            
        </style>
        <script type="text/javascript">
      
             function empValidate()
            {
                var firstname=document.getElementById("fname").value;
                 var lastname=document.getElementById("lname").value;
                 var cityname=document.getElementById("cname").value;
                 var adharnum=document.getElementById("adnumber").value;
                 var mobilenum=document.getElementById("num").value;
                 var emailnum=document.getElementById("email").value;
              
                
                var fvalidate=/^[a-zA-Z. ]{2,15}$/ ;
                var lvalidate=/^[a-zA-Z ]{2,20}$/ ;
                var cvalidate=/^[a-zA-Z ]{2,20}$/ ;
                var mvalidate=/[6789]{1}[0-9]{9}$/;
                var advalidate=/^[0-9]{12}$/;
                var emvalidate=/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})$/;
                
                
                if(fvalidate.test(firstname))
                    {
                        document.getElementById("ferror").innerHTML=" ";
                        
                    }
                else{
                        document.getElementById("ferror").innerHTML="** Invalid First Name";
                  
                    return false;
                }
                
                
                 if(lvalidate.test(lastname))
                    {
                        document.getElementById("lerror").innerHTML=" ";
                        
                    }
                else{
                        document.getElementById("lerror").innerHTML="** Invalid last Name";
                        return false;
                }
                
                
                 if(cvalidate.test(cityname))
                    {
                        document.getElementById("cerror").innerHTML=" ";
                        
                    }
                else{
                        document.getElementById("cerror").innerHTML="** Invalid city Name";
                        return false;
                }
                
                 if(mvalidate.test(mobilenum))
                    {
                        document.getElementById("merror").innerHTML=" ";
                        
                    }
                else{
                        document.getElementById("merror").innerHTML="** Invalid mobile number";
                        return false;
                }
                
                 if(advalidate.test(adharnum))
                    {
                        document.getElementById("aerror").innerHTML=" ";
                        
                    }
                else{
                        document.getElementById("aerror").innerHTML="** Invalid Aadhar number";
                        return false;
                }
                
                if(emvalidate.test(emailnum))
                    {
                        document.getElementById("emerror").innerHTML=" ";
                        
                    }
                else{
                        document.getElementById("emerror").innerHTML="** Invalid Email Id";
                        return false;
                }
            }
            
            
                
        
        
        
        </script>
        
    </head>
    <body>
        <h1>
            EMPLOYEE RECORDS MANAGEMENT ADMIN"<?php echo $_SESSION['username']; ?>"  
        </h1> 
        <br>
        <br>
        <h2 ><a href="logout.php"> LOGOUT </a> </h2>
       <form method="post" action="Emp_Updation.php"  >
           
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
                <th>MOBILE_N0</th>
                 
            </tr>
            
             <?php
                  for($i=1; $i<=$num; $i++)
                  {
                      $row=mysqli_fetch_array($result);
                  
            
            ?> 
              
            <tr id="trheader">
             
                <td><?php echo $row['EMP_ID']; ?>
                    <input type="hidden" name="emp_id<?php echo $i; ?>" value="<?php echo $row['EMP_ID']; ?>" />
                </td>
                <td> <input type="text" id="fname" name="firstname<?php echo $i; ?>" value="<?php echo $row['FIRST_NAME']; ?>" onmouseout="return empValidate()" required /> 
                      <span id="ferror" style="color: red;font-weight: bold;"></span>
                </td>
                <td> <input type="text" id="lname" name="lastname<?php echo $i; ?>" value="<?php echo $row['LAST_NAME']; ?>" onmouseout="return empValidate()" required />
                     <span id="lerror" style="color: red;font-weight: bold;"></span>
                </td>
                <td> <input type="text" id="cname" name="ctname<?php echo $i; ?>" value="<?php echo $row['CITY_NAME']; ?> "  onmouseout="return empValidate()" required/> 
                     <span id="cerror" style="color: red;font-weight: bold;"></span>
                </td>
                <td>  <select id="sel" name="gender<?php echo $i; ?>"> 
                              <option value="<?php echo $row['GENDER'] ?>" > <?php echo $row['GENDER']; ?> </option>  
                              <option value="male" >Male  </option>  
                              <option value="female" >Female </option>  
                              <option value="others" >Others </option>  
                    </select> 
                </td>
                <td>  <input type="date" name="date<?php echo $i; ?>" value="<?php echo $row['DOB']; ?>" required/> 
                    
                </td>
                <td>  <input type="text" id="email" name="email<?php echo $i; ?>" value="<?php echo $row['EMAIL_ID']; ?>" onmouseout="return empValidate()"  required/> 
                     <span id="emerror" style="color: red;font-weight: bold;"></span>
                </td>
                <td> <input  type="number" id="adnumber" name="adnumber<?php echo $i; ?>" value="<?php echo $row['ADHAR_NUMBER']; ?>"  onmouseout="return empValidate()" required/>
                     <span id="aerror" style="color: red;font-weight: bold;"></span>
                </td>
                <td> <input  type="number" id="num" name="mobilenumber<?php echo $i; ?>" value="<?php echo $row['MOBILE_NUMBER']; ?>"  onmouseout="return empValidate()" required/> 
                     <span id="merror" style="color: red;font-weight: bold;"></span>
                </td>
                
                 </tr>
                 <?php
              
                    }
                ?> 
                  <tr>
                <td colspan="2"> <input type="submit" value="update" id="sub" /></td>
            </tr>  
         
        </table>
                 
                  
           
            </form>  
        
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