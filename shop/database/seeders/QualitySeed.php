<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QualitySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qualities')->insert([
            'name' => 'Star',
            'status'  => true,
        ]);
        DB::table('qualities')->insert([
            'name' => 'Diamond',
            'status'  => true,
        ]);
        DB::table('qualities')->insert([
            'name' => 'Star',
            'status'  => true,
        ]);
        DB::table('qualities')->insert([
            'name' => 'Galaxy',
            'status'  => true,
        ]);
        DB::table('qualities')->insert([
            'name' => 'Delux',
            'status'  => true,
        ]);
        DB::table('qualities')->insert([
            'name' => 'Prince',
            'status'  => true,
        ]);
        DB::table('qualities')->insert([
            'name' => 'Premium',
            'status'  => true,
        ]);
    }
}
