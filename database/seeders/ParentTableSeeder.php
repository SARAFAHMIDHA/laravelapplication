<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parenttable;

class ParentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i< 30; $i++) {
            factory(App\Models\Parenttable::class)->create();
        }
    }
}
