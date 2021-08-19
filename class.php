<!DOCTYPE html>
<?php require  __DIR__ . '/module/module.php'; ?>
<?php include  __DIR__ . '/style/template.php'; ?>
<?php include  __DIR__ . '/class/begin.php'; ?>
<html lang="ja">
<head>
<?php echo head();?>
<title>PHP Research:class</title>
</head>
<body>
	<h1>class</h1>
	<article>
		<h2>ルビ作成 Module</h2>
		<section>
			<p><code><span>出力</span>：$user = new User("あんねさん");</code></p>
			<p class='inst'><?php echo gitname('class/begin.php');?></p>
			<div>
				<p><?php $user[0]= new User("あんねさん"); echo $user[0]->says(); ?></p>
				<p><code>echo $user->says();</code>で [Class] 内の [ function ] に出力、[ function ]の中身は<code>echo "こんばんは {$this->name}";</code> $this というのはClass内どこでも呼び出せる引数(単独では使えない)</p>
				<p><?php $user[1]= new User("てまりちゃん"); echo $user[1]->says(); ?></p>
				<p><code>$user[1] = new User("てまりちゃん");</code></p>
				<p>インスタンスは「配列可能」 むしろ配列を意識した書き方のほうがいいかもしれない</p>
			</div>
			<p>ルビといえば難読漢字の上に付与する「ひらがな」ですが、いちいちとHTMLを書くのが面倒くさかったので制作しました</p>
		</section>
		<h2>ほにゃほにゃ Module</h2>
		<section>
			
		</section>
	</article>
</body>
</html>
