<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        factory(App\User::class, 2)->create();
            $admin = factory(App\User::class, 'admin')->create(['email' => 'first@admin.com']);

            $this->command->info("New Admin created. Username: $admin->email,  Password: 123pass");

            // $user = factory(App\User::class, 'user')->create(['email' => 'justin@email.com']);

            // $this->command->info("New User created. Username: $user->email,  Password: admin");
    }
}
