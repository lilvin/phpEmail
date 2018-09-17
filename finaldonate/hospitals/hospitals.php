<?php
session_start();
include_once '../menu/init.php';
include ("../menu/functions.php");

  $email=$_SESSION['email'];
  $sql=$con->query("SELECT * FROM users WHERE email='$email'");
  $return=mysqli_fetch_assoc($sql);
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
<link href="/donateblood/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<!-- templatemo 358 carousel -->
<!-- 
Carousel Template 
http://www.templatemo.com/preview/templatemo_358_carousel 
-->
<script type="text/javascript" src="/donateblood/js/jquery-1-4-2.min.js"></script> 
<!--script type="text/javascript" src="/jqueryui/js/jquery-ui-1.7.2.custom.min.js"></script--> 
<script type="text/javascript" src="/donateblood/js/jquery-ui.min.js"></script> 
<script type="text/javascript" src="/donateblood/js/showhide.js"></script> 
<link rel="stylesheet" href="/donateblood/css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="/donateblood/js/jquery.mousewheel.js"></script> 
<script type="text/JavaScript" src="/donateblood/js/slimbox2.js"></script> 

<link rel="stylesheet" type="text/css" href="/donateblood/css/ddsmoothmenu.css" />

<script type="text/javascript" src="/donateblood/js/jquery.min.js"></script>
<script type="text/javascript" src="/donateblood/js/ddsmoothmenu.js">

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
.style7 {            width: 157px;
}
.style8 {color: #CC0000}
-->
</style>
</head>

<body id="subpage">

<div id="templatemo_header_wrapper">
  <div id="site_title">
	<a href="/donateblood/index.php?lang=en&amp;style=style-default"
							class="appbrand pull-left"><img src="/donateblood/images/blood2.jpg" width="200" height="100"></a>
  </div>
      <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="/donateblood/index.php">Home</a></li>
            <li><a href="/donateblood/about.php" >About</a></li>
			<li><a href="/donateblood/services.php">Services</a></li>
            <li><a href="/donateblood/blog.php" >Blog</a></li>
            <li><a href="/donateblood/contact.php" >Contact Us</a></li>
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
<table width="750" height="373" border="1" align="center" height:400px; >
  <tr>
    <th colspan="2" rowspan="7" scope="col">
<!--newtable inside big table -->

  <form id="form1" name="form1" method="post" action="hospitalscon.php">
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
        <td width="196"><input name="hospitalID" type="text" id="hospitalID" /></td>
        <td width="161">
          
          <div align="left">
            <input style="width:120px" name="add" type="submit" id="submit" value="Add Hospital" />
          </div></td>
      </tr>
      <tr>
        <td><span class="style3">Hospital Name </span></td>
        <td><input name="name" type="text" id="name" /></td>
        <td>
          
          <div align="left">
            <input style="width:120px" name="search" type="submit" id="search" value="Search Hospital" />
          </div></td>
      </tr>
      <tr>
        <td><span class="style3">Mobile Number</span></td>
        <td><input name="telephone" type="text" id="telephone" /></td>
        <td>
          
          <div align="left">
            <input style="width:120px" name="update" type="submit" id="update" value="Update Record" />
          </div></td>
      </tr>
      <tr>
        <td><span class="style3">Location</span></td>
        <td><input name="location" type="text" id="location" /></td>
        <td>
          
          <div align="left">
            <input style="width:120px" name="delete" type="submit" id="delete" value="Delete Record" />
          </div></td>
      </tr>
      <tr>
        <td><span class="style3">Email</span></td>
        <td><input name="email" type="text" id="email" /></td>
        <td>
        </tr>
      <tr>
        <td colspan="3"> <div align="center">
          <p class="style3">&nbsp;</p>
          <p class="style3">&nbsp;</p>
        </div></td>finaldonate
      </tr>
    </table>
    <p align="center" class="style3">&nbsp;</p>
    
  </form>
  <!--second column-->
	 </th>
    <th colspan="2" bgcolor="#FFFFFF" scope="col"><span class="style9">Menu</span></th>
  </tr>
  <tr>
    <td width="179" bgcolor="#CC3366"><input  style="width:150px" name="update2" type="submit" id="update2" value="Update personal Details" onclick="location.href='/finaldonate/menu/adminupdate.php'"/>    </td>
    <td width="169" bgcolor="#CC3366"><input style="width:150px"  name="hospitals" type="submit" id="hospitals" value="Hospitals" onclick="location.href='/finaldonate/hospitals/hospitals.php'"/></td>
  </tr>
  <tr>
    <td bgcolor="#CC3366"><input  style="width:150px" name="password" type="submit" id="password" value="Change Password" onclick="location.href='/finaldonate/password/adminpassword.php'"/></td>
    <td bgcolor="#CC3366"><input style="width:150px" name="types" type="submit" id="types" value="Blood Counts" onclick="location.href='/finald/finaldonate/bloodtypes.php'"/></td>
  </tr>
  <tr>
    <td bgcolor="#CC3366"><input style="width:150px" name="processed" type="submit" id="processed" value="Processed Blood" onclick="location.href='/finaldonate/blood/processedblood.php'"/></td>
    <td bgcolor="#CC3366"><input style="width:150px" name="donated" type="submit" id="donated" value="Donated Blood" onclick="location.href='/finaldonate/blood/donatedblood.php'"/></td>
  </tr>
  <tr>
    <td bgcolor="#CC3366"><input style="width:150px" name="recipientsapp" type="submit" id="recipientsapp" value="Recipients Appointments" onclick="location.href='/finaldonate/appointments/adminrecipients.php'"/></td>
    <td bgcolor="#CC3366"><input style="width:150px" name="transfused" type="submit" id="transfused" value="Transfused Blood" onclick="location.href='/finaldonate/blood/transfusedblood.php'"/></td>
  </tr>
  <tr>
    <td bgcolor="#CC3366"><input style="width:150px" name="donorsapp" type="submit" id="donorsapp" value="Donors Appointments" onclick="location.href='/finald/appointments/admindonors.php'"/></td>
    <td bgcolor="#CC3366"><input style="width:150px" name="discard" type="submit" id="discard" value="Discard Blood" onclick="location.href='/finald/blood/discardblood.php'"/></td>
  </tr>
  <tr>
    <td bgcolor="#CC3366">&nbsp;</td>
    <td bgcolor="#CC3366">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"><div align="center"></div></td>
  </tr>
</table>


  
</div> <!-- END of templatemo_main -->

<div id="templatemo_bottom_wrapper">
    <div id="templatemo_bottom">
    	<div class="col one_third">
        	<h4><span></span>Our Services</h4>
            <div class="bottom_box">
                <ul class="footer_list">
                    <li><a href="/donateblood/services.html">Appointments booking</a></li>
                    <li><a href="/donateblood/services.html">Blood donation services</a></li>
                    <li><a href="/donateblood/services.html">Blood transfusion services</a></li>
                    <li><a href="/donateblood/services.html">Health guidance</a></li>
                    
                </ul>  
			</div>
        </div>
        <div class="col one_third">
        	<h4><span></span>Contact us</h4>
            <div class="bottom_box">
			 <p><em> Contact us using the social links. Find contact detailsfor specific hospitals in our <a href="/donateblood/contact.html">Contact Us</a> page. </em></p><br />
                <div class="footer_social_button">
                    <a href="#"><img src="/donateblood/images/facebook.png" title="facebook" alt="facebook" /></a>
                    <a href="#"><img src="/donateblood/images/flickr.png" title="flickr" alt="flickr" /></a>
                    <a href="#"><img src="/donateblood/images/twitter.png" title="twitter" alt="twitter" /></a>
                    
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

