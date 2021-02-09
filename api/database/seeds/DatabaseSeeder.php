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
        $this->call([
            CurrenciesTableSeeder::class,
            UsersTableSeeder::class,
            AccountsTableSeeder::class,
            TransactionsTableSeeder::class,
        ]);
    }
}
