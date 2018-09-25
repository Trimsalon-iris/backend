<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\UserType();
        $admin->name = "admin";
        $admin->save();

        $employee = new \App\UserType();
        $employee->name = "employee";
        $employee->save();

        $hours = new \App\WorkingHours();
        $hours->start_time = '09:00';
        $hours->stop_time = '17:00';
        $hours->save();

        $user = new \App\User();
        $user->first_name = 'Maarten';
        $user->middle_name = '';
        $user->last_name = 'Peels';
        $user->email = 'maartenpeels@gmail.com';
        $user->password = bcrypt('password');
        $user->working_hours_id = $hours->id;
        $user->user_type_id = $admin->id;
        $user->save();
    }
}
