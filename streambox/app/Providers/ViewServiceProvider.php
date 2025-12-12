<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\View\Composers\CurrentUserComposer;

class ViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        View::composer('*', CurrentUserComposer::class);
    }
}
