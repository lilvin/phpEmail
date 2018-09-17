<?php

//connecting to database
$servername="localhost";
$username="root";
$password="";
$dbname="bloodbank";
session_start();
include ("../menu/functions.php");

$con=new mysqli($servername,$username,$password,$dbname) or die("failed to connect to server");
if (mysqli_connect_error()){
die("connection failed:".mysqli_connect_error());
}
$email=$_SESSION['email'];
  $sql=$con->query("SELECT * FROM users WHERE email='$email'");
  $return=mysqli_fetch_assoc($sql);
	   
//get details
if (isset($_POST['search']))
{
$hospitalID = $_POST['hospitalID'];
 

  
  if(!empty($hospitalID)){
  $query ="SELECT * FROM hospitals WHERE (hospitalID='$hospitalID')";
  
  if ($query_run= mysqli_query($con,$query)){
  	
        if(mysqli_num_rows($query_run)==1){
   
   echo 'yees';
   while($row= $query_run->fetch_assoc()){
 $hospitalID = $row['hospitalID'];
  $location =$row['location'];
 $name =$row['name'];
  $mobileNo =$row['mobileNo'];
  $email=$row['email']
 


	 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Donate Blood- Hospitals</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

<style>
	html{overflow-x:hidden;}
	</style>
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
**************************************finaldonate*********/

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
.style7 {            width: 157px;
}
.style8 {color: #CC0000}
-->
</style>
</head>

<body id="subpage">

<div id="templatemo_header_wrapper">
  <div id="site_title">
	<a href="/finaldonate/index.html?lang=en&amp;style=style-default"
							class="appbrand pull-left"><img src="/finaldonate/images/blood2.jpg" width="200" height="100"></a>
  </div>
      <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="/finaldonate/index.html">Home</a></li>
            <li><a href="/finaldonate/about.html" >About</a></li>
			<li><a href="/finaldonate/services.html">Services</a></li>
            <li><a href="/finaldonate/blog.html" >Blog</a></li>
            <li><a href="/finaldonate/contact.html" >Contact Us</a></li>
			<?php if(logged_in()){ ;?>
                <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Hello <?php echo $return['firstName'];?>
           <span class="caret"></span> 
           </a>
           <ul class="dropdown-menu dropnav" role="menu"> 
             <?php if($return['userType'] == 'admin'){ ;?>
                <li><a href="../menu/adminlogincon.php">Dashboard</a></li>
                <li><a href="../password/adminpassword.php">Change password</a></li>
             <?php }else{ ;?>
                <li><a href="../menu/userlogincon.php">Dashboard</a></li>
                <li><a href="../password/userpassword.php">Change password</a></li>
             <?php } ;?>
              
             <li><a href="../menu/logout.php">Log Out</a></li>
           </ul>
          </li>
             <?php }else{ ;?>
          <li><a href="menu/login.php">Login</a></li>
        <?php } ;?>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    <div class="cleaner"></div>
</div>	<!-- END of templatemo_header_wrapper -->

<div id="templatemo_main">

  <form id="form1" name="form1" method="post" action="search.php">
    <label></label>
    <p>
      <label></label>
    </p>
    <table width="481" border="1" align="center">
      <tr>
        <th colspan="2" scope="col"><span class="style8">Hospital Details </span></th>
        <th scope="col"><div align="left"></div></th>
      </tr>
      <tr>
        <td width="102"><span class="style3">Hospital ID </span></td>
        <td width="196"><input name="hospitalID" type="text" id="hospitalID" value="<?php echo $hospitalID; ?>" disabled/></td>
        <td width="161">
                    <div align="left">
            <input style="width:120px" name="search" type="submit" id="search" value="Search Hospital" disabled />
			                    </div>
          </td>
      </tr>
        <tr>
        <td><span class="style3">Location</span></td>
        <td><input name="location" type="text" id="location" value="<?php echo $location; ?>" disabled/></td>
        <td>
          
</td>
      </tr>
      <tr>
        <td><span class="style3">Hospital Name </span></td>
        <td><input name="name" type="text" id="name" value="<?php echo $name; ?>"disabled/></td>
        
      </tr>
      <tr>
        <td><span class="style3">Mobile Number</span></td>
        <td><input name="mobileNo" type="text" id="mobileNo" value="<?php echo $mobileNo; ?>"disabled /></td>
        <td>
          
          </td>
      </tr>
         <tr>
        <td><span class="style3">Email</span></td>
        <td><input name="email" type="text" id="email" value="<?php echo $email; ?>"disabled /></td>
        <td>
          
          </td>
      </tr>
    
      <tr>
        <td colspan="3"> <div align="center">
          
        </div></td>
      </tr>
    </table>
         </form>
<table width="330" border="1" align="center" style="margin-top:5px">
      <tr>
        <td><div align="center">
          <input name="view" type="submit" id="view" value="View blood count" onClick="location.href='/finaldonate/blood/bloodcount.php'"/>
        </div></td>
      </tr>
    </table>
	
	 
  
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



<?php 
}

         }
	 else{echo 'Wrong hospital Identification'.  mysqli_error($con);} 
   }
   
   else{echo 'Failed to select details from database'.  mysqli_error($con);}
   }
  else{echo 'Please insert hospital ID'.  mysqli_error($con);}
    
	}
	
	
	
	?>

	
	
