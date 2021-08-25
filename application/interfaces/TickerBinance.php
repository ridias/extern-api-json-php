<?php

    interface TickerBinance {
        public function getBookTicker(): array;
        public function getBookTickerBySymbol(string $symbol): array;
        public function get24hr(): array;
        public function get24hrBySymbol(string $symbol): array;
        public function getPrice(): array;
        public function getPriceBySymbol(string $symbol): array;
    }
?>