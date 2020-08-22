<?php

namespace BuyEvent\clients;
interface IClientRepository {
    public function findAll();

    public function save(Client $client);
}