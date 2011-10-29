<div align="center">
<form action="caps.php" method="get">
<input name="q" type="text">
<input type="submit">
</form>

<?php
if ($_GET['q']=='') { echo '<br>Type something.'; return; }

$arr = str_split($_GET['q']);

for($i=0; $i<count($arr); $i=$i+2) {
	print strtoupper($arr[($i)]) . $arr[$i+1];
}
?>

<br><br><b>by theiostream.</b>
</div>
