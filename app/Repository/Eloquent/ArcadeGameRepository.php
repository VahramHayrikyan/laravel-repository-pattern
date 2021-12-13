<?php


namespace App\Repository\Eloquent;


use App\Models\ArcadeCategory;
use App\Models\ArcadeGame;
use App\Repository\ArcadeGameRepositoryInterface;

class ArcadeGameRepository implements ArcadeGameRepositoryInterface
{
    private $arcadeGameModel;
    private $arcadeCategoryModel;

    public function __construct(ArcadeGame $arcadeGameModel, ArcadeCategory $arcadeCategoryModel)
    {
        $this->arcadeGameModel = $arcadeGameModel;
        $this->arcadeCategoryModel = $arcadeCategoryModel;
    }

    public function arcadePage(): array
    {
        $data['arcade_categories'] = $this->arcadeCategoryModel->get();
        $data['arcade_games_recently'] = $this->arcadeGameModel->latest('timestamp')->paginate(25);
        $data['genres'] = $this->arcadeGameModel->whereNotNull('genre')->where('genre','!=','')->pluck('genre')->unique();
        $data['engines'] = $this->arcadeGameModel->whereNotNull('engine')->where('engine','!=','')->pluck('engine')->unique();
        $data['arcade_games_most'] = $this->arcadeGameModel->orderByDesc('views')->paginate(25);

        if (!is_null($data['arcade_categories'])) {
            $data['arcade_games_single_player'] = $data['arcade_categories']->find(1) ?$data['arcade_categories']->find(1)->arcadeGames()
                ->latest('timestamp')->paginate(25):[];
            $data['arcade_games_multiplayer'] = $data['arcade_categories']->find(2) ?$data['arcade_categories']->find(2)->arcadeGames()
                ->latest('timestamp')->paginate(25):[];
        }
        return $data;
    }

    public function getArcadeGameById($id)
    {
        return $this->arcadeGameModel->findOrFail($id);
    }
}
