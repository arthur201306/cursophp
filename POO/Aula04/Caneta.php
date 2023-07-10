<?php 
  class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    public function __construct($m, $c, $p) {
      $this->modelo = $m;
      $this->cor = $c;
      $this->ponta = $p;
      // $this->tampar();
    }
    

    /**
     * Get the value of modelo
     */
    public function getModelo() {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self {
        $this->modelo = $modelo;
        return $this;
    }

    /**
     * Get the value of cor
     */
    public function getCor() {
        return $this->cor;
    }

    /**
     * Set the value of cor
     */
    public function setCor($cor): self {
        $this->cor = $cor;
        return $this;
    }

    /**
     * Get the value of ponta
     */
    public function getPonta() {
        return $this->ponta;
    }

    /**
     * Set the value of ponta
     */
    public function setPonta($ponta): self {
        $this->ponta = $ponta;
        return $this;
    }
  }
?>