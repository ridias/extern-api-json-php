<?php

    include './infrastructure/api/BinanceApiTicker.php';

    $api = new BinanceApiTicker();

    echo("Get prices of all pairs: <br>" );
    $result = $api->getPrice();
    for($i = 0; $i < count($result); $i++){
        echo($result[$i]->toString() . '<br>');
    }

    echo("<br>");
    echo("<br>");
    sleep(1);

    echo("Get price by symbol: <br>" );
    $result = $api->getPriceBySymbol("ETHBTC");
    for($i = 0; $i < count($result); $i++){
        echo($result[$i]->toString() . '<br>');
    }
    echo("<br>");
    echo("<br>");
    sleep(1);

    echo("Get all booktickers of all pairs: <br>");
    $result = $api->getBookTicker();
    for($i = 0; $i < count($result); $i++){
        echo($result[$i]->toString() . '<br>');
    }

    echo("<br>");
    echo("<br>");
    sleep(1);

    echo("Get bookticker of specific pair: <br>");
    $result = $api->getBookTickerBySymbol("ETHBTC");
    for($i = 0; $i < count($result); $i++){
        echo($result[$i]->toString() . '<br>');
    }

    echo("<br>");
    echo("<br>");
    sleep(1);
?>