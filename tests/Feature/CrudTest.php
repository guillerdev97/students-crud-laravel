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

        $students = Student::factory()->create();
        $student = $students;

        $response = $this->get('/');
        $response->assertStatus(200)
            ->assertViewIs('home');
        $response->assertSee($student->name);
    }

    public function test_delete_crud()
    {
        $this->withExceptionHandling();

        $student = Student::factory()->create();

        $this->assertCount(1, Student::all());

        $response = $this->delete(route('delete', $student->id));

        $this->assertCount(0, Student::all());
    }

    public function test_create_crud()
    {
        $this->withExceptionHandling();

        $response = $this->post(route('store', [
            'name' => 'new name',
            'address' => 'new address',
            'mobile' => 'new mobile'
        ]));

        $this->assertCount(1, Student::all());
    }
}
