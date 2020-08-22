<?php
namespace BuyEvent\clients;

class ClientRepository implements IClientRepository {

    /**
     * @return mixed
     */
    public function findAll() {
        //echo "find";
    }

    /**
     * @param Client $client
     * @return mixed
     */
    public function save(Client $client) {
       // echo "saved";
    }
}