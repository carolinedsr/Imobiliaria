<?php

    require_once 'Banco.php';
    require_once '../Conexao.php';
    
    class Usuario extends Banco{

        private $id;
        private $login;
        private $senha;
        private $permissao;

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }
        
        public function getLogin(){
            return $this->login;
        }

        public function setLogin($login){
            return $this->login = $login;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($senha){
            return $this->senha = $senha;
        }

        public function getPermissao(){
            return $this->permissao;
        }

        public function setPermissao($permissao){
            return $this->permissao =  $permissao;
        }

        public function save(){

            $result = false;

            $conexao = new Conexao();

            $query = "Insert into usuario (id, login, senha, permissao) values (null,:login,:senha,:permissao)";

            if($conn = $conexao->getConection()){

                $star = $conn->prepare($query);

                if($star->execute(array(':login' => $this->login, ':senha' => $this->senha, ':permissao' => $this->permissao))){
                    $result = $star->rowCount();
                }
            }
            return $result;
        }
        
        public function remove($id){

        }

        public function find($id){

        }

        public function listAll(){
            
            $conexao = new Conexao();

            $conn = $conexao->getConection();
            
            $query = "SELECT * FROM usuario";

            $stmt = $conn->prepare($query);

            $result = array();

            if($stmt->execute()){

                while($rs = $stmt->fetchObject(Usuario::class)){

                    $result[] = $rs;
                }
            }else{
                
                $result = false;
            }
            
            return $result;
        }
        
        public function count(){

        }
        
    }
?>