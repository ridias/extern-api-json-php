<?php

    require_once('BaseTicker.php');

    class Price extends BaseTicker {

        private string $price;

        public function __construct(string $symbol, string $price){
            parent::__construct($symbol);
            $this->price = $price;
        }

        public function getPrice(): string { return $this->price; }
        public function setPrice(string $price): void { $this->price = $price; }

        public function toString(): string {
            return "Symbol: " . $this->getSymbol() . " - Price: " . $this->price;
        }
    }
?>