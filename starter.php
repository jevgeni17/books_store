<?php
$terms=array();
$otvet=mysqli_query($link, "SELECT * FROM languages WHERE listOrder>0 ORDER BY listOrder");
$langs=array();
$firstLang='en';
if(mysqli_num_rows($otvet)>0){
	while($odinYazyk=mysqli_fetch_assoc($otvet)){
		$langs[$odinYazyk['code']]=$odinYazyk['title'];
	}
	if(!isset($_GET['ln'])){
		$_GET['ln']=$firstLang;
	}
}
$ln=$_GET['ln'];
$termTable=mysqli_query($link, "SELECT * FROM terms WHERE lang='$ln'");
while($oneTerm=mysqli_fetch_assoc($termTable)){
	$terms[$oneTerm['code']]=$oneTerm['term'];
	//если $ln=$_GET['ln']=ru, то $terms['readNext']='Читать далее'
}

?>
