<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *@test
     * @return void
     */
    public function user_has_full_name_attribute()
    {
        //crate user
        $user=User::create([
            'name'=>'Mr.',
             'lastname'=>'User',
              'email'=>'user@gmail.com',
              'password'=>'1234'
        ]);
        // $this->assertTrue(true);
    }
}
