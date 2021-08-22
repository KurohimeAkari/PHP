<?php
	// About other PHP Writing 
	// @ requre ('csv_array_reader.php');
	// @ $csv[0]= new csv_Reader('array.csv'); echo $csv[0]->csv_view('');

	class csv_Reader{
	// このClassのみ
	protected $filename;
 	public $csv_array;
	public function __construct($filename){
		// 引数 $name を Class内で使える $this->name に
		$this->filename = $filename;
	}

	public function csv_array_reader(){
		//echo $this->filename;
		if(file_exists( __DIR__ .'/'.$this->filename)){
			$csv = file( __DIR__ .'/'.$this->filename);
			$csv_flock = fopen(__DIR__ .'/'.$this->filename, 'r');
			// Read wait lock.
			flock($csv_flock, LOCK_EX);
			$csv_body = array_splice($csv, 0);
			// csv >> array [key][keys]
			foreach($csv_body as $key => $row) {
				$row_array = explode(',', $row);
				foreach($row_array as $keys => $col){
					$arr[$key][$keys] = $col;
					$this->csv_array = $arr;
				}
			}
			fclose($csv_flock);
			return $this->csv_array;
			} else {
		echo 'Need to ' .$filename. ' file.';
		}
	}

	public function csv_view(?string $comma){
		if ($comma == null){
			$comma = ','; // casual Comma
		}
		$this->csv_array_reader();
		foreach($this->csv_array as $key_v => $vals){
		echo '<p>';
			foreach($vals as $key_c => $cols){
				if ($key_c !== 0){
					echo $comma;
				}
				echo $cols;
				//echo "{$_val_c[$key_v][$key_s]}";
			}
		echo '</p>';
		} 
	}
}

?>