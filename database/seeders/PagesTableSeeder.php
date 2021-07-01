<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'name'      =>  'About Us',
            'slug'      =>  'about-us'
        ]);
        Page::create([
            'name'      =>  'Contact Us',
            'slug'      =>  'contact-us',
        ]);
    }
}
