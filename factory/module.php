<?
// module folder をまとめて requre するもの
$file = glob("factory/*.php");
foreach ($file as $value) {
	$value = str_replace('factory/', '', $value);
if ($value != 'module.php'){
		require __DIR__ .'/'. $value;
	} else {
		// echo __DIR__ .'/'. $value;
	}
}
?>