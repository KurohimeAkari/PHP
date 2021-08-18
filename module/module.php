<?
// module folder をまとめて requre するもの
$file = glob("module/*.php");
foreach ($file as $value) {
	$value = str_replace('module/', '', $value);
if ($value != 'module.php'){
		require __DIR__ .'/'. $value;
	} else {
		//echo __DIR__ .'/'. $value;
	}
}
?>