<?php
class User{
	// このClassのみ
	public $name;
	function __construct($name){
		// 引数 $name を Class内で使える $this->name に
		$this->name = $name;
	}

	public function says() {
		echo "こんばんは {$this->name}";
	}
}

// 引数 (text) を Class (Text) << 「引数は一つだけではない」 の引数まとめ参照にする。

?>
