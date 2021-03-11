<?php

declare(strict_types=1);

namespace Roberts\LaravelRecipalApi\Tests;

use Laravel\Nova\NovaCoreServiceProvider;
use Roberts\LaravelRecipalApi\LaravelRecipalApiServiceProvider;
use Roberts\LaravelRecipalApi\Tests\Support\Providers\NovaTestbenchServiceProvider;
use Roberts\Locations\LocationsServiceProvider;
use Roberts\Support\SupportServiceProvider;
use Roberts\TestSupport\BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            NovaCoreServiceProvider::class,
            NovaTestbenchServiceProvider::class,
            LaravelRecipalApiServiceProvider::class,
            SupportServiceProvider::class,
            LocationsServiceProvider::class,
        ];
    }
}
