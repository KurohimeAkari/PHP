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

function nav(){
	$file = glob("*.php");
	echo '<nav><div id="title">PHP<br>Research</div><div id="menue">Menu</div><ul>';
		foreach ($file as $value) {
			$title = str_replace('.php', '', $value);
			echo '<li><a href='."$value".'>'.$title.'</a></li>';
		}
	echo '</ul></nav>';
}