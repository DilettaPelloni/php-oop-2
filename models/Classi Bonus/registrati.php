<?php

//classe per utenti registrati

require_once __DIR__.'/users.php';

class Registrati extends Users {
    public $sconto = 20;
    private $userName;
    private $password;
    private $email;

    function __construct(
        int $sconto,
        Carrelli $carrello,
        Carte $carta,
        string $userName,
        string $password,
        string $email
    ){
        parent::__construct($sconto, $carrello, $carta,);
        $this->setUserName($userName);
        $this->setPassword($password);
        $this->setEmail($email);               
    }

    //getters
    public function getUserName() {
        return $this->userName;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getEmail() {
        return $this->email;
    }

    //setters
    public function setUserName($userName) {
        $this->userName = $userName;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function setEmail($email) {
        $this->email = $email; 
    }
}
