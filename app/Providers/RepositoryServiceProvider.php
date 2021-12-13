<?php

namespace App\Providers;

use App\Repository\AdminUsersNotesRepositoryInterface;
use App\Repository\AdminUsersRepositoryInterface;
use App\Repository\ArcadeGameRepositoryInterface;
use App\Repository\Eloquent\AdminUsersNotesRepository;
use App\Repository\Eloquent\AdminUsersRepository;
use App\Repository\Eloquent\ArcadeGameRepository;
use App\Repository\Eloquent\OrderRepository;
use App\Repository\Eloquent\ProductsRepository;
use App\Repository\Eloquent\WebAuthRepository;
use App\Repository\OrderRepositoryInterface;
use App\Repository\ProductsRepositoryInterface;
use App\Repository\WebAuthRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
//        Admin Repository Start
        $this->app->bind(AdminUsersRepositoryInterface::class, AdminUsersRepository::class);
        $this->app->bind(AdminUsersNotesRepositoryInterface::class, AdminUsersNotesRepository::class);
//        Admin Repository End
//        Site Repository Start
        $this->app->bind(WebAuthRepositoryInterface::class, WebAuthRepository::class);
        $this->app->bind(ProductsRepositoryInterface::class, ProductsRepository::class);
        $this->app->bind(ArcadeGameRepositoryInterface::class, ArcadeGameRepository::class);
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
//        Site Repository End
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
