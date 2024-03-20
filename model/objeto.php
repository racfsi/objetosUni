<?php

class Objeto
{
    private $pdo;

    public $id;
    public $id_user;
    public $nombre;
    public $info;
    public $url_img;
    public $estado;
    public $fecha;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ReadActivos()
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM objetos WHERE estado = 1 ORDER BY id");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ReadInactivos()
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM objetos WHERE estado = 0 ORDER BY id");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function GetActivos($id)
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM objetos WHERE id_user = ? AND estado = 1 ORDER BY id");
            $stm->execute(array($id));
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function GetinActivos($id)
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM objetos WHERE id_user = ? AND estado = 0 ORDER BY id");
            $stm->execute(array($id));
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function GetById($id)
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM objetos WHERE id = ?");
            $stm->execute(array($id));
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    function Crear(Objeto $data)
    {
        try {
            $sql = "INSERT INTO objetos (id_user,nombre,info,url_img,estado)  VALUES (?,?,?,?,?)";
            $this->pdo->prepare($sql)->execute(
                array(
                    $data->id_user,
                    $data->nombre,
                    $data->info,
                    $data->url_img,
                    $data->estado
                )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Update(Objeto $data)
    {
        try {
            $sql = "UPDATE objetos SET nombre = ?,info = ?,url_img = ?, estado = ? WHERE id=?";
            $this->pdo->prepare($sql)->execute(
                array(
                    $data->nombre,
                    $data->info,
                    $data->url_img,
                    $data->estado,
                    $data->id
                )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
