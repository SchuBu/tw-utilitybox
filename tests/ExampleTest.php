<?php

namespace SchuBu\TwUtilitybox\Tests;

use Orchestra\Testbench\TestCase;
use SchuBu\TwUtilitybox\TwUtilityboxServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [TwUtilityboxServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
