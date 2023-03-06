<?php

require_once __DIR__.'/prodotti.php';

class Giochi extends Prodotti{
    private $materiale;
    private $daEsterno;

    function __construct(
        string $tipo,
        string $nome,
        float $prezzo,
        bool $disp,
        Categorie $categ,
        string $imgPath,
        string $materiale,
        bool $daEsterno
    ) {
        parent::__construct($tipo, $nome, $prezzo, $disp, $categ, $imgPath);
        $this->materiale = $materiale;
        $this->daEsterno = $daEsterno;
    }

    //getters
    public function getMateriale() {
        return $this->materiale;
    }
    public function getDaEsterno() {
        if($this->daEsterno) {
            return "Utilizzabile solo all'esterno"
        }
        return "Per esterni ed inetrni";
    }

    //metodi
    public function print() {
        parent::print();
        echo "<li>";
        echo "<strong>Materiale: </strong>".$this->getMateriale();
        echo "</li>";
        echo "<li>";
        echo "<strong>Utilizzo: </strong>".$this->getDaEsterno();
        echo "</li>";
    }
}