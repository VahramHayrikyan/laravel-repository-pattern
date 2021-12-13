<?php

namespace App\Traits;

trait DataSkipTakeTrait
{
    public function skipTake($class, $take = 10, $skip = 0)
    {
        $count = $class::count();
        if ($skip <= ($count - $take) && $skip != 0)
            $skip =  $skip + $take;
        return $class::skip($skip)->take($take)->get();
    }

    public function querySkipTake($query, $take = 10, $skip = 0)
    {
        $count = $query->count();
        if ($skip <= ($count - $take) && $skip != 0)
            $skip =  $skip + $take;
        return $query->skip($skip)->take($take)->get();
    }
}
