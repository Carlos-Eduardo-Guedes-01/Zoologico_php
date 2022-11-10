<?php
require_once './Animal.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Cachorro
 *
 * @author naza-
 */
class Cachorro extends Animal {
    private $raca;
    
    public function getRaca() {
        return $this->raca;
    }

    public function setRaca($raca): void {
        $this->raca = $raca;
    }

    public function comunicar() {
        echo 'Cachorro: Au au au';
    }

}
