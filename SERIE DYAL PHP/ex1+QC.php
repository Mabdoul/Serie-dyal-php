<!-- Questions sur le cours :
1:B
2:D
3:C
4:B
5:D
6:A
7:C
8:B
9:A
10:A -->
<html>
 <!-- EX1: -->
 
 <!-- A: -->
<?php
$string = "ismail";
echo strtoupper($string);
?> 
<br>
<!-- B: -->
<?php
$string = "ISMAIL";
echo strtolower($string); 
?>
<br>
<!-- C: -->
<?php 
$string = "ismail ";
echo ucfirst($string); 
?>
<br>
<!-- D: -->
<?php 
$string = "ismail dodo";
echo ucwords($string);
?>
</html>
