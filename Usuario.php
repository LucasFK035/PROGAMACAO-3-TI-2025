<?php

require_once __DIR__ . '/ActiveRecord.php';
class Usuario implements ActiveRecord{

    private int $idUsuario;

    public function __construct(private string $email,private string $senha){
    }

    public function setIdUsuario(int $idUsuario):void{
        $this->idUsuario = $idUsuario;
    }

    public function getIdUsuario():int{
        return $this->idUsuario;
    }

    public function setSenha(string $senha):void{
        $this->senha = $senha;
    }

    public function setEmail(string $email):void{
        $this->email = $email;
    }

    public function getSenha():string{
        return $this->senha;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function save():bool{
        $conectar = new MySQL();
        $senhaHash = password_hash($this->senha,PASSWORD_BCRYPT);
        if(isset($this->idUsuario)){
            $sql = "UPDATE usuarios SET email = '{$this->email}', senha = '{$senhaHash}' WHERE idUsuario = {$this->idUsuario}";
        }else{
            $sql = "INSERT INTO usuarios (email,senha) VALUES ('{$this->email}','{$senhaHash}')";
        }
        return $conectar->executar($sql);
    }

    public static function find($idUsuario):Usuario{
        $conectar = new MySQL();
        $sql = "SELECT * FROM usuarios WHERE idUsuario = {$idUsuario}";
        $resposta = $conectar->consultar($sql);
        $x = new Usuario($resposta[0]['email'],$resposta[0]['senha']);
        $x->setIdUsuario($resposta[0]['idUsuario']);
        return $x;
    }

    public function delete():bool{
        $conectar = new MySQL();
        $sql = "DELETE FROM usuarios WHERE idUsuario = {$this->idUsuario}";
        return $conectar->executar($sql);
    }

    public static function findall():array{
        $conectar = new MySQL();
        $sql = "SELECT * FROM usuarios";
        $respostas = $conectar->consultar($sql);
        $usuarios = array();
        foreach($respostas as $resposta){
            $x = new Usuario($resposta['email'],$resposta['senha']);
            $x->setIdUsuario($resposta['idUsuario']);
            $usuarios[] = $x;
        }
        return $usuarios;
    }

    public function authenticate():bool{
        $conectar = new MySQL();
        $sql = "SELECT idUsuario, email, senha FROM usuarios WHERE email = '{$this->email}'";
        $respostas = $conectar->consultar($sql);
        if($respostas && password_verify($this->senha,$respostas[0]['senha'])){
            session_start();
            $_SESSION['idUsuario'] = $respostas[0]['idUsuario'];
            $_SESSION['email'] = $respostas[0]['email'];
            return true;
        }else{
            return false;
        }
    }
}