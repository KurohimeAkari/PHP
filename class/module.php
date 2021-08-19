<?
// module folder をまとめて requre するもの
$file = glob("class/*.php");
foreach ($file as $value) {
	$value = str_replace('class/', '', $value);
if ($value != 'module.php'){
		require __DIR__ .'/'. $value;
	} else {
		// echo __DIR__ .'/'. $value;
	}
}
?>