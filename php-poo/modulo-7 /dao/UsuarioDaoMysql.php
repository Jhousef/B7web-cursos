<?php
require_once 'models/Usuario.php';

class UsuarioDaoMysql implements UsuarioDAO {
    private $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }
    
    public function add(Usuario $u){

    }

    public function findAll(){

    }

    public function findId($id){

    }

    public function update(Usuario $u){

    }

    public function delete($id){

    }
}