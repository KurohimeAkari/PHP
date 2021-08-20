<!DOCTYPE html>
<?php require  __DIR__ . '/factory/module.php'; ?>
<?php include  __DIR__ . '/style/template.php'; ?>
<html lang="ja">
<head>
<?php echo head();?>
<title>PHP Research:Factory</title>
</head>
<body>
	<? nav() ?>
	<h1>Factory</h1>
	<article>
		<h2>Counter</h2>
		<section>
			<p><code><span>出力</span>：counter();</code></p>
			<p class='inst'><?php echo gitname('factory/counter.php');?></p>
			<div>
				<p><? echo counter(); ?></p>
			</div>
			<p>Counter Program</p>
		</section>
	</article>
</body>
</html>
