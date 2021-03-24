<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'OPPO Mobile',
                "price"=>"120000",
                "description"=>"A smart mobile device", 
                "category"=>"mobile",
                "gallery"=>"https://images.pexels.com/photos/1036841/pexels-photo-1036841.jpeg?cs=srgb&dl=pexels-dominika-roseclay-1036841.jpg&fm=jpg",
            ],

            [
                'name'=>'LG mobile',
                "price"=>"500000",
                "description"=>"A smart mobilen", 
                "category"=>"mobile",
                "gallery"=>"https://images.pexels.com/photos/5083490/pexels-photo-5083490.jpeg?cs=srgb&dl=pexels-cottonbro-5083490.jpg&fm=jpg",
            ],

            [
                'name'=>'Apple',
                "price"=>"700000",
                "description"=>"A smart phone", 
                "category"=>"mobile",
                "gallery"=>"https://images.pexels.com/photos/6801874/pexels-photo-6801874.jpeg?cs=srgb&dl=pexels-anna-nekrashevich-6801874.jpg&fm=jpg",
            ],
        ]);
    }
}
