
<html>
     <head>
        <title>User Login and Registration </title>
        
      <link rel="stylesheet" type="text/css" href="style_emp.css">
          <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

       <!-- jQuery library -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

       <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       <script type="text/javascript" src="emp_validation.js">       
           
         </script>
         
    </head>
    
    <body>
         <div class="container ">
             <div class="login-box">
             <div class="row">
                 <div class="col-md-6 login-left">
                      <h2 class="text-white bg-dark"> Login Here </h2>
                      <form action="validation.php" method="post">
                          <div class="form-group">
                           <label class="lbclass"> Email Id:</label>
                           <input type="text" name="user" class="form-control" placeholder="EmailId" autocomplete="off" required>
                              
                          </div>
                          
                           <div class="form-group">
                           <label class="lbclass"> password:</label>
                           <input type="password" name="password" class="form-control" placeholder="password" required>
                              
                          </div>
                           <div><p style="text-decoration: underline ;color:cyan; "><i><b>Do you have not any account please registration first!  </b></i></p></div>
                           <button type="submit" class="btn btn-primary"> Login </button>
                     
                     </form>
                     
                     
                 </div>
                 
                 <div class="col-md-6 login-right">
                      <h2 class="text-white bg-dark"> Sign-Up Here </h2>
                      <form action="registration.php " onsubmit="return validate( )" method="post">
                          <div class="form-group">
                           <label class="lbclass" > Email Id:</label>
                           <input id="emailvalid" type="text" name="user" class="form-control" placeholder="set a valid email id" autocomplete="off" required/>
                            <span id="emailerror" class="text-danger font-weight-bold" > </span>
                          </div>
                          
                           <div class="form-group">
                           <label class="lbclass"> password:</label>
                           <input id="passwordvalid" type="password" name="password" class="form-control" placeholder="len-atleast-6-digit-1number&1speacial-ch-required" required/>
                             <span id="passworderror" class="text-danger font-weight-bold" > </span>  
                          </div>
                          
                          <div class="form-group">
                           <label class="lbclass">Confirm password:</label>
                           <input id="cpasswordvalid" type="password" name="cpassword" class="form-control" placeholder="password enter again!" required/>
                              <span id="cpassworderror" class="text-danger font-weight-bold" > </span>
                          </div>
                         
                           <button type="submit" class="btn btn-primary"  > Register </button>
                                
                     </form>
                      
                     
                 </div>
                 
             </div>
                 
             </div>     
        </div>
        
        
       
         
     
        
    </body>            

</html>


