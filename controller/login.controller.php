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
		if (isset($_REQUEST['correo_us'])) {
			$login = $this->model->Ingreso($_REQUEST['correo_us'],$_REQUEST['clave_us']);			
		}
		return $login;
    }
}
?>