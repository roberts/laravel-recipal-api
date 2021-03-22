<?php

declare(strict_types=1);

namespace Roberts\LaravelRecipalApi;

use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class LaravelRecipalApiServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->name('laravel-recipal-api')
            ->hasConfigFile();
    }
}
