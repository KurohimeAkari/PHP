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
			<p><code><span>出力</span>：$csv[0]= new csv_Reader('array.csv');</code></p>
			<p class='inst'><?php echo gitname('factory/csv_array_reader.php');?></p>
			<div>
				<p><?php
				echo '<div>// csv_view() でテンプレ呼び出し</div>';
				$csv[0]= new csv_Reader('array.csv'); echo $csv[0]->csv_view('');
				echo '<div>// csv_view(\'、\') で好きな分けカンマ呼び出し</div>';
				echo $csv[0]->csv_view('、');
				$csv[0]->csv_array_reader();
				echo '<div>//csv_array_reader();で呼び出し [ factory.php ] で編集</div>';
					foreach($csv[0]->csv_array as $key_v => $vals){
						echo "<p>{$vals[0]}は{$vals[1]}と{$vals[2]}</p>";
					}
				echo '<div>// $csv[0]->csv_array[0][0]と記載すると一つだけ取り出せる。</div>';
				echo $csv[0]->csv_array[0][0];?></p>
			</div>
			<p>Counter Program</p>
		</section>
	</article>
</body>
</html>
