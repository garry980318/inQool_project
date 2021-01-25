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
                    "id_category" => 1,
                    "created_at" => now()
                ),
                array(
                    "id_article" => 2,
                    "id_category" => 2,
                    "created_at" => now()
                ),
                array(
                    "id_article" => 3,
                    "id_category" => 3,
                    "created_at" => now()
                ),
                array(
                    "id_article" => 4,
                    "id_category" => 4,
                    "created_at" => now()
                ),
                array(
                    "id_article" => 5,
                    "id_category" => 5,
                    "created_at" => now()
                ),
                array(
                    "id_article" => 6,
                    "id_category" => 6,
                    "created_at" => now()
                ),
                array(
                    "id_article" => 7,
                    "id_category" => 7,
                    "created_at" => now()
                ),
                array(
                    "id_article" => 8,
                    "id_category" => 8,
                    "created_at" => now()
                ),
                array(
                    "id_article" => 9,
                    "id_category" => 9,
                    "created_at" => now()
                ),
                array(
                    "id_article" => 10,
                    "id_category" => 10,
                    "created_at" => now()
                ),
                array(
                    "id_article" => 1,
                    "id_category" => 11,
                    "created_at" => now()
                ),
                array(
                    "id_article" => 2,
                    "id_category" => 12,
                    "created_at" => now()
                ),
                array(
                    "id_article" => 3,
                    "id_category" => 13,
                    "created_at" => now()
                ),
                array(
                    "id_article" => 4,
                    "id_category" => 14,
                    "created_at" => now()
                ),
                array(
                    "id_article" => 5,
                    "id_category" => 15,
                    "created_at" => now()
                ),
                array(
                    "id_article" => 6,
                    "id_category" => 16,
                    "created_at" => now()
                ),
                array(
                    "id_article" => 7,
                    "id_category" => 17,
                    "created_at" => now()
                ),
                array(
                    "id_article" => 8,
                    "id_category" => 18,
                    "created_at" => now()
                ),
                array(
                    "id_article" => 9,
                    "id_category" => 19,
                    "created_at" => now()
                ),
                array(
                    "id_article" => 10,
                    "id_category" => 20,
                    "created_at" => now()
                )
            )
        );
    }
}
