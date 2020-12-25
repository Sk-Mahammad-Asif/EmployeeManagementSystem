<! DOCTYPE html>
<html>
    <head>
         <title>Emp-Registration  </title>
        <link rel="stylesheet" type="text/css" href="./EmpRegstyle.css">
        <style>
            
            *{
    margin:0;
    padding: 0;
    
}
body
{
    background-image:url(image/insert1.jpg);
    background-size: 100% 900px;
    background-repeat: no-repeat;
}
h1
{
 font-weight: bold;
padding:10px 15px 15px 570px;
    color: black;
    
}
.register
{
    background: #2d85b0;
    width: 500px;
    margin: 0px 0px 0px 430px;
    color: white;
    font-size: 18px;
    padding: 20px;
    border-radius: 10px;
    
    
}
#register
{
    margin-left:50px;
 
}
label
{
    color: white;
    font-family: sans-serif;
    font-size: 18px;
    font-style: italic;
    
}
.name
{
    width:300px;
    border:none;
    border-radius: 3px;
    outline: 0;
    padding: 7px;
    
}
#ph
{
    width: 65px;
    padding:7px;
    border:none;
    border-radius: 3px;
    outline:0;
}
#num
{
    width:230px;
    padding: 7px;
    border-radius: 3px;
    outline: 0;
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
.name:hover
{
  background-color: aqua;
}
#num:hover
{
    background-color: yellow;
}
label:hover
{
    color:black;
}
#ph:hover
{
    background-color: yellow;
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
        <div>
            <h1>Emp-Registration </h1></div>
        <div class="register">
            <form method="post" id="register" action="Emp_registration.php" onsubmit="return empValidate()">
                <h2> Fil-Up Every Instruction Carefully </h2><br><br>
                <div>
                <label>*First Name:</label><br>
                <input type="text" name="firstname" id="fname" class="name" placeholder="Enter U R First Name" required><br>
                <span id="ferror" style="color: red;font-weight: bold;"> </span>
                </div>
                <div>
                    <br>
                <label>*Last Name:</label><br>
                <input type="text" name="lastname" id="lname" class="name" placeholder="Enter U R Last Name" required><br>
                    <span id="lerror" style="color: red;font-weight: bold;"> </span>
                </div>
                <div> 
                    <br>
                <label>*City Name:</label><br>
                <input type="text" name="ctname" id="cname" class="name" placeholder="Enter U R city Name" required><br>
                    <span id="cerror" style="color: red;font-weight: bold;"></span>
                </div>
                <div>
                    <br>
                <label>*Aadhar Number:</label><br>
                <input type="number" name="adnumber" id="adnumber" class="name" placeholder="Enter U R Aadhar Number" required><br>
                    <span id="aerror" style="color: red;font-weight: bold;"></span>
                </div>
                <div>
                    <br>
                <label>*Date of Birth:(Select a valid DOB)</label><br>
                <input type="date" name="date" class="name" placeholder="date of birth" required><br>
                    <span id="derror" style="color: red;font-weight: bold;"></span>
                </div>
                <div>                  
                   <br> 
                <label>*Mobile Number:</label><br>
                <select id="ph" name="phno">
                    <option>+91</option>
                    <option>+92</option>
                    <option>+93</option>
                    <option>+94</option>
                    <option>+95</option>    
                </select>
                <input type="number" name="mbnumber" id="num" placeholder="Enter a valid Number" required><br>
                    <span id="merror" style="color: red;font-weight: bold;"></span>
                </div>
                <div>
                       <br>             
                 <label>*Email Id::</label><br>
                <input type="text" name="email" id="email" class="name" placeholder="Enter a valid EmailId" required><br>
                    <span id="emerror" style="color: red;font-weight: bold;"></span>
               </div> 
             
                <div>
                    <br>     
                    
                 <label>*Gender:</label><br>
               Male <input type="radio" name="gender" id="male" value="male" required/>
                Female <input type="radio" name="gender" id="female" value="female" required/>
                others <input type="radio" name="gender" id="others" value="others" required/>
                </div>
                <div>
              <br><br>  <input type="submit" value="Submit" id="sub">
                        <input type="reset" value="Reset" id="sub">
                </div>
                <br/>
                 <div id="home">
          Back To Home Page?<a href="Homepage.php">Click Here </a>
                </div>
                
            </form>
            
                        
        </div>
        
    </body>
</html>