<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginAndRegisterTest extends TestCase
{
    use DatabaseTransactions;

    public function test_first_page()
    {
        $this->visit('/')->see(env('APPLICATION_NAME'))->assertResponseOk();
    }

    public function test_login_fail()
    {
        $this->visit('/login')
            ->type('a@a.com', 'email')
            ->type('***lamePassword***', 'password')
            ->press(trans('strings.loginButton'))
            ->seePageIs(route('getLogin'));
    }

    public function test_login_page_successful()
    {
        $this->visit('/login')
            ->see(trans('strings.loginButton'))
            ->see(trans('strings.label.email'))
            ->type('admin@admin.com', 'email')
            ->see(trans('strings.passwordLabel'))
            ->type('1234', 'password')
            ->check('remember')
            ->press(trans('strings.loginButton'))
            ->seePageIs('/dashboard');
    }
}
