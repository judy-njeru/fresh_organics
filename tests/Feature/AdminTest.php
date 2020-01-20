<?php

namespace Tests\Feature;

use App\Admin;
use App\MealBox;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Tests\TestCase;

class AdminTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function only_logged_in_admin_can_see_the_admin_dashboard()
    {
        $response = $this->get('/admin')->assertRedirect('/admin/login');
    }

    /** @test */
    public function log_in_admin_and_authenticate()
    {
        //acting as a particular user(not using the app db but memory db..always refreshed)
        // $user = factory(Admin::class)->create();
        $user = factory(Admin::class)->create([
            'password' => bcrypt($password = 'password'),
        ]);
        // dd($user);
        $response = $this->post('/admin/login', [
            'email' => $user->email,
            'password' => $password,
        ]);
        $response->assertRedirect('/admin');
        $this->assertAuthenticatedAs($user, $guard = 'admin');
    }

    /** @test */
    public function authorized_user_can_update_the_task()
    {

        $data =  [
            "id" => 1,
            'name' => 'Updated Name',
            'description' => 'Test Meal Box  Description',
            'price' => 359,
            'image' => 'https://www.bbcgoodfood.com/sites/default/files/recipe-collections/collection-image/2013/05/avocado_blackbean_eggs.jpg',
            'created_at' => '2020-01-08 12:50:41',
            'updated_at' => '2020-01-08 12:50:41'
        ];

        //Given we have a signed in user
        $this->actingAs(factory('App\Admin')->create());
        //And a task which is created by the user
        $task = factory(MealBox::class)->create();


        // $task->name = "Updated Name";
        //When the user hit's the endpoint to update the task
        $response = $this->put('/admin/meal-boxes/' . $data);
        // $response = $this->put(route('meal-boxes.update',  $task->id), $data);
        // $response = $this->put(route('meal-boxes.update',  $task), $data);


        // dd($data);


        $this->assertDatabaseHas('meal_boxes', [
            'description' => 'Update',
        ]);

        //The task should be updated in the database.
        // $this->assertDatabaseHas('meal_boxes', [
        //     'id' => $task->id,
        //     'name' => 'Updated Name',
        //     'description' => 'Test Meal Box  Description',
        //     'price' => 359,
        //     'image' => 'https://www.bbcgoodfood.com/sites/default/files/recipe-collections/collection-image/2013/05/avocado_blackbean_eggs.jpg',
        //     'created_at' => '2020-01-08 12:50:41',
        //     'updated_at' => '2020-01-08 12:50:41'
        // ]);
    }

    // /** @test */
    // public function a_meal_box_can_be_added_through_the_form()
    // {

    //     $this->actingAs(factory('App\Admin')->create());
    //     $mealBox = factory('App\MealBox')->make();
    //     // dd($mealBox);

    //     $this->post('/admin/meal-boxes', $mealBox->toArray());

    //     // $response = $this->post('/admin/meal-boxes', [
    //     //     'name' => 'Test Meal Box',
    //     //     'description' => 'Test Meal Box  Description',
    //     //     'price' => 359,
    //     //     'image' => 'https://www.bbcgoodfood.com/sites/default/files/recipe-collections/collection-image/2013/05/avocado_blackbean_eggs.jpg'
    //     // ]);
    //     // dd($response);
    //     // $this->assertEquals(1, MealBox::all()->count());
    //     $this->assertCount(1, MealBox::all());




    //     // $this->withoutExceptionHandling();

    //     // $user = factory(Admin::class)->create([
    //     //     'password' => bcrypt($password = 'password'),
    //     // ]);

    //     // $response = $this->post('/admin/login', [
    //     //     'email' => $user->email,
    //     //     'password' => $password,
    //     // ]);
    //     // $response->assertRedirect('/admin');
    //     // $this->get('admin/meal-boxes/create');

    //     // $response = $this->post('POST', 'admin/meal-boxes', [
    //     //     'name' => 'Test Meal Box',
    //     //     'description' => 'Test Meal Box  Description',
    //     //     'price' => 359,
    //     //     'image' => 'https://www.bbcgoodfood.com/sites/default/files/recipe-collections/collection-image/2013/05/avocado_blackbean_eggs.jpg'
    //     // ]);

    //     // $mealBox = factory(MealBox::class)->create();

    //     // // $this->expectException(Exception::class);

    //     // $data = [
    //     //     'name' => 'Test Meal Box',
    //     //     'description' => 'Test Meal Box  Description',
    //     //     'price' => 359,
    //     //     'image' => 'https://www.bbcgoodfood.com/sites/default/files/recipe-collections/collection-image/2013/05/avocado_blackbean_eggs.jpg'
    //     // ];

    //     // $rep = new MealBox($this->container);
    //     //
    //     // $user = $rep->store($data);


    //     // $this->assertCount(1, MealBox::all());
    // }
}
