<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      for ($i=0; $i < 10; $i++) {
        DB::table('blogs')->insert([
            'title' => $faker->title,
            'description' => $faker->text
        ]);
      }

    }
}
