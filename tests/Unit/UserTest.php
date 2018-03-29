<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use App\User;
class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAddUser()
    {
        $user= new User();
        $user->name = 'Ms Kristine Mehta';
        $user->email= 'km@gmail.com';
        $user->password= '1234km';
     //   $user->remembertoken= 'null';
        $this->assertTrue($user->save());
    }
}
