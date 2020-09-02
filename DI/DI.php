<?php


namespace BuyEvent\DI;


class DI implements IDependencyInjection
{

    /**
     * @var array
     */
    private array $container = [];


    /**
     * @param string $key
     * @param $value
     * @return $this|mixed
     */
    public function set($key, $value)
    {
        $this->container[$key] = $value;
        return $this;

    }

    /**
     * @param $key
     * @return mixed
     */
    public function get($key)
    {
        return $this->container[$key];
    }

    /**
     * @param $key
     * @return bool
     */
    public function has($key): bool
    {
        return isset($this->container[$key]);
    }
}