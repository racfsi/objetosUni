<?php

class Login
{
	private $pdo;

	public $id;
	public $nombre;
	public $correo;
	public $rol;
	public $clave;
	public $fecha;


	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Database::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	function Ingreso($user)
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM usuarios WHERE correo = ? ");
			$stm->execute(array($user));
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Read()
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM usuarios ORDER BY id");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

	function Crear(Login $data)
	{
		try {
			$sql = "INSERT INTO usuarios (nombre,correo,rol,clave)  VALUES (?,?,?,?)";
			$this->pdo->prepare($sql)->execute(
				array(
					$data->nombre,
					$data->correo,
					$data->rol,
					$data->clave
				)
			);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}
