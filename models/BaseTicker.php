<?php
    
    abstract class BaseTicker {

        private string $symbol;

        public function __construct(string $symbol){
            $this->symbol = $symbol;
        }

        public function setSymbol($symbol): void{
            $this->symbol = $symbol;
        } 

        public function getSymbol(): string{
            return $this->symbol;
        }
    } 

?>