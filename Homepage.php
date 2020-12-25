<?php
  session_start();
if(!isset($_SESSION['username']))
header('location:login.php');

?>
<!doctype html>
<html>
<head>
    <title> hellow</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
	<style>
*{
    marging:0; padding:0; box-sizing: border-box;
	
}
icon
{
 padding-left:50px;
}
header
{
	 width:100%;
	 height:100vh;
	 background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url(image/eiffel.jpg);
	background-repeat:no-repeat;
	background-size:cover;
	
}
nav{
     width:100%;
	 height:15vh;background:rgb(0,0,0,0.2);
	 color:white;
	 display:flex;
	 justify-content:space-between;
	 align-items:center;
	 text-transform:uppercase;


}
nav .logo{
       width:25%;text-align:center;
      


}
nav .menu
{
    width:40%;
	display:flex; justify-content:space-around;
  

}
nav .menu a
{
   width:25%;
   text-decoration:none;
   color:white;
   font-weight:bold;

}
nav .menu a:first-child
{
  color:#00b894;
}

main
{
   width:100%;
   height:85vh;
   display:flex;
   justify-content:center;
   align-items:center;
   text-align:center;
   color:white;


}	
section h3
{
  font-size:35px;
  font-weight:200;
  letter-spacing:3px;
  text-shadow:1px 1px 2px black;
  

}
section h1
{

   margin:30px 0 20px 0;
   font-size:55px;
   font-weight:700;
   text-shadow:2px 1px 5px black;
   text-transform:uppercase;


}
section p
{
   font-size:25px;
   word-spacing: 2px;
   margin-bottom:25px;
   text-shadow:1px 1px 1px black;
}

section a
{
   padding:12px 30px;
   border-radius:4px;
   outline:none;
   text-transform:uppercase;
   font-size:13px;
   font-weight:500;
   text-decoration:none;
   letter-spacing:1px;
   transition:all .5s ease;
   
}
section .btnone
{
   background:#fff;
   color:#000;
}
.btnone:hover
{
  background:#00b894;
   color:white;

}
section .btntwo
{
   
   width:10%;
   background:#00b894;
   color:white;
}
.btntwo:hover
{
 background:#fff;
   color:#000;

}

.change_content:after
{

 content: '';
 animation:changetext 10s infinite linear;
 color:#00b894;

}
@keyframes changetext
{
   0%{content:"Insert";}
   20%{content:"Delete";}
   35%{content:"Update";}
   60%{content:"Show";}
   80%{content:"Logout";}
}

section div input 
{
   margin:20px 0 20px 0;
}
.search
{
  width:100%;
  position:relative;
}
.searchterm
{
 border-radius:8px;
 border-color:#00b894;
 padding:11px;
 font-size:14px;
 outline:none;
 transition:1s all;
}
.searchterm:focus
{
  color:#00b894;
  border-color:orange;
}
.searchbtn
{
   border-radius:8px;
 border-color:#00b894;
 padding:11px;
 font-size:13px;
 background-color:orange;
 cursor:pointer;
 color:black;
 text-align:center;
}




	</style>
	

</head>
<body>

     <header>
	 
	 
	      <nav>
		  
		     <div class="logo">
			     <h1 class="animated infinite heartBeat" style="color:orange;">
                     
                     
				   emp_management
				 </h1>
			 </div>
		      <div class="menu">
			      <a href="Emp_RegistrationForm.php">Insert</a>
				  <a href="Admin_login1.php">Delete</a> 
		          <a href="Admin_login2.php">Update</a>    
		          <a href="Emp_viewpage.php">Show</a>
                  <a href="logout.php"> LOGOUT </a>
              </div>  
            </nav>			  
		  <main>
		            <section>
                        <h3> <i> Welcome To <b style="color:yellow;">"<?php echo $_SESSION['username']; ?>"</b> Employee Management System Database </i> </h3>
					       <h1> DO COME & VISIT            <span class="change_content">    </span> </h1>
						   <p> People Also Visited This Page </p>
						   <a href="AboutHomepg.php" class="btnone"> About This Home_page </a>
                        
					       <a href="Emp_login.php" class="btntwo"> New_Registration Here </a>
					        <div class="search">
						    <from action="#" method="get">
						     <input type="text" class="searchterm" name="" placeholder="what are you search?">
						     
							 <button type="submit" class="searchbtn" >
							 <i class="fa fa-search"> </i>
							 </button>
							
							 </from>
						     </div>
                    </section>					
	                 	  
		  </main>
	 
	 </header>
   

</body>
</html>