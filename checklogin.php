<?php
require_once 'model/database.php';
$user = $_POST['correo_us'];
$pass = $_POST['clave_us'];
if (empty($user) || empty($pass)) {
    header("Location: login.php");
    exit();
}
require_once 'controller/login.controller.php';
$accion = new LoginController();
$resultado = $accion->Ingresar($user);

if ($resultado) {
    if ($resultado[0]->clave == $pass) {
        session_start();
        $_SESSION['iduser'] = $resultado[0]->id;
        $_SESSION['nombre'] = $resultado[0]->nombre;
        $_SESSION['correo'] = $resultado[0]->correo;
        $_SESSION['rol'] = $resultado[0]->rol;
        print_r($_SESSION);
        header("Location: index.php");
    } else {
        header("Location: login.php?error=1");
        exit();
    }
} else {
    header("Location: login.php?error=2");
    exit();
}
// VALIDAMOS QUE EL CORREO CONTENGA EL DOMINIO DE LA UNIVERSIDAD @amigo.edu.co

