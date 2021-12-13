<?php


namespace App\Repository;


interface WebAuthRepositoryInterface
{
    public function login($request);

    public function register($request);

}
