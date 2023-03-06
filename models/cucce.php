<?php

require_once __DIR__.'/prodotti.php';

class Cucce extends Prodotti{
    private $materiale;
    private $capienza;

    function __construct(
        string $tipo,
        string $nome,
        float $prezzo,
        bool $disp,
        Categorie $categ,
        string $imgPath,
        string $materiale,
        string $capienza
    ) {
        parent::__construct($tipo, $nome, $prezzo, $disp, $categ, $imgPath);
        $this->materiale = $materiale;
        $this->capienza = $capienza;
    }

    //getters
    public function getMateriale() {
        return $this->materiale;
    }
    public function getCapienza() {
        return $this->capienza;
    }
}