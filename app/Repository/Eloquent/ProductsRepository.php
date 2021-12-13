<?php


namespace App\Repository\Eloquent;


use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Tag;
use App\Repository\ProductsRepositoryInterface;
use App\Services\CartService;
use App\Services\ProductsService;
use App\Traits\DataSkipTakeTrait;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ProductsRepository implements ProductsRepositoryInterface
{
    /**
     * @var Product
     */
    protected $productModel;
    private $productsService;
    private $productCategoryModel;

    /**
     * ProductsRepository constructor.
     * @param Product $productModel
     * @param ProductCategory $productCategoryModel
     * @param ProductsService $productsService
     */
    public function __construct(Product $productModel, ProductCategory $productCategoryModel, ProductsService $productsService)
    {
        $this->productModel = $productModel;
        $this->productsService = $productsService;
        $this->productCategoryModel = $productCategoryModel;
    }

    /**
     * @param array $request
     * @return mixed
     */
    public function init($request = [])
    {
        $productModel = $this->productModel;
        $products['promo'] = $this->productsService->promo($request, $productModel);
        $products['staff'] = $this->productsService->staff($productModel);
        $products['trove'] = $this->productsService->trove($productModel);
        return $productModel->get();
    }

    /**
     * @return array
     */
    public function pageTrovePaginateProduct(): array
    {
        $productModel = $this->productModel;
        $productCategoryModel = $this->productCategoryModel;
        $tagModel = new Tag();
        $products['trove'] = $productModel->where(['hide_from_store'=>0])->paginate(25);
        $products['productCategories'] = $productCategoryModel->get();
        $products['allSystems'] = $tagModel->whereCategory('platform')->orderBy('name')->pluck('name')->unique();
        $products['allGenres'] = $tagModel->whereCategory('genre')->orderBy('name')->pluck('name')->unique();
        $products['allTypes'] = ['Game' => 'Games', 'Software' => 'Software', 'Downloadable Content' => 'DLC', 'Multipack' => 'Multipack'];
        $products['allTags'] = $tagModel->whereCategory('generic')->whereNotIn('name', ['Games', 'Software', 'DLC', 'Multipack'])->orderBy('name')->pluck('name')->unique();
        return $products;
    }

    /**
     * @param $id
     * @return array
     */
    public function storeProductById($id): array
    {
        $productModel = $this->productModel;
        $data['product'] = $productModel->findOrFail($id);
        $data['productCategory'] = $data['product']->productCategory;
        $data['tags'] = $data['product']->productTags()->whereCategory('generic')->get();
        return $data;
    }

    /**
     * @param $id
     * @return bool
     */
    public function addProductToCart($id): bool
    {
        $product = $this->productModel->find($id);
        if ($product) {
            $cart = new CartService();
            $cart->addProduct($id);
            $cart->save(auth()->user());
            $cart->countProducts();
            return true;
        } else {
            echo -1;
        }
        return false;
    }
    public function addProductsToCart($request)
    {
        $cart = new CartService();
        return $cart->addProducts($request);
    }

    public function getProductFromCart(): array
    {
        $cart = new CartService();
        return $cart->getProduct();
    }
    public function getProductsFromCart(): array
    {
        $cart = new CartService();
        return $cart->getProducts();
    }

    /**
     * @param $id
     * @return mixed|void
     */
    public function removeProductFromCart($id)
    {
        $cart = new CartService();
        return $cart->removeProduct($id);
    }
}
