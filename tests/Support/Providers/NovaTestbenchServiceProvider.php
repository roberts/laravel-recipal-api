<?php

declare(strict_types=1);

namespace Roberts\LaravelRecipalApi\Tests\Support\Providers;

use Roberts\LaravelRecipalApi\Nova\Competitor;
use Roberts\LaravelRecipalApi\Nova\Insight;
use Roberts\LaravelRecipalApi\Nova\Review;
use Roberts\LaravelRecipalApi\Nova\Snapshot;
use Roberts\TestSupport\Providers\BaseNovaPackageServiceProvider;

class NovaTestbenchServiceProvider extends BaseNovaPackageServiceProvider
{
    public static array $packageResources = [
        Competitor::class,
        Insight::class,
        Review::class,
        Snapshot::class,
    ];
}
