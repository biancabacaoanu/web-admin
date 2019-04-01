<?php

use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();

        $this->call(StaffTableSeeder::class);
        $this->call(MuseumTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(ExpositionSeeder::class);
        $this->call(ExhibitTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(TagTableSeeder::class);

        Model::reguard();
    }
}