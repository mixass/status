<?php
$website = 'license.mixas.online';
function the_ping_time($url = '', $port = 8080, $timeout = 180)
{
   if (!empty($url)) {
       $request_time = microtime(true);
       $socket = @fSockOpen($url, $port, $errno, $errstr, $timeout);
       if (!$socket) {
          return ('<h1> Website is down or Request denied/blocked </h1>');
      } else {
           $response_time = microtime(true);
           return (round((($response_time - $request_time) * 1000), 0) . ' ms');
       }
   } else {
       return (null);
   }
}


echo(the_ping_time($website));
?>
