
<?php 

session_start();
// $_SESSION

$answer1 = $_POST['answer1'];

$_SESSION['answer1'] = $answer1;


 ?>
<p>Вопрос 1</p>

<p>3 + 2 = ?</p>

<form action="task3.php" method="post">
	
	<input type="text" name="answer2">
	<input type="submit" name="submit">

</form>