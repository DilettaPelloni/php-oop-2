<?php

class Carrelli {
    private $prodotti;
    private $totale;

    function __construct(
        array $prodotti,
        float $totale
    ){
        $this->setProdotti($prodotti);
        $this->setTotale($totale);        
    }

    //getters
    public function getProdotti() {
        return $this->prodotti;
    }
    public function getTotale() {
        return $this->totale;
    }

    //setters
    public function setProdotti($prodotti) {
        $this->prodotti= $prodotti;
    }
    public function setTotale($totale) {
        $this->totale = $totale;
    }

    //metodi
    public function aggiungiProd($prodotto) {
        $this->prodotti[] = $prodotto;
    }
}