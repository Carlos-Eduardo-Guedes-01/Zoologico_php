<?php
require_once './Animal.php';
class Galinha extends Animal{
    public $cor;
    public $raca;
    public function getCor() {
        return $this->cor;
    }

    public function getRaca() {
        return $this->raca;
    }

    public function setCor($cor): void {
        $this->cor = $cor;
    }

    public function setRaca($raca): void {
        $this->raca = $raca;
    }
    public function comunicar() {
        echo'<br> Galinha: POPO PO PO PO';
    }

}
