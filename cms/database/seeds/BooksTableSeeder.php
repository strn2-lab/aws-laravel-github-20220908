<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create('ja_JP');
        
         for($i = 0; $i < 3; $i++) {
          App\Book::create([
               'user_id' => $faker->numberBetween(1, 2), //1〜2
               'item_date' => $faker->Date($format = 'Y-m-d', $max = 'now'), //現在まで
               'item_number' => $faker->Time($format = 'H:i:s', $startTime = '07:00', $max = '11:00'), //現在まで
               'item_number2' => $faker->Time($format = 'H:i:s', $max = 'now'), //現在まで
               'item_number3' => $faker->Time($format = 'H:i:s', $max = 'now'), //現在まで
               'item_number4' => $faker->Time($format = 'H:i:s', $max = 'now'), //現在まで
               'item_file'=> $faker->image("./public/upload", 300, 300, 'cats', false),
               'created_at' => $faker->dateTime('now'), //現在まで
               'updated_at' => $faker->dateTime('now'), //現在まで
          ]);
       }
    }
}
