<?php


namespace BuyEvent\DI;


class Container
{

    /**
     * @var
     */
    protected static $instance;

    protected static array $instances = [];

    protected function __construct(){}

    public static function getInstance() : Container
    {
        if(is_null(self::$instance)){
            self::$instance = new static();
        }
        return self::$instance;
    }

    public function make($abstract, $parameters = []){
         return $this->get($abstract, $parameters);
    }

    private function set($abstract){
        $this->instances[$abstract] = $abstract;
    }

    private function get($abstract, $parameters = []){
       if(!isset($this->instances[$abstract])){
           $this->set($abstract);
       }
    }
}