<?php

use Illuminate\Database\Seeder;

class MonsterTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('monster')->delete();
        
        \DB::table('monster')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'フシギダネ',
                'software_id' => 1,
                'height' => '0.7',
                'weight' => '6.9',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'フシギソウ',
                'software_id' => 1,
                'height' => '1',
                'weight' => '13',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'フシギバナ',
                'software_id' => 1,
                'height' => '2',
                'weight' => '100',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'ヒトカゲ',
                'software_id' => 1,
                'height' => '0.6',
                'weight' => '8.5',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'リザード',
                'software_id' => 1,
                'height' => '1.1',
                'weight' => '19',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'リザードン',
                'software_id' => 1,
                'height' => '1.7',
                'weight' => '90.5',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'ゼニガメ',
                'software_id' => 1,
                'height' => '0.5',
                'weight' => '9',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'カメール',
                'software_id' => 1,
                'height' => '1',
                'weight' => '22.5',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'カメックス',
                'software_id' => 1,
                'height' => '1.6',
                'weight' => '85.5',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'キャタピー',
                'software_id' => 1,
                'height' => '0.3',
                'weight' => '2.9',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'トランセル',
                'software_id' => 1,
                'height' => '0.7',
                'weight' => '9.9',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'バタフリー',
                'software_id' => 1,
                'height' => '1.1',
                'weight' => '32',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'ビードル',
                'software_id' => 1,
                'height' => '0.3',
                'weight' => '3.2',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'コクーン',
                'software_id' => 1,
                'height' => '0.6',
                'weight' => '10',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'スピアー',
                'software_id' => 1,
                'height' => '1',
                'weight' => '29.5',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'ポッポ',
                'software_id' => 1,
                'height' => '0.3',
                'weight' => '1.8',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'ピジョン',
                'software_id' => 1,
                'height' => '1.1',
                'weight' => '30',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'ピジョット',
                'software_id' => 1,
                'height' => '1.5',
                'weight' => '39.5',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'コラッタ',
                'software_id' => 1,
                'height' => '0.3',
                'weight' => '3.5',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'ラッタ',
                'software_id' => 1,
                'height' => '0.7',
                'weight' => '18.5',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'オニスズメ',
                'software_id' => 1,
                'height' => '0.3',
                'weight' => '2',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'オニドリル',
                'software_id' => 1,
                'height' => '1.2',
                'weight' => '38',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'アーボ',
                'software_id' => 1,
                'height' => '2',
                'weight' => '6.9',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'アーボック',
                'software_id' => 1,
                'height' => '3.5',
                'weight' => '65',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'ピカチュウ',
                'software_id' => 1,
                'height' => '0.4',
                'weight' => '6',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'ライチュウ',
                'software_id' => 1,
                'height' => '0.8',
                'weight' => '30',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'サンド',
                'software_id' => 1,
                'height' => '0.6',
                'weight' => '12',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'サンドパン',
                'software_id' => 1,
                'height' => '1',
                'weight' => '29.5',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'ニドラン♀',
                'software_id' => 1,
                'height' => '0.4',
                'weight' => '7',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'ニドリーナ',
                'software_id' => 1,
                'height' => '0.8',
                'weight' => '20',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'ニドクイン',
                'software_id' => 1,
                'height' => '1.3',
                'weight' => '60',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'ニドラン♂',
                'software_id' => 1,
                'height' => '0.5',
                'weight' => '9',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'ニドリーノ',
                'software_id' => 1,
                'height' => '0.9',
                'weight' => '19.5',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'ニドキング',
                'software_id' => 1,
                'height' => '1.4',
                'weight' => '62',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'ピッピ',
                'software_id' => 1,
                'height' => '0.6',
                'weight' => '7.5',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'ピクシー',
                'software_id' => 1,
                'height' => '1.3',
                'weight' => '40',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'ロコン',
                'software_id' => 1,
                'height' => '0.6',
                'weight' => '9.9',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'キュウコン',
                'software_id' => 1,
                'height' => '1.1',
                'weight' => '19.9',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'プリン',
                'software_id' => 1,
                'height' => '0.5',
                'weight' => '5.5',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'プクリン',
                'software_id' => 1,
                'height' => '1',
                'weight' => '12',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'ズバット',
                'software_id' => 1,
                'height' => '0.8',
                'weight' => '7.5',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'ゴルバット',
                'software_id' => 1,
                'height' => '1.6',
                'weight' => '55',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'ナゾノクサ',
                'software_id' => 1,
                'height' => '0.5',
                'weight' => '5.4',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'クサイハナ',
                'software_id' => 1,
                'height' => '0.8',
                'weight' => '8.6',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'ラフレシア',
                'software_id' => 1,
                'height' => '1.2',
                'weight' => '18.6',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'パラス',
                'software_id' => 1,
                'height' => '0.3',
                'weight' => '5.4',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'パラセクト',
                'software_id' => 1,
                'height' => '1',
                'weight' => '29.5',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'コンパン',
                'software_id' => 1,
                'height' => '1',
                'weight' => '30',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'モルフォン',
                'software_id' => 1,
                'height' => '1.5',
                'weight' => '12.5',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'ディグダ',
                'software_id' => 1,
                'height' => '0.2',
                'weight' => '0.8',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'ダグトリオ',
                'software_id' => 1,
                'height' => '0.7',
                'weight' => '33.3',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'ニャース',
                'software_id' => 1,
                'height' => '0.4',
                'weight' => '4.2',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'ペルシアン',
                'software_id' => 1,
                'height' => '1',
                'weight' => '32',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'コダック',
                'software_id' => 1,
                'height' => '0.8',
                'weight' => '19.6',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'ゴルダック',
                'software_id' => 1,
                'height' => '1.7',
                'weight' => '76.6',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'マンキー',
                'software_id' => 1,
                'height' => '0.5',
                'weight' => '28',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'オコリザル',
                'software_id' => 1,
                'height' => '1',
                'weight' => '32',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'ガーディ',
                'software_id' => 1,
                'height' => '0.7',
                'weight' => '19',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'ウインディ',
                'software_id' => 1,
                'height' => '1.9',
                'weight' => '155',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'ニョロモ',
                'software_id' => 1,
                'height' => '0.6',
                'weight' => '12.4',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'ニョロゾ',
                'software_id' => 1,
                'height' => '1',
                'weight' => '20',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'ニョロボン',
                'software_id' => 1,
                'height' => '1.3',
                'weight' => '54',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'ケーシィ',
                'software_id' => 1,
                'height' => '0.9',
                'weight' => '19.5',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'ユンゲラー',
                'software_id' => 1,
                'height' => '1.3',
                'weight' => '56.5',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'フーディン',
                'software_id' => 1,
                'height' => '1.5',
                'weight' => '48',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'ワンリキー',
                'software_id' => 1,
                'height' => '0.8',
                'weight' => '19.5',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'ゴーリキー',
                'software_id' => 1,
                'height' => '1.5',
                'weight' => '70.5',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'カイリキー',
                'software_id' => 1,
                'height' => '1.6',
                'weight' => '130',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'マダツボミ',
                'software_id' => 1,
                'height' => '0.7',
                'weight' => '4',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'ウツドン',
                'software_id' => 1,
                'height' => '1',
                'weight' => '6.4',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'ウツボット',
                'software_id' => 1,
                'height' => '1.7',
                'weight' => '15.5',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'メノクラゲ',
                'software_id' => 1,
                'height' => '0.9',
                'weight' => '45.5',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'ドククラゲ',
                'software_id' => 1,
                'height' => '1.6',
                'weight' => '55',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'イシツブテ',
                'software_id' => 1,
                'height' => '0.4',
                'weight' => '20',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'ゴローン',
                'software_id' => 1,
                'height' => '1',
                'weight' => '105',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'ゴローニャ',
                'software_id' => 1,
                'height' => '1.4',
                'weight' => '300',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'ポニータ',
                'software_id' => 1,
                'height' => '1',
                'weight' => '30',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'ギャロップ',
                'software_id' => 1,
                'height' => '1.7',
                'weight' => '95',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'ヤドン',
                'software_id' => 1,
                'height' => '1.2',
                'weight' => '36',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'ヤドラン',
                'software_id' => 1,
                'height' => '1.6',
                'weight' => '78.5',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'コイル',
                'software_id' => 1,
                'height' => '0.3',
                'weight' => '6',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'レアコイル',
                'software_id' => 1,
                'height' => '1',
                'weight' => '60',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'カモネギ',
                'software_id' => 1,
                'height' => '0.8',
                'weight' => '15',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'ドードー',
                'software_id' => 1,
                'height' => '1.4',
                'weight' => '39.2',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'ドードリオ',
                'software_id' => 1,
                'height' => '1.8',
                'weight' => '85.2',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'パウワウ',
                'software_id' => 1,
                'height' => '1.1',
                'weight' => '90',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'ジュゴン',
                'software_id' => 1,
                'height' => '1.7',
                'weight' => '120',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'ベトベター',
                'software_id' => 1,
                'height' => '0.9',
                'weight' => '30',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'ベトベトン',
                'software_id' => 1,
                'height' => '1.2',
                'weight' => '30',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'シェルダー',
                'software_id' => 1,
                'height' => '0.3',
                'weight' => '4',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'パルシェン',
                'software_id' => 1,
                'height' => '1.5',
                'weight' => '132.5',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'ゴース',
                'software_id' => 1,
                'height' => '1.3',
                'weight' => '0.1',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'ゴースト',
                'software_id' => 1,
                'height' => '1.6',
                'weight' => '0.1',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'ゲンガー',
                'software_id' => 1,
                'height' => '1.5',
                'weight' => '40.5',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'イワーク',
                'software_id' => 1,
                'height' => '8.8',
                'weight' => '210',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'スリープ',
                'software_id' => 1,
                'height' => '1',
                'weight' => '32.4',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'スリーパー',
                'software_id' => 1,
                'height' => '1.6',
                'weight' => '75.6',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'クラブ',
                'software_id' => 1,
                'height' => '0.4',
                'weight' => '6.5',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'キングラー',
                'software_id' => 1,
                'height' => '1.3',
                'weight' => '60',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'ビリリダマ',
                'software_id' => 1,
                'height' => '0.5',
                'weight' => '10.4',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'マルマイン',
                'software_id' => 1,
                'height' => '1.2',
                'weight' => '66.6',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'タマタマ',
                'software_id' => 1,
                'height' => '0.4',
                'weight' => '2.5',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'ナッシー',
                'software_id' => 1,
                'height' => '2',
                'weight' => '120',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'カラカラ',
                'software_id' => 1,
                'height' => '0.4',
                'weight' => '6.5',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'ガラガラ',
                'software_id' => 1,
                'height' => '1',
                'weight' => '45',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'サワムラー',
                'software_id' => 1,
                'height' => '1.5',
                'weight' => '49.8',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'エビワラー',
                'software_id' => 1,
                'height' => '1.4',
                'weight' => '50.2',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'ベロリンガ',
                'software_id' => 1,
                'height' => '1.2',
                'weight' => '65.5',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'ドガース',
                'software_id' => 1,
                'height' => '0.6',
                'weight' => '1',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'マタドガス',
                'software_id' => 1,
                'height' => '1.2',
                'weight' => '9.5',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'サイホーン',
                'software_id' => 1,
                'height' => '1',
                'weight' => '115',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'サイドン',
                'software_id' => 1,
                'height' => '1.9',
                'weight' => '120',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'ラッキー',
                'software_id' => 1,
                'height' => '1.1',
                'weight' => '34.6',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'モンジャラ',
                'software_id' => 1,
                'height' => '1',
                'weight' => '35',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'ガルーラ',
                'software_id' => 1,
                'height' => '2.2',
                'weight' => '80',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'タッツー',
                'software_id' => 1,
                'height' => '0.4',
                'weight' => '8',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'シードラ',
                'software_id' => 1,
                'height' => '1.2',
                'weight' => '25',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'トサキント',
                'software_id' => 1,
                'height' => '0.6',
                'weight' => '15',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'アズマオウ',
                'software_id' => 1,
                'height' => '1.3',
                'weight' => '39',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'ヒトデマン',
                'software_id' => 1,
                'height' => '0.8',
                'weight' => '34.5',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'スターミー',
                'software_id' => 1,
                'height' => '1.1',
                'weight' => '80',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'バリヤード',
                'software_id' => 1,
                'height' => '1.3',
                'weight' => '54.5',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'ストライク',
                'software_id' => 1,
                'height' => '1.5',
                'weight' => '56',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'ルージュラ',
                'software_id' => 1,
                'height' => '1.4',
                'weight' => '40.6',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'エレブー',
                'software_id' => 1,
                'height' => '1.1',
                'weight' => '30',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'ブーバー',
                'software_id' => 1,
                'height' => '1.3',
                'weight' => '44.5',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'カイロス',
                'software_id' => 1,
                'height' => '1.5',
                'weight' => '55',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'ケンタロス',
                'software_id' => 1,
                'height' => '1.4',
                'weight' => '88.4',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'コイキング',
                'software_id' => 1,
                'height' => '0.9',
                'weight' => '10',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'ギャラドス',
                'software_id' => 1,
                'height' => '6.5',
                'weight' => '235',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'ラプラス',
                'software_id' => 1,
                'height' => '2.5',
                'weight' => '220',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'メタモン',
                'software_id' => 1,
                'height' => '0.3',
                'weight' => '4',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'イーブイ',
                'software_id' => 1,
                'height' => '0.3',
                'weight' => '6.5',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'シャワーズ',
                'software_id' => 1,
                'height' => '1',
                'weight' => '29',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'サンダース',
                'software_id' => 1,
                'height' => '0.8',
                'weight' => '24.5',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'ブースター',
                'software_id' => 1,
                'height' => '0.9',
                'weight' => '25',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'ポリゴン',
                'software_id' => 1,
                'height' => '0.8',
                'weight' => '36.5',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'オムナイト',
                'software_id' => 1,
                'height' => '0.4',
                'weight' => '7.5',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'オムスター',
                'software_id' => 1,
                'height' => '1',
                'weight' => '35',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'カブト',
                'software_id' => 1,
                'height' => '0.5',
                'weight' => '11.5',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'カブトプス',
                'software_id' => 1,
                'height' => '1.3',
                'weight' => '40.5',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'プテラ',
                'software_id' => 1,
                'height' => '1.8',
                'weight' => '59',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'カビゴン',
                'software_id' => 1,
                'height' => '2.1',
                'weight' => '460',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'フリーザー',
                'software_id' => 1,
                'height' => '1.7',
                'weight' => '55.4',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'サンダー',
                'software_id' => 1,
                'height' => '1.6',
                'weight' => '52.6',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'ファイヤー',
                'software_id' => 1,
                'height' => '2',
                'weight' => '60',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'ミニリュウ',
                'software_id' => 1,
                'height' => '1.8',
                'weight' => '3.3',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'ハクリュー',
                'software_id' => 1,
                'height' => '4',
                'weight' => '16.5',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'カイリュー',
                'software_id' => 1,
                'height' => '2.2',
                'weight' => '210',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'ミュウツー',
                'software_id' => 1,
                'height' => '2',
                'weight' => '122',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'ミュウ',
                'software_id' => 1,
                'height' => '0.4',
                'weight' => '4',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'チコリータ',
                'software_id' => 2,
                'height' => '0.9',
                'weight' => '6.4',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'ベイリーフ',
                'software_id' => 2,
                'height' => '1.2',
                'weight' => '15.8',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'メガニウム',
                'software_id' => 2,
                'height' => '1.8',
                'weight' => '100.5',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'ヒノアラシ',
                'software_id' => 2,
                'height' => '0.5',
                'weight' => '7.9',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'マグマラシ',
                'software_id' => 2,
                'height' => '0.9',
                'weight' => '19',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'バクフーン',
                'software_id' => 2,
                'height' => '1.7',
                'weight' => '79.5',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'ワニノコ',
                'software_id' => 2,
                'height' => '0.6',
                'weight' => '9.5',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'アリゲイツ',
                'software_id' => 2,
                'height' => '1.1',
                'weight' => '25',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'オーダイル',
                'software_id' => 2,
                'height' => '2.3',
                'weight' => '88.8',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'オタチ',
                'software_id' => 2,
                'height' => '0.8',
                'weight' => '6',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'オオタチ',
                'software_id' => 2,
                'height' => '1.8',
                'weight' => '32.5',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'ホーホー',
                'software_id' => 2,
                'height' => '0.7',
                'weight' => '21.2',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'ヨルノズク',
                'software_id' => 2,
                'height' => '1.6',
                'weight' => '40.8',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'レディバ',
                'software_id' => 2,
                'height' => '1',
                'weight' => '10.8',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'レディアン',
                'software_id' => 2,
                'height' => '1.4',
                'weight' => '35.6',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'イトマル',
                'software_id' => 2,
                'height' => '0.5',
                'weight' => '8.5',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'アリアドス',
                'software_id' => 2,
                'height' => '1.1',
                'weight' => '33.5',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'クロバット',
                'software_id' => 2,
                'height' => '1.8',
                'weight' => '75',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'チョンチー',
                'software_id' => 2,
                'height' => '0.5',
                'weight' => '12',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'ランターン',
                'software_id' => 2,
                'height' => '1.2',
                'weight' => '22.5',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'ピチュー',
                'software_id' => 2,
                'height' => '0.3',
                'weight' => '2',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'ピィ',
                'software_id' => 2,
                'height' => '0.3',
                'weight' => '3',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'ププリン',
                'software_id' => 2,
                'height' => '0.3',
                'weight' => '1',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'トゲピー',
                'software_id' => 2,
                'height' => '0.3',
                'weight' => '1.5',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'トゲチック',
                'software_id' => 2,
                'height' => '0.6',
                'weight' => '3.2',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'ネイティ',
                'software_id' => 2,
                'height' => '0.2',
                'weight' => '2',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'ネイティオ',
                'software_id' => 2,
                'height' => '1.5',
                'weight' => '15',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'メリープ',
                'software_id' => 2,
                'height' => '0.6',
                'weight' => '7.8',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'モココ',
                'software_id' => 2,
                'height' => '0.8',
                'weight' => '13.3',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'デンリュウ',
                'software_id' => 2,
                'height' => '1.4',
                'weight' => '61.5',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'キレイハナ',
                'software_id' => 2,
                'height' => '0.4',
                'weight' => '5.8',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'マリル',
                'software_id' => 2,
                'height' => '0.4',
                'weight' => '8.5',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'マリルリ',
                'software_id' => 2,
                'height' => '0.8',
                'weight' => '28.5',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'ウソッキー',
                'software_id' => 2,
                'height' => '1.2',
                'weight' => '38',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'ニョロトノ',
                'software_id' => 2,
                'height' => '1.1',
                'weight' => '33.9',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'ハネッコ',
                'software_id' => 2,
                'height' => '0.4',
                'weight' => '0.5',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'ポポッコ',
                'software_id' => 2,
                'height' => '0.6',
                'weight' => '1',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'ワタッコ',
                'software_id' => 2,
                'height' => '0.8',
                'weight' => '3',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'エイパム',
                'software_id' => 2,
                'height' => '0.8',
                'weight' => '11.5',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'ヒマナッツ',
                'software_id' => 2,
                'height' => '0.3',
                'weight' => '1.8',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'キマワリ',
                'software_id' => 2,
                'height' => '0.8',
                'weight' => '8.5',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'ヤンヤンマ',
                'software_id' => 2,
                'height' => '1.2',
                'weight' => '38',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'ウパー',
                'software_id' => 2,
                'height' => '0.4',
                'weight' => '8.5',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'ヌオー',
                'software_id' => 2,
                'height' => '1.4',
                'weight' => '75',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'エーフィ',
                'software_id' => 2,
                'height' => '0.9',
                'weight' => '26.5',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'ブラッキー',
                'software_id' => 2,
                'height' => '1',
                'weight' => '27',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'ヤミカラス',
                'software_id' => 2,
                'height' => '0.5',
                'weight' => '2.1',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'ヤドキング',
                'software_id' => 2,
                'height' => '2',
                'weight' => '79.5',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'ムウマ',
                'software_id' => 2,
                'height' => '0.7',
                'weight' => '1',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'アンノーン',
                'software_id' => 2,
                'height' => '0.5',
                'weight' => '5',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'ソーナンス',
                'software_id' => 2,
                'height' => '1.3',
                'weight' => '28.5',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'キリンリキ',
                'software_id' => 2,
                'height' => '1.5',
                'weight' => '41.5',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'クヌギダマ',
                'software_id' => 2,
                'height' => '0.6',
                'weight' => '7.2',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'フォレトス',
                'software_id' => 2,
                'height' => '1.2',
                'weight' => '125.8',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'ノコッチ',
                'software_id' => 2,
                'height' => '1.5',
                'weight' => '14',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'グライガー',
                'software_id' => 2,
                'height' => '1.1',
                'weight' => '64.8',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'ハガネール',
                'software_id' => 2,
                'height' => '9.2',
                'weight' => '400',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'ブルー',
                'software_id' => 2,
                'height' => '0.6',
                'weight' => '7.8',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'グランブル',
                'software_id' => 2,
                'height' => '1.4',
                'weight' => '48.7',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'ハリーセン',
                'software_id' => 2,
                'height' => '0.5',
                'weight' => '3.9',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'ハッサム',
                'software_id' => 2,
                'height' => '1.8',
                'weight' => '118',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'ツボツボ',
                'software_id' => 2,
                'height' => '0.6',
                'weight' => '20.5',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'ヘラクロス',
                'software_id' => 2,
                'height' => '1.5',
                'weight' => '54',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'ニューラ',
                'software_id' => 2,
                'height' => '0.9',
                'weight' => '28',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'ヒメグマ',
                'software_id' => 2,
                'height' => '0.6',
                'weight' => '8.8',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'リングマ',
                'software_id' => 2,
                'height' => '1.8',
                'weight' => '125.8',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'マグマッグ',
                'software_id' => 2,
                'height' => '0.7',
                'weight' => '35',
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'マグカルゴ',
                'software_id' => 2,
                'height' => '0.8',
                'weight' => '55',
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'ウリムー',
                'software_id' => 2,
                'height' => '0.4',
                'weight' => '6.5',
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'イノムー',
                'software_id' => 2,
                'height' => '1.1',
                'weight' => '55.8',
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'サニーゴ',
                'software_id' => 2,
                'height' => '0.6',
                'weight' => '5',
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'テッポウオ',
                'software_id' => 2,
                'height' => '0.6',
                'weight' => '12',
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'オクタン',
                'software_id' => 2,
                'height' => '0.9',
                'weight' => '28.5',
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'デリバード',
                'software_id' => 2,
                'height' => '0.9',
                'weight' => '16',
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'マンタイン',
                'software_id' => 2,
                'height' => '2.1',
                'weight' => '220',
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'エアームド',
                'software_id' => 2,
                'height' => '1.7',
                'weight' => '50.5',
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'デルビル',
                'software_id' => 2,
                'height' => '0.6',
                'weight' => '10.8',
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'ヘルガー',
                'software_id' => 2,
                'height' => '1.4',
                'weight' => '35',
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'キングドラ',
                'software_id' => 2,
                'height' => '1.8',
                'weight' => '152',
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'ゴマゾウ',
                'software_id' => 2,
                'height' => '0.5',
                'weight' => '33.5',
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'ドンファン',
                'software_id' => 2,
                'height' => '1.1',
                'weight' => '120',
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'ポリゴン２',
                'software_id' => 2,
                'height' => '0.6',
                'weight' => '32.5',
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'オドシシ',
                'software_id' => 2,
                'height' => '1.4',
                'weight' => '71.2',
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'ドーブル',
                'software_id' => 2,
                'height' => '1.2',
                'weight' => '58',
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'バルキー',
                'software_id' => 2,
                'height' => '0.7',
                'weight' => '21',
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'カポエラー',
                'software_id' => 2,
                'height' => '1.4',
                'weight' => '48',
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'ムチュール',
                'software_id' => 2,
                'height' => '0.4',
                'weight' => '6',
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'エレキッド',
                'software_id' => 2,
                'height' => '0.6',
                'weight' => '23.5',
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'ブビィ',
                'software_id' => 2,
                'height' => '0.7',
                'weight' => '21.4',
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'ミルタンク',
                'software_id' => 2,
                'height' => '1.2',
                'weight' => '75.5',
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'ハピナス',
                'software_id' => 2,
                'height' => '1.5',
                'weight' => '46.8',
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'ライコウ',
                'software_id' => 2,
                'height' => '1.9',
                'weight' => '178',
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'エンテイ',
                'software_id' => 2,
                'height' => '2.1',
                'weight' => '198',
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'スイクン',
                'software_id' => 2,
                'height' => '2',
                'weight' => '187',
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'ヨーギラス',
                'software_id' => 2,
                'height' => '0.6',
                'weight' => '72',
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'サナギラス',
                'software_id' => 2,
                'height' => '1.2',
                'weight' => '152',
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'バンギラス',
                'software_id' => 2,
                'height' => '2',
                'weight' => '202',
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'ルギア',
                'software_id' => 2,
                'height' => '5.2',
                'weight' => '216',
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'ホウオウ',
                'software_id' => 2,
                'height' => '3.8',
                'weight' => '199',
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'セレビィ',
                'software_id' => 2,
                'height' => '0.6',
                'weight' => '5',
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'キモリ',
                'software_id' => 3,
                'height' => '0.5',
                'weight' => '5',
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'ジュプトル',
                'software_id' => 3,
                'height' => '0.9',
                'weight' => '21.6',
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'ジュカイン',
                'software_id' => 3,
                'height' => '1.7',
                'weight' => '52.2',
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'アチャモ',
                'software_id' => 3,
                'height' => '0.4',
                'weight' => '2.5',
            ),
            255 => 
            array (
                'id' => 256,
                'name' => 'ワカシャモ',
                'software_id' => 3,
                'height' => '0.9',
                'weight' => '19.5',
            ),
            256 => 
            array (
                'id' => 257,
                'name' => 'バシャーモ',
                'software_id' => 3,
                'height' => '1.9',
                'weight' => '52',
            ),
            257 => 
            array (
                'id' => 258,
                'name' => 'ミズゴロウ',
                'software_id' => 3,
                'height' => '0.4',
                'weight' => '7.6',
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'ヌマクロー',
                'software_id' => 3,
                'height' => '0.7',
                'weight' => '28',
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'ラグラージ',
                'software_id' => 3,
                'height' => '1.5',
                'weight' => '81.9',
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'ポチエナ',
                'software_id' => 3,
                'height' => '0.5',
                'weight' => '13.6',
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'グラエナ',
                'software_id' => 3,
                'height' => '1',
                'weight' => '37',
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'ジグザグマ',
                'software_id' => 3,
                'height' => '0.4',
                'weight' => '17.5',
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'マッスグマ',
                'software_id' => 3,
                'height' => '0.5',
                'weight' => '32.5',
            ),
            264 => 
            array (
                'id' => 265,
                'name' => 'ケムッソ',
                'software_id' => 3,
                'height' => '0.3',
                'weight' => '3.6',
            ),
            265 => 
            array (
                'id' => 266,
                'name' => 'カラサリス',
                'software_id' => 3,
                'height' => '0.6',
                'weight' => '10',
            ),
            266 => 
            array (
                'id' => 267,
                'name' => 'アゲハント',
                'software_id' => 3,
                'height' => '1',
                'weight' => '28.4',
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'マユルド',
                'software_id' => 3,
                'height' => '0.7',
                'weight' => '11.5',
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'ドクケイル',
                'software_id' => 3,
                'height' => '1.2',
                'weight' => '31.6',
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'ハスボー',
                'software_id' => 3,
                'height' => '0.5',
                'weight' => '2.6',
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'ハスブレロ',
                'software_id' => 3,
                'height' => '1.2',
                'weight' => '32.5',
            ),
            271 => 
            array (
                'id' => 272,
                'name' => 'ルンパッパ',
                'software_id' => 3,
                'height' => '1.5',
                'weight' => '55',
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'タネボー',
                'software_id' => 3,
                'height' => '0.5',
                'weight' => '4',
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'コノハナ',
                'software_id' => 3,
                'height' => '1',
                'weight' => '28',
            ),
            274 => 
            array (
                'id' => 275,
                'name' => 'ダーテング',
                'software_id' => 3,
                'height' => '1.3',
                'weight' => '59.6',
            ),
            275 => 
            array (
                'id' => 276,
                'name' => 'スバメ',
                'software_id' => 3,
                'height' => '0.3',
                'weight' => '2.3',
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'オオスバメ',
                'software_id' => 3,
                'height' => '0.7',
                'weight' => '19.8',
            ),
            277 => 
            array (
                'id' => 278,
                'name' => 'キャモメ',
                'software_id' => 3,
                'height' => '0.6',
                'weight' => '9.5',
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'ペリッパー',
                'software_id' => 3,
                'height' => '1.2',
                'weight' => '28',
            ),
            279 => 
            array (
                'id' => 280,
                'name' => 'ラルトス',
                'software_id' => 3,
                'height' => '0.4',
                'weight' => '6.6',
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'キルリア',
                'software_id' => 3,
                'height' => '0.8',
                'weight' => '20.2',
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'サーナイト',
                'software_id' => 3,
                'height' => '1.6',
                'weight' => '48.4',
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'アメタマ',
                'software_id' => 3,
                'height' => '0.5',
                'weight' => '1.7',
            ),
            283 => 
            array (
                'id' => 284,
                'name' => 'アメモース',
                'software_id' => 3,
                'height' => '0.8',
                'weight' => '3.6',
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'キノココ',
                'software_id' => 3,
                'height' => '0.4',
                'weight' => '4.5',
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'キノガッサ',
                'software_id' => 3,
                'height' => '1.2',
                'weight' => '39.2',
            ),
            286 => 
            array (
                'id' => 287,
                'name' => 'ナマケロ',
                'software_id' => 3,
                'height' => '0.8',
                'weight' => '24',
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'ヤルキモノ',
                'software_id' => 3,
                'height' => '1.4',
                'weight' => '46.5',
            ),
            288 => 
            array (
                'id' => 289,
                'name' => 'ケッキング',
                'software_id' => 3,
                'height' => '2',
                'weight' => '130.5',
            ),
            289 => 
            array (
                'id' => 290,
                'name' => 'ツチニン',
                'software_id' => 3,
                'height' => '0.5',
                'weight' => '5.5',
            ),
            290 => 
            array (
                'id' => 291,
                'name' => 'テッカニン',
                'software_id' => 3,
                'height' => '0.8',
                'weight' => '12',
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'ヌケニン',
                'software_id' => 3,
                'height' => '0.8',
                'weight' => '1.2',
            ),
            292 => 
            array (
                'id' => 293,
                'name' => 'ゴニョニョ',
                'software_id' => 3,
                'height' => '0.6',
                'weight' => '16.3',
            ),
            293 => 
            array (
                'id' => 294,
                'name' => 'ドゴーム',
                'software_id' => 3,
                'height' => '1',
                'weight' => '40.5',
            ),
            294 => 
            array (
                'id' => 295,
                'name' => 'バクオング',
                'software_id' => 3,
                'height' => '1.5',
                'weight' => '84',
            ),
            295 => 
            array (
                'id' => 296,
                'name' => 'マクノシタ',
                'software_id' => 3,
                'height' => '1',
                'weight' => '86.4',
            ),
            296 => 
            array (
                'id' => 297,
                'name' => 'ハリテヤマ',
                'software_id' => 3,
                'height' => '2.3',
                'weight' => '253.8',
            ),
            297 => 
            array (
                'id' => 298,
                'name' => 'ルリリ',
                'software_id' => 3,
                'height' => '0.2',
                'weight' => '2',
            ),
            298 => 
            array (
                'id' => 299,
                'name' => 'ノズパス',
                'software_id' => 3,
                'height' => '1',
                'weight' => '97',
            ),
            299 => 
            array (
                'id' => 300,
                'name' => 'エネコ',
                'software_id' => 3,
                'height' => '0.6',
                'weight' => '11',
            ),
            300 => 
            array (
                'id' => 301,
                'name' => 'エネコロロ',
                'software_id' => 3,
                'height' => '1.1',
                'weight' => '32.6',
            ),
            301 => 
            array (
                'id' => 302,
                'name' => 'ヤミラミ',
                'software_id' => 3,
                'height' => '0.5',
                'weight' => '11',
            ),
            302 => 
            array (
                'id' => 303,
                'name' => 'クチート',
                'software_id' => 3,
                'height' => '0.6',
                'weight' => '11.5',
            ),
            303 => 
            array (
                'id' => 304,
                'name' => 'ココドラ',
                'software_id' => 3,
                'height' => '0.4',
                'weight' => '60',
            ),
            304 => 
            array (
                'id' => 305,
                'name' => 'コドラ',
                'software_id' => 3,
                'height' => '0.9',
                'weight' => '120',
            ),
            305 => 
            array (
                'id' => 306,
                'name' => 'ボスゴドラ',
                'software_id' => 3,
                'height' => '2.1',
                'weight' => '360',
            ),
            306 => 
            array (
                'id' => 307,
                'name' => 'アサナン',
                'software_id' => 3,
                'height' => '0.6',
                'weight' => '11.2',
            ),
            307 => 
            array (
                'id' => 308,
                'name' => 'チャーレム',
                'software_id' => 3,
                'height' => '1.3',
                'weight' => '31.5',
            ),
            308 => 
            array (
                'id' => 309,
                'name' => 'ラクライ',
                'software_id' => 3,
                'height' => '0.6',
                'weight' => '15.2',
            ),
            309 => 
            array (
                'id' => 310,
                'name' => 'ライボルト',
                'software_id' => 3,
                'height' => '1.5',
                'weight' => '40.2',
            ),
            310 => 
            array (
                'id' => 311,
                'name' => 'プラスル',
                'software_id' => 3,
                'height' => '0.4',
                'weight' => '4.2',
            ),
            311 => 
            array (
                'id' => 312,
                'name' => 'マイナン',
                'software_id' => 3,
                'height' => '0.4',
                'weight' => '4.2',
            ),
            312 => 
            array (
                'id' => 313,
                'name' => 'バルビート',
                'software_id' => 3,
                'height' => '0.7',
                'weight' => '17.7',
            ),
            313 => 
            array (
                'id' => 314,
                'name' => 'イルミーゼ',
                'software_id' => 3,
                'height' => '0.6',
                'weight' => '17.7',
            ),
            314 => 
            array (
                'id' => 315,
                'name' => 'ロゼリア',
                'software_id' => 3,
                'height' => '0.3',
                'weight' => '2',
            ),
            315 => 
            array (
                'id' => 316,
                'name' => 'ゴクリン',
                'software_id' => 3,
                'height' => '0.4',
                'weight' => '10.3',
            ),
            316 => 
            array (
                'id' => 317,
                'name' => 'マルノーム',
                'software_id' => 3,
                'height' => '1.7',
                'weight' => '80',
            ),
            317 => 
            array (
                'id' => 318,
                'name' => 'キバニア',
                'software_id' => 3,
                'height' => '0.8',
                'weight' => '20.8',
            ),
            318 => 
            array (
                'id' => 319,
                'name' => 'サメハダー',
                'software_id' => 3,
                'height' => '1.8',
                'weight' => '88.8',
            ),
            319 => 
            array (
                'id' => 320,
                'name' => 'ホエルコ',
                'software_id' => 3,
                'height' => '2',
                'weight' => '130',
            ),
            320 => 
            array (
                'id' => 321,
                'name' => 'ホエルオー',
                'software_id' => 3,
                'height' => '14.5',
                'weight' => '398',
            ),
            321 => 
            array (
                'id' => 322,
                'name' => 'ドンメル',
                'software_id' => 3,
                'height' => '0.7',
                'weight' => '24',
            ),
            322 => 
            array (
                'id' => 323,
                'name' => 'バクーダ',
                'software_id' => 3,
                'height' => '1.9',
                'weight' => '220',
            ),
            323 => 
            array (
                'id' => 324,
                'name' => 'コータス',
                'software_id' => 3,
                'height' => '0.5',
                'weight' => '80.4',
            ),
            324 => 
            array (
                'id' => 325,
                'name' => 'バネブー',
                'software_id' => 3,
                'height' => '0.7',
                'weight' => '30.6',
            ),
            325 => 
            array (
                'id' => 326,
                'name' => 'ブーピッグ',
                'software_id' => 3,
                'height' => '0.9',
                'weight' => '71.5',
            ),
            326 => 
            array (
                'id' => 327,
                'name' => 'パッチール',
                'software_id' => 3,
                'height' => '1.1',
                'weight' => '5',
            ),
            327 => 
            array (
                'id' => 328,
                'name' => 'ナックラー',
                'software_id' => 3,
                'height' => '0.7',
                'weight' => '15',
            ),
            328 => 
            array (
                'id' => 329,
                'name' => 'ビブラーバ',
                'software_id' => 3,
                'height' => '1.1',
                'weight' => '15.3',
            ),
            329 => 
            array (
                'id' => 330,
                'name' => 'フライゴン',
                'software_id' => 3,
                'height' => '2',
                'weight' => '82',
            ),
            330 => 
            array (
                'id' => 331,
                'name' => 'サボネア',
                'software_id' => 3,
                'height' => '0.4',
                'weight' => '51.3',
            ),
            331 => 
            array (
                'id' => 332,
                'name' => 'ノクタス',
                'software_id' => 3,
                'height' => '1.3',
                'weight' => '77.4',
            ),
            332 => 
            array (
                'id' => 333,
                'name' => 'チルット',
                'software_id' => 3,
                'height' => '0.4',
                'weight' => '1.2',
            ),
            333 => 
            array (
                'id' => 334,
                'name' => 'チルタリス',
                'software_id' => 3,
                'height' => '1.1',
                'weight' => '20.6',
            ),
            334 => 
            array (
                'id' => 335,
                'name' => 'ザングース',
                'software_id' => 3,
                'height' => '1.3',
                'weight' => '40.3',
            ),
            335 => 
            array (
                'id' => 336,
                'name' => 'ハブネーク',
                'software_id' => 3,
                'height' => '2.7',
                'weight' => '52.5',
            ),
            336 => 
            array (
                'id' => 337,
                'name' => 'ルナトーン',
                'software_id' => 3,
                'height' => '1',
                'weight' => '168',
            ),
            337 => 
            array (
                'id' => 338,
                'name' => 'ソルロック',
                'software_id' => 3,
                'height' => '1.2',
                'weight' => '154',
            ),
            338 => 
            array (
                'id' => 339,
                'name' => 'ドジョッチ',
                'software_id' => 3,
                'height' => '0.4',
                'weight' => '1.9',
            ),
            339 => 
            array (
                'id' => 340,
                'name' => 'ナマズン',
                'software_id' => 3,
                'height' => '0.9',
                'weight' => '23.6',
            ),
            340 => 
            array (
                'id' => 341,
                'name' => 'ヘイガニ',
                'software_id' => 3,
                'height' => '0.6',
                'weight' => '11.5',
            ),
            341 => 
            array (
                'id' => 342,
                'name' => 'シザリガー',
                'software_id' => 3,
                'height' => '1.1',
                'weight' => '32.8',
            ),
            342 => 
            array (
                'id' => 343,
                'name' => 'ヤジロン',
                'software_id' => 3,
                'height' => '0.5',
                'weight' => '21.5',
            ),
            343 => 
            array (
                'id' => 344,
                'name' => 'ネンドール',
                'software_id' => 3,
                'height' => '1.5',
                'weight' => '108',
            ),
            344 => 
            array (
                'id' => 345,
                'name' => 'リリーラ',
                'software_id' => 3,
                'height' => '1',
                'weight' => '23.8',
            ),
            345 => 
            array (
                'id' => 346,
                'name' => 'ユレイドル',
                'software_id' => 3,
                'height' => '1.5',
                'weight' => '60.4',
            ),
            346 => 
            array (
                'id' => 347,
                'name' => 'アノプス',
                'software_id' => 3,
                'height' => '0.7',
                'weight' => '12.5',
            ),
            347 => 
            array (
                'id' => 348,
                'name' => 'アーマルド',
                'software_id' => 3,
                'height' => '1.5',
                'weight' => '68.2',
            ),
            348 => 
            array (
                'id' => 349,
                'name' => 'ヒンバス',
                'software_id' => 3,
                'height' => '0.6',
                'weight' => '7.4',
            ),
            349 => 
            array (
                'id' => 350,
                'name' => 'ミロカロス',
                'software_id' => 3,
                'height' => '6.2',
                'weight' => '162',
            ),
            350 => 
            array (
                'id' => 351,
                'name' => 'ポワルン',
                'software_id' => 3,
                'height' => '0.3',
                'weight' => '0.8',
            ),
            351 => 
            array (
                'id' => 352,
                'name' => 'カクレオン',
                'software_id' => 3,
                'height' => '1',
                'weight' => '22',
            ),
            352 => 
            array (
                'id' => 353,
                'name' => 'カゲボウズ',
                'software_id' => 3,
                'height' => '0.6',
                'weight' => '2.3',
            ),
            353 => 
            array (
                'id' => 354,
                'name' => 'ジュペッタ',
                'software_id' => 3,
                'height' => '1.1',
                'weight' => '12.5',
            ),
            354 => 
            array (
                'id' => 355,
                'name' => 'ヨマワル',
                'software_id' => 3,
                'height' => '0.8',
                'weight' => '15',
            ),
            355 => 
            array (
                'id' => 356,
                'name' => 'サマヨール',
                'software_id' => 3,
                'height' => '1.6',
                'weight' => '30.6',
            ),
            356 => 
            array (
                'id' => 357,
                'name' => 'トロピウス',
                'software_id' => 3,
                'height' => '2',
                'weight' => '100',
            ),
            357 => 
            array (
                'id' => 358,
                'name' => 'チリーン',
                'software_id' => 3,
                'height' => '0.6',
                'weight' => '1',
            ),
            358 => 
            array (
                'id' => 359,
                'name' => 'アブソル',
                'software_id' => 3,
                'height' => '1.2',
                'weight' => '47',
            ),
            359 => 
            array (
                'id' => 360,
                'name' => 'ソーナノ',
                'software_id' => 3,
                'height' => '0.6',
                'weight' => '14',
            ),
            360 => 
            array (
                'id' => 361,
                'name' => 'ユキワラシ',
                'software_id' => 3,
                'height' => '0.7',
                'weight' => '16.8',
            ),
            361 => 
            array (
                'id' => 362,
                'name' => 'オニゴーリ',
                'software_id' => 3,
                'height' => '1.5',
                'weight' => '256.5',
            ),
            362 => 
            array (
                'id' => 363,
                'name' => 'タマザラシ',
                'software_id' => 3,
                'height' => '0.8',
                'weight' => '39.5',
            ),
            363 => 
            array (
                'id' => 364,
                'name' => 'トドグラー',
                'software_id' => 3,
                'height' => '1.1',
                'weight' => '87.6',
            ),
            364 => 
            array (
                'id' => 365,
                'name' => 'トドゼルガ',
                'software_id' => 3,
                'height' => '1.4',
                'weight' => '150.6',
            ),
            365 => 
            array (
                'id' => 366,
                'name' => 'パールル',
                'software_id' => 3,
                'height' => '0.4',
                'weight' => '52.5',
            ),
            366 => 
            array (
                'id' => 367,
                'name' => 'ハンテール',
                'software_id' => 3,
                'height' => '1.7',
                'weight' => '27',
            ),
            367 => 
            array (
                'id' => 368,
                'name' => 'サクラビス',
                'software_id' => 3,
                'height' => '1.8',
                'weight' => '22.6',
            ),
            368 => 
            array (
                'id' => 369,
                'name' => 'ジーランス',
                'software_id' => 3,
                'height' => '1',
                'weight' => '23.4',
            ),
            369 => 
            array (
                'id' => 370,
                'name' => 'ラブカス',
                'software_id' => 3,
                'height' => '0.6',
                'weight' => '8.7',
            ),
            370 => 
            array (
                'id' => 371,
                'name' => 'タツベイ',
                'software_id' => 3,
                'height' => '0.6',
                'weight' => '42.1',
            ),
            371 => 
            array (
                'id' => 372,
                'name' => 'コモルー',
                'software_id' => 3,
                'height' => '1.1',
                'weight' => '110.5',
            ),
            372 => 
            array (
                'id' => 373,
                'name' => 'ボーマンダ',
                'software_id' => 3,
                'height' => '1.5',
                'weight' => '102.6',
            ),
            373 => 
            array (
                'id' => 374,
                'name' => 'ダンバル',
                'software_id' => 3,
                'height' => '0.6',
                'weight' => '95.2',
            ),
            374 => 
            array (
                'id' => 375,
                'name' => 'メタング',
                'software_id' => 3,
                'height' => '1.2',
                'weight' => '202.5',
            ),
            375 => 
            array (
                'id' => 376,
                'name' => 'メタグロス',
                'software_id' => 3,
                'height' => '1.6',
                'weight' => '550',
            ),
            376 => 
            array (
                'id' => 377,
                'name' => 'レジロック',
                'software_id' => 3,
                'height' => '1.7',
                'weight' => '230',
            ),
            377 => 
            array (
                'id' => 378,
                'name' => 'レジアイス',
                'software_id' => 3,
                'height' => '1.8',
                'weight' => '175',
            ),
            378 => 
            array (
                'id' => 379,
                'name' => 'レジスチル',
                'software_id' => 3,
                'height' => '1.9',
                'weight' => '205',
            ),
            379 => 
            array (
                'id' => 380,
                'name' => 'ラティアス',
                'software_id' => 3,
                'height' => '1.4',
                'weight' => '40',
            ),
            380 => 
            array (
                'id' => 381,
                'name' => 'ラティオス',
                'software_id' => 3,
                'height' => '2',
                'weight' => '60',
            ),
            381 => 
            array (
                'id' => 382,
                'name' => 'カイオーガ',
                'software_id' => 3,
                'height' => '4.5',
                'weight' => '352',
            ),
            382 => 
            array (
                'id' => 383,
                'name' => 'グラードン',
                'software_id' => 3,
                'height' => '3.5',
                'weight' => '950',
            ),
            383 => 
            array (
                'id' => 384,
                'name' => 'レックウザ',
                'software_id' => 3,
                'height' => '7',
                'weight' => '206.5',
            ),
            384 => 
            array (
                'id' => 385,
                'name' => 'ジラーチ',
                'software_id' => 3,
                'height' => '0.3',
                'weight' => '1.1',
            ),
            385 => 
            array (
                'id' => 386,
                'name' => 'デオキシス',
                'software_id' => 3,
                'height' => '1.7',
                'weight' => '60.8',
            ),
            386 => 
            array (
                'id' => 387,
                'name' => 'ナエトル',
                'software_id' => 4,
                'height' => '0.4',
                'weight' => '10.2',
            ),
            387 => 
            array (
                'id' => 388,
                'name' => 'ハヤシガメ',
                'software_id' => 4,
                'height' => '1.1',
                'weight' => '97',
            ),
            388 => 
            array (
                'id' => 389,
                'name' => 'ドダイトス',
                'software_id' => 4,
                'height' => '2.2',
                'weight' => '310',
            ),
            389 => 
            array (
                'id' => 390,
                'name' => 'ヒコザル',
                'software_id' => 4,
                'height' => '0.5',
                'weight' => '6.2',
            ),
            390 => 
            array (
                'id' => 391,
                'name' => 'モウカザル',
                'software_id' => 4,
                'height' => '0.9',
                'weight' => '22',
            ),
            391 => 
            array (
                'id' => 392,
                'name' => 'ゴウカザル',
                'software_id' => 4,
                'height' => '1.2',
                'weight' => '55',
            ),
            392 => 
            array (
                'id' => 393,
                'name' => 'ポッチャマ',
                'software_id' => 4,
                'height' => '0.4',
                'weight' => '5.2',
            ),
            393 => 
            array (
                'id' => 394,
                'name' => 'ポッタイシ',
                'software_id' => 4,
                'height' => '0.8',
                'weight' => '23',
            ),
            394 => 
            array (
                'id' => 395,
                'name' => 'エンペルト',
                'software_id' => 4,
                'height' => '1.7',
                'weight' => '84.5',
            ),
            395 => 
            array (
                'id' => 396,
                'name' => 'ムックル',
                'software_id' => 4,
                'height' => '0.3',
                'weight' => '2',
            ),
            396 => 
            array (
                'id' => 397,
                'name' => 'ムクバード',
                'software_id' => 4,
                'height' => '0.6',
                'weight' => '15.5',
            ),
            397 => 
            array (
                'id' => 398,
                'name' => 'ムクホーク',
                'software_id' => 4,
                'height' => '1.2',
                'weight' => '24.9',
            ),
            398 => 
            array (
                'id' => 399,
                'name' => 'ビッパ',
                'software_id' => 4,
                'height' => '0.5',
                'weight' => '20',
            ),
            399 => 
            array (
                'id' => 400,
                'name' => 'ビーダル',
                'software_id' => 4,
                'height' => '1',
                'weight' => '31.5',
            ),
            400 => 
            array (
                'id' => 401,
                'name' => 'コロボーシ',
                'software_id' => 4,
                'height' => '0.3',
                'weight' => '2.2',
            ),
            401 => 
            array (
                'id' => 402,
                'name' => 'コロトック',
                'software_id' => 4,
                'height' => '1',
                'weight' => '25.5',
            ),
            402 => 
            array (
                'id' => 403,
                'name' => 'コリンク',
                'software_id' => 4,
                'height' => '0.5',
                'weight' => '9.5',
            ),
            403 => 
            array (
                'id' => 404,
                'name' => 'ルクシオ',
                'software_id' => 4,
                'height' => '0.9',
                'weight' => '30.5',
            ),
            404 => 
            array (
                'id' => 405,
                'name' => 'レントラー',
                'software_id' => 4,
                'height' => '1.4',
                'weight' => '42',
            ),
            405 => 
            array (
                'id' => 406,
                'name' => 'スボミー',
                'software_id' => 4,
                'height' => '0.2',
                'weight' => '1.2',
            ),
            406 => 
            array (
                'id' => 407,
                'name' => 'ロズレイド',
                'software_id' => 4,
                'height' => '0.9',
                'weight' => '14.5',
            ),
            407 => 
            array (
                'id' => 408,
                'name' => 'ズガイドス',
                'software_id' => 4,
                'height' => '0.9',
                'weight' => '31.5',
            ),
            408 => 
            array (
                'id' => 409,
                'name' => 'ラムパルド',
                'software_id' => 4,
                'height' => '1.6',
                'weight' => '102.5',
            ),
            409 => 
            array (
                'id' => 410,
                'name' => 'タテトプス',
                'software_id' => 4,
                'height' => '0.5',
                'weight' => '57',
            ),
            410 => 
            array (
                'id' => 411,
                'name' => 'トリデプス',
                'software_id' => 4,
                'height' => '1.3',
                'weight' => '149.5',
            ),
            411 => 
            array (
                'id' => 412,
                'name' => 'ミノムッチ',
                'software_id' => 4,
                'height' => '0.2',
                'weight' => '3.4',
            ),
            412 => 
            array (
                'id' => 413,
            'name' => 'ミノマダム(5)',
                'software_id' => 4,
                'height' => '0.5',
                'weight' => '6.5',
            ),
            413 => 
            array (
                'id' => 414,
                'name' => 'ガーメイル',
                'software_id' => 4,
                'height' => '0.9',
                'weight' => '23.3',
            ),
            414 => 
            array (
                'id' => 415,
                'name' => 'ミツハニー',
                'software_id' => 4,
                'height' => '0.3',
                'weight' => '5.5',
            ),
            415 => 
            array (
                'id' => 416,
                'name' => 'ビークイン',
                'software_id' => 4,
                'height' => '1.2',
                'weight' => '38.5',
            ),
            416 => 
            array (
                'id' => 417,
                'name' => 'パチリス',
                'software_id' => 4,
                'height' => '0.4',
                'weight' => '3.9',
            ),
            417 => 
            array (
                'id' => 418,
                'name' => 'ブイゼル',
                'software_id' => 4,
                'height' => '0.7',
                'weight' => '29.5',
            ),
            418 => 
            array (
                'id' => 419,
                'name' => 'フローゼル',
                'software_id' => 4,
                'height' => '1.1',
                'weight' => '33.5',
            ),
            419 => 
            array (
                'id' => 420,
                'name' => 'チェリンボ',
                'software_id' => 4,
                'height' => '0.4',
                'weight' => '3.3',
            ),
            420 => 
            array (
                'id' => 421,
                'name' => 'チェリム',
                'software_id' => 4,
                'height' => '0.5',
                'weight' => '9.3',
            ),
            421 => 
            array (
                'id' => 422,
                'name' => 'カラナクシ',
                'software_id' => 4,
                'height' => '0.3',
                'weight' => '6.3',
            ),
            422 => 
            array (
                'id' => 423,
                'name' => 'トリトドン',
                'software_id' => 4,
                'height' => '0.9',
                'weight' => '29.9',
            ),
            423 => 
            array (
                'id' => 424,
                'name' => 'エテボース',
                'software_id' => 4,
                'height' => '1.2',
                'weight' => '20.3',
            ),
            424 => 
            array (
                'id' => 425,
                'name' => 'フワンテ',
                'software_id' => 4,
                'height' => '0.4',
                'weight' => '1.2',
            ),
            425 => 
            array (
                'id' => 426,
                'name' => 'フワライド',
                'software_id' => 4,
                'height' => '1.2',
                'weight' => '15',
            ),
            426 => 
            array (
                'id' => 427,
                'name' => 'ミミロル',
                'software_id' => 4,
                'height' => '0.4',
                'weight' => '5.5',
            ),
            427 => 
            array (
                'id' => 428,
                'name' => 'ミミロップ',
                'software_id' => 4,
                'height' => '1.2',
                'weight' => '33.3',
            ),
            428 => 
            array (
                'id' => 429,
                'name' => 'ムウマージ',
                'software_id' => 4,
                'height' => '0.9',
                'weight' => '4.4',
            ),
            429 => 
            array (
                'id' => 430,
                'name' => 'ドンカラス',
                'software_id' => 4,
                'height' => '0.9',
                'weight' => '27.3',
            ),
            430 => 
            array (
                'id' => 431,
                'name' => 'ニャルマー',
                'software_id' => 4,
                'height' => '0.5',
                'weight' => '3.9',
            ),
            431 => 
            array (
                'id' => 432,
                'name' => 'ブニャット',
                'software_id' => 4,
                'height' => '1',
                'weight' => '43.8',
            ),
            432 => 
            array (
                'id' => 433,
                'name' => 'リーシャン',
                'software_id' => 4,
                'height' => '0.2',
                'weight' => '0.6',
            ),
            433 => 
            array (
                'id' => 434,
                'name' => 'スカンプー',
                'software_id' => 4,
                'height' => '0.4',
                'weight' => '19.2',
            ),
            434 => 
            array (
                'id' => 435,
                'name' => 'スカタンク',
                'software_id' => 4,
                'height' => '1',
                'weight' => '38',
            ),
            435 => 
            array (
                'id' => 436,
                'name' => 'ドーミラー',
                'software_id' => 4,
                'height' => '0.5',
                'weight' => '60.5',
            ),
            436 => 
            array (
                'id' => 437,
                'name' => 'ドータクン',
                'software_id' => 4,
                'height' => '1.3',
                'weight' => '187',
            ),
            437 => 
            array (
                'id' => 438,
                'name' => 'ウソハチ',
                'software_id' => 4,
                'height' => '0.5',
                'weight' => '15',
            ),
            438 => 
            array (
                'id' => 439,
                'name' => 'マネネ',
                'software_id' => 4,
                'height' => '0.6',
                'weight' => '13',
            ),
            439 => 
            array (
                'id' => 440,
                'name' => 'ピンプク',
                'software_id' => 4,
                'height' => '0.6',
                'weight' => '24.4',
            ),
            440 => 
            array (
                'id' => 441,
                'name' => 'ペラップ',
                'software_id' => 4,
                'height' => '0.5',
                'weight' => '1.9',
            ),
            441 => 
            array (
                'id' => 442,
                'name' => 'ミカルゲ',
                'software_id' => 4,
                'height' => '1',
                'weight' => '108',
            ),
            442 => 
            array (
                'id' => 443,
                'name' => 'フカマル',
                'software_id' => 4,
                'height' => '0.7',
                'weight' => '20.5',
            ),
            443 => 
            array (
                'id' => 444,
                'name' => 'ガバイト',
                'software_id' => 4,
                'height' => '1.4',
                'weight' => '56',
            ),
            444 => 
            array (
                'id' => 445,
                'name' => 'ガブリアス',
                'software_id' => 4,
                'height' => '1.9',
                'weight' => '95',
            ),
            445 => 
            array (
                'id' => 446,
                'name' => 'ゴンベ',
                'software_id' => 4,
                'height' => '0.6',
                'weight' => '105',
            ),
            446 => 
            array (
                'id' => 447,
                'name' => 'リオル',
                'software_id' => 4,
                'height' => '0.7',
                'weight' => '20.2',
            ),
            447 => 
            array (
                'id' => 448,
                'name' => 'ルカリオ',
                'software_id' => 4,
                'height' => '1.2',
                'weight' => '54',
            ),
            448 => 
            array (
                'id' => 449,
                'name' => 'ヒポポタス',
                'software_id' => 4,
                'height' => '0.8',
                'weight' => '49.5',
            ),
            449 => 
            array (
                'id' => 450,
                'name' => 'カバルドン',
                'software_id' => 4,
                'height' => '2',
                'weight' => '300',
            ),
            450 => 
            array (
                'id' => 451,
                'name' => 'スコルピ',
                'software_id' => 4,
                'height' => '0.8',
                'weight' => '12',
            ),
            451 => 
            array (
                'id' => 452,
                'name' => 'ドラピオン',
                'software_id' => 4,
                'height' => '1.3',
                'weight' => '61.5',
            ),
            452 => 
            array (
                'id' => 453,
                'name' => 'グレッグル',
                'software_id' => 4,
                'height' => '0.7',
                'weight' => '23',
            ),
            453 => 
            array (
                'id' => 454,
                'name' => 'ドクロッグ',
                'software_id' => 4,
                'height' => '1.3',
                'weight' => '44.4',
            ),
            454 => 
            array (
                'id' => 455,
                'name' => 'マスキッパ',
                'software_id' => 4,
                'height' => '1.4',
                'weight' => '27',
            ),
            455 => 
            array (
                'id' => 456,
                'name' => 'ケイコウオ',
                'software_id' => 4,
                'height' => '0.4',
                'weight' => '7',
            ),
            456 => 
            array (
                'id' => 457,
                'name' => 'ネオラント',
                'software_id' => 4,
                'height' => '1.2',
                'weight' => '24',
            ),
            457 => 
            array (
                'id' => 458,
                'name' => 'タマンタ',
                'software_id' => 4,
                'height' => '1',
                'weight' => '65',
            ),
            458 => 
            array (
                'id' => 459,
                'name' => 'ユキカブリ',
                'software_id' => 4,
                'height' => '1',
                'weight' => '50.5',
            ),
            459 => 
            array (
                'id' => 460,
                'name' => 'ユキノオー',
                'software_id' => 4,
                'height' => '2.2',
                'weight' => '135.5',
            ),
            460 => 
            array (
                'id' => 461,
                'name' => 'マニューラ',
                'software_id' => 4,
                'height' => '1.1',
                'weight' => '34',
            ),
            461 => 
            array (
                'id' => 462,
                'name' => 'ジバコイル',
                'software_id' => 4,
                'height' => '1.2',
                'weight' => '180',
            ),
            462 => 
            array (
                'id' => 463,
                'name' => 'ベロベルト',
                'software_id' => 4,
                'height' => '1.7',
                'weight' => '140',
            ),
            463 => 
            array (
                'id' => 464,
                'name' => 'ドサイドン',
                'software_id' => 4,
                'height' => '2.4',
                'weight' => '282.8',
            ),
            464 => 
            array (
                'id' => 465,
                'name' => 'モジャンボ',
                'software_id' => 4,
                'height' => '2',
                'weight' => '128.6',
            ),
            465 => 
            array (
                'id' => 466,
                'name' => 'エレキブル',
                'software_id' => 4,
                'height' => '1.8',
                'weight' => '138.6',
            ),
            466 => 
            array (
                'id' => 467,
                'name' => 'ブーバーン',
                'software_id' => 4,
                'height' => '1.6',
                'weight' => '68',
            ),
            467 => 
            array (
                'id' => 468,
                'name' => 'トゲキッス',
                'software_id' => 4,
                'height' => '1.5',
                'weight' => '38',
            ),
            468 => 
            array (
                'id' => 469,
                'name' => 'メガヤンマ',
                'software_id' => 4,
                'height' => '1.9',
                'weight' => '51.5',
            ),
            469 => 
            array (
                'id' => 470,
                'name' => 'リーフィア',
                'software_id' => 4,
                'height' => '1',
                'weight' => '25.5',
            ),
            470 => 
            array (
                'id' => 471,
                'name' => 'グレイシア',
                'software_id' => 4,
                'height' => '0.8',
                'weight' => '25.9',
            ),
            471 => 
            array (
                'id' => 472,
                'name' => 'グライオン',
                'software_id' => 4,
                'height' => '2',
                'weight' => '42.5',
            ),
            472 => 
            array (
                'id' => 473,
                'name' => 'マンムー',
                'software_id' => 4,
                'height' => '2.5',
                'weight' => '291',
            ),
            473 => 
            array (
                'id' => 474,
                'name' => 'ポリゴンＺ',
                'software_id' => 4,
                'height' => '0.9',
                'weight' => '34',
            ),
            474 => 
            array (
                'id' => 475,
                'name' => 'エルレイド',
                'software_id' => 4,
                'height' => '1.6',
                'weight' => '52',
            ),
            475 => 
            array (
                'id' => 476,
                'name' => 'ダイノーズ',
                'software_id' => 4,
                'height' => '1.4',
                'weight' => '340',
            ),
            476 => 
            array (
                'id' => 477,
                'name' => 'ヨノワール',
                'software_id' => 4,
                'height' => '2.2',
                'weight' => '106.6',
            ),
            477 => 
            array (
                'id' => 478,
                'name' => 'ユキメノコ',
                'software_id' => 4,
                'height' => '1.3',
                'weight' => '26.6',
            ),
            478 => 
            array (
                'id' => 479,
                'name' => 'ロトム',
                'software_id' => 4,
                'height' => '0.3',
                'weight' => '0.3',
            ),
            479 => 
            array (
                'id' => 480,
                'name' => 'ユクシー',
                'software_id' => 4,
                'height' => '0.3',
                'weight' => '0.3',
            ),
            480 => 
            array (
                'id' => 481,
                'name' => 'エムリット',
                'software_id' => 4,
                'height' => '0.3',
                'weight' => '0.3',
            ),
            481 => 
            array (
                'id' => 482,
                'name' => 'アグノム',
                'software_id' => 4,
                'height' => '0.3',
                'weight' => '0.3',
            ),
            482 => 
            array (
                'id' => 483,
                'name' => 'ディアルガ',
                'software_id' => 4,
                'height' => '5.4',
                'weight' => '683',
            ),
            483 => 
            array (
                'id' => 484,
                'name' => 'パルキア',
                'software_id' => 4,
                'height' => '4.2',
                'weight' => '336',
            ),
            484 => 
            array (
                'id' => 485,
                'name' => 'ヒードラン',
                'software_id' => 4,
                'height' => '1.7',
                'weight' => '430',
            ),
            485 => 
            array (
                'id' => 486,
                'name' => 'レジギガス',
                'software_id' => 4,
                'height' => '3.7',
                'weight' => '420',
            ),
            486 => 
            array (
                'id' => 487,
                'name' => 'ギラティナ',
                'software_id' => 4,
                'height' => '4.5',
                'weight' => '750',
            ),
            487 => 
            array (
                'id' => 488,
                'name' => 'クレセリア',
                'software_id' => 4,
                'height' => '1.5',
                'weight' => '85.6',
            ),
            488 => 
            array (
                'id' => 489,
                'name' => 'フィオネ',
                'software_id' => 4,
                'height' => '0.4',
                'weight' => '3.1',
            ),
            489 => 
            array (
                'id' => 490,
                'name' => 'マナフィ',
                'software_id' => 4,
                'height' => '0.3',
                'weight' => '1.4',
            ),
            490 => 
            array (
                'id' => 491,
                'name' => 'ダークライ',
                'software_id' => 4,
                'height' => '1.5',
                'weight' => '50.5',
            ),
            491 => 
            array (
                'id' => 492,
                'name' => 'シェイミ',
                'software_id' => 4,
                'height' => '0.2',
                'weight' => '2.1',
            ),
            492 => 
            array (
                'id' => 493,
                'name' => 'アルセウス',
                'software_id' => 4,
                'height' => '3.2',
                'weight' => '320',
            ),
            493 => 
            array (
                'id' => 494,
                'name' => 'ビクティニ',
                'software_id' => 5,
                'height' => '0.4',
                'weight' => '4',
            ),
            494 => 
            array (
                'id' => 495,
                'name' => 'ツタージャ',
                'software_id' => 5,
                'height' => '0.6',
                'weight' => '8.1',
            ),
            495 => 
            array (
                'id' => 496,
                'name' => 'ジャノビー',
                'software_id' => 5,
                'height' => '0.8',
                'weight' => '16',
            ),
            496 => 
            array (
                'id' => 497,
                'name' => 'ジャローダ',
                'software_id' => 5,
                'height' => '3.3',
                'weight' => '63',
            ),
            497 => 
            array (
                'id' => 498,
                'name' => 'ポカブ',
                'software_id' => 5,
                'height' => '0.5',
                'weight' => '9.9',
            ),
            498 => 
            array (
                'id' => 499,
                'name' => 'チャオブー',
                'software_id' => 5,
                'height' => '1',
                'weight' => '55.5',
            ),
            499 => 
            array (
                'id' => 500,
                'name' => 'エンブオー',
                'software_id' => 5,
                'height' => '1.6',
                'weight' => '150',
            ),
        ));
        \DB::table('monster')->insert(array (
            0 => 
            array (
                'id' => 501,
                'name' => 'ミジュマル',
                'software_id' => 5,
                'height' => '0.5',
                'weight' => '5.9',
            ),
            1 => 
            array (
                'id' => 502,
                'name' => 'フタチマル',
                'software_id' => 5,
                'height' => '0.8',
                'weight' => '24.5',
            ),
            2 => 
            array (
                'id' => 503,
                'name' => 'ダイケンキ',
                'software_id' => 5,
                'height' => '1.5',
                'weight' => '94.6',
            ),
            3 => 
            array (
                'id' => 504,
                'name' => 'ミネズミ',
                'software_id' => 5,
                'height' => '0.5',
                'weight' => '11.6',
            ),
            4 => 
            array (
                'id' => 505,
                'name' => 'ミルホッグ',
                'software_id' => 5,
                'height' => '1.1',
                'weight' => '27',
            ),
            5 => 
            array (
                'id' => 506,
                'name' => 'ヨーテリー',
                'software_id' => 5,
                'height' => '0.4',
                'weight' => '4.1',
            ),
            6 => 
            array (
                'id' => 507,
                'name' => 'ハーデリア',
                'software_id' => 5,
                'height' => '0.9',
                'weight' => '14.7',
            ),
            7 => 
            array (
                'id' => 508,
                'name' => 'ムーランド',
                'software_id' => 5,
                'height' => '1.2',
                'weight' => '61',
            ),
            8 => 
            array (
                'id' => 509,
                'name' => 'チョロネコ',
                'software_id' => 5,
                'height' => '0.4',
                'weight' => '10.1',
            ),
            9 => 
            array (
                'id' => 510,
                'name' => 'レパルダス',
                'software_id' => 5,
                'height' => '1.1',
                'weight' => '37.5',
            ),
            10 => 
            array (
                'id' => 511,
                'name' => 'ヤナップ',
                'software_id' => 5,
                'height' => '0.6',
                'weight' => '10.5',
            ),
            11 => 
            array (
                'id' => 512,
                'name' => 'ヤナッキー',
                'software_id' => 5,
                'height' => '1.1',
                'weight' => '30.5',
            ),
            12 => 
            array (
                'id' => 513,
                'name' => 'バオップ',
                'software_id' => 5,
                'height' => '0.6',
                'weight' => '11',
            ),
            13 => 
            array (
                'id' => 514,
                'name' => 'バオッキー',
                'software_id' => 5,
                'height' => '1',
                'weight' => '28',
            ),
            14 => 
            array (
                'id' => 515,
                'name' => 'ヒヤップ',
                'software_id' => 5,
                'height' => '0.6',
                'weight' => '13.5',
            ),
            15 => 
            array (
                'id' => 516,
                'name' => 'ヒヤッキー',
                'software_id' => 5,
                'height' => '1',
                'weight' => '29',
            ),
            16 => 
            array (
                'id' => 517,
                'name' => 'ムンナ',
                'software_id' => 5,
                'height' => '0.6',
                'weight' => '23.3',
            ),
            17 => 
            array (
                'id' => 518,
                'name' => 'ムシャーナ',
                'software_id' => 5,
                'height' => '1.1',
                'weight' => '60.5',
            ),
            18 => 
            array (
                'id' => 519,
                'name' => 'マメパト',
                'software_id' => 5,
                'height' => '0.3',
                'weight' => '2.1',
            ),
            19 => 
            array (
                'id' => 520,
                'name' => 'ハトーボー',
                'software_id' => 5,
                'height' => '0.6',
                'weight' => '15',
            ),
            20 => 
            array (
                'id' => 521,
                'name' => 'ケンホロウ',
                'software_id' => 5,
                'height' => '1.2',
                'weight' => '29',
            ),
            21 => 
            array (
                'id' => 522,
                'name' => 'シママ',
                'software_id' => 5,
                'height' => '0.8',
                'weight' => '29.8',
            ),
            22 => 
            array (
                'id' => 523,
                'name' => 'ゼブライカ',
                'software_id' => 5,
                'height' => '1.6',
                'weight' => '79.5',
            ),
            23 => 
            array (
                'id' => 524,
                'name' => 'ダンゴロ',
                'software_id' => 5,
                'height' => '0.4',
                'weight' => '18',
            ),
            24 => 
            array (
                'id' => 525,
                'name' => 'ガントル',
                'software_id' => 5,
                'height' => '0.9',
                'weight' => '102',
            ),
            25 => 
            array (
                'id' => 526,
                'name' => 'ギガイアス',
                'software_id' => 5,
                'height' => '1.7',
                'weight' => '260',
            ),
            26 => 
            array (
                'id' => 527,
                'name' => 'コロモリ',
                'software_id' => 5,
                'height' => '0.4',
                'weight' => '2.1',
            ),
            27 => 
            array (
                'id' => 528,
                'name' => 'ココロモリ',
                'software_id' => 5,
                'height' => '0.9',
                'weight' => '10.5',
            ),
            28 => 
            array (
                'id' => 529,
                'name' => 'モグリュー',
                'software_id' => 5,
                'height' => '0.3',
                'weight' => '8.5',
            ),
            29 => 
            array (
                'id' => 530,
                'name' => 'ドリュウズ',
                'software_id' => 5,
                'height' => '0.7',
                'weight' => '40.4',
            ),
            30 => 
            array (
                'id' => 531,
                'name' => 'タブンネ',
                'software_id' => 5,
                'height' => '1.1',
                'weight' => '31',
            ),
            31 => 
            array (
                'id' => 532,
                'name' => 'ドッコラー',
                'software_id' => 5,
                'height' => '0.6',
                'weight' => '12.5',
            ),
            32 => 
            array (
                'id' => 533,
                'name' => 'ドテッコツ',
                'software_id' => 5,
                'height' => '1.2',
                'weight' => '40',
            ),
            33 => 
            array (
                'id' => 534,
                'name' => 'ローブシン',
                'software_id' => 5,
                'height' => '1.4',
                'weight' => '87',
            ),
            34 => 
            array (
                'id' => 535,
                'name' => 'オタマロ',
                'software_id' => 5,
                'height' => '0.5',
                'weight' => '4.5',
            ),
            35 => 
            array (
                'id' => 536,
                'name' => 'ガマガル',
                'software_id' => 5,
                'height' => '0.8',
                'weight' => '17',
            ),
            36 => 
            array (
                'id' => 537,
                'name' => 'ガマゲロゲ',
                'software_id' => 5,
                'height' => '1.5',
                'weight' => '62',
            ),
            37 => 
            array (
                'id' => 538,
                'name' => 'ナゲキ',
                'software_id' => 5,
                'height' => '1.3',
                'weight' => '55.5',
            ),
            38 => 
            array (
                'id' => 539,
                'name' => 'ダゲキ',
                'software_id' => 5,
                'height' => '1.4',
                'weight' => '51',
            ),
            39 => 
            array (
                'id' => 540,
                'name' => 'クルミル',
                'software_id' => 5,
                'height' => '0.3',
                'weight' => '2.5',
            ),
            40 => 
            array (
                'id' => 541,
                'name' => 'クルマユ',
                'software_id' => 5,
                'height' => '0.5',
                'weight' => '7.3',
            ),
            41 => 
            array (
                'id' => 542,
                'name' => 'ハハコモリ',
                'software_id' => 5,
                'height' => '1.2',
                'weight' => '20.5',
            ),
            42 => 
            array (
                'id' => 543,
                'name' => 'フシデ',
                'software_id' => 5,
                'height' => '0.4',
                'weight' => '5.3',
            ),
            43 => 
            array (
                'id' => 544,
                'name' => 'ホイーガ',
                'software_id' => 5,
                'height' => '1.2',
                'weight' => '58.5',
            ),
            44 => 
            array (
                'id' => 545,
                'name' => 'ペンドラー',
                'software_id' => 5,
                'height' => '2.5',
                'weight' => '200.5',
            ),
            45 => 
            array (
                'id' => 546,
                'name' => 'モンメン',
                'software_id' => 5,
                'height' => '0.3',
                'weight' => '0.6',
            ),
            46 => 
            array (
                'id' => 547,
                'name' => 'エルフーン',
                'software_id' => 5,
                'height' => '0.7',
                'weight' => '6.6',
            ),
            47 => 
            array (
                'id' => 548,
                'name' => 'チュリネ',
                'software_id' => 5,
                'height' => '0.5',
                'weight' => '6.6',
            ),
            48 => 
            array (
                'id' => 549,
                'name' => 'ドレディア',
                'software_id' => 5,
                'height' => '1.1',
                'weight' => '16.3',
            ),
            49 => 
            array (
                'id' => 550,
                'name' => 'バスラオ',
                'software_id' => 5,
                'height' => '1',
                'weight' => '18',
            ),
            50 => 
            array (
                'id' => 551,
                'name' => 'メグロコ',
                'software_id' => 5,
                'height' => '0.7',
                'weight' => '15.2',
            ),
            51 => 
            array (
                'id' => 552,
                'name' => 'ワルビル',
                'software_id' => 5,
                'height' => '1',
                'weight' => '33.4',
            ),
            52 => 
            array (
                'id' => 553,
                'name' => 'ワルビアル',
                'software_id' => 5,
                'height' => '1.5',
                'weight' => '96.3',
            ),
            53 => 
            array (
                'id' => 554,
                'name' => 'ダルマッカ',
                'software_id' => 5,
                'height' => '0.6',
                'weight' => '37.5',
            ),
            54 => 
            array (
                'id' => 555,
                'name' => 'ヒヒダルマ',
                'software_id' => 5,
                'height' => '1.3',
                'weight' => '92.9',
            ),
            55 => 
            array (
                'id' => 556,
                'name' => 'マラカッチ',
                'software_id' => 5,
                'height' => '1',
                'weight' => '28',
            ),
            56 => 
            array (
                'id' => 557,
                'name' => 'イシズマイ',
                'software_id' => 5,
                'height' => '0.3',
                'weight' => '14.5',
            ),
            57 => 
            array (
                'id' => 558,
                'name' => 'イワパレス',
                'software_id' => 5,
                'height' => '1.4',
                'weight' => '200',
            ),
            58 => 
            array (
                'id' => 559,
                'name' => 'ズルッグ',
                'software_id' => 5,
                'height' => '0.6',
                'weight' => '11.8',
            ),
            59 => 
            array (
                'id' => 560,
                'name' => 'ズルズキン',
                'software_id' => 5,
                'height' => '1.1',
                'weight' => '30',
            ),
            60 => 
            array (
                'id' => 561,
                'name' => 'シンボラー',
                'software_id' => 5,
                'height' => '1.4',
                'weight' => '14',
            ),
            61 => 
            array (
                'id' => 562,
                'name' => 'デスマス',
                'software_id' => 5,
                'height' => '0.5',
                'weight' => '1.5',
            ),
            62 => 
            array (
                'id' => 563,
                'name' => 'デスカーン',
                'software_id' => 5,
                'height' => '1.7',
                'weight' => '76.5',
            ),
            63 => 
            array (
                'id' => 564,
                'name' => 'プロトーガ',
                'software_id' => 5,
                'height' => '0.7',
                'weight' => '16.5',
            ),
            64 => 
            array (
                'id' => 565,
                'name' => 'アバゴーラ',
                'software_id' => 5,
                'height' => '1.2',
                'weight' => '81',
            ),
            65 => 
            array (
                'id' => 566,
                'name' => 'アーケン',
                'software_id' => 5,
                'height' => '0.5',
                'weight' => '9.5',
            ),
            66 => 
            array (
                'id' => 567,
                'name' => 'アーケオス',
                'software_id' => 5,
                'height' => '1.4',
                'weight' => '32',
            ),
            67 => 
            array (
                'id' => 568,
                'name' => 'ヤブクロン',
                'software_id' => 5,
                'height' => '0.6',
                'weight' => '31',
            ),
            68 => 
            array (
                'id' => 569,
                'name' => 'ダストダス',
                'software_id' => 5,
                'height' => '1.9',
                'weight' => '107.3',
            ),
            69 => 
            array (
                'id' => 570,
                'name' => 'ゾロア',
                'software_id' => 5,
                'height' => '0.7',
                'weight' => '12.5',
            ),
            70 => 
            array (
                'id' => 571,
                'name' => 'ゾロアーク',
                'software_id' => 5,
                'height' => '1.6',
                'weight' => '81.1',
            ),
            71 => 
            array (
                'id' => 572,
                'name' => 'チラーミィ',
                'software_id' => 5,
                'height' => '0.4',
                'weight' => '5.8',
            ),
            72 => 
            array (
                'id' => 573,
                'name' => 'チラチーノ',
                'software_id' => 5,
                'height' => '0.5',
                'weight' => '7.5',
            ),
            73 => 
            array (
                'id' => 574,
                'name' => 'ゴチム',
                'software_id' => 5,
                'height' => '0.4',
                'weight' => '5.8',
            ),
            74 => 
            array (
                'id' => 575,
                'name' => 'ゴチミル',
                'software_id' => 5,
                'height' => '0.7',
                'weight' => '18',
            ),
            75 => 
            array (
                'id' => 576,
                'name' => 'ゴチルゼル',
                'software_id' => 5,
                'height' => '1.5',
                'weight' => '44',
            ),
            76 => 
            array (
                'id' => 577,
                'name' => 'ユニラン',
                'software_id' => 5,
                'height' => '0.3',
                'weight' => '1',
            ),
            77 => 
            array (
                'id' => 578,
                'name' => 'ダブラン',
                'software_id' => 5,
                'height' => '0.6',
                'weight' => '8',
            ),
            78 => 
            array (
                'id' => 579,
                'name' => 'ランクルス',
                'software_id' => 5,
                'height' => '1',
                'weight' => '20.1',
            ),
            79 => 
            array (
                'id' => 580,
                'name' => 'コアルヒー',
                'software_id' => 5,
                'height' => '0.5',
                'weight' => '5.5',
            ),
            80 => 
            array (
                'id' => 581,
                'name' => 'スワンナ',
                'software_id' => 5,
                'height' => '1.3',
                'weight' => '24.2',
            ),
            81 => 
            array (
                'id' => 582,
                'name' => 'バニプッチ',
                'software_id' => 5,
                'height' => '0.4',
                'weight' => '5.7',
            ),
            82 => 
            array (
                'id' => 583,
                'name' => 'バニリッチ',
                'software_id' => 5,
                'height' => '1.1',
                'weight' => '41',
            ),
            83 => 
            array (
                'id' => 584,
                'name' => 'バイバニラ',
                'software_id' => 5,
                'height' => '1.3',
                'weight' => '57.5',
            ),
            84 => 
            array (
                'id' => 585,
                'name' => 'シキジカ',
                'software_id' => 5,
                'height' => '0.6',
                'weight' => '19.5',
            ),
            85 => 
            array (
                'id' => 586,
                'name' => 'メブキジカ',
                'software_id' => 5,
                'height' => '1.9',
                'weight' => '92.5',
            ),
            86 => 
            array (
                'id' => 587,
                'name' => 'エモンガ',
                'software_id' => 5,
                'height' => '0.4',
                'weight' => '5',
            ),
            87 => 
            array (
                'id' => 588,
                'name' => 'カブルモ',
                'software_id' => 5,
                'height' => '0.5',
                'weight' => '5.9',
            ),
            88 => 
            array (
                'id' => 589,
                'name' => 'シュバルゴ',
                'software_id' => 5,
                'height' => '1',
                'weight' => '33',
            ),
            89 => 
            array (
                'id' => 590,
                'name' => 'タマゲタケ',
                'software_id' => 5,
                'height' => '0.2',
                'weight' => '1',
            ),
            90 => 
            array (
                'id' => 591,
                'name' => 'モロバレル',
                'software_id' => 5,
                'height' => '0.6',
                'weight' => '10.5',
            ),
            91 => 
            array (
                'id' => 592,
                'name' => 'プルリル',
                'software_id' => 5,
                'height' => '1.2',
                'weight' => '33',
            ),
            92 => 
            array (
                'id' => 593,
                'name' => 'ブルンゲル',
                'software_id' => 5,
                'height' => '2.2',
                'weight' => '135',
            ),
            93 => 
            array (
                'id' => 594,
                'name' => 'ママンボウ',
                'software_id' => 5,
                'height' => '1.2',
                'weight' => '31.6',
            ),
            94 => 
            array (
                'id' => 595,
                'name' => 'バチュル',
                'software_id' => 5,
                'height' => '0.1',
                'weight' => '0.6',
            ),
            95 => 
            array (
                'id' => 596,
                'name' => 'デンチュラ',
                'software_id' => 5,
                'height' => '0.8',
                'weight' => '14.3',
            ),
            96 => 
            array (
                'id' => 597,
                'name' => 'テッシード',
                'software_id' => 5,
                'height' => '0.6',
                'weight' => '18.8',
            ),
            97 => 
            array (
                'id' => 598,
                'name' => 'ナットレイ',
                'software_id' => 5,
                'height' => '1',
                'weight' => '110',
            ),
            98 => 
            array (
                'id' => 599,
                'name' => 'ギアル',
                'software_id' => 5,
                'height' => '0.3',
                'weight' => '21',
            ),
            99 => 
            array (
                'id' => 600,
                'name' => 'ギギアル',
                'software_id' => 5,
                'height' => '0.6',
                'weight' => '51',
            ),
            100 => 
            array (
                'id' => 601,
                'name' => 'ギギギアル',
                'software_id' => 5,
                'height' => '0.6',
                'weight' => '81',
            ),
            101 => 
            array (
                'id' => 602,
                'name' => 'シビシラス',
                'software_id' => 5,
                'height' => '0.2',
                'weight' => '0.3',
            ),
            102 => 
            array (
                'id' => 603,
                'name' => 'シビビール',
                'software_id' => 5,
                'height' => '1.2',
                'weight' => '22',
            ),
            103 => 
            array (
                'id' => 604,
                'name' => 'シビルドン',
                'software_id' => 5,
                'height' => '2.1',
                'weight' => '80.5',
            ),
            104 => 
            array (
                'id' => 605,
                'name' => 'リグレー',
                'software_id' => 5,
                'height' => '0.5',
                'weight' => '9',
            ),
            105 => 
            array (
                'id' => 606,
                'name' => 'オーベム',
                'software_id' => 5,
                'height' => '1',
                'weight' => '34.5',
            ),
            106 => 
            array (
                'id' => 607,
                'name' => 'ヒトモシ',
                'software_id' => 5,
                'height' => '0.3',
                'weight' => '3.1',
            ),
            107 => 
            array (
                'id' => 608,
                'name' => 'ランプラー',
                'software_id' => 5,
                'height' => '0.6',
                'weight' => '13',
            ),
            108 => 
            array (
                'id' => 609,
                'name' => 'シャンデラ',
                'software_id' => 5,
                'height' => '1',
                'weight' => '34.3',
            ),
            109 => 
            array (
                'id' => 610,
                'name' => 'キバゴ',
                'software_id' => 5,
                'height' => '0.6',
                'weight' => '18',
            ),
            110 => 
            array (
                'id' => 611,
                'name' => 'オノンド',
                'software_id' => 5,
                'height' => '1',
                'weight' => '36',
            ),
            111 => 
            array (
                'id' => 612,
                'name' => 'オノノクス',
                'software_id' => 5,
                'height' => '1.8',
                'weight' => '105.5',
            ),
            112 => 
            array (
                'id' => 613,
                'name' => 'クマシュン',
                'software_id' => 5,
                'height' => '0.5',
                'weight' => '8.5',
            ),
            113 => 
            array (
                'id' => 614,
                'name' => 'ツンベアー',
                'software_id' => 5,
                'height' => '2.6',
                'weight' => '260',
            ),
            114 => 
            array (
                'id' => 615,
                'name' => 'フリージオ',
                'software_id' => 5,
                'height' => '1.1',
                'weight' => '148',
            ),
            115 => 
            array (
                'id' => 616,
                'name' => 'チョボマキ',
                'software_id' => 5,
                'height' => '0.4',
                'weight' => '7.7',
            ),
            116 => 
            array (
                'id' => 617,
                'name' => 'アギルダー',
                'software_id' => 5,
                'height' => '0.8',
                'weight' => '25.3',
            ),
            117 => 
            array (
                'id' => 618,
                'name' => 'マッギョ',
                'software_id' => 5,
                'height' => '0.7',
                'weight' => '11',
            ),
            118 => 
            array (
                'id' => 619,
                'name' => 'コジョフー',
                'software_id' => 5,
                'height' => '0.9',
                'weight' => '20',
            ),
            119 => 
            array (
                'id' => 620,
                'name' => 'コジョンド',
                'software_id' => 5,
                'height' => '1.4',
                'weight' => '35.5',
            ),
            120 => 
            array (
                'id' => 621,
                'name' => 'クリムガン',
                'software_id' => 5,
                'height' => '1.6',
                'weight' => '139',
            ),
            121 => 
            array (
                'id' => 622,
                'name' => 'ゴビット',
                'software_id' => 5,
                'height' => '1',
                'weight' => '92',
            ),
            122 => 
            array (
                'id' => 623,
                'name' => 'ゴルーグ',
                'software_id' => 5,
                'height' => '2.8',
                'weight' => '330',
            ),
            123 => 
            array (
                'id' => 624,
                'name' => 'コマタナ',
                'software_id' => 5,
                'height' => '0.5',
                'weight' => '10.2',
            ),
            124 => 
            array (
                'id' => 625,
                'name' => 'キリキザン',
                'software_id' => 5,
                'height' => '1.6',
                'weight' => '70',
            ),
            125 => 
            array (
                'id' => 626,
                'name' => 'バッフロン',
                'software_id' => 5,
                'height' => '1.6',
                'weight' => '94.6',
            ),
            126 => 
            array (
                'id' => 627,
                'name' => 'ワシボン',
                'software_id' => 5,
                'height' => '0.5',
                'weight' => '10.5',
            ),
            127 => 
            array (
                'id' => 628,
                'name' => 'ウォーグル',
                'software_id' => 5,
                'height' => '1.5',
                'weight' => '41',
            ),
            128 => 
            array (
                'id' => 629,
                'name' => 'バルチャイ',
                'software_id' => 5,
                'height' => '0.5',
                'weight' => '9',
            ),
            129 => 
            array (
                'id' => 630,
                'name' => 'バルジーナ',
                'software_id' => 5,
                'height' => '1.2',
                'weight' => '39.5',
            ),
            130 => 
            array (
                'id' => 631,
                'name' => 'クイタラン',
                'software_id' => 5,
                'height' => '1.4',
                'weight' => '58',
            ),
            131 => 
            array (
                'id' => 632,
                'name' => 'アイアント',
                'software_id' => 5,
                'height' => '0.3',
                'weight' => '33',
            ),
            132 => 
            array (
                'id' => 633,
                'name' => 'モノズ',
                'software_id' => 5,
                'height' => '0.8',
                'weight' => '17.3',
            ),
            133 => 
            array (
                'id' => 634,
                'name' => 'ジヘッド',
                'software_id' => 5,
                'height' => '1.4',
                'weight' => '50',
            ),
            134 => 
            array (
                'id' => 635,
                'name' => 'サザンドラ',
                'software_id' => 5,
                'height' => '1.8',
                'weight' => '160',
            ),
            135 => 
            array (
                'id' => 636,
                'name' => 'メラルバ',
                'software_id' => 5,
                'height' => '1.1',
                'weight' => '28.8',
            ),
            136 => 
            array (
                'id' => 637,
                'name' => 'ウルガモス',
                'software_id' => 5,
                'height' => '1.6',
                'weight' => '46',
            ),
            137 => 
            array (
                'id' => 638,
                'name' => 'コバルオン',
                'software_id' => 5,
                'height' => '2.1',
                'weight' => '250',
            ),
            138 => 
            array (
                'id' => 639,
                'name' => 'テラキオン',
                'software_id' => 5,
                'height' => '1.9',
                'weight' => '260',
            ),
            139 => 
            array (
                'id' => 640,
                'name' => 'ビリジオン',
                'software_id' => 5,
                'height' => '2',
                'weight' => '200',
            ),
            140 => 
            array (
                'id' => 641,
                'name' => 'トルネロス',
                'software_id' => 5,
                'height' => '1.5',
                'weight' => '63',
            ),
            141 => 
            array (
                'id' => 642,
                'name' => 'ボルトロス',
                'software_id' => 5,
                'height' => '1.5',
                'weight' => '61',
            ),
            142 => 
            array (
                'id' => 643,
                'name' => 'レシラム',
                'software_id' => 5,
                'height' => '3.2',
                'weight' => '330',
            ),
            143 => 
            array (
                'id' => 644,
                'name' => 'ゼクロム',
                'software_id' => 5,
                'height' => '2.9',
                'weight' => '345',
            ),
            144 => 
            array (
                'id' => 645,
                'name' => 'ランドロス',
                'software_id' => 5,
                'height' => '1.5',
                'weight' => '68',
            ),
            145 => 
            array (
                'id' => 646,
                'name' => 'キュレム',
                'software_id' => 5,
                'height' => '3',
                'weight' => '325',
            ),
            146 => 
            array (
                'id' => 647,
                'name' => 'ケルディオ',
                'software_id' => 5,
                'height' => '1.4',
                'weight' => '48.5',
            ),
            147 => 
            array (
                'id' => 648,
                'name' => 'メロエッタ',
                'software_id' => 5,
                'height' => '0.6',
                'weight' => '6.5',
            ),
            148 => 
            array (
                'id' => 649,
                'name' => 'ゲノセクト',
                'software_id' => 5,
                'height' => '1.5',
                'weight' => '82.5',
            ),
            149 => 
            array (
                'id' => 650,
                'name' => 'ハリマロン',
                'software_id' => 6,
                'height' => '0.4',
                'weight' => '9',
            ),
            150 => 
            array (
                'id' => 651,
                'name' => 'ハリボーグ',
                'software_id' => 6,
                'height' => '0.7',
                'weight' => '29',
            ),
            151 => 
            array (
                'id' => 652,
                'name' => 'ブリガロン',
                'software_id' => 6,
                'height' => '1.6',
                'weight' => '90',
            ),
            152 => 
            array (
                'id' => 653,
                'name' => 'フォッコ',
                'software_id' => 6,
                'height' => '0.4',
                'weight' => '9.4',
            ),
            153 => 
            array (
                'id' => 654,
                'name' => 'テールナー',
                'software_id' => 6,
                'height' => '1',
                'weight' => '14.5',
            ),
            154 => 
            array (
                'id' => 655,
                'name' => 'マフォクシー',
                'software_id' => 6,
                'height' => '1.5',
                'weight' => '39',
            ),
            155 => 
            array (
                'id' => 656,
                'name' => 'ケロマツ',
                'software_id' => 6,
                'height' => '0.3',
                'weight' => '7',
            ),
            156 => 
            array (
                'id' => 657,
                'name' => 'ゲコガシラ',
                'software_id' => 6,
                'height' => '0.6',
                'weight' => '10.9',
            ),
            157 => 
            array (
                'id' => 658,
                'name' => 'ゲッコウガ',
                'software_id' => 6,
                'height' => '1.5',
                'weight' => '40',
            ),
            158 => 
            array (
                'id' => 659,
                'name' => 'ホルビー',
                'software_id' => 6,
                'height' => '0.4',
                'weight' => '5',
            ),
            159 => 
            array (
                'id' => 660,
                'name' => 'ホルード',
                'software_id' => 6,
                'height' => '1',
                'weight' => '42.4',
            ),
            160 => 
            array (
                'id' => 661,
                'name' => 'ヤヤコマ',
                'software_id' => 6,
                'height' => '0.3',
                'weight' => '1.7',
            ),
            161 => 
            array (
                'id' => 662,
                'name' => 'ヒノヤコマ',
                'software_id' => 6,
                'height' => '0.7',
                'weight' => '16',
            ),
            162 => 
            array (
                'id' => 663,
                'name' => 'ファイアロー',
                'software_id' => 6,
                'height' => '1.2',
                'weight' => '24.5',
            ),
            163 => 
            array (
                'id' => 664,
                'name' => 'コフキムシ',
                'software_id' => 6,
                'height' => '0.3',
                'weight' => '2.5',
            ),
            164 => 
            array (
                'id' => 665,
                'name' => 'コフーライ',
                'software_id' => 6,
                'height' => '0.3',
                'weight' => '8.4',
            ),
            165 => 
            array (
                'id' => 666,
                'name' => 'ビビヨン',
                'software_id' => 6,
                'height' => '1.2',
                'weight' => '17',
            ),
            166 => 
            array (
                'id' => 667,
                'name' => 'シシコ',
                'software_id' => 6,
                'height' => '0.6',
                'weight' => '13.5',
            ),
            167 => 
            array (
                'id' => 668,
                'name' => 'カエンジシ',
                'software_id' => 6,
                'height' => '1.5',
                'weight' => '81.5',
            ),
            168 => 
            array (
                'id' => 669,
                'name' => 'フラベベ',
                'software_id' => 6,
                'height' => '0.1',
                'weight' => '0.1',
            ),
            169 => 
            array (
                'id' => 670,
                'name' => 'フラエッテ',
                'software_id' => 6,
                'height' => '0.2',
                'weight' => '0.9',
            ),
            170 => 
            array (
                'id' => 671,
                'name' => 'フラージェス',
                'software_id' => 6,
                'height' => '1.1',
                'weight' => '10',
            ),
            171 => 
            array (
                'id' => 672,
                'name' => 'メェークル',
                'software_id' => 6,
                'height' => '0.9',
                'weight' => '31',
            ),
            172 => 
            array (
                'id' => 673,
                'name' => 'ゴーゴート',
                'software_id' => 6,
                'height' => '1.7',
                'weight' => '91',
            ),
            173 => 
            array (
                'id' => 674,
                'name' => 'ヤンチャム',
                'software_id' => 6,
                'height' => '0.6',
                'weight' => '8',
            ),
            174 => 
            array (
                'id' => 675,
                'name' => 'ゴロンダ',
                'software_id' => 6,
                'height' => '2.1',
                'weight' => '136',
            ),
            175 => 
            array (
                'id' => 676,
                'name' => 'トリミアン',
                'software_id' => 6,
                'height' => '1.2',
                'weight' => '28',
            ),
            176 => 
            array (
                'id' => 677,
                'name' => 'ニャスパー',
                'software_id' => 6,
                'height' => '0.3',
                'weight' => '3.5',
            ),
            177 => 
            array (
                'id' => 678,
            'name' => 'ニャオニクス(♂)',
                'software_id' => 6,
                'height' => '0.6',
                'weight' => '8.5',
            ),
            178 => 
            array (
                'id' => 679,
                'name' => 'ヒトツキ',
                'software_id' => 6,
                'height' => '0.8',
                'weight' => '2',
            ),
            179 => 
            array (
                'id' => 680,
                'name' => 'ニダンギル',
                'software_id' => 6,
                'height' => '0.8',
                'weight' => '4.5',
            ),
            180 => 
            array (
                'id' => 681,
                'name' => 'ギルガルド',
                'software_id' => 6,
                'height' => '1.7',
                'weight' => '53',
            ),
            181 => 
            array (
                'id' => 682,
                'name' => 'シュシュプ',
                'software_id' => 6,
                'height' => '0.2',
                'weight' => '0.5',
            ),
            182 => 
            array (
                'id' => 683,
                'name' => 'フレフワン',
                'software_id' => 6,
                'height' => '0.8',
                'weight' => '15.5',
            ),
            183 => 
            array (
                'id' => 684,
                'name' => 'ペロッパフ',
                'software_id' => 6,
                'height' => '0.4',
                'weight' => '3.5',
            ),
            184 => 
            array (
                'id' => 685,
                'name' => 'ペロリーム',
                'software_id' => 6,
                'height' => '0.8',
                'weight' => '5',
            ),
            185 => 
            array (
                'id' => 686,
                'name' => 'マーイーカ',
                'software_id' => 6,
                'height' => '0.4',
                'weight' => '3.5',
            ),
            186 => 
            array (
                'id' => 687,
                'name' => 'カラマネロ',
                'software_id' => 6,
                'height' => '1.5',
                'weight' => '47',
            ),
            187 => 
            array (
                'id' => 688,
                'name' => 'カメテテ',
                'software_id' => 6,
                'height' => '0.5',
                'weight' => '31',
            ),
            188 => 
            array (
                'id' => 689,
                'name' => 'ガメノデス',
                'software_id' => 6,
                'height' => '1.3',
                'weight' => '96',
            ),
            189 => 
            array (
                'id' => 690,
                'name' => 'クズモー',
                'software_id' => 6,
                'height' => '0.5',
                'weight' => '7.3',
            ),
            190 => 
            array (
                'id' => 691,
                'name' => 'ドラミドロ',
                'software_id' => 6,
                'height' => '1.8',
                'weight' => '81.5',
            ),
            191 => 
            array (
                'id' => 692,
                'name' => 'ウデッポウ',
                'software_id' => 6,
                'height' => '0.5',
                'weight' => '8.3',
            ),
            192 => 
            array (
                'id' => 693,
                'name' => 'ブロスター',
                'software_id' => 6,
                'height' => '1.3',
                'weight' => '35.3',
            ),
            193 => 
            array (
                'id' => 694,
                'name' => 'エリキテル',
                'software_id' => 6,
                'height' => '0.5',
                'weight' => '6',
            ),
            194 => 
            array (
                'id' => 695,
                'name' => 'エレザード',
                'software_id' => 6,
                'height' => '1',
                'weight' => '21',
            ),
            195 => 
            array (
                'id' => 696,
                'name' => 'チゴラス',
                'software_id' => 6,
                'height' => '0.8',
                'weight' => '26',
            ),
            196 => 
            array (
                'id' => 697,
                'name' => 'ガチゴラス',
                'software_id' => 6,
                'height' => '2.5',
                'weight' => '270',
            ),
            197 => 
            array (
                'id' => 698,
                'name' => 'アマルス',
                'software_id' => 6,
                'height' => '1.3',
                'weight' => '25.2',
            ),
            198 => 
            array (
                'id' => 699,
                'name' => 'アマルルガ',
                'software_id' => 6,
                'height' => '2.7',
                'weight' => '225',
            ),
            199 => 
            array (
                'id' => 700,
                'name' => 'ニンフィア',
                'software_id' => 6,
                'height' => '1',
                'weight' => '23.5',
            ),
            200 => 
            array (
                'id' => 701,
                'name' => 'ルチャブル',
                'software_id' => 6,
                'height' => '0.8',
                'weight' => '21.5',
            ),
            201 => 
            array (
                'id' => 702,
                'name' => 'デデンネ',
                'software_id' => 6,
                'height' => '0.2',
                'weight' => '2.2',
            ),
            202 => 
            array (
                'id' => 703,
                'name' => 'メレシー',
                'software_id' => 6,
                'height' => '0.3',
                'weight' => '5.7',
            ),
            203 => 
            array (
                'id' => 704,
                'name' => 'ヌメラ',
                'software_id' => 6,
                'height' => '0.3',
                'weight' => '2.8',
            ),
            204 => 
            array (
                'id' => 705,
                'name' => 'ヌメイル',
                'software_id' => 6,
                'height' => '0.8',
                'weight' => '17.5',
            ),
            205 => 
            array (
                'id' => 706,
                'name' => 'ヌメルゴン',
                'software_id' => 6,
                'height' => '2',
                'weight' => '150.5',
            ),
            206 => 
            array (
                'id' => 707,
                'name' => 'クレッフィ',
                'software_id' => 6,
                'height' => '0.2',
                'weight' => '3',
            ),
            207 => 
            array (
                'id' => 708,
                'name' => 'ボクレー',
                'software_id' => 6,
                'height' => '0.4',
                'weight' => '7',
            ),
            208 => 
            array (
                'id' => 709,
                'name' => 'オーロット',
                'software_id' => 6,
                'height' => '1.5',
                'weight' => '71',
            ),
            209 => 
            array (
                'id' => 710,
            'name' => 'バケッチャ(小)',
                'software_id' => 6,
                'height' => '0.4',
                'weight' => '5',
            ),
            210 => 
            array (
                'id' => 711,
            'name' => 'パンプジン(小)',
                'software_id' => 6,
                'height' => '0.9',
                'weight' => '12.5',
            ),
            211 => 
            array (
                'id' => 712,
                'name' => 'カチコール',
                'software_id' => 6,
                'height' => '1',
                'weight' => '99.5',
            ),
            212 => 
            array (
                'id' => 713,
                'name' => 'クレベース',
                'software_id' => 6,
                'height' => '2',
                'weight' => '505',
            ),
            213 => 
            array (
                'id' => 714,
                'name' => 'オンバット',
                'software_id' => 6,
                'height' => '0.5',
                'weight' => '8',
            ),
            214 => 
            array (
                'id' => 715,
                'name' => 'オンバーン',
                'software_id' => 6,
                'height' => '1.5',
                'weight' => '85',
            ),
            215 => 
            array (
                'id' => 716,
                'name' => 'ゼルネアス',
                'software_id' => 6,
                'height' => '3',
                'weight' => '215',
            ),
            216 => 
            array (
                'id' => 717,
                'name' => 'イベルタル',
                'software_id' => 6,
                'height' => '5.8',
                'weight' => '203',
            ),
            217 => 
            array (
                'id' => 718,
                'name' => 'ジガルデ',
                'software_id' => 6,
                'height' => '5',
                'weight' => '305',
            ),
        ));
        
        
    }
}