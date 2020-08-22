<?php


namespace BuyEvent\logger;


class LOG {
    public static function error($massage){
        $fileopen=fopen("logs/logs.txt", "a+");
        $write="{$massage}\r\n";
        fwrite($fileopen,$write);
        fclose($fileopen);
    }
}