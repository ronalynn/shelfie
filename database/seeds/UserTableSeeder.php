<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new User;
        $u->firstname = "Oprah";
        $u->lastname = "Winfrey";
        $u->username = "Oprah4theWinfrey";
        $u->email = "oprah.winfrey@gmail.com";
        $u->password = "ims0Rich!";
        $u->save();

        // A user profile is made for each user created
        factory(App\User::class, 20)->create()->each(function($u) {
          $u->profile()
            ->save(factory(App\Profile::class)->make());
        });
    }
}
