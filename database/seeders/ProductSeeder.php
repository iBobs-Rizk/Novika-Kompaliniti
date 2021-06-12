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
                'name' => 'Edelweis Bouquet',
                'price' => '250000',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor ligula quis orci consectetur, eu sollicitudin risus auctor.',
                'category' => 'Flower Bouquet',
                'gallery' => 'b1.png'
            ],
            [
                'name' => 'Pink Lily Bouquet',
                'price' => '250000',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor ligula quis orci consectetur, eu sollicitudin risus auctor.',
                'category' => 'Flower Bouquet',
                'gallery' => 'b2.png'
            ],
            [
                'name' => 'Pink Rose Bouquet',
                'price' => '250000',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor ligula quis orci consectetur, eu sollicitudin risus auctor.',
                'category' => 'Flower Bouquet',
                'gallery' => 'b3.png'
            ],
            [
                'name' => 'Pink Rose & Doll Bouquet',
                'price' => '250000',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor ligula quis orci consectetur, eu sollicitudin risus auctor.',
                'category' => 'Flower Bouquet',
                'gallery' => 'b4.png'
            ],
            [
                'name' => 'Red Rose Bouquet',
                'price' => '250000',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor ligula quis orci consectetur, eu sollicitudin risus auctor.',
                'category' => 'Flower Bouquet',
                'gallery' => 'b5.png'
            ],
            [
                'name' => 'Yellow Rose Bouquet',
                'price' => '250000',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor ligula quis orci consectetur, eu sollicitudin risus auctor.',
                'category' => 'Flower Bouquet',
                'gallery' => 'b7.png'
            ]

        ]);
    }
}
