<?php


namespace BuyEvent\products;


interface IPoduct {
    /**
     * @return string
     */
    public function getId();

    /**
     * @param string $id
     */
    public function setId(string $id);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName(string $name);

    /**
     * @return string
     */
    public function getPrice();

    /**
     * @param string $price
     */
    public function setPrice(string $price);
}