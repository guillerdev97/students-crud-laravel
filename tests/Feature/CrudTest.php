<?php

namespace Tests\Feature;

use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrudTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


    use RefreshDatabase;
    public function test_read_crud()
    {
        $this->withExceptionHandling();

        $students = Student::factory(2)->create();
        $student = $students[0];

        $response = $this->get('/');
        $response->assertStatus(200)
            ->assertViewIs('home');
        $response->assertSee($student->name);
    }
}
