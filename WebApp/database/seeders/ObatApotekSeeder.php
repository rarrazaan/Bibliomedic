<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Apotek;

class ObatApotekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'OBH Combi',
                'harga' => 21000,
                'qty' => 17  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'OBH Combi',
                'harga' => 20000,
                'qty' => 17 
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'OBH Combi',
                'harga' => 22000,
                'qty' => 10
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'OBH Combi',
                'harga' => 21000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'OBH Combi',
                'harga' => 21000,
                'qty' => 5 
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'OBH Combi',
                'harga' => 22000,
                'qty' => 16
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'OBH Combi',
                'harga' => 20000,
                'qty' => 20  
            ],

            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Antangin JRG',
                'harga' => 4500,
                'qty' => 27  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Antangin JRG',
                'harga' => 5000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Antangin JRG',
                'harga' => 6000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Antangin JRG',
                'harga' => 5000,
                'qty' => 17  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Antangin JRG',
                'harga' => 6000,
                'qty' => 14  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Antangin JRG',
                'harga' => 5000,
                'qty' => 16  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Antangin JRG',
                'harga' => 7000,
                'qty' => 16  
            ],

            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sanmol',
                'harga' => 11000,
                'qty' => 16  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sanmol',
                'harga' => 12000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sanmol',
                'harga' => 13000,
                'qty' => 5  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sanmol',
                'harga' => 11000,
                'qty' => 17  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sanmol',
                'harga' => 13000,
                'qty' => 17  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sanmol',
                'harga' => 11000,
                'qty' => 10  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sanmol',
                'harga' => 12000,
                'qty' => 27  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sanmol',
                'harga' => 11500,
                'qty' => 17  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sanmol',
                'harga' => 13000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sanmol',
                'harga' => 11000,
                'qty' => 20  
            ],

            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sanadryl Expectoran Sirup',
                'harga' => 24000,
                'qty' => 17  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sanadryl Expectoran Sirup',
                'harga' => 24000,
                'qty' => 14  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sanadryl Expectoran Sirup',
                'harga' => 24000,
                'qty' => 16  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sanadryl Expectoran Sirup',
                'harga' => 24000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sanadryl Expectoran Sirup',
                'harga' => 24000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sanadryl Expectoran Sirup',
                'harga' => 24000,
                'qty' => 10  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sanadryl Expectoran Sirup',
                'harga' => 24000,
                'qty' => 17  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sanadryl Expectoran Sirup',
                'harga' => 24000,
                'qty' => 17  
            ],

            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sidomuncul Vitamin C 1000 Jeruk',
                'harga' => 3000,
                'qty' => 10  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sidomuncul Vitamin C 1000 Jeruk',
                'harga' => 4000,
                'qty' => 17  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sidomuncul Vitamin C 1000 Jeruk',
                'harga' => 3000,
                'qty' => 5  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sidomuncul Vitamin C 1000 Jeruk',
                'harga' => 3500,
                'qty' => 5  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sidomuncul Vitamin C 1000 Jeruk',
                'harga' => 4000,
                'qty' => 5  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sidomuncul Vitamin C 1000 Jeruk',
                'harga' => 4500,
                'qty' => 16  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sidomuncul Vitamin C 1000 Jeruk',
                'harga' => 3000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sidomuncul Vitamin C 1000 Jeruk',
                'harga' => 4000,
                'qty' => 16  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sidomuncul Vitamin C 1000 Jeruk',
                'harga' => 4000,
                'qty' => 5  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Sidomuncul Vitamin C 1000 Jeruk',
                'harga' => 4000,
                'qty' => 20  
            ],
            
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Stimuno Syrup',
                'harga' => 21000,
                'qty' => 16  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Stimuno Syrup',
                'harga' => 21000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Stimuno Syrup',
                'harga' => 21000,
                'qty' => 10  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Stimuno Syrup',
                'harga' => 21000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Stimuno Syrup',
                'harga' => 21000,
                'qty' => 5  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Stimuno Syrup',
                'harga' => 21000,
                'qty' => 27  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Stimuno Syrup',
                'harga' => 21000,
                'qty' => 10  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Stimuno Syrup',
                'harga' => 21000,
                'qty' => 10  
            ],
            
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Vicks Vaporub',
                'harga' => 16000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Vicks Vaporub',
                'harga' => 17000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Vicks Vaporub',
                'harga' => 17000,
                'qty' => 5  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Vicks Vaporub',
                'harga' => 16000,
                'qty' => 14  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Vicks Vaporub',
                'harga' => 17000,
                'qty' => 5  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Vicks Vaporub',
                'harga' => 17500,
                'qty' => 5  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Vicks Vaporub',
                'harga' => 16000,
                'qty' => 5  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Vicks Vaporub',
                'harga' => 17000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Vicks Vaporub',
                'harga' => 16000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Vicks Vaporub',
                'harga' => 17000,
                'qty' => 20  
            ],
            
            
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Komix Herbal',
                'harga' => 26000,
                'qty' => 14  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Komix Herbal',
                'harga' => 25000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Komix Herbal',
                'harga' => 26000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Komix Herbal',
                'harga' => 25000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Komix Herbal',
                'harga' => 25000,
                'qty' => 27  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Komix Herbal',
                'harga' => 26000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Komix Herbal',
                'harga' => 25500,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Komix Herbal',
                'harga' => 26000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Komix Herbal',
                'harga' => 26000,
                'qty' => 20  
            ],
            [
                'apotek_id' => Apotek::all()->random()->id,
                'nama_obat' => 'Komix Herbal',
                'harga' => 25000,
                'qty' => 20  
            ],
        ];
        DB::table('obat_apoteks')->insert($data);
    }
}