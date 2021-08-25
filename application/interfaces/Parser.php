<?php

    interface Parser {
        public function parse(object $obj): array;
        public function parseToArrayOfObjs(array $response): array;
    }

?>