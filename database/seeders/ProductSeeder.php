<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'HyperX 16GB (2x8GB) 3200MHz CL16 Predator RGB',
            'price' => '419,00',
            'description' => 'Jeżeli szukasz ekstra wydajności niezbędnej do utrzymania się na topie, ultraszybka pamięć HyperX Predator DDR4 RGB zapewni Ci niezbędną przewagę.',
            'category' => 'pamiec_ram',
            'gallery' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-large,,2018/10/pr_2018_10_19_13_1_16_231_04.jpg'
        ]);
        DB::table('products')->insert([
            'name' => 'AMD Ryzen 7 3800X',
            'price' => '1649,00',
            'description' => 'Procesor AMD Ryzen 7 3800X wprowadzi Cię na nowym poziom wydajności.',
            'category' => 'procesor',
            'gallery' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-large,,2019/7/pr_2019_7_19_11_28_56_534_00.jpg'
        ]);
        DB::table('products')->insert([
            'name' => 'WD 240GB 2,5" SATA SSD Green',
            'price' => '129,00',
            'description' => 'Dyski WD Green zapewniają najwyższą wydajność i niezawodność podczas codziennego użytkowania komputera stacjonarnego lub laptopa.',
            'category' => 'dysk_ssd',
            'gallery' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-large,,2017/12/pr_2017_12_14_8_33_6_4_02.jpg'
        ]);
        DB::table('products')->insert([
            'name' => 'KRUX Leda',
            'price' => '289,00',
            'description' => 'Zapewnij swojemu desktopowi niepowtarzalną oprawę z czarną obudową Krux Leda. Ta oryginalna konstrukcja wyróżnia się gamingowym designem, uzupełnionym przez przeszklony panel przedni i boczny oraz podświetlenie wentylatorów LED RGB.',
            'category' => 'obudowa',
            'gallery' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-large,,2019/9/pr_2019_9_13_9_29_20_167_08.jpg'
        ]);
    }
}
