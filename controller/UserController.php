<?php

class UserController
{
	public function actionRegister()
	{
		$name='';
		$password='';
		$email='';

		if(isset($_POST['submit']))
		{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
		}



		$errors = false;


			// Проверка - корректно ли введен Имя (правила для имени). Образение к модели User.php
		if(!User::checkName($name))
		{
			$errors[] = 'Name must be at least 2 symbols' ;
		}


			// Проверка - корректно ли введен пароль (правила пароля). Образение к модели User.php
		if(!User::checkPassword($password))
		{
			$errors[] = 'Password must be at least 6 symbols' ;
		}


			// Проверка - корректно ли введен мейл. Образение к модели User.php
		if(!User::checkEmail($email))
		{
			$errors[] = 'Email создан не по форме' ;
		}


			// Проверка - есть ли мейл в базе. Образение к модели User.php
		if(User::checkEmailExists($email)){
			$errors[] = "Такой email уже используется";
		}



		if($errors == false)
		{
			// saveUser
		}


		require_once (ROOT . '/views/user/register.php');
		return true;
	}

	///---
}