<?
	class db_Reader {
	private $db_name;
	private $mode;
	public function __construct($db_name,$mode){
		$this->db_name = $db_name;
		$this->mode = $mode;
		// user security
		if ($this->db_name == 'user'){
			$this->db_name = null;
			die('そちらのデーターベースは許可されてません');
		}
	}

	public function db_once($column,$id){
		// easy security : num == true ;
		if(ctype_digit($id)){ 
			$pdo = db_connect();
			$sql = "SELECT $column FROM $this->db_name WHERE id = $id";
			$sth = $pdo -> query($sql);
			$aryItem = $sth -> fetch(PDO::FETCH_COLUMN);
			if ($this->mode != 'read'){
				echo($aryItem);
			}
			$pdo = null;
		} else {
			echo 'error:string';
			return;
		}
	}

	public function db_column($column){
			$pdo = db_connect();
			$sql = "SELECT $column FROM $this->db_name";
			$sth = $pdo -> query($sql);
			$aryItem = $sth -> fetchALL(PDO::FETCH_COLUMN);
			if ($this->mode != 'read'){
				foreach($aryItem as $key => $item){
					echo($item);
					if ($key == 0 || $key !== 1){
						echo ',';
					}
				}
			}
			$pdo = null;
	}


	public function db_line($id){
			if(ctype_digit($id)){ 
			$pdo = db_connect();
			$sql = "SELECT * FROM $this->db_name WHERE id = $id";
			$sth = $pdo -> query($sql);
			$aryItem = $sth -> fetch(PDO::FETCH_ASSOC);
			if ($this->mode != 'read'){
				foreach($aryItem as $key => $item){
					echo($item);
					if ($key == 0 || $key !== 1){
						echo ',';
					}
				}
			}
			$pdo = null;
		} else {
			echo 'error:string';
			return;
		}
	}

	public function db_all(){
			$pdo = db_connect();
			$sql = "SELECT * FROM $this->db_name";
			$sth = $pdo -> query($sql);
			$aryItem = $sth -> fetchALL(PDO::FETCH_ASSOC);
			if ($this->mode != 'read'){
				echo '<table>';
				foreach($aryItem as $key => $items){

					// top column
					echo '<tr>';
					foreach($items as $keys => $item){
						if ($key == 0){
							echo '<td>'.$keys.'</td>';
						} else {
							break;
						}
					}
					echo '</tr>';
					// sub columns
					echo '<tr>';
					foreach($items as $keys => $item){
						echo '<td>'.$item.'</td>';
					}
					echo '</tr>';
				}
				echo '</table>';
			}
			$pdo = null;
	}

	public function db_count(){
			$pdo = db_connect();
			$sql = "SELECT COUNT(*) FROM $this->db_name";
			$sth = $pdo -> query($sql);
			$count = $sth -> fetch(PDO::FETCH_COLUMN);
			echo $count.'件のデータを取得しました。';
			$pdo = null;
	}
}
?>
