<?php 

	/*
	Сделан коннект к базе посредствам PDO
	Переменная класса - $pdo
	*/

	$host = 'localhost';
    $db   = 'super_mag';
    $user = 'root';
    $pass = '1g0VZMoIl3iLkxms';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);