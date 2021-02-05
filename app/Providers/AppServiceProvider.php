<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Models\DanhMucSanPham;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Session;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $danhmuc = DanhMucSanPham::all();

        View::share('danhmucsanpham', $danhmuc);
        // view()->composer('*', function ($view) {
        //     $view->with('cart', Session::get('cart'));
        // });
       
        // View::share('soluong',0);
        Paginator::useBootstrap();
    }
}
