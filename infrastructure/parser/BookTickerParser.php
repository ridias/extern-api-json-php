<?php

    require_once('./application/interfaces/Parser.php');
    include './models/BookTicker.php';

    class BookTickerParser implements Parser {

        public function __construct()
        {
            
        }

        public function parse(object $obj): array
        {
            $result = array();
            if($obj == null) return $result;
            
            $bookTicker = new BookTicker(
                $obj->{'symbol'},
                $obj->{'bidPrice'},
                $obj->{'bidQty'},
                $obj->{'askPrice'},
                $obj->{'askQty'}
            );
            
            array_push($result, $bookTicker);
            return $result;
        }

        public function parseToArrayOfObjs(array $response): array
        {
            $result = array();
            if($response == null) return $result;

            for($i = 0; $i < count($response); $i++){
                $obj = $response[$i];
                $bookTicker = new BookTicker(
                    $obj->{'symbol'},
                    $obj->{'bidPrice'},
                    $obj->{'bidQty'},
                    $obj->{'askPrice'},
                    $obj->{'askQty'}
                );

                array_push($result, $bookTicker);
            }

            return $result;
        }
    }
?>