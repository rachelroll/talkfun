<?php

namespace Rachel\Facades;

use Illuminate\Support\Facades\Facade;

class Talkfun extends Facade
{
    protected static function getFacadeAccessor() {
        return 'talkfun';
    }
}