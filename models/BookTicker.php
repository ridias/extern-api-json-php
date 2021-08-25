<?php
    require_once('BaseTicker.php');

    class BookTicker extends BaseTicker {
        private string $bidPrice;
        private string $bidQty;
        private string $askPrice;
        private string $askQty;

        public function __construct(string $symbol, string $bidPrice, string $bidQty, string $askPrice, string $askQty){
            $this->bidPrice = $bidPrice;
            $this->bidQty = $bidQty;
            $this->askPrice = $askPrice;
            $this->askQty = $askQty;

            parent::__construct($symbol);
        }

        public function getBidPrice(): string { return $this->bidPrice; }
        public function getBidQty(): string { return $this->bidQty; }
        public function getAskPrice(): string { return $this->askPrice; }
        public function getAskQty(): string { return $this->askQty; }

        public function setBidPrice(string $bidPrice): void { $this->bidPrice = $bidPrice; }
        public function setBidQty(string $bidQty): void { $this->bidQty = $bidQty; }
        public function setAskPrice(string $askPrice): void { $this->askPrice = $askPrice; }
        public function setAskQty(string $askQty): void { $this->askQty = $askQty; }

        public function toString(): string {
            return "Symbol: " . $this->getSymbol() . 
                " - Bid price: " . $this->bidPrice .
                " - Bid qty: " . $this->bidQty . 
                " - Ask price: " . $this->askPrice .
                " - Ask qty: " . $this->askQty;
        }
    }
?>
 