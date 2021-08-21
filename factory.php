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
				<p>合計：<? echo counter(); ?>人来ました。</p>
			</div>
			<p>Counter Program</p>
		</section>

		<h2>csv array reader</h2>
		<section>
			<p><code><span>出力</span>：csv_array_reader();</code></p>
			<p class='inst'><?php echo gitname('factory/counter.php');?></p>
			<div>
				<p><? echo csv_array_reader('array.csv');?></p>
			</div>
			<p>Counter Program</p>
		</section>
	</article>
</body>
</html>
