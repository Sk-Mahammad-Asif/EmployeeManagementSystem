<html>
    <head>
        <title> administration login form</title>
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Josefin Sans',sans-serif;
            }
            body
             {
                background-image: url(./image/adminimg.jpg);
                background-size: 100% 900px;
                background-repeat: no-repeat;
              }
            .main_div
            {
                width: 100%;
                height: 100vh;
                position:relative;
            }
            .box
            {
                width: 400px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform:translate(-50%,-50%);
                padding: 50px;
                background: rgba(0,0,0,0.8);
                border-radius: 10px;
            }
            
            .box  h1
            {
                margin-bottom: 30px;
                color: #fff;
                text-align: center;
                text-transform: capitalize;
            }
            .box .inputBox
            {
                position:relative;
            }
            
            .box .inputBox input
            {
                width: 100%;
                padding: 10px;
                font-size: 16px;
                color: #fff;
                letter-spacing: 1px;
                margin-bottom: 30px;
                border: none;
                border-bottom: 1px solid #fff;
                background: transparent;
                outline: none;
            }
            .box .inputBox label
            {
                position: absolute;
                top: 0;
                left: 0;
                letter-spacing: 1px;
                padding: 10px 0;
                font-size: 16px;
                color: #fff;
                transition: 0.5s;
            }
            .box .inputBox input:focus ~ label,
            .box .inputBox input:valid ~ label
            {
                top:-20px;
                left: 0;
                color: #03a9f4;
                font-size:12px;
            }
            
            .box input[type="submit"]
            {
                background: transparent;
                border: none;
                outline: none;
                color: #fff;
                background: #03a9f4;
                padding: 8px 16px;
                border-radius: 5px;
                font-size: 14px;
            }
            h
            {
             
                padding-left: 480px;
                padding-top: 30px;
                color: white;
                font-size: 50px;
                position: fixed;
                font-weight: bold;
                
            }
           #home
            {
                padding-top:90px;
                padding-left:150px; 
                font-size: 20px;
            }
            #home a
            {
                font-weight: bold;
            }
            
        </style>
         <script type="text/javascript">
            
            function empValidate()
            {
                var firstname=document.getElementById("fname").value;
                  var password=document.getElementById("passwordvalid").value;
                
                  var fvalidate=/^[a-zA-Z. ]{2,15}$/ ;
                  var regx1=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
                
                if(fvalidate.test(firstname))
                    {
                        document.getElementById("ferror").innerHTML=" ";
                        
                    }
                else{
                        document.getElementById("ferror").innerHTML="** Invalid username";
                  
                    return false;
                }
                  var a=regx1.test(password);
               if(a==true)
                      
                   {
                          
                       document.getElementById("perror").innerHTML=" ";
                    
                       
                   }
                 else
                     {
                          document.getElementById("perror").innerHTML="** Invalid Password";
                       
                         return false;
                         
                     }
            }
        </script>
                
    </head>
    <body>
        <h>Administration Login Page </h>
      
	
        <div class="main_div">
            <div class="box">
                <h1>login form </h1>
                <form method="post" action="Admin_login_validation2.php" >
                    <div class="inputBox">
                        <input type="text" id="fname" name="username" autocomplete="off" onmouseout="return empValidate()" required/>
                          <span id="ferror" style="color: red;font-weight: bold;"> </span>   
                        <label>*Username </label>
                    </div>
                    
                    <div class="inputBox">
                        <input type="password" id="passwordvalid" name="password" autocomplete="off" onmouseout="return empValidate()" required/>
                          <span id="perror" style="color: red;font-weight: bold;"> </span>   
                        <label>*Password </label>
                    </div>
                    
                    <input type="submit" value="Login" name=""/>
                </form>
                 
   
            </div>   
        <div id="home">
          Back To Home Page?<a href="Homepage.php">Click Here </a>
            </div>
        </div>
        
    </body>
</html>