<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Spatie\Permission\Models\Role;
use App\Models\Employee;


abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;


    protected function actingAsEmployee()
    {
        $this->actingAs($this->admin(),'employee');
        return $this;
    }

    // protected function actingAsEmployee()
    // {
    //     $this->actingAs($this->admin(),'employee');
    //     return $this;
    // }



    protected function admin()
    {
    	$admin = Employee::factory()->create();
        return $admin;  
    }

    protected function user()
    {
    	return User::factory()->create();
    }
}
