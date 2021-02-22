<?php


use App\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
         for ($i=0; $i < 50; $i++) { 
            $newCategory = new Category();
            $newCategory->smarphone = $faker->sentence(10);
            $newCategory->phone = $faker->sentence(10);
            $newCategory->foldable = $faker->sentence(10);
            $newCategory->tablet = $faker->sentence(10);
            $newCategory->save();
         }
    }
}
