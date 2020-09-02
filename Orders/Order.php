<?php


namespace BuyEvent\Orders;


use BuyEvent\Clients\Client;
use BuyEvent\Products\Product;

class Order
{
    private $id;
    private Product $product;
    private Client $client;
    private string $status;
    const NEW = 'new';
    const PAID = 'paid';
    /**
     * Order constructor.
     * @param Product $product
     * @param Client $client
     */
    public function __construct(Product $product, Client $client)
    {
        $this->id = uniqid();
        $this->product = $product;
        $this->client = $client;
        $this->status = self::NEW;
    }

    public function pay(){
        $this->status = self::PAID;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}