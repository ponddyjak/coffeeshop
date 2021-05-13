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
        //
        DB::table('products')->insert([
            [
                'Name' => 'Oppo Mobile',
                'Price' => '25000 Bath',
                'Description' => 'A smartphone with 8GB ram ',
                'Category'=>'Mobile',
                'Gallery'=>'https://5.imimg.com/data5/CZ/RS/ZT/SELLER-100534408/oppo-mobile-phones-f15-500x500.jpg'
            ],
            [
                'Name' => 'Panasonic TV',
                'Price' => '16990 Bath',
                'Description' => 'A smart TV  ',
                'Category'=>'TV',
                'Gallery'=>'https://d2pa5gi5n2e1an.cloudfront.net/webp/global/images/product/tvs/Panasonic_VIERA_40_in_TH_L40C4000T/Panasonic_VIERA_40_in_TH_L40C4000T_L_1.jpg'
            ],
            [
                'Name' => 'Sony TV',
                'Price' => '5490 Bath',
                'Description' => 'A smart TV ',
                'Category'=>'TV',
                'Gallery'=>'https://res.cloudinary.com/cenergy-innovation-limited-head-office/image/fetch/c_scale,q_70,f_auto,h_740/https://d1dtruvuor2iuy.cloudfront.net/media/catalog/product/2/2/222766-19062019.jpg'
            ],
            [
                'Name' => 'Samsung Fridge',
                'Price' => '143250 Bath',
                'Description' => 'Samsung 825L French Door Fridge SRF825BFH4 ',
                'Category'=>'Fridge',
                'Gallery'=>'https://www.appliancesonline.com.au/public/images/product/srf825bfh4/extrnl/SRF825BFH4-Hero-Imagejpg-high.jpeg'
            ]
        ]);
    }
}
