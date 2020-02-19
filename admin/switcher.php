<?php
if(isset($_SESSION['page'])){
	switch($_SESSION['page']){
		case 'orders':
			include 'moduls/editViewOrder.php';
		break;
		case 'banners':
			include 'moduls/editBanner.php';
		break;
		case 'products':
			include 'moduls/editProducts.php';
		break;
		case 'categories':
			include 'moduls/editCategories.php';
		break;
		case 'settings':
			include 'moduls/editSettings.php';
		break;
		case 'translate':
			include 'moduls/editTranslate.php';
		break;
		case 'languages':
			include 'parts/editLanguages.php';
		break;
	}
}

?>