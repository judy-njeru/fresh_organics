<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\MealBox;
use App\User;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function testDatabase()
    {
        // Make call to application...

        $this->assertDatabaseHas('users', [
            'email' => 'user@user.com'
        ]);
    }
}

// class ExampleTest extends TestCase
// {
//     /**
//      * A basic test example.
//      *
//      * @return void
//      */
//     public function testBasicTest()
//     {
//         $this->assertTrue(true);
//     }

//     // public function test_can_create_post()
//     // {
//     //     $data = [
//     //         'name' => $this->faker->name,
//     //         'description' => $this->faker->sentence,
//     //         'price' => $this->faker->numberBetween(1, 10),
//     //         'image' => $this->faker->image, // image
//     //     ];
//     //      $this->request('POST',[$data] );

//     //     $this->MealBox(route('meal-boxes.store'), $data)
//     //         ->assertStatus(201)
//     //         ->assertJson($data);

//     // }

//     public function testApplication()
//     {
//         // $user = factory(User::class)->create();

//         // $response = $this->actingAs($user)
//         //     ->withSession(['foo' => 'bar'])
//         // //     ->get('/');
//         // $response = $this->get('/meal-boxes');

//         // $response->assertStatus(200);
//         $data = [
//             'name' => $this->faker->name,
//             'description' => $this->faker->sentence,
//             'price' => $this->faker->numberBetween(1, 10),
//             'image' => $this->faker->image, // image
//         ];

//         $response = $this->json('POST', '/admin/meal-boxes ', $data);

//         $response
//             ->assertStatus(201)
//             ->assertJson([
//                 'created' => true,
//             ]);
//     }

//     // public function test_can_show_post()
//     // {
//     //     $post = factory(MealBox::class)->create();
//     //     $this->get(route('meal-box.show', $post->id))
//     //         ->assertStatus(200);
//     // }
// }
