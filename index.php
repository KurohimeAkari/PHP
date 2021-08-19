<!DOCTYPE html>
<?php require  __DIR__ . '/module/module.php'; ?>
<?php include  __DIR__ . '/style/template.php'; ?>
<html lang="ja">
<head>
<?php echo head();?>
<title>PHP Research</title>
</head>
<body>
	<h1>Module</h1>
	<article>
		<h2>ルビ作成 Module</h2>
		<section>
			<p><code><span>出力</span>：ruby('八宝菜','はっぽうさい');</code></p>
			<p class='inst'><?php echo gitname('module/ruby.php');?></p>
			<div>
				<p>日本語ルビ：<? echo ruby('八宝菜','はっぽうさい'); ?></p>
				<p>英語ルビ：<? echo ruby('素晴らしい','Excellent'); ?></p>
			</div>
			<p>ルビといえば難読漢字の上に付与する「ひらがな」ですが、いちいちとHTMLを書くのが面倒くさかったので制作しました</p>
		</section>
		<h2>ほにゃほにゃ Module</h2>
		<section>
			
		</section>
	</article>
</body>
</html>
