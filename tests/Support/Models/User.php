<?php

declare(strict_types=1);

namespace Roberts\LaravelRecipalApi\Tests\Support\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Roberts\Support\Models\TestModelStub;

class User extends Authenticatable
{
    use TestModelStub;

    protected $guarded = [
        'id',
    ];

    public function hasRole()
    {
        return true;
    }
}
