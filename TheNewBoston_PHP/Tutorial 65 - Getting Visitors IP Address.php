<?php
  require "conf.php";

  foreach($ip_blocked as $ip){
    if($ip_address == $ip) die("Your IP address $ip_address has been blocked");
  }
?>

<h1>Welcome!</h1>
