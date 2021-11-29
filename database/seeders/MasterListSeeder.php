<?php

namespace Database\Seeders;

use App\Models\MasterList;
use Illuminate\Database\Seeder;

class MasterListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MasterList::factory()->count(50)->create();
    }
}
