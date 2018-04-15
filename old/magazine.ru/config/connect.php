<?php 


		$con = mysqli_connect("localhost", "root", "1g0VZMoIl3iLkxms", "mvc_site");
		mysqli_set_charset($con, "utf8");

			//Чек коннекта

		if(mysqli_connect_error()){
			echo "Faild to connect" . mysqli_connect_error();
		}

