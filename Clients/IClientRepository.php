<?php

namespace BuyEvent\Clients;
interface IClientRepository {
    public function findAll();

    public function save(Client $client);
}