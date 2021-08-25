<?php 

    require_once('./application/interfaces/Parser.php');
    include './models/Price.php';

    class PriceParser implements Parser {

        public function __construct(){

        }

        public function parse(object $obj): array
        {
            $result = array();
            if($obj == null) return $result;
            $price = new Price(
                $obj->{'symbol'},
                $obj->{'price'}
            );

            array_push($result, $price);
            return $result;
        }

        public function parseToArrayOfObjs(array $response): array
        {
            $result = array();
            if($response == null) return $result;

            for($i = 0; $i < count($response); $i++){
                $obj = $response[$i];
                $price = new Price(
                    $obj->{'symbol'},
                    $obj->{'price'}
                );
                array_push($result, $price);
            }

            return $result;
        }
    }
?>