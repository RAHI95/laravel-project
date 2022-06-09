<?php

namespace App\Providers;

use App\Models\Department;
use App\Models\Hall;
use App\Models\Student;
use App\Models\Stuff;
use App\Models\Teacher;
use App\Policies\DepartmentPolicy;
use App\Policies\HallPolicy;
use App\Policies\StudentPolicy;
use App\Policies\StuffPolicy;
use App\Policies\TeacherPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Teacher::class => TeacherPolicy::class,
        Student::class => StudentPolicy::class,
        Stuff::class => StuffPolicy::class,
        Hall::class => HallPolicy::class,
        Department::class =>DepartmentPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
