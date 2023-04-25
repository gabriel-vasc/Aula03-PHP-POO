<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Caneta
 *
 * @author gabri
 */
class Caneta {
    
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>Erro! Não posso rabiscar</p>";
        } else {
            echo "<p>Estou rabiscando...</p>";
        }
        
    }
    
    public function tampar() {
        
        $this->tampada = true;
        
    }
    
    public function destampar() {
        
        $this->tampada = false;
        
    }
    
}
