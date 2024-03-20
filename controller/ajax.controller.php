<?php
require_once('./class/class-mail.php');
require_once('./model/login.php');
require_once('./model/objeto.php');

class AjaxController
{
    private $classMail;
    private $modeLogin;
    private $modelObj;

    public function __CONSTRUCT()
    {
        $this->classMail = new Mail();
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
        $urlImg = "";
        $objLoad = (object) array(
            'validate' => TRUE
        );
        if (!empty($_FILES["file"])) {
            if (($_FILES["file"]["type"] == "image/pjpeg")
                || ($_FILES["file"]["type"] == "image/jpeg")
                || ($_FILES["file"]["type"] == "image/png")
                || ($_FILES["file"]["type"] == "image/gif")
            ) {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], "images/" . $_FILES['file']['name'])) {
                    $urlImg = $_FILES['file']['name'];
                }
            }
        } else {
            $urlImg = $_REQUEST['urlImg'];
        }

        $obj = new Objeto();
        $obj->id_user = $_SESSION['iduser'];
        $obj->nombre = $_REQUEST['titulo'];
        $obj->info = $_REQUEST['info'];
        $obj->estado = 1;
        $obj->url_img = $urlImg;
        if ($_REQUEST['action'] == 'new') {
            $objLoad->result = $this->modelObj->Crear($obj);
        } else {
            $obj->id = $_REQUEST['idobj'];
            $objLoad->result = $this->modelObj->Update($obj);
        }
        echo json_encode($objLoad);
    }
    public function sendMail(){
        $tets = $this->classMail->SendMail("Nuevo producto");
        echo json_encode($tets);
    }
}
