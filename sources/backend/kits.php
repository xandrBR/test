<?php
function include_kits(){
	//смотрим в БД сколько сундуком
	$count=18;
	echo "<form class='kits' action='../second/classic.php' method='GET'>";
	for($i=1;$i<=$count;++$i){
		//смотрим главную картинку сундука
		$mi=5;
		echo "<input class='kit' type='image' alt='' value='".$i."' name='kit' src='../img/kits/".$mi.".png'>";
	}
	echo "</form>";
}
function Ionline(){
	$data=date("G");
	if($data>0 && $data<5){
	}
}
?>