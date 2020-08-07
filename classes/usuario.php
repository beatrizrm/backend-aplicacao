<?php

// classe usuário 

class Usuario {
    private $idusuario; 
    private $nousuario; 
    private $email; 
    private $senha; 
    private $idsetor; 
    
    function getIdusuario() {
        return $this->idusuario;
    }

    function getNousuario() {
        return $this->nousuario;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getIdsetor() {
        return $this->idsetor;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setNousuario($nousuario) {
        $this->nousuario = $nousuario;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setIdsetor($idsetor) {
        $this->idsetor = $idsetor;
    }

    function __construct($idusuario, $nousuario, $email, $senha, $idsetor) {
        $this->idusuario = $idusuario;
        $this->nousuario = $nousuario;
        $this->email = $email;
        $this->senha = $senha;
        $this->idsetor = $idsetor;
    }
    
    
    // funções 
    
    public function lista(){
        try {
            $sql  = "select * from tbusuario;";
            
            $conn = ConexaoBD::conecta();
            $sql  = $conn->query($sql);
            $res = array();  
            while($row = $sql->fetch(PDO::FETCH_OBJ)) {
                $usuario = new Usuario();
                $usuario->setNousuario($row->NoUsuario);
             
              
                $res [] = $usuario;
            }
            return $res;
        } catch (Exception $e) {
             echo "ERRO: ".$e->getMessage()."<br><br>";
        }     
    }
    
}



?>

