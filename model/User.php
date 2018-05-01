<?php 

class User
{

	public static function register()
	{
	}

	public static function checkName($name)
	{
		if(strlen($name)>=2)
		{
			return true;
		}
		return false;
	}


	public static function checkPassword($password)
	{
		if(strlen($password)>=6)
		{
			return true;
		}
		return false;
	}

	public static function checkEmail($email)
	{
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			return true;
		}
		return false;
	}

	public static function checkEmailExists($email)
	{

		include_once (ROOT.'/config/connect.php');


		$sql = "SELECT COUNT(*) FROM user WHERE email= :email"; //= :email

		$result = $pdo->prepare($sql);
		$result -> bindParam(':email', $email, PDO::PARAM_STR);
		$result -> execute();



		$name = $result -> fetchColumn();

		if($name>0)
		{
			return true;
		}
			return false;
		
	}

///---
}