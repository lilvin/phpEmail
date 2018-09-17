<?php
require_once('AfricasTalkingGateway.php');


$servername="localhost";
$username="root";
$password="";
$dbname="bloodbank";


$con=new mysqli($servername,$username,$password,$dbname) or die("failed to connect to MySQL:".mysql_error());
if ($con->connect_error){
die("connection failed:".$con->connect_error);
}
// Be sure to include the file you've just downloaded

// Specify your authentication credentials
$username   = "lilianKirito";
$apikey     = "29748e398b5b4f31537215ae95f602d98c5ae89184a941e5c756fe3b610d23b3";
// Specify the numbers that you want to send to in a comma-separated list
// Please ensure you include the country code (+254 for Kenya in this case)

if(isset($_POST['sendmsg'])){

 
 $sql="SELECT `mobile` FROM users";
 $mysqli_result = $con->query($sql);

  if($mysqli_result->num_rows > 0) {
    // output data of each row
    while($row = $mysqli_result->fetch_assoc()) {
      //echo "mobile: " . $row["mobile"];
      $recipients= $row["mobile"];
    }
}

}

//$recipients = $recipient_phone;
//mysqli_result(mysqli_query("SELECT  mobile FROM users"),0);
//"+254705895190";
// And of course we want our recipients to know what we really do
$txt=$_POST['message'];
$message    = $txt;
// Create a new instance of our awesome gateway class
$gateway    = new AfricasTalkingGateway($username, $apikey);
/*************************************************************************************
  NOTE: If connecting to the sandbox:
  1. Use "sandbox" as the username
  2. Use the apiKey generated from your sandbox application
     https://account.africastalking.com/apps/sandbox/settings/key
  3. Add the "sandbox" flag to the constructor
  $gateway  = new AfricasTalkingGateway($username, $apiKey, "sandbox");
**************************************************************************************/
// Any gateway error will be captured by our custom Exception class below, 
// so wrap the call in a try-catch block
try 
{ 
  // Thats it, hit send and we'll take care of the rest. 
  $results = $gateway->sendMessage($recipients, $message);
            
  foreach($results as $result) {
    // status is either "Success" or "error message"
    echo "Message sent successfully ";
    // echo " Status: " .$result->status;
    // echo " StatusCode: " .$result->statusCode;
    // echo " MessageId: " .$result->messageId;
    // echo " Cost: "   .$result->cost."\n";
  }
}
catch ( AfricasTalkingGatewayException $e )
{
  echo "Encountered an error while sending: ".$e->getMessage();
}
// DONE!!! 
