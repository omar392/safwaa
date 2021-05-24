<?php

namespace Database\Seeders;
use App\Models\Email;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Email::create([
            'facebook' => 'www.facebook.com',
            'whats_app_num' => '01055648654',
            'gmail' => 'www.gmail.com',
            'twitter' => 'www.twitter.com',
            'inestgram' => 'www.inestgram.com',
            'youtube' => 'www.youtube.com',
        ]);
    }
}
