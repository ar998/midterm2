<?php

namespace Tests\Unit;

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
}
