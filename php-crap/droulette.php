<?php

function page_title($url) {
        $fp = file_get_contents($url);
        if (!$fp) 
            return null;

        $res = preg_match("/<title>(.*)<\/title>/", $fp, 
$title_matches);//find the title
        if (!$res)
            return 'MEH';

        $title = $title_matches[1];
        return $title;
}



function getRandomURL() {
	$chars = 
'0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	
	if (rand(0,1)==0) {
	for ($i=0; $i<4; $i++) {
		$str = $str . $chars[rand(0,strlen($chars))];
	}
	}
	else {
	for ($i=0; $i<3; $i++) {
		$str = $str . $chars[rand(0,strlen($chars))];
	}
	}
	$u = 'http://d.pr/' . $str;
	return $u;
}

while(1) {
	$x = getRandomURL();
	if(page_title($x)!='Droplr &bull; Oh Noes!') {
		echo("Valid URL.<br><br>");
		print('<h1>' . $x . '</h1>');
		break;
	}
}

?>
