<?php

namespace Rachel\TalkfunSDK;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    protected $defer = true;

    public function register()
    {
        $this->app->singleton('talkfun', function ($app, $config) {
            return new MTCloud(config('services.talkfun.openID'), config('services.talkfun.openToken'));
        });

    }

    public function provides()
    {
        return ['talkfun'];
    }



}