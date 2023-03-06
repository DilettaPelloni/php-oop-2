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
        if($this->disp) {
            return 'Si';
        }
        return 'No';
    }
    protected function getCategIcona() {
        return $this->categ->getIcona();
    }
    protected function getCategNome() {
        return $this->categ->getNome();
    }
    protected function getImgPath() {
        return $this->imgPath;
    }


    //metodi
    protected function print(){
        echo "<li>";
        echo "<strong>Categoria: </strong>".$this->getCategIcona();
        echo "</li>";
        echo "<li>";
        echo "<strong>".$this->getNome()."</strong>";
        echo "</li>";
        echo "<li>";
        echo '<img src="'.$this->getImgPath().'" alt"'.$this->getNome().'"/>';
        echo "</li>";
        echo "<li>";
        echo "<strong>Prezzo: </strong>".$this->getPrezzo();
        echo "</li>";
        echo "<li>";
        echo "<strong>Disponibile: </strong>".$this->getDisp();
        echo "</li>";
    }
}