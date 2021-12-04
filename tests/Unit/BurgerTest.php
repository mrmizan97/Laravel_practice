<?php

namespace Tests\Unit;

use App\Burger;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use PHPUnit\Framework\TestCase;

class BurgerTest extends TestCase
{
    use DatabaseMigrations;

    // private $burger;
    // public function setup()
    // {
    //     parent::setUp();
    //     $this->burger=factory(Burger::class)->make();
    // }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    // public function test_burger_has_name()
    // {
    //     $this->assertNotEmpty($this->burger->name);
    // }
    // public function test_burger_has_type()
    // {
    //     $this->assertNotEmpty($this->burger->type);
    // }
    // public function test_a_buger_should_small()
    // {
    //     // a small burger
    //     $burger=factory(Burger::class)->make([
    //         'type'=>'small'
    //     ]);

    //     // a user
    //     $user=factory(User::class)->make([
    //         'age'=>'small'
    //     ]);
    //     // logged in
    //     $this->actingAs($user);
    //     // buy a burger
    //     $burger->buy();
    //     // except exception
    //     $this->expectException(UnlogedUserCannotByeBuger::class);
    // }
    public function test_user_can_visit_burger_page(){
        $response=$this->get('/burger');
        $response->assertStatus(200);
    }
}
