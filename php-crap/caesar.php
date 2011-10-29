<div align="center">
<div align="center">
<form action="caesar.php" method="get">
<input name="q" type="text">
<input type="submit">
</form>

<?php

if ($_GET['q']=='') { echo 'Type something.'; return; }
$str = strtoupper($_GET['q']);
$arr = str_split($str);

for($i=0; $i<count($arr); $i++) {
	if (ord($arr[$i])==32) { print ' '; continue; }
	if (ord($arr[$i])==88) { print 'A'; continue; }
	if (ord($arr[$i])==89) { print 'B'; continue; }
	if (ord($arr[$i])==90) { print 'C'; continue; }
	
	print chr(ord($arr[$i])+3);
	// TODO: add support for stuff like Ã
}

?>

<br><br>
Wanna read this? Decipher.<br>
Or look <a 
href="http://en.wikipedia.org/wiki/Caesar_cipher">here</a>!<br><br>
<b>by theiostream.</b>
