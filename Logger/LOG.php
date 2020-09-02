<?php


namespace BuyEvent\Logger;


class LOG {
    public static function error($massage){
        $fileopen=fopen("Logs/Logs.txt", "a+");
        $write="{$massage}\r\n";
        fwrite($fileopen,$write);
        fclose($fileopen);
    }
}