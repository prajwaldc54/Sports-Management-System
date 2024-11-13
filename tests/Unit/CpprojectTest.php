<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CpprojectTest extends TestCase
{
    Use DatabaseMigrations;

    public function test_Create_Test(){
        $product =Product::create([
            'item_name'=>'Barcelona Jersey',
             'item_price'=>'850',
         'color'=>'Red',
            'sport'=>'Football',
            'brand'=>'Nike',
            'accessories'=>'Jersey',
            'supplier'=>'Rakuten',
            'gender'=>'description',
            'picture'=>'Barca.jpg'

            ]);
        $this->addToAssertionCount(1);
    }
}


//url testing
//    public function testExample()
//    {
//        $response=$this->get('/');
//        $response->assertStatus(200);
//    }
//
//    //controller
//    public function testController()
//{
//    $response=$this->get('/');
//    $this->assertEquals($response->getContent(),2);
//}
//test of select
//public function testSelect()
//{
//    $response=$this->get('/testselect');
//    $this->assertEquals($response->getContent(),'Barcelona Jersey');
//}

//url testing
//    public function testHttp()
//    {
//        $response=$this->get('/adminuserproductverify');
//        $response->assertStatus(200);
//    }