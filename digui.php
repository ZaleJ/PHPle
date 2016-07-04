<?php 
	header("content-type:text/html;charset=utf-8");
	$num=3;

	function sum($num){
		static $tot;
		if($num>=1){
			$tot+=$num;
			return sum(--$num);
		} else {return $tot;}
	}

	echo sum($num);
?>
