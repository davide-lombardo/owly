<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Module;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        for ($i = 1; $i <= 30; $i++) {
            Module::create([
                'id' => $i,
                'name' => 'Module $i',
                'created_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
