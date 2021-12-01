<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    // use DatabaseMigrations;
    /**
     * A basic unit test example.
     *@test
     * @return void
     */
    public function user_has_full_name_attribute()
    {
        $user=User::create([
            'name'=>'M R Mizan3',
             'phone_number'=>'01795221226',
              'email'=>'user@gmail.com',
              'password'=>'1234'
        ]);
        $user=new User();
        $this->assertEquals('Mr. User', $user->fullname);
    }
}
