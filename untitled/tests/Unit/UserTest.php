<?php

namespace Tests\Unit;

use App\User;
use PHPUnit\Framework\Constraint\Count;
use Tests\TestCase;
use App\cars;
use PHPUnit\Framework\Constraint\IsType;
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

    public function testyeartype()
    {
        $cars = cars::find(1);

        $year=(int)$cars->year;

        $this->assertInternalType(IsType::TYPE_INT, $year);
    }

    public function testUsercount()
    {
        $User = User::all();
        $recordCount = $User->Count();

        $this->assertEquals(50, $recordCount);
    }

    public function testCarcount()
    {
        $cars = cars::all();
        $recordCount = $cars->Count();

        $this->assertEquals(50, $recordCount);
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

    public function testUpdateUserName()
    {
        $User = User::find(1);
        $User->name = ('AkankshaRastogi');

        $this->assertTrue($User->save());
    }

    public function testUpdateCarYear()
    {
        $cars = cars::find(1);
        $cars->year = ('1775');

        $this->assertTrue($cars->save());
    }

    public function testDeleteUserName()
    {
        $User = new User();
        $User->name = 'Akaash';
        $User->email = 'akaash@yahoo.com';
        $User->password = 'ag987654';
        $User->save();

        $this->assertTrue($User->delete());
    }

    public function testDeleteCarName()
    {
        $cars = new cars();
        $cars->make = 'Ford';
        $cars->model = 'thirtyth65ree';
        $cars->year = '1992';
        $cars->save();

        $this->assertTrue($cars->delete());
    }

    public function testCarMake()
    {
        $cars = cars::find(1);
        $make=$cars->make;

        $this->assertContains($make,['ford','honda','toyota']);
    }

}
