<?php

    include './infrastructure/parser/BookTickerParser.php';
    include './infrastructure/parser/PriceParser.php';
    include './infrastructure/parser/Ticker24hrParser.php';

    include './application/interfaces/TickerBinance.php';
    
    class BinanceApiTicker implements TickerBinance {
        
        private Parser $parser;

        public function getBookTicker(): array {
            $result = array();
            $this->parser = new BookTickerParser();
            $result = $this->callMethodGet("https://api.binance.com/api/v3/ticker/bookTicker");
            return $this->parser->parseToArrayOfObjs($result);
        }

        public function getBookTickerBySymbol(string $symbol): array
        {
            $this->parser = new BookTickerParser();
            $obj = $this->callMethodGet("https://api.binance.com/api/v3/ticker/bookTicker?symbol=" . $symbol);
            return $this->parser->parse($obj);
        }

        public function get24hr(): array
        {
            $result = array();
            $this->parser = new Ticker24hrParser();
            $result = $this->callMethodGet("https://api.binance.com/api/v3/ticker/24hr");
            return $this->parser->parseToArrayOfObjs($result);
        }

        public function get24hrBySymbol(string $symbol): array
        {
            $this->parser = new Ticker24hrParser();
            $obj = $this->callMethodGet("https://api.binance.com/api/v3/ticker/24hr?symbol=" . $symbol);
            return $this->parser->parse($obj);
        }

        public function getPrice(): array
        {
            $result = array();
            $this->parser = new PriceParser();
            $result = $this->callMethodGet("https://api.binance.com/api/v3/ticker/price");
            return $this->parser->parseToArrayOfObjs($result);
        }

        public function getPriceBySymbol(string $symbol): array
        {
            $this->parser = new PriceParser();
            $obj = $this->callMethodGet("https://api.binance.com/api/v3/ticker/price?symbol=" . $symbol);
            return $this->parser->parse($obj);
        }

        private function callMethodGet(string $url) {
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec($curl);
            curl_close($curl);
            return json_decode($response);
        }
    }
?>