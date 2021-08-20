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
	
	$nowpage = str_replace('/', '', $_SERVER['REQUEST_URI']);
	echo '<nav><div id="title">PHP<br>Research</div><div id="menue">Menu</div><ul>';
		foreach ($file as $value) {
			$title = str_replace('.php', '', $value);
			if ($nowpage == $value){
				$now = 'id="now"';
			} else {
				$now = '';
			}
			echo '<li><a href='."$value".' '.$now.'>'.$title.'</a></li>';
		}
	echo '</ul></nav>';
}