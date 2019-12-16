<?php

use App\Profile;
use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Profile;
        $p->about_me = "Hi, I'm Oprah Winfrey. I like organic cauliflower and mini coopers!";
        $p->avatar= "imageurl.com";
        $p->city = "California";
        $p->country = "USA";
        $p->age = "22";
        $p->user_id="1";
        $p->save();
    }
}
