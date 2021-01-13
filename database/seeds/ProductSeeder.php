<?php

use Illuminate\Database\Seeder;

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
        	'name' => 'LG mobile',
        	'price' => '10000',
        	'description' => 'smartphone',
        	'gallery' => 'https://www.lg.com/in/mobile-phones/lg-LMX440IM',
        	'category' => 'mobile'
        ],
        [
        	'name' => 'oPPO mobile',
        	'price' => '10000',
        	'description' => 'smartphone',
        	'gallery' => 'https://www.lg.com/in/mobile-phones/lg-LMX440IM',
        	'category' => 'mobile'
        ],
        [
        	'name' => 'Xiaomi',
        	'price' => '10000',
        	'description' => 'smartphone',
        	'gallery' => 'https://www.lg.com/in/mobile-phones/lg-LMX440IM',
        	'category' => 'mobile'
        ],

        [
        	'name' => 'Fridge',
        	'price' => '10000',
        	'description' => 'smartphone',
        	'gallery' => 'https://www.lg.com/in/mobile-phones/lg-LMX440IM',
        	'category' => 'Electronic'
        ],

        [
        	'name' => 'Samsung TV',
        	'price' => '10000',
        	'description' => 'smartphone',
        	'gallery' => 'https://www.lg.com/in/mobile-phones/lg-LMX440IM',
        	'category' => 'TV'
        ]
    		]);
    }
}
