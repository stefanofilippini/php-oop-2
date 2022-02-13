<?php
//definisco una classe base senza sconti
    class User {
        protected $name;
        protected $product;
        protected $price;

        public function __construct($name, $product, $price)
        {
            $this->name = $name;
            $this->product = $product;
            $this->price = $price;
        }

        public function getName() {
            return $this->name;
        }
        public function getProduct() {
            return $this->product;
        }
        public function getPrice() {
            return $this->price;
        }
    }