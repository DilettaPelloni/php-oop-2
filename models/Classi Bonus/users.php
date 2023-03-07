<?php

require_once __DIR__.'/carrelli.php';
require_once __DIR__.'/carte.php';

class Users {
    protected $sconto;
    protected $carrello;
    protected $carta;

    function __construct (
        int $sconto,
        Carrelli $carrello,
        Carte $carta
    ) {
        $this->setSconto($sconto);
        $this->setCarrello($carrello);
        $this->setCarta($carta);
    }

    //getters
    public function getSconto() {
        return $this->sconto;
    }
    public function getCarrello() {
        return $this->carrello;
    }
    public function getCarta() {
        return $this->carta;
    }

    //setters
    public function setSconto($sconto) {
        $this->sconto = $sconto;
    }
    public function setCarrello($carrello) {
       $this->carrello = $carrello;
    }
    public function setCarta($carta) {
        return $this->carta = $carta;
    }

    //metodi
    public function compra() {
        //svuoto il carrello
        $this->carrello->setProdotti([]);
    }
}