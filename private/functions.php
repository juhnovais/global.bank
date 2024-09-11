<?php
 function urlFor($sciptPath)
 {
    if ($sciptPath[0] != '/') {
        $sciptPath = $sciptPath;
    }
    return WWW_ROOT . $sciptPath;
 }

 function u($string="") {
    return urlencode($string);
 }

 function raw_u($string="") {
    return rawurlencode($string);
 }

 function h($string="") {
    return htmlspecialchars($string);
 }

 function error_404() {
   header($_SERVER['SERVER_PROTOCOL'] . " 404 Not Found");
   exit();
 }

 function error_500() {
   header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server");
   exit();
 }

 function redirectTo($location) {
   header("Location: " . $location);
   exit;
 }
?>
