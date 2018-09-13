<?php 
function home_url() 
{
    // output: /myproject/index.php
    $currentPath = $_SERVER['PHP_SELF']; 
    
    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
    $pathInfo = pathinfo($currentPath); 
    
    // output: localhost
    $hostName = $_SERVER['HTTP_HOST']; 
    
    // output: http://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
    
    // return: http://localhost/myproject/
    $full_url = $protocol.$hostName.$pathInfo['dirname']."/";
    $home_url = (explode("/",$full_url));
    return $home_url[0]."//".$home_url[2]."/".$home_url[3];

}
// define('HOME_URL', $protocol.$hostName."/mio"); 

// echo "HERE: ".HOME_URL;
 ?>

