<?php
	function csv_array_reader($filename){
		if(file_exists( __DIR__ .'/'.$filename)){
			$csv = file( __DIR__ .'/'.$filename);
			$csv_body = array_splice($csv, 0);
			// csv >> array [key][keys]
			foreach($csv_body as $key => $row) {
				$row_array = explode(',', $row);
				foreach($row_array as $keys => $col){
					$arr[$key][$keys] = $col;
				}
			}
			// 描写部分
			foreach($arr as $key_v => $vals){
				echo '<p>'.$vals[0].'は'.$vals[1].'の'.$vals[2].'です。</p>';
			} 
		} else {
		echo 'Need to ' .$filename. ' file.';
		}
	}
?>