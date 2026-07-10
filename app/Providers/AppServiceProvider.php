<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {

            if (Schema::hasTable('settings')) {

                $settings = Setting::first();

                if ($settings) {

                    config([
                        'razorpay.key' => $settings->key_id,
                        'razorpay.secret' => $settings->key_secret,
                        'razorpay.webhook_secret' => $settings->razorpay_webhook_secret,
                    ]);
                }
            }

        } catch (\Exception $e) {
            // Ignore errors during migrations
        }
    }
}
