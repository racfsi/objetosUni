<?php
class Database
{
	public static function StartUp()
	{

		try {
			$pdo = new PDO('mysql:host=localhost;dbname=objetosuni;charset=utf8','root','');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		} catch (PDOException $e) {
			echo "Error----->".$e->getMessage();
		}
	}
}
