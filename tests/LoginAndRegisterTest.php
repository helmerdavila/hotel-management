<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginAndRegisterTest extends TestCase
{
    use DatabaseTransactions;

    public function testBasicExample()
    {
        $this->visit('/')->see(env('APPLICATION_NAME'));
    }
}
