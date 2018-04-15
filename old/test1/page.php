<?php
if (isset($_COOKIE['arr'])) {
		// setcookie('name', '');
	$arr=$_COOKIE['arr'];
	$res = unserialize($arr);
	var_dump($res);
}else{

}
?>



<html>

<head>
	<meta charset="utf-8">
	<title>Тест2</title>
</head>
<body>
В куке храниться - <?php echo $arr; ?> 
	<div>
		<h1>Страница page.php</h1>
		<a href="index.php"> Страница index.php</a>
		
	</div>





</body>
</html>