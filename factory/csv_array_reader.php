<?php
	class csv_Reader{
	// このClassのみ
	protected $filename;
 	public $csv_array;
	function __construct($filename){
		// 引数 $name を Class内で使える $this->name に
		$this->filename = $filename;
	}

	public function csv_array_reader(){
		//echo $this->filename;
		if(file_exists( __DIR__ .'/'.$this->filename)){
			$csv = file( __DIR__ .'/'.$this->filename);
			$csv_body = array_splice($csv, 0);
			// csv >> array [key][keys]
			foreach($csv_body as $key => $row) {
				$row_array = explode(',', $row);
				foreach($row_array as $keys => $col){
					$arr[$key][$keys] = $col;
					$this->csv_array = $arr;
				}
			}
			return $this->csv_array;
			} else {
		echo 'Need to ' .$filename. ' file.';
		}
	}

	public function csv_view(){
		$this->csv_array_reader();
		foreach($this->csv_array as $key_v => $vals){
			echo "<p>{$vals[0]},{$vals[1]},{$vals[2]}</p>";
		} 
	}
}

?>