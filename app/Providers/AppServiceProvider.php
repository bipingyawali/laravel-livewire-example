<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;

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
        Builder::macro('search',function ($fields,$string){
            $this->where(function (Builder $query) use ($fields, $string) {
                foreach (Arr::wrap($fields) as $field) {
                    $query->orWhere($field, 'like', "%{$string}%");
                }
            });
            return $this;
        });
    }
}
