<?php

namespace Database\Seeders;

use App\Models\BooksRead;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksReadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BooksRead::factory(10)->create();
    }
}
