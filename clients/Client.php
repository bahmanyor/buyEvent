<?php
namespace BuyEvent\clients;
class Client implements  IClient {
    private string $id;
    private string $name;
    private string $number;
    private string $email;


    /**
     * Client constructor.
     * @param string $name
     * @param string $number
     * @param string $email
     */
    public function __construct(string $name, string $number, string $email) {
        $this->id = uniqid();
        $this->name = $name;
        $this->number = $number;
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getNumber(): string {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getEmail(): string {
        return $this->email;
    }
}