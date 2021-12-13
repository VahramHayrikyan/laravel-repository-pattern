<?php


namespace App\Services;


use App\Traits\DataSkipTakeTrait;
use Illuminate\Support\Collection;

class ProductsService
{
    use DataSkipTakeTrait;

    /**
     * @param array $request
     * @param $productModel
     * @return Collection
     */
    public function promo(array $request, $productModel): Collection
    {
        if (isset($request['paginate']) && $request['paginate'] == true) {
            return $this->skipTake($productModel->getMorphClass(),
                isset($request['take']) ? $request['take'] : 10,
                isset($request['skip']) ? $request['skip'] : 0);
        }
        return collect();
    }

    public function staff($productModel): Collection
    {
        return $this->skipTake($productModel->getMorphClass(), 3, 0);
    }

    public function trove($productModel): Collection
    {
        $query = $productModel->where('show_in_pointshop', 1)->where(function ($query) {
            $query->where('stock', '>', 0)
                ->orWhere('always_visible', 1)
                ->orWhere('preorder', 1);
        });
        return $this->querySkipTake($query, 8, 0)->sortByDesc('timestamp');
    }
}

