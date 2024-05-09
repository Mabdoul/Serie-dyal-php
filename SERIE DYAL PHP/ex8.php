<?php
$str = "Le renard brun est rapide";
$result = str_replace('Le', 'Ce', $str);
$result = str_replace(' est', '', $result);
echo $result;
?>