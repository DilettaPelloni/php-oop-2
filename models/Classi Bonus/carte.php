<?php

class Carte {
    private $numero;
    private $scadenza;
    private $codice;
    private $proprietario;

    function __construct(
        string $numero,
        string $scadenza,
        int $codice,
        string $proprietario
    ){
        $this->setNumero($numero);
        $this->setScadenza($scadenza);
        $this->setCodice($codice);
        $this->setProprietario($proprietario);
    }

    //getters
    public function getNumero() {
        return $this->numero;
    }
    public function getScadenza() {
        return $this->scadenza;
    }
    public function getCodice() {
        return $this->codice;
    }
    public function getProprietario() {
        return $this->proprietario;
    }

    //setters
    public function setNumero($numero) {
        $this->numero = $numero;
    }
    public function setScadenza($scadenza) {
        if($scadenza > date("m-Y")) {
            $this->scadenza = $scadenza;
        }
        else {
            throw new Exception ('Carta scaduta');
        }
    }
    public function setCodice($codice) {
        $this->codice = $codice;
    }
    public function setProprietario($proprietario) {
        $this->proprietario = $proprietario;
    }
}