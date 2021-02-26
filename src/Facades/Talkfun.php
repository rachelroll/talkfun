<?php

namespace Rachel\TalkfunSDK\Facades;

use Illuminate\Support\Facades\Facade;

class Talkfun extends Facade
{
    protected static function getFacadeAccessor() {
        return 'talkfun';
    }
}