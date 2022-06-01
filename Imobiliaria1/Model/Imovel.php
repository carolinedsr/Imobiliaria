<?php

    require_once 'Banco.php';
    require_once '../Conexao.php';
    
    class Imovel extends Banco{

        private $id;
        private $descricao;
        private $valor;
        private $tipo;
        

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }
        
        public function getDescricao(){
            return $this->descricao;
        }

        public function setDescricao($descricao){
            return $this->descricao = $descricao;
        }

        public function getValor(){
            return $this->valor;
        }

        public function setValor($valor){
            return $this->valor = $valor;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($tipo){
            return $this->tipo =  $tipo;
        }


        public function save(){

            $result = false;

            $conexao = new Conexao();

            $query = "Insert into imovel (id, descricao, valor, tipo) values (null,:descricao,:valor,:tipo)";

            if($conn = $conexao->getConection()){

                $star = $conn->prepare($query);

                if($star->execute(array(':descricao' => $this->descricao, ':valor' => $this->valor, ':tipo' => $this->tipo))){
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
            
            $query = "SELECT * FROM imovel";

            $stmt = $conn->prepare($query);

            $result = array();

            if($stmt->execute()){

                while($rs = $stmt->fetchObject(Imovel::class)){

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