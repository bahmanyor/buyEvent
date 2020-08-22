<?php


namespace BuyEvent\products;


class Product implements IPoduct {
    private string $id;
    private string $name;
    private string $price;
    private string $currency;

    /**
     * Product constructor.
     * @param string $name
     * @param string $price
     * @param $currency
     */
    public function __construct(string $name, string $price, $currency) {
        $this->id = uniqid();;
        $this->name = $name;
        $this->price = $price;
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPrice(): string {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice(string $price): void {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
}