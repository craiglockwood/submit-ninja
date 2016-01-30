<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegistrationTest extends TestCase
{
    use DatabaseMigrations;

    /** @test **/
    public function a_user_can_register_on_the_system()
    {
        $this->visit('/register')
            ->type('David', 'name')
            ->type('david@bidstar.co.uk', 'email')
            ->type('test123', 'password')
            ->type('test123', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/home')
            ->see('David')
            ->see('You are logged in!');


        $this->seeInDatabase('users', ['email' => 'david@bidstar.co.uk']);

    }
}
