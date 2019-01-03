<?php

namespace Rachel\TalkfunSdk\Facades;

use Illuminate\Support\Facades\Facade;

class Talkfun extends Facade
{
    protected static function getFacadeAccessor() {
        return 'talkfun';
    }
}