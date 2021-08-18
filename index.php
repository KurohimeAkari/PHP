<!DOCTYPE html>
<?php require  __DIR__ . '/module/module.php'; ?>
<?php include  __DIR__ . '/style/template.php'; ?>
<html lang="ja">
<head>
<?php echo head();?>
<title>PHP Research</title>
</head>
<body>
	<article>
		<h2>ルビ作成 Module</h2>
		<section>
			<p><code><span>出力</span>：ruby('八宝菜','はっぽうさい');</code></p>
			<div>
				<p>日本語ルビ：<? echo ruby('八宝菜','はっぽうさい'); ?></p>
				<p>英語ルビ：<? echo ruby('素晴らしい','Excellent'); ?></p>
			</div>
		</section>
	</article>
</body>
</html>
