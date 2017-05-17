<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class,5)->create();
        //$this->call(PostsTableSeeder::class)->create();
        $this->call(CommentsTableSeeder::class)->create();
    }
}
