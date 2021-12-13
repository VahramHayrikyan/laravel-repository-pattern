<?php


namespace App\Repository;


interface ProductsRepositoryInterface
{

    /**
     * @param null $request
     * @return mixed
     */
    public function init($request = null);

    /**
     * @return mixed
     */
    public function pageTrovePaginateProduct();

    /**
     * @param $id
     * @return mixed
     */
    public function storeProductById($id);

    /**
     * @param $id
     * @return mixed
     */
    public function addProductToCart($id);

    public function addProductsToCart($request);

    /**
     * @param $id
     * @return mixed
     */
    public function removeProductFromCart($id);


    /**
     * @return mixed
     */
    public function getProductFromCart();

    public function getProductsFromCart();

}
