<!DOCTYPE html>
<?php require  __DIR__ . '/mysql/module.php'; ?>
<?php include  __DIR__ . '/style/template.php'; ?>
<html lang="ja">
<head>
<?php echo head();?>
<title>PHP Research</title>
</head>
<body>
	<? nav() ?>
	<h1>Module</h1>
	<article>
		<h2>My SQL begin</h2>
		<section>
			<p><code><span>出力</span>：ruby('八宝菜','はっぽうさい');</code></p>
			<p class='inst'><?php echo gitname('factory/csv_array_reader.php');?></p>
			<div>
				<?php $pdo = db_begin();?>
			</div>
			<p>ルビといえば難読漢字の上に付与する「ひらがな」ですが、いちいちとHTMLを書くのが面倒くさかったので制作しました</p>
		</section>
		<h2>ほにゃほにゃ Module</h2>
		<section>
			
		</section>
	</article>
	<?php $pdo = null; ?>
</body>
</html>
