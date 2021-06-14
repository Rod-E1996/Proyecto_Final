<?php
$localIP = getHostByName(php_uname('n'));
echo $localIP;
$variable=$localIP.":8080/Samuel/Pediatria";
?>
<br>
<a href="http://<?php echo $variable; ?>" target="blank">Link o enlace</a>