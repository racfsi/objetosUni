<?php
require_once('model/login.php');

class LoginController
{
	private $model;
	public function __CONSTRUCT()
	{
		$this->model = new Login();
	}
	public function Ingresar()
	{
		$login = new Login();
		if (isset($_REQUEST['nombre_us'])) {
			$login = $this->model->Ingreso($_REQUEST['nombre_us'],$_REQUEST['clave_us']);			
		}
		return $login;
    }
}
?>