<?php

namespace ZepFietje\Stubs;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class StubServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                StubPublishCommand::class,
            ]);
        }
    }

    public function provides()
    {
        return [
            StubPublishCommand::class,
        ];
    }
}
