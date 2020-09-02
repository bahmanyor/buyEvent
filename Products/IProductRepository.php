<?php


namespace BuyEvent\Products;


interface IProductRepository {
   public function save(Product $product);
}