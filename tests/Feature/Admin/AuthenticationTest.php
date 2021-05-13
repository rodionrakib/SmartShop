<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Employee;
use App\Models\User;


class AuthenticationTest extends TestCase
{
    use RefreshDatabase;


    /** @test */
    public function it_can_show_the_admin_login_form()
    {
        $this->withoutExceptionHandling();
        $this->get(route('admin.login'))
            ->assertStatus(200)
            ->assertSee('Welcome Back');
    }


    /** @test */
    public function it_can_login_to_the_dashboard()
    {

        $employee = Employee::factory()->create();


        $data = [
            'email' => $employee->email,
            'password' => 'password'
        ];



        $this->post(route('admin.login'), $data)
            ->assertStatus(302)
            ->assertRedirect(route('admin.dashboard'));

        $this->assertAuthenticated('employee');


    }

    /** @test */
    public function it_should_go_directly_to_dashboard_when_employee_is_already_logged_in()
    {
        $this->withoutExceptionHandling();

        $employee = Employee::factory()->create();

        $this
            ->actingAs($employee, 'employee')
            ->get(route('admin.login'))
            ->assertStatus(302)
            ->assertRedirect(route('admin.dashboard'));
    }

    /** @test */
    public function it_redirect_back_outside_if_customer_accessing_admin_page()
    {
        $this->actingAs(User::factory()->create())
            ->get(route('admin.dashboard'))
            ->assertStatus(302)
            ->assertRedirect(route('admin.login'))
            ->assertSessionHas('error', 'You must be an employee to see this page');
    }


    /** @test */
    public function it_redirects_back_to_login_page_when_credentials_are_wrong()
    {
        $employee = Employee::factory()->create();

        $data = [
            'email' => $employee->email,
            'password' => 'unknown'
        ];

        $this->post(route('admin.login'), $data)
            ->assertStatus(302)
            ->assertSessionHasErrors();
    }



}
