<?php


namespace App\Repository;


interface ArcadeGameRepositoryInterface
{
    public function arcadePage();
    public function getArcadeGameById($id);
}
