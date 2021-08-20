<?php
class Older{
	// このClassのみ
	protected $money;
	function __construct($money){
		// 引数 $name を Class内で使える $this->name に
		$this->money = $money;
	}

	public function says() {
		echo "大人料金： {$this->money}円です。";
	}
}

class Children extends Older {
	public function says() {
		echo "子供料金： {$this->money}円です。";
	}
}

// 引数 (text) を Class (Text) << 「引数は一つだけではない」 の引数まとめ参照にする。

?>
