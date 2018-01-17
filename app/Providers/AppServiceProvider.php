<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       Schema::defaultStringLength(191);
        view()->composer('dashboard.nav',function ($view) {
          $view->with('categories',Category::menu());
        });

        if (!Collection::hasMacro('paginate')) {

        Collection::macro('paginate', 
            function ($perPage = 15, $page = null, $options = []) {
            $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
            return (new LengthAwarePaginator(
                $this->forPage($page, $perPage), $this->count(), $perPage, $page, $options))
                ->withPath('');
        });
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
