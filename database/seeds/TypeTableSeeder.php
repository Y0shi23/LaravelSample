<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('type')->delete();
        
        \DB::table('type')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type_name' => 'ノーマル',
            ),
            1 => 
            array (
                'id' => 2,
                'type_name' => 'ほのお',
            ),
            2 => 
            array (
                'id' => 3,
                'type_name' => '水',
            ),
            3 => 
            array (
                'id' => 4,
                'type_name' => 'でんき',
            ),
            4 => 
            array (
                'id' => 5,
                'type_name' => 'くさ',
            ),
            5 => 
            array (
                'id' => 6,
                'type_name' => 'こおり',
            ),
            6 => 
            array (
                'id' => 7,
                'type_name' => 'かくとう',
            ),
            7 => 
            array (
                'id' => 8,
                'type_name' => 'どく',
            ),
            8 => 
            array (
                'id' => 9,
                'type_name' => 'じめん',
            ),
            9 => 
            array (
                'id' => 10,
                'type_name' => 'ひこう',
            ),
            10 => 
            array (
                'id' => 11,
                'type_name' => 'エスパー',
            ),
            11 => 
            array (
                'id' => 12,
                'type_name' => 'むし',
            ),
            12 => 
            array (
                'id' => 13,
                'type_name' => 'いわ',
            ),
            13 => 
            array (
                'id' => 14,
                'type_name' => 'ゴースト',
            ),
            14 => 
            array (
                'id' => 15,
                'type_name' => 'ドラゴン',
            ),
            15 => 
            array (
                'id' => 16,
                'type_name' => 'あく',
            ),
            16 => 
            array (
                'id' => 17,
                'type_name' => 'はがね',
            ),
            17 => 
            array (
                'id' => 18,
                'type_name' => 'フェアリー',
            ),
        ));
        
        
    }
}