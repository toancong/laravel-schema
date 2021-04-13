<?php

namespace Autn\Schema;

use Autn\Schema\Console\Commands\DumpSql;
use Illuminate\Support\ServiceProvider as Provider;

class ServiceProvider extends Provider
{

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            DumpSql::class
        ]);
    }
}
