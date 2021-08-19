<!DOCTYPE html>
<?php require  __DIR__ . '/module/module.php'; ?>
<?php include  __DIR__ . '/style/template.php'; ?>
<?php include  __DIR__ . '/class/module.php'; ?>
<html lang="ja">
<head>
<?php echo head();?>
<title>PHP Research:class</title>
</head>
<body>
	<h1>class</h1>
	<article>
		<h2>初歩的 Class</h2>
		<section>
			<p><code><span>出力</span>：$user = new User('あんねさん');</code></p>
			<p class='inst'><?php echo gitname('class/begin.php');?></p>
			<div>
				<p><?php $user[0]= new User('あんねさん'); echo $user[0]->says(); ?></p>
				<p><code>echo $user->says();</code>で [Class] 内の [ function ] に出力、[ function ]の中身は<code>echo "こんばんは {$this->name}";</code> $this というのはClass内どこでも呼び出せる引数(単独では使えない)</p>
				<p><?php $user[1]= new User('てまりちゃん'); echo $user[1]->says(); ?></p>
				<p><code>$user[1] = new User('てまりちゃん');</code></p>
				<p>インスタンスは「配列可能」 むしろ配列を意識した書き方のほうがいいかもしれない</p>
			</div>
		</section>
		<h2>Extends</h2>
		<section>
			<p><code><span>出力</span>：$older = new Older('1800');,$child = new Children("600"); </code></p>
			<p class='inst'><?php echo gitname('class/extends.php');?></p>
			<div>
				<p><?php $older[0]= new Older('1800'); echo $older[0]->says(); ?></p>
				<p><?php $child[0]= new Children('600'); echo $child[0]->says(); ?></p>
				<p><code>class Children extends Older {}</code></p>
			</div>
			<p>処理は同じだけども「大人料金」「子供料金」のように処理を分けたいときは[ extends ] を使う。</p>
			<p>別 [ Class ] だが"Older"に書かれている<code>public $money;</code>と<code>__construct($money)</code>は継承される。</p>
		</section>
		<h2>Maltiple Function</h2>
		<section>
			<p><code><span>出力</span>：$older[1]= new Maltiolder('1800','2');</code></p>
			<p class='inst'><?php echo gitname('class/maltifunc.php');?></p>
			<div>
				<p><?php $older[1]= new Maltiolder('1800','2'); echo $older[1]->says(); ?></p>
				<p><?php $child[1]= new Maltichildren('600','3'); echo $child[1]->says(); ?></p>
				<o><?php echo $older[1]->cost + $child[1]->cost .'円になります。'; ?></o>
				<p><code>function __construct($money,$count)</code></p>
			</div>
			<p>引数は「インスタンス」<code>new Maltiolder('a','b')</code>の方が良いが、関数<code>$child[1]->says('hoge')</code>と書いてもよし。この場合は[ class ] の [ says() ] の引数$ に代入される。</p>
		</section>
	</article>
</body>
</html>
