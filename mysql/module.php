<?
// module folder をまとめて requre するもの
$file = glob("mysql/*.php");
foreach ($file as $value) {
	$value = str_replace('mysql/', '', $value);
if ($value != 'module.php'){
		require __DIR__ .'/'. $value;
	} else {
		// echo __DIR__ .'/'. $value;
	}
}
?>