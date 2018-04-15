<?php 
session_start();


$answer1 = $_SESSION['answer1'];
$answer2 = $_SESSION['answer2'];
$answer3 = $_POST['answer3'];
?>

<p>Ваш результат: <?php echo $answer1 . $answer2 . $answer3; ?></p>
