<?php
require_once('./model/login.php');
require_once('./model/objeto.php');

class AjaxController
{
    private $modeLogin;
    private $modelObj;

    public function __CONSTRUCT()
    {
        $this->modeLogin = new Login();
        $this->modelObj = new Objeto();
    }

    //SAVE USER   
    public function SaveUser()
    {
        $objLoad = (object) array(
            'validate' => TRUE
        );
        $user = new Login();
        $user->nombre = $_REQUEST['nombre_us'];
        $user->correo = $_REQUEST['correo_us'];
        $user->rol = 2;
        $user->clave = $_REQUEST['clave_us'];
        $objLoad->result = $this->modeLogin->Crear($user);
        echo json_encode($objLoad);
    }

    //SAVE OBJECT
    public function SaveObj()
    {
        $objLoad = (object) array(
            'validate' => TRUE
        );
        if (($_FILES["file"]["type"] == "image/pjpeg")
            || ($_FILES["file"]["type"] == "image/jpeg")
            || ($_FILES["file"]["type"] == "image/png")
            || ($_FILES["file"]["type"] == "image/gif")
        ) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], "images/" . $_FILES['file']['name'])) {
                $url = $_FILES['file']['name'];
                $obj = new Objeto();
                $obj->id_user = $_SESSION['iduser'];
                $obj->nombre = $_REQUEST['titulo'];
                $obj->info = $_REQUEST['info'];
                $obj->estado = 1;
                $obj->url_img = $url;
                $objLoad->result = $this->modelObj->Crear($obj);
                echo json_encode($objLoad);
            } else {
                $objLoad->result = 'Fañse';
            }
        } else {
            $objLoad->result = 'Fañse';
        }
    }
}
