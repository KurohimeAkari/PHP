<?
function head() {
	echo '
	<meta http-equiv="Expires" content="86400">
	<meta name="viewport" content="width=device-width">
	<link rel=preload href="//'.$_SERVER["HTTP_HOST"].'/style/style.css" as="style">
	<link rel="stylesheet" href="//'.$_SERVER["HTTP_HOST"].'/style/style.css" type="text/css">';
}

function gitname($name){
	$giturl ='https://github.com/KurohimeAkari/PHP/blob/master/';
	echo '<a href="'.$giturl.$name.'" target="_blank">Install</a>';
}
