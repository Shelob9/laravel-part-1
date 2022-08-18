<?php

namespace Tests\Feature\Commands;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    /**
     * @group commands
     */
    public function testWithDefault()
    {
        $this->artisan('hello')
            ->assertSuccessful()
            ->expectsOutput('Hello Roy');
    }

    /**
     * @group commands
     */
    public function testWithArgument(){
        $this->artisan('hello Macy')
            ->assertSuccessful()
            ->expectsOutput('Hello Macy');
    }
}
