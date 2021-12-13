<?php

namespace App\Http\Controllers\Web\V1\Products;

use App\Http\Controllers\Controller;
use App\Repository\Eloquent\ProductsRepository;
use App\Repository\ProductsRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @var ProductsRepositoryInterface
     */
    private $productsRepository;

    /**
     * ProductController constructor.
     * @param ProductsRepositoryInterface $productsRepository
     */
    public function __construct(ProductsRepositoryInterface $productsRepository)
    {
        $this->productsRepository = $productsRepository;
    }

    public function storeProductById($id)
    {
        $data = $this->productsRepository->storeProductById($id);
        return view('site.product.index', compact('data'));
    }

    public function addProductToCart($id): bool
    {
        $product = $this->productsRepository->addProductToCart($id);
        return true;
    }

    public function getProductFromCart(): bool
    {
        $product = $this->productsRepository->getProductFromCart();
        return true;
    }

    public function removeProductFromCart($id): bool
    {
        $product = $this->productsRepository->removeProductFromCart($id);
        return true;
    }
}
