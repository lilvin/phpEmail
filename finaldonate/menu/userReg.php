<?php
error_reporting(0);
include 'init.php';
include ("functions.php");
$message='';

if (isset($_POST['register'])) {
   $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $idNumber = $_POST['idNumber'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2=$_POST['password2'];
    $user="user";
      if (empty($firstName) && empty($lastName) && empty($idNumber) && empty($email) && empty($mobile) && empty($password) ) {
        $message = "*All fields are required";
      }
      elseif (strlen($firstName)<3) {
        $message = "First name must be more than 2 characters";
      }elseif (strlen($lastName)<3) {
        $message = "Last name must be more than 2 characters";
      }elseif (strlen($idNumber)<6) {
        $message = "Id number must be more than 5 numbers";
      }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $message = "Please provide a valid email";
      }elseif(email_exists($con ,$email)){
        $message="That email exists";
      }elseif (strlen($mobile)<12) {
        $message = "invalid moble number format";
      }elseif(mobile_exists($con ,$mobile)){
        $message="That phone number already exists";
      }elseif(idNumber_exists($con ,$idNumber)){
       $message="That id number already exists";
      }elseif (strlen($password)<6) {
        $message = "password must be more than 5 characters";
      }elseif($password!=$password2){
        $message="password values do not match";
      }else{
         $sql = "INSERT INTO users(firstName,lastName,idNumber,mobile,email,userType,password) VALUES ('$firstName','$lastName','$idNumber','$mobile','$email','$user','$password')";
          $query = mysqli_query($con,$sql);
          if(!$query)
           {
           $message = "registration failed.";
           }
           else{
           $message = "registration successful.login to proceed";
           header("location:login.php");
           exit();
           }
      }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Donate Blood- Login Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

<style>
	html{overflow-x:hidden;}
	</style>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href="/finaldonate/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<!-- templatemo 358 carousel -->
<!-- 
Carousel Template 
http://www.templatemo.com/preview/templatemo_358_carousel 
-->
<script type="text/javascript" src="/finaldonate/js/jquery-1-4-2.min.js"></script> 
<!--script type="text/javascript" src="/jqueryui/js/jquery-ui-1.7.2.custom.min.js"></script--> 
<script type="text/javascript" src="/finaldonate/js/jquery-ui.min.js"></script> 
<script type="text/javascript" src="/finaldonate/js/showhide.js"></script> 
<link rel="stylesheet" href="/finaldonate/css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="/finaldonate/js/jquery.mousewheel.js"></script> 
<script type="text/JavaScript" src="/finaldonate/js/slimbox2.js"></script> 

<link rel="stylesheet" type="text/css" href="/finaldonate/css/ddsmoothmenu.css" />

<script type="text/javascript" src="/finaldonate/js/jquery.min.js"></script>
<script type="text/javascript" src="/finaldonate/js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script> 

<style type="text/css">
<!--
.style3 {color: #000000}
.style4 {color: #CC0000}
-->
#message{
  display: none;
}
.register{
  margin-left: 300px;
}
</style>
</head>

<body id="subpage">

<div id="templatemo_header_wrapper">
  <div id="site_title">
  <a href="index.html?lang=en&amp;style=style-default"
              class="appbrand pull-left"><img src="/finaldonate/images/blood2.jpg" width="200" height="100"></a>
  </div>
     <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.html" class="selected">Home</a></li>
            <li><a href="../about.html">About</a></li>
      <li><a href="../services.html">Services</a></li>
            <li><a href="../blog.html">Blog</a></li>
            <li><a href="../contact.html">Contact Us</a></li>
      <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Hello <?php echo $return['firstName'];?>
           <span class="caret"></span> 
           </a>
           <ul class="dropdown-menu dropnav" role="menu">
             <li><a href="userpassword.php">Change password</a></li>
             <li><a href="logout.php">Log Out</a></li>
           </ul>
         </li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    <div class="cleaner"></div>
</div>  <!-- END of templatemo_header_wrapper -->

<div id="templatemo_main">
<div class="alert alert-success col-md-6" id="message" style="<?php if ($message != "") {?> display: block; margin-left: 350px; <?php } ;?>">
   <?php echo $message ;?>
</div>
 <div class="container register">
     <h1><label>Registration Page</label></h1>
     <div class="row">
       <div class="col-md-6 col-lg-6">
       <form method="POST" action="userReg.php">
         <div class="form-group">
          <label for="firstName">First Name:</label>
          <input type="text" name="firstName" class="form-control" id="firstName">
         </div>
         <div class="form-group">
          <label for="lastName">Last Name:</label>
          <input type="text" name="lastName" class="form-control">
         </div>
          <div class="form-group">
          <label for="idNumber">idNumber:</label>
          <input type="text" name="idNumber" class="form-control">
         </div>
         <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" name="email" class="form-control" placeholder="someone@gmail.com">
         </div>
         <div class="form-group">
          <label for="mobile">mobile:</label>
          <input type="text" name="mobile" class="form-control"  placeholder="+254700000000">
         </div>
         <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="password" class="form-control">
         </div>
         <div class="form-group">
          <label for="password2">Confirm password:</label>
          <input type="password" name="password2" class="form-control">
         </div>
        
         <input type="submit" name="register" value="Register" class="btn btn-success">
         <a href="login.php" class="btn btn-info">Login</a>
        
       </div>
      
     </div>
    
   </div>
 
  
</div> <!-- END of templatemo_main -->

<div id="templatemo_bottom_wrapper">
    <div id="templatemo_bottom">
    	<div class="col one_third">
        	<h4><span></span>Our Services</h4>
            <div class="bottom_box">
                <ul class="footer_list">
                    <li><a href="/finaldonate/services.html">Appointments booking</a></li>
                    <li><a href="/finaldonate/services.html">Blood donation services</a></li>
                    <li><a href="/finaldonate/services.html">Blood transfusion services</a></li>
                    <li><a href="/finaldonate/services.html">Health guidance</a></li>
                    
                </ul>  
			</div>
        </div>
        <div class="col one_third">
        	<h4><span></span>Contact us</h4>
            <div class="bottom_box">
			 <p><em> Contact us using the social links. Find contact detailsfor specific hospitals in our <a href="/finaldonate/contact.html">Contact Us</a> page. </em></p><br />
                <div class="footer_social_button">
                    <a href="#"><img src="/finaldonate/images/facebook.png" title="facebook" alt="facebook" /></a>
                    <a href="#"><img src="/finaldonate/images/flickr.png" title="flickr" alt="flickr" /></a>
                    <a href="#"><img src="/finaldonate/images/twitter.png" title="twitter" alt="twitter" /></a>
                    
                </div>
			</div>
        </div>
        <div class="col one_third no_margin_right">
        	<h4><span></span>About Us</h4>
            <div class="bottom_box">
                <p><em> Donate Blood is a combined effort of various blood banks to provide a means that 
                helps in conducting blood donation drives, facilitate registration of blood 
                donors and recipients among other blood donation activities.</em></p><br />              
               
            </div>
        </div>
        
    	<div class="cleaner"></div>
    </div> <!-- END of tempatemo_bottom -->
</div> <!-- END of tempatemo_bottom_wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
    	Copyright © Donate Blood
    </div> <!-- END of templatemo_footer_wrapper -->
</div> <!-- END of templatemo_footer -->

</body>
</html>

