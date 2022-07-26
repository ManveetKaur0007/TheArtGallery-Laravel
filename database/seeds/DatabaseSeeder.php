<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        // $this->call(UserSeeder::class);
        DB::table('galleries')->truncate();
        $this->call(GallerySeeder::class);

        DB::table('pictures')->truncate();
        $this->call(PictureSeeder::class);

        DB::table('users')->truncate();
        $this->call(UserSeeder::class);

        Schema::enableForeignKeyConstraints();
    }
}
