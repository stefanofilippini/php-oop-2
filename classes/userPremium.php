<?php
//definisco una classe con uno sconto del 30% per utente premium
    require_once __DIR__ . '/user.php';



    class UserPremium extends User {
        //uso extends per avere gli stessi attributi della classe user e in aggiunta avere gli attributi della classe premium
        public $discount = 30;
        public function __construct($name, $product, $price) {
            parent::__construct($name, $product, $price);
        }

        //uso una funzione privata per non permettere all'utente di selezionare la sua percentuale di sconto
        private function setDiscount() {
            return $this->price - (($this->price * $this->discount) / 100);
        }

        public function getDiscount() {
            return $this->setDiscount();
        }
    }