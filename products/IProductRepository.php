<?php


namespace BuyEvent\products;


interface IProductRepository {
   public function save(Product $product);
}