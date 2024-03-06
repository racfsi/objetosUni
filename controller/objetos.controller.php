<?php
require_once('model/objeto.php');

class ObjetosController
{
	private $model;

	public function __CONSTRUCT()
	{
		$this->model = new Objeto();
	}

	public function Index()
	{
		if($_SESSION['rol'] == 1){
			$objetos = $this->model->Read();
		}else{
			$iduser = $_SESSION['iduser'];
			$objetos = $this->model->Get($iduser);
		}
		require_once 'view/objetos/objetos.php';
	}

	public function New()
	{
		if (isset($_REQUEST['id'])) {
			$objeto = $this->model->GetById($_REQUEST['id']);
		}
		require_once 'view/objetos/objetos-new.php';
	}
}
