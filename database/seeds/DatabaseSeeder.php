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
        $this->call(RolesTableSeeder::class);
        $this->call(ScopeworkTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PhotographersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(FormatTimesTableSeeder::class);
        $this->call(PackagesTableSeeder::class);
        $this->call(BanksTableSeeder::class);
        $this->call(DepositaccountsTableSeeder::class);
        $this->call(StatusVerifyTableSeeder::class);
        $this->call(CardVerifyTableSeeder::class);
        
    }
}
