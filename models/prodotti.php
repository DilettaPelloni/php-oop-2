<?php

require_once __DIR__.'/categorie.php';

class Prodotti {
    protected $tipo;
    protected $nome;
    protected $prezzo;
    protected $disp;
    protected $categ;
    protected $imgPath;

    function __construct(
        string $tipo,
        string $nome,
        float $prezzo,
        bool $disp,
        Categorie $categ,
        string $imgPath
    ){
        $this->tipo = $tipo;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->disp = $disp;
        $this->categ = $categ;
        $this->imgPath = $imgPath;
    }

    //getters
    protected function getTipo() {
        return $this->tipo;
    }
    protected function getNome() {
        return $this->nome;
    }
    protected function getPrezzo() {
        return $this->prezzo;
    }
    protected function getDisp() {
        return $this->disp;
    }
    protected function getCateg() {
        return $this->categ;
    }
    protected function getImgPath() {
        return $this->imgPath;
    }
}