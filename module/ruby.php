<?
function ruby($ruby,$rt){
	$rpl = '('; $rpr = ')';
	// English
	if (ctype_alpha($rt)){
		$ctype = 'style="font-size:smaller;"';
	} else {
		$ctype = '';
	}
	echo '<ruby><rp>'.$rpl.'</rp>'.$ruby.'<rt '.$ctype.'>'.$rt.'</rt><rp>'.$rpr.'</rp></ruby>';
}
?>