<?php
$url = $_SERVER['REQUEST_URI'];
$pieces = explode("/", $url);
$new_location "/" . $pieces[2] . "/" . $pieces[4] .".html";

header("HTTP/1.1 301 Moved Permanently");
header("Location: http://www.joejag.com" . $new_location);

?>
