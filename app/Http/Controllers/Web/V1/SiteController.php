<?php

namespace App\Http\Controllers\Web\V1;

use App\Http\Controllers\Controller;
use App\Models\ArcadeGame;
use App\Models\Article;
use App\Models\ArticleTag;
use App\Models\Comment;
use App\Repository\ArcadeGameRepositoryInterface;
use App\Repository\Eloquent\ArticlesRepository;
use App\Repository\Eloquent\GiveawaysRepository;
use App\Repository\Eloquent\ProductsRepository;
use App\Repository\ProductsRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{
    /**
     * @var ProductsRepository
     */
    private $productsRepository;
    /**
     * @var ArticlesRepository
     */
    private $articlesRepository;
    /**
     * @var GiveawaysRepository
     */
    private $giveawaysRepository;

    /**
     * @var ArcadeGameRepositoryInterface
     */
    private $arcadeGameRepository;

    /**
     * SiteController constructor.
     * @param ProductsRepositoryInterface $productsRepository
     * @param ArticlesRepository $articlesRepository
     * @param GiveawaysRepository $giveawaysRepository
     * @param ArcadeGameRepositoryInterface $arcadeGameRepository
     */
    public function __construct(ProductsRepositoryInterface $productsRepository,
                                ArticlesRepository $articlesRepository,
                                GiveawaysRepository $giveawaysRepository,
                                ArcadeGameRepositoryInterface $arcadeGameRepository)
    {
        $this->productsRepository = $productsRepository;
        $this->articlesRepository = $articlesRepository;
        $this->giveawaysRepository = $giveawaysRepository;
        $this->arcadeGameRepository = $arcadeGameRepository;
    }

    public function index()
    {
        try {
            $data['products'] = $this->productsRepository->init();
            $data['articles'] = $this->articlesRepository->init();
            $data['giveaways'] = $this->giveawaysRepository->init();
            return view('site.index', compact('data'));
        } catch (\Exception $exception) {
            Log::error($exception);
            return [
                'data' => [
                    'error' => true,
                    'message' => trans(''),
                    'code' => $exception->getCode()
                ]
            ];
        }

    }

    public function trove()
    {
        $data = $this->productsRepository->pageTrovePaginateProduct();
        return view('site.trove.index', compact('data'));
    }

    public function store()
    {
        $data = $this->productsRepository->pageTrovePaginateProduct();
        return view('site.store.index', compact('data'));
    }

    public function media()
    {
        return view('site.media.index');
    }

    public function articles()
    {
        $data['articles'] = Article::latest('timestamp')->paginate(10);
        $data['comments'] = Comment::take(10)->get();
        $data['tags'] = ArticleTag::get();
        return view('site.articles.index', compact('data'));
    }

    public function arcades()
    {
        $data = $this->arcadeGameRepository->arcadePage();
        return view('site.arcade.index', compact('data'));
    }

    public function play($id)
    {
        $data['game'] = $this->arcadeGameRepository->getArcadeGameById($id);
        return view('site.arcade.play', compact('data'));
    }

    public function cart()
    {
        $data = $this->productsRepository->getProductFromCart();
        return view('site.cart.index',compact('data'));
    }

    public function quests()
    {
        $data = $this->productsRepository->getProductFromCart();
        return view('site.quests.index',compact('data'));
    }

    public function checkout()
    {
        $auth = auth()->user();
        if ($auth->isBanned())
        {
            return back()->with('error','Your account is banned!');
        }elseif (!$auth->billingDetails)
        {
            return redirect('/user/billingDetails');
        }
        $data = $this->productsRepository->getProductsFromCart();
        return view('site.checkout.index',compact('data'));
    }
    public function checkoutPost(Request $request)
    {
        $this->productsRepository->addProductsToCart($request->all());
        return true;
    }
    public function giveaways(Request $request)
    {
       return view('yii.giveaways.index');
    }



}
