<?php


namespace BuyEvent\Clients;


interface IClient {
    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getNumber();

    /**
     * @return string
     */
    public function getEmail();
}