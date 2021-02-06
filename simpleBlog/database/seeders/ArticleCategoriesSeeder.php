<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_categories')->insert(
            array(
                array(
                    "id_article" => 1,
                    "id_category" => 1
                ),
                array(
                    "id_article" => 2,
                    "id_category" => 2
                ),
                array(
                    "id_article" => 3,
                    "id_category" => 3
                ),
                array(
                    "id_article" => 4,
                    "id_category" => 4
                ),
                array(
                    "id_article" => 5,
                    "id_category" => 5
                ),
                array(
                    "id_article" => 6,
                    "id_category" => 6
                ),
                array(
                    "id_article" => 7,
                    "id_category" => 7
                ),
                array(
                    "id_article" => 8,
                    "id_category" => 8
                ),
                array(
                    "id_article" => 9,
                    "id_category" => 9
                ),
                array(
                    "id_article" => 10,
                    "id_category" => 10
                ),
                array(
                    "id_article" => 1,
                    "id_category" => 11
                ),
                array(
                    "id_article" => 2,
                    "id_category" => 12
                ),
                array(
                    "id_article" => 3,
                    "id_category" => 13
                ),
                array(
                    "id_article" => 4,
                    "id_category" => 14
                ),
                array(
                    "id_article" => 5,
                    "id_category" => 15
                ),
                array(
                    "id_article" => 6,
                    "id_category" => 16
                ),
                array(
                    "id_article" => 7,
                    "id_category" => 17
                ),
                array(
                    "id_article" => 8,
                    "id_category" => 18
                ),
                array(
                    "id_article" => 9,
                    "id_category" => 19
                ),
                array(
                    "id_article" => 10,
                    "id_category" => 20
                )
            )
        );
    }
}
