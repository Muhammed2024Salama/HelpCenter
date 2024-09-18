<?php

namespace App\Providers;

use App\Interface\ContactSupportInterface;
use App\Interface\HelpCenterInterface;
use App\Repository\ContactSupportRepository;
use App\Repository\HelpCenterRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(HelpCenterInterface::class, HelpCenterRepository::class);
        $this->app->bind(ContactSupportInterface::class, ContactSupportRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
