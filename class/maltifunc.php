<?php
class Maltiolder{
	// このClassのみ
	protected $money;
	protected $count;
	function __construct($money,$count){
		// 引数 $name を Class内で使える $this->name に
		$this->money = $money;
		$this->count = $count;

		if ($count == '' || $count == nil) {
			$this->count = 1;
		} 

	}

	protected function cost(){
		$this->cost = $this->money * $this->count;
		return $this->cost;
	}

	public function says() {
		$this->cost();
		echo "大人料金{$this->money}円チケット:{$this->count}人分で{$this->cost} 円です。";
	}
}

class Maltichildren extends Maltiolder {
	public function says() {
		$this->cost();
		echo "子供料金{$this->money}円チケット:{$this->count}人分で{$this->cost} 円です。";
	}
}

// 引数 (text) を Class (Text) << 「引数は一つだけではない」 の引数まとめ参照にする。

?>
