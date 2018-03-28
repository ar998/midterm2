<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use App\cars;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testExample()
    {
        $cars = cars::find(1);

        //  $year=(int)$cars->year;

        $this->assertInternalType('string', $cars->model);
    }

    public function testInsertCarName()
    {
                $cars = new cars();
                $cars->make = 'Ford';
                $cars->model = 'thirtyth65ree';
                $cars->year = '1992';

                $this->assertTrue($cars->save());
    }

    public function testInsertUserName()
    {
        $User = new User();
        $User->name = 'Akanksha';
        $User->email = 'akanksha@yahoo.com';
        $User->password = '987654';

        $this->assertTrue($User->save());
    }

}
