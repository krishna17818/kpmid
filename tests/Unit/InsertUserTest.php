<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class InsertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUser()
    {
        $user= new User();
        $user->name = 'krishna patel';
        $user->email = 'kp@gmail.com';
        $user->password = 'kp1234';

        $this->assertTrue($user->save());


    }
}
