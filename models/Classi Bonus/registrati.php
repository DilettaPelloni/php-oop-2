<?php

//classe per utenti registrati

require_once __DIR__.'/users.php';

class Registrati extends Users {
    public $sconto = 20;
    private $userName;
    private $password;
    

}
