<?php
    
    class Categoria{
      private $id;

      private $nome;

      function _contruct($id, $nome) {
        $this->id = $id;
        $this->nome = $nome;
      }

      public function getId() {
        return $this->id;
      }

      public function setId($id) {
        $this->id = $id;
      }

      public function getNome() {
        return $this->nome;
      }

      public function setNome($nome) {
        $this->nome = $nome;
      }
    }

?>