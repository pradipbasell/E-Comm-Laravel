<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

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
            'name'=>'LG Mobile',
            'price'=>'20000',
            'description'=>'A smartphone with 4gb ram and much more features',
            'category'=>'mobile',
            'gallery'=>'https://images.pexels.com/photos/404280/pexels-photo-404280.jpeg?cs=srgb&dl=pexels-noah-erickson-404280.jpg&fm=jpg',
        ],
        [
            'name'=>'Oppo Mobile',
            'price'=>'10000',
            'description'=>'A smartphone with 8gb ram and much more features',
            'category'=>'mobile',
            'gallery'=>'https://images.pexels.com/photos/1035103/pexels-photo-1035103.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260',
        ],
        [
            'name'=>'Dell',
            'price'=>'80000',
            'description'=>'Laptop that has a resolution of 1920x1080 pixels. It is powered by a Core i3 processor and it comes with 8GB of RAM',
            'category'=>'Laptop',
            'gallery'=>'https://images.pexels.com/photos/1266982/pexels-photo-1266982.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        ],
        [
            'name'=>'Dslr',
            'price'=>'90000',
            'description'=>' A digital single-lens reflex camera',
            'category'=>'Camera',
            'gallery'=>'https://images.pexels.com/photos/1292770/pexels-photo-1292770.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
        ],
        ]);
    }
}
