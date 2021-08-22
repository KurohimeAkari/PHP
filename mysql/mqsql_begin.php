<?
	function db_begin(){
	$pdo = db_connect();
	$corum = 'exp';
	$sql = "SELECT $corum FROM User";
	$sth = $pdo -> query($sql);
	$aryItem = $sth -> fetchAll(PDO::FETCH_COLUMN); //$aryItemに配列を代入

print_r($aryItem);
	
/*	// 実行したいSQL
	$sql = 'INSERT INTO User(lv, exp, money) VALUES(?,?,?)';

	// 挿入したいデータ
	$lv    = 5;
	$exp   = 3000;
	$money = 15000;

	//-------------------------------------------------
	// SQLを実行
	//-------------------------------------------------
	// 接続
	$sth = $pdo->prepare($sql);          // SQL準備

	// プレースホルダに値を入れる
	$sth->bindValue(1, $lv,    PDO::PARAM_INT);
	$sth->bindValue(2, $exp,   PDO::PARAM_INT);
	$sth->bindValue(3, $money, PDO::PARAM_INT);

	// 実行
	//$sth->execute();
	*/
}
?>
