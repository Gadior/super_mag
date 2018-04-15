<?php 
session_start();
// $_SESSION
$answer2 = $_POST['answer2'];
$_SESSION['answer2'] = $answer2;
?>

<p>Вопрос 1</p>

<p>1 + 2 = ?</p>

<form action="result.php" method="post">
	
	<input type="text" name="answer3">
	<input type="submit" name="submit">

</form>