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
		<h2>My SQL Reader</h2>
		<section>
			<p><code><span>出力</span>：</code></p>
			<p class='inst'><?php echo gitname('mysql/mysql_reader.php');?></p>
			<div>
				<p>Reader:Once</p>
				<?php $dbr = new db_Reader('exp',''); $dbr->db_once('exp','2');?>
				<p>Reader:column</p>
				<?php $dbr->db_column('exp');?>
				<p>Reader:line</p>
				<?php $dbr->db_line('2');?>
				<p>Reader:All</p>
				<?php $dbr->db_all();?>
				<p>Reader:Counts</p>
				<?php $dbr->db_count();?>
			</div>
		</section>
		<h2>ほにゃほにゃ Module</h2>
		<section>
			
		</section>
	</article>
	<?php $pdo = null; ?>
</body>
</html>
