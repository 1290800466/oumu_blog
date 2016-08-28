<?php

namespace App\Providers;

use App\Presenters\PagiationPresenter;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Support\ServiceProvider;

class PaginationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //�Զ����ҳģ��
        Paginator::presenter(function (AbstractPaginator $paginator) {
            return new PagiationPresenter($paginator);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
