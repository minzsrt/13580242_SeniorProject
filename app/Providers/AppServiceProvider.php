<?php

namespace App\Providers;

use App\Notification;
use Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $this->shareView();
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

    public function shareView()
    {
        View::composer('*', function ($view) {
            $notification_count = Notification::where('user_id', Auth::id())
                ->where('status', 0)->count();
            $view->with(
                compact(
                    'notification_count'
                )
            );
        });
    }
}
