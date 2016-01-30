<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;

class SetTest extends TestCase
{
    use DatabaseMigrations;

    /** @test **/
    public function a_logged_in_user_can_see_their_question_sets()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->visit('/home')
            ->see('Hello, ' . $user->name)
            ->see('Your Question Sets')
            ->see('Five Simple Steps - Blind Book Submission');
    }

    /** @test **/
    public function an_anonymous_user_can_view_test()
    {
        $this->visit('/set/example')
            ->see('Write For Us')
            ->see('Your Email Address')
            ->see('About Your Book');
    }

    /** @test **/
    //public function a_logged_in_user_can_create_a_test()
    //{
        //$user = factory(App\User::class)->create();

        //$this->actingAs($user)
            //->visit('/home')
            //->see('Hello, ' . $user->name )
            //->see('Your Question Sets');
    //}
}
