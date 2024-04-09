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
		$objetos = $this->model->ReadActivos();
		require_once 'view/objetos/objetos.php';
	}

	public function ObjetosReclamados()
	{
		$objetos = $this->model->ReadInactivos();
		require_once 'view/objetos/objetos-reclamados.php';
	}

	public function New()
	{
		if (isset($_REQUEST['id'])) {
			$objeto = $this->model->GetById($_REQUEST['id']);
		}
		require_once 'view/objetos/objetos-new.php';
	}
}
