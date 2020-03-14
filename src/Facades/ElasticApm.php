<?php

namespace RafaelMilaniBarbosa\ElasticApm\Facades;

use Illuminate\Support\Facades\Facade;

class ElasticApm extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'elastic-apm';
    }
}
