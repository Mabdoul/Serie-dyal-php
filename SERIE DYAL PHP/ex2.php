<?php
$str = 'example.com/public_html/index.php';
$result1 = explode('/', $str);
$result = array_pop($result1);
echo $result; 
?>