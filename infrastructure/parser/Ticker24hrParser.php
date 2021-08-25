<?php

    require_once('./application/interfaces/Parser.php');
    include './models/Ticker24hr.php';

    class Ticker24hrParser implements Parser {

        public function __construct()
        {
            
        }

        public function parse(object $obj): array {
            $result = array();
            if($obj == null) return $result;
            $ticker24hr = new Ticker24hr();
            $ticker24hr->setSymbol($obj->{"symbol"});
            $ticker24hr->setPriceChange($obj->{"priceChange"});
            $ticker24hr->setPriceChangePercent($obj->{"priceChangePercent"});
            $ticker24hr->setWeightedAvgPrice($obj->{"weightedAvgPrice"});
            $ticker24hr->setPrevClosePrice($obj->{"prevClosePrice"});
            $ticker24hr->setLastPrice($obj->{"lastPrice"});
            $ticker24hr->setLastQty($obj->{"lastQty"});
            $ticker24hr->setBidPrice($obj->{"bidPrice"});
            $ticker24hr->setAskPrice($obj->{"askPrice"});
            $ticker24hr->setOpenPrice($obj->{"openPrice"});
            $ticker24hr->setHighPrice($obj->{"highPrice"});
            $ticker24hr->setLowPrice($obj->{"lowPrice"});
            $ticker24hr->setVolume($obj->{"volume"});
            $ticker24hr->setQuoteVolume($obj->{"quoteVolume"});
            $ticker24hr->setOpenTime(floatval($obj->{"openTime"}));
            $ticker24hr->setCloseTime(floatval($obj->{"closeTime"}));
            $ticker24hr->setFirstId(floatval($obj->{"firstId"}));
            $ticker24hr->setLastId(floatval($obj->{"lastId"}));
            $ticker24hr->setCount(intval($obj->{"count"}));
            array_push($result, $ticker24hr);
            return $result;
        }

        public function parseToArrayOfObjs(array $response): array
        {
            $result = array();
            if($response == null) return $result;

            for($i = 0; $i < count($response); $i++){
                $obj = $response[$i];
                $ticker24hr = new Ticker24hr();
                $ticker24hr->setSymbol($obj->{"symbol"});
                $ticker24hr->setPriceChange($obj->{"priceChange"});
                $ticker24hr->setPriceChangePercent($obj->{"priceChangePercent"});
                $ticker24hr->setWeightedAvgPrice($obj->{"weightedAvgPrice"});
                $ticker24hr->setPrevClosePrice($obj->{"prevClosePrice"});
                $ticker24hr->setLastPrice($obj->{"lastPrice"});
                $ticker24hr->setLastQty($obj->{"lastQty"});
                $ticker24hr->setBidPrice($obj->{"bidPrice"});
                $ticker24hr->setAskPrice($obj->{"askPrice"});
                $ticker24hr->setOpenPrice($obj->{"openPrice"});
                $ticker24hr->setHighPrice($obj->{"highPrice"});
                $ticker24hr->setLowPrice($obj->{"lowPrice"});
                $ticker24hr->setVolume($obj->{"volume"});
                $ticker24hr->setQuoteVolume($obj->{"quoteVolume"});
                $ticker24hr->setOpenTime(floatval($obj->{"openTime"}));
                $ticker24hr->setCloseTime(floatval($obj->{"closeTime"}));
                $ticker24hr->setFirstId(floatval($obj->{"firstId"}));
                $ticker24hr->setLastId(floatval($obj->{"lastId"}));
                $ticker24hr->setCount(intval($obj->{"count"}));
                array_push($result, $ticker24hr);
            }

            return $result;
        }
    }

?>