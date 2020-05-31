<?php

namespace Tests\Feature;

use App\User;
use Facades\Tests\ProjectFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InvitiationsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_project_can_invite_a_user()
    {
        $project = ProjectFactory::create();
        $newUser = factory(User::class)->create();
        $task = ['body' => 'Foo task'];

        $project->invite($newUser);

        $this->signIn($newUser);
        $this->post(action('ProjectTasksController@store', $project), $task);

        $this->assertDatabaseHas('tasks', $task);
    }
}
