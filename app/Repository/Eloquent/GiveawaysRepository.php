<?php


namespace App\Repository\Eloquent;


use App\Models\Giveaway;
use App\Repository\GiveawaysRepositoryInterface;

class GiveawaysRepository implements GiveawaysRepositoryInterface
{
    public function init()
    {
        return Giveaway::take(10)->get();
    }
}
