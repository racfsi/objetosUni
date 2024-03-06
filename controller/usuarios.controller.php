<?php
require_once('model/login.php');

class UsuariosController
{
	private $model;

	public function __CONSTRUCT()
	{
		$this->model = new Login();
	}

	public function Index()
	{
        $usuarios = $this->model->Read();
		require_once 'view/usuarios/usuarios.php';
	}
}
