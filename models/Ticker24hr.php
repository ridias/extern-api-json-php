<?php

    require_once('BaseTicker.php');

    class Ticker24hr extends BaseTicker {

        private string $priceChange;
        private string $priceChangePercent;
        private string $weightedAvgPrice;
        private string $prevClosePrice;
        private string $lastPrice;
        private string $lastQty;
        private string $bidPrice;
        private string $askPrice;
        private string $openPrice;
        private string $highPrice;
        private string $lowPrice;
        private string $volume;
        private string $quoteVolume;
        private float $openTime;
        private float $closeTime;
        private float $firstId;
        private float $lastId;
        private int $count;

        public function __construct()
        {
            
        }

        public function getPriceChange(): string { return $this->priceChange; }
        public function getPriceChangePercent(): string { return $this->priceChangePercent; }
        public function getWeightedAvgPrice(): string { return $this->weightedAvgPrice; }
        public function getPrevClosePrice(): string { return $this->prevClosePrice; }
        public function getLastPrice(): string { return $this->lastPrice; }
        public function getLastQty(): string { return $this->lastQty; }
        public function getBidPrice(): string { return $this->bidPrice; }
        public function getAskPrice(): string { return $this->askPrice; }
        public function getOpenPrice(): string { return $this->openPrice; }
        public function getHighPrice(): string { return $this->highPrice; }
        public function getLowPrice(): string { return $this->lowPrice; }
        public function getVolume(): string { return $this->volume; }
        public function getQuoteVolume(): string { return $this->quoteVolume; }
        public function getOpenTime(): float { return $this->openTime; }
        public function getCloseTime(): float { return $this->closeTime; }
        public function getFirstId(): float { return $this->firstId; }
        public function getLastId(): float { return $this->lastId; }
        public function getCount(): int { return $this->count; }

        public function setPriceChange(string $value): void { $this->priceChange = $value; }
        public function setPriceChangePercent(string $value): void { $this->priceChangePercent = $value; }
        public function setWeightedAvgPrice(string $value): void { $this->weightedAvgPrice = $value; }
        public function setPrevClosePrice(string $value): void { $this->prevClosePrice = $value; }
        public function setLastPrice(string $value): void { $this->lastPrice = $value; }
        public function setLastQty(string $value): void { $this->lastQty = $value; }
        public function setBidPrice(string $value): void { $this->bidPrice = $value; }
        public function setAskPrice(string $value): void { $this->askPrice = $value; }
        public function setOpenPrice(string $value): void { $this->openPrice = $value; }
        public function setHighPrice(string $value): void { $this->highPrice = $value; }
        public function setLowPrice(string $value): void { $this->lowPrice = $value; }
        public function setVolume(string $value): void { $this->volume = $value; }
        public function setQuoteVolume(string $value): void { $this->quoteVolume = $value; }
        public function setOpenTime(float $value): void { $this->openTime = $value; }
        public function setCloseTime(float $value): void { $this->closeTime = $value; }
        public function setFirstId(float $value): void { $this->firstId = $value; }
        public function setLastId(float $value): void { $this->lastId = $value; }
        public function setCount(int $value): void { $this->count = $value; }

        public function toString(): string{
            return "Ticker24hr [symbol=" . $this->getSymbol() . ", priceChange=" . $this->priceChange . ", priceChangePercent=" . $this->priceChangePercent
            . ", weightedAvgPrice=" . $this->weightedAvgPrice . ", prevClosePrice=" . $this->prevClosePrice . ", lastPrice="
            . $this->lastPrice . ", lastQty=" . $this->lastQty . ", bidPrice=" . $this->bidPrice . ", askPrice=" . $this->askPrice
            . ", openPrice=" . $this->openPrice . ", highPrice=" . $this->highPrice . ", lowPrice=" . $this->lowPrice . ", volume="
            . $this->volume . ", quoteVolume=" . $this->quoteVolume . ", openTime=" . $this->openTime . ", closeTime=" . $this->closeTime
            . ", firstId=" . $this->firstId . ", lastId=" . $this->lastId . ", count=" . $this->count . "]";
        }
    }
?>