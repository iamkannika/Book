<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $infoes = [
            'Ashlee DHooge',
            'Decca Mousley',
            'Cacilia Bellward',
            'Constantino Fildes',
            'Marylee Varah',
            'Olly Stears',
            'Chrystal Ciccottio',
            'Aleksandr Hilldrup',
            'Zed Romagosa',
            'Jeddy Alexsandrev'
        ];

        foreach($infoes as $info){
            DB::table('writer')->insert([
                'name' => $info
            ]);
        }
    }
}
