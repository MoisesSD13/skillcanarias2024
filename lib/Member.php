<?php
namespace Phppot;

class Member
{

    private $ds;

    function __construct()
    {
        require_once __DIR__ . '/../lib/DataSource.php';
        $this->ds = new DataSource();
    }

    public function getMember($username)
    {
        $query = 'SELECT * FROM usuario where nombreUsuario = ?';
        $paramType = 's';
        $paramValue = array(
            $username
        );
        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
        return $memberRecord;
    }

    public function registerMember(){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $query = 'SELECT * FROM usuario where nombreUsuario = ?';
        $paramType = 's';
        $paramValue = array(
            $username
        );
        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
        if (empty($memberRecord)){
            $insertQuery = 'INSERT INTO usuario (nombreUsuario, contrasenaUsuario, email) VALUES (?, ?, ?)';
            $insertParamType = 'sss';
            $insertParamValue = array($username, password_hash($password, 0), $email);
            
            $this->ds->insert($insertQuery, $insertParamType, $insertParamValue);
            echo "Usuario registrado exitosamente.";
        } else {
            echo '<div class="error">El usuario ya existe.</div>';
        }
    }

    public function loginMember()
    {
        $memberRecord = $this->getMember($_POST["username"]);
        $loginPassword = 0;
        $password = 0;
        if (! empty($memberRecord)) {
            if (! empty($_POST["password"])) {
                $password = $_POST["password"];
            }
            $loginPassword = 0;
            if (password_verify($password, $memberRecord[0]["contrasenaUsuario"])) {
                $loginPassword = 1;
            }
        } else {
                $loginPassword = 0;
        }
        if ($loginPassword == 1) {
            session_start();
            $_SESSION["username"] = $memberRecord[0]["username"];
            $_SESSION["name"] = $memberRecord[0]["name"];
            session_write_close();
            $url = "index.php";
            header("Location: $url");
        } else if ($loginPassword == 0) {
            $loginStatus = "Nombre o contraseña incorrectos.";
            return $loginStatus;
        }
    }
}