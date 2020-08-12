<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Post::class, 5)->create();

        foreach(range(1, 10)as $i){
            $factory = factory(App\Post::class); 
                if($i % 2 === 0){
                    $factory->state('image'); 
                }
                $factory->create(); 
        }
    }
}
