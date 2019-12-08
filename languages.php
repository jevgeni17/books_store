<?php

foreach($langs as $langsKey=>$langsValue){
		if(empty($firstLang)){
			$firstLang=$langsKey;
		}
		echo '<a class="langItem" href="?ln='.$langsKey.'" style="color:white;">'.$langsValue.'</a>';
}
?>
