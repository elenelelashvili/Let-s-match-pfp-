<?php
$file = $_GET['file'];
$ext = substr($file,-3);
if($ext=='jpg' || $ext=='gif' || $ext=='png' || $ext=='pdf'){
 header('Content-type: octet/stream');
 header('Content-disposition: attachment; filename='.$file.';');
 header('Content-Length: '.filesize($file));
 readfile($file);
 exit;
}
?>