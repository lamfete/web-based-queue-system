<?php

Class Redis {
    function config() {
        $client = new Predis\Client([
            'scheme' => 'tcp',
            'host'   => '127.0.0.1',
            'port'   => 6379,
            'database' => 0 // default is 0, you can put 0-15
        ]);

        return $client;
    }
}
