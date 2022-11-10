<?php
require_once './Animal.php';
class Humano extends Animal{
    private $nacionalidade;
    private $estadoCivil;
    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getEstadoCivil() {
        return $this->estadoCivil;
    }

    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    public function setEstadoCivil($estadoCivil): void {
        $this->estadoCivil = $estadoCivil;
    }
    public function comunicar() {
        echo '<br> Humano:Olá, Boa noite!';
    }
}
