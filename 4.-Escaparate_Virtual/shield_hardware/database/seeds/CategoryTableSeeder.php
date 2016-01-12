<?php

use Illuminate\Database\Seeder;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $placas = \DB::table('category')->insertGetId([
            'name' => 'Placas Base',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        $procesadores = \DB::table('category')->insertGetId([
            'name' => 'Procesadores',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        $discos = \DB::table('category')->insertGetId([
            'name' => 'Discos Duros',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        $graficas = \DB::table('category')->insertGetId([
            'name' => 'Tarjetas Gráficas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        $memorias = \DB::table('category')->insertGetId([
            'name' => 'Memorias RAM',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        $carcasas = \DB::table('category')->insertGetId([
            'name' => 'Carcasas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        $ventilacion = \DB::table('category')->insertGetId([
            'name' => 'Ventilación',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        $fuentes = \DB::table('category')->insertGetId([
            'name' => 'Fuentes de Alimentación',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        $perifericos = \DB::table('category')->insertGetId([
            'name' => 'Perifericos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        
        \DB::table('product')->insert([
            'name'          => 'Gigabyte GA-H81M',
            'price'         => '51.75',
            'image'         => 'img/placas/gigabyte_h81m.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $placas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        
        \DB::table('product')->insert([
            'name'          => 'Gigabyte GA-Z97P-D3',
            'price'         => '89.95',
            'image'         => 'img/placas/gygabite_ga_z97p.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $placas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
                
        \DB::table('product')->insert([
            'name'          => 'MSI 970 Gaming',
            'price'         => '103',
            'image'         => 'img/placas/msi_970_gaming.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $placas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Gigabyte GA-B85M-D3H',
            'price'         => '67.25',
            'image'         => 'img/placas/gigabyte_ga_b85m_d3h.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $placas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Gigabyte GA-970A',
            'price'         => '63.95',
            'image'         => 'img/placas/gigabyte_ga_970a.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $placas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'MSI Z97 Gaming 5',
            'price'         => '147',
            'image'         => 'img/placas/msi_z97_gaming_5.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $placas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Gigabyte GA-F2A88XM',
            'price'         => '65.95',
            'image'         => 'img/placas/gigabyte_z97x.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $placas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Asus Z97-Pro Gamer',
            'price'         => '136',
            'image'         => 'img/placas/asus_z97_pro_gamer.jpg',
            'discount'      => '0.1',
            'promotion'     => '1',
            'offer'         => '0',
            'category_id'   => $placas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Gigabyte Z97X-Gaming 3',
            'price'         => '125',
            'image'         => 'img/placas/gigabyte_z97x_gaming_3.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $placas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Gigabyte H97-HD3',
            'price'         => '90.95',
            'image'         => 'img/placas/gigabyte_h97_hd3.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $placas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Asrock H81M-VG4 R2.0',
            'price'         => '44.95',
            'image'         => 'img/placas/asrock_h81m_vg4_r2_0.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '1',
            'category_id'   => $placas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Asrock 980DE3/U3S3 Rev 2.0',
            'price'         => '59.95',
            'image'         => 'img/placas/asrock_980de3_u3s3.jpg',
            'discount'      => '0.1',
            'promotion'     => '1',
            'offer'         => '0',
            'category_id'   => $placas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
         \DB::table('product')->insert([
            'name'          => 'MSI H81M-E33',
            'price'         => '46.95',
            'image'         => 'img/placas/msi_h81m_e33.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $placas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Gigabyte Z97-HD3',
            'price'         => '106',
            'image'         => 'img/placas/gigabyte_z97_hd3.jpg',
            'discount'      => '0.1',
            'promotion'     => '1',
            'offer'         => '0',
            'category_id'   => $placas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Asus Z97-P',
            'price'         => '99.95',
            'image'         => 'img/placas/asus_z97_p.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '1',
            'category_id'   => $placas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Asus H81M-PLUS',
            'price'         => '56.95',
            'image'         => 'img/placas/asus_h81m_plus.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $placas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Asus H81M-K',
            'price'         => '48',
            'image'         => 'img/placas/asus_h81m_k.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '1',
            'category_id'   => $placas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Intel Core i5-4460 3.2Ghz',
            'price'         => '176',
            'image'         => 'img/procesadores/Intel Core i5-4460.jpg',
            'discount'      => '0.1',
            'promotion'     => '1',
            'offer'         => '0',
            'category_id'   => $procesadores,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Intel Core i7-4790K 4.0Ghz',
            'price'         => '326',
            'image'         => 'img/procesadores/intel_core_i7_4790k_4_0_ghz.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $procesadores,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Intel Core i5-4690K 3.5Ghz',
            'price'         => '229',
            'image'         => 'img/procesadores/intel_core_i5_4690k_3_5ghz.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $procesadores,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Intel Core i7-4790 3.6Ghz',
            'price'         => '296',
            'image'         => 'img/procesadores/intel_core_i7_4790_3_6ghz.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $procesadores,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'AMD FX Series FX-8350 4.0Ghz',
            'price'         => '171',
            'image'         => 'img/procesadores/amd_fx_series_fx_8350_4_0ghz.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '1',
            'category_id'   => $procesadores,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Intel i7-6700K 4.0Ghz',
            'price'         => '388',
            'image'         => 'img/procesadores/intel_i7_6700k_4_0ghz.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $procesadores,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'AMD FX Series FX-6300 3.5Ghz',
            'price'         => '100',
            'image'         => 'img/procesadores/amd_fx_series_fx_6300_3_5ghz.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '1',
            'category_id'   => $procesadores,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Intel Core i3-4170 3.7GHz',
            'price'         => '116',
            'image'         => 'img/procesadores/intel_core_i3_4170_3_7ghz.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $procesadores,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Intel i5-6600K 3.5Ghz',
            'price'         => '257',
            'image'         => 'img/procesadores/intel_i5_6600k_3_5ghz.jpg',
            'discount'      => '0.1',
            'promotion'     => '1',
            'offer'         => '0',
            'category_id'   => $procesadores,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Intel Core i5-6600 3.3GHZ',
            'price'         => '214',
            'image'         => 'img/procesadores/intel_core_i5_6600_3_3ghz.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $procesadores,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'AMD FX Series FX-4300 3.8Ghz',
            'price'         => '69',
            'image'         => 'img/procesadores/amd_fx_series_fx_4300_3_8ghz.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $procesadores,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Intel Core i5-4690 3.5Ghz',
            'price'         => '215',
            'image'         => 'img/procesadores/intel_core_i5_4690_3_5ghz.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $procesadores,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'AMD FX Series FX-8320 3.5Ghz',
            'price'         => '139',
            'image'         => 'img/procesadores/amd_fx_series_fx_8320_3_5ghz.jpg',
            'discount'      => '0.1',
            'promotion'     => '1',
            'offer'         => '0',
            'category_id'   => $procesadores,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Intel Core i5-4590 3.3Ghz',
            'price'         => '195',
            'image'         => 'img/procesadores/intel_core_i5_4590_3_3ghz.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $procesadores,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'AMD A10-5800K 3.80Ghz',
            'price'         => '89.95',
            'image'         => 'img/procesadores/amd_a10_5800k_3_80ghz.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $procesadores,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Intel Core i5-6500 3.2Ghz',
            'price'         => '205',
            'image'         => 'img/procesadores/intel_core_i5_6500_3_2ghz.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $procesadores,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Intel Core i7-6700 3.4GHz',
            'price'         => '338',
            'image'         => 'img/procesadores/intel_core_i7_6700_3_4ghz.jpg',
            'discount'      => '0.1',
            'promotion'     => '1',
            'offer'         => '0',
            'category_id'   => $procesadores,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Seagate Barracuda 7200.14 1TB',
            'price'         => '45.95',
            'image'         => 'img/discos/seagate_barracuda_7200_14_1tb.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $discos,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Samsung 850 Evo SSD 500GB',
            'price'         => '159',
            'image'         => 'img/discos/samsung_850_evo_ssd_series_500gb.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $discos,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Seagate Desktop 7200.14 2TB',
            'price'         => '67.75',
            'image'         => 'img/discos/seagate_barracuda_7200_14_2tb.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $discos,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Kingston SSDNow V300 120GB',
            'price'         => '48',
            'image'         => 'img/discos/kingston_ssdnow_v300_120gb.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $discos,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Sandisk SSD Plus 120GB SATA3',
            'price'         => '46.95',
            'image'         => 'img/discos/sandisk_ssd_plus_120gb_sata3.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $discos,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Toshiba MQ01ABD100 2.5" 1TB',
            'price'         => '47.95',
            'image'         => 'img/discos/toshiba_mq01abd100_2_5__1tb_540.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $discos,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
         \DB::table('product')->insert([
            'name'          => 'Gigabyte GeForce GTX 960',
            'price'         => '222',
            'image'         => 'img/graficas/gigabyte_geforce_gtx_960_oc.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $graficas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
         \DB::table('product')->insert([
            'name'          => 'MSI GeForce GTX 970 Gaming',
            'price'         => '369',
            'image'         => 'img/graficas/msi_geforce_gtx_970.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $graficas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
         \DB::table('product')->insert([
            'name'          => 'Gigabyte GeForce GTX 970',
            'price'         => '365',
            'image'         => 'img/graficas/gigabyte_geforce_gtx_970.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '1',
            'category_id'   => $graficas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
         \DB::table('product')->insert([
            'name'          => 'MSI GeForce GTX970 Armor 2X',
            'price'         => '362',
            'image'         => 'img/graficas/msi_geforce_gtx970_oc__4gb_gddr5.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $graficas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
         \DB::table('product')->insert([
            'name'          => 'Gigabyte GeForce Titan Xtreme',
            'price'         => '1159',
            'image'         => 'img/graficas/gigabyte_geforce_titan_x_xtreme.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $graficas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
         \DB::table('product')->insert([
            'name'          => 'Asus GeForce GTX 980 Ti',
            'price'         => '828',
            'image'         => 'img/graficas/asus_geforce_gtx_980_ti.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $graficas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
         \DB::table('product')->insert([
            'name'          => 'Asus GeForce GTX Titan X',
            'price'         => '1118',
            'image'         => 'img/graficas/asus_geforce_gtx_titan.jpg',
            'discount'      => '0.1',
            'promotion'     => '1',
            'offer'         => '1',
            'category_id'   => $graficas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
         \DB::table('product')->insert([
            'name'          => 'Sapphire R7 370 Nitro',
            'price'         => '175',
            'image'         => 'img/graficas/sapphire_r7_370_nitro_dual.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $graficas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
         \DB::table('product')->insert([
            'name'          => 'Sapphire R9 280X Vapor-X',
            'price'         => '235',
            'image'         => 'img/graficas/sapphire_r9_280x_vapor_x_tri.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $graficas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
         \DB::table('product')->insert([
            'name'          => 'Sapphire R9 390 Tri-X',
            'price'         => '362',
            'image'         => 'img/graficas/sapphire_r9_390x_nitrotri.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $graficas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
         \DB::table('product')->insert([
            'name'          => 'MSI GeForce GT730',
            'price'         => '71',
            'image'         => 'img/graficas/msi_geforce_gt730.jpg',
            'discount'      => '0.1',
            'promotion'     => '1',
            'offer'         => '1',
            'category_id'   => $graficas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Inno3D GeForce GTX 980',
            'price'         => '699',
            'image'         => 'img/graficas/inno3d_geforce_gtx_980.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '1',
            'category_id'   => $graficas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'G.Skill Ripjaws V DDR4',
            'price'         => '124',
            'image'         => 'img/memorias/g_skill_ripjaws_v_red.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '1',
            'category_id'   => $memorias,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Kingston HyperX DDR4',
            'price'         => '67.95',
            'image'         => 'img/memorias/kingston_hiperx_savage_ddr4.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $memorias,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Corsair Vengeance Red DDR4',
            'price'         => '128',
            'image'         => 'img/memorias/corsair_vengeance_ddr4.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $memorias,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'G.Skill Trident Z DDR4',
            'price'         => '319',
            'image'         => 'img/memorias/g_skill_trident_z_ddr4_3400.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $memorias,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Corsair Vengeance LPX DDR4',
            'price'         => '116',
            'image'         => 'img/memorias/corsair_vengeance_lpx_ddr4.jpg',
            'discount'      => '0.1',
            'promotion'     => '1',
            'offer'         => '1',
            'category_id'   => $memorias,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Corsair Vengeance Red DDR4',
            'price'         => '128',
            'image'         => 'img/memorias/corsair_vengeance_ddr4.jpg',
            'discount'      => '0.1',
            'promotion'     => '1',
            'offer'         => '0',
            'category_id'   => $memorias,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Kingston HyperX Savage DDR4',
            'price'         => '1129',
            'image'         => 'img/memorias/kingston_hyperx_savage_ddr4.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '1',
            'category_id'   => $memorias,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Crucial Memory DDR4',
            'price'         => '42',
            'image'         => 'img/memorias/crucial_server_memory_ddr4.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $memorias,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'G.Skill Ripjaws X DDR3 1866',
            'price'         => '80.95',
            'image'         => 'img/memorias/g_skill_ripjaws_x_ddr3.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $memorias,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
         
        \DB::table('product')->insert([
            'name'          => 'G.Skill Ripjaws X DDR3',
            'price'         => '79.95',
            'image'         => 'img/memorias/g_skill_ripjaws_x_ddr3_1600.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $memorias,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'G.Skill Ripjaws X DDR3 Red',
            'price'         => '77.95',
            'image'         => 'img/memorias/g_skill_ripjaws_x_ddr3_red.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $memorias,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'G.Skill Aegis DDR3',
            'price'         => '75',
            'image'         => 'img/memorias/g_skill_aegis_ddr3_1333.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $memorias,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'G.Skill Ripjaws X Blue DDR3',
            'price'         => '51.95',
            'image'         => 'img/memorias/g_skill_ripjaws_x_blue_ddr3.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $memorias,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'G.Skill Ripjaws X DDR3',
            'price'         => '97.95',
            'image'         => 'img/memorias/g_skill_ripjaws_x_ddr3_2133.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $memorias,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'G.Skill Aegis DDR3',
            'price'         => '40.95',
            'image'         => 'img/memorias/g_skill_aegis_ddr3_1333_PC3.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $memorias,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'NOX Coolbay SX USB 3.0',
            'price'         => '41.95',
            'image'         => 'img/carcasas/nox_coolbay_sx_usb_3_0.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $carcasas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'NZXT S340 USB 3.0',
            'price'         => '66.95',
            'image'         => 'img/carcasas/nzxt_s340_con_ventana_negra_roja.jpg',
            'discount'      => '0.1',
            'promotion'     => '1',
            'offer'         => '1',
            'category_id'   => $carcasas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'MSI Cubi-009BEU Intel 3805U',
            'price'         => '169',
            'image'         => 'img/carcasas/msi_cubi_011beu_negro.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $carcasas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Zalman Z11 Plus USB 3.0 Roja',
            'price'         => '69.90',
            'image'         => 'img/carcasas/zalman_z11_plus_roja.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $carcasas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Sharkoon VG4-W USB 3.0',
            'price'         => '37.95',
            'image'         => 'img/carcasas/sharkoon_vg4_w_negra_verde.jpg',
            'discount'      => '0.1',
            'promotion'     => '1',
            'offer'         => '1',
            'category_id'   => $carcasas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Nox Raven USB 3.0',
            'price'         => '26.95',
            'image'         => 'img/carcasas/nox_raven_usb_3_0.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $carcasas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        
        \DB::table('product')->insert([
            'name'          => 'AeroCool V3X Advance',
            'price'         => '34',
            'image'         => 'img/carcasas/aerocool_v3x_advance_black_edition.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $carcasas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'NOX Hummer ZN USB 3.0 Negra',
            'price'         => '79.90',
            'image'         => 'img/carcasas/nox_hummer_zn_usb_3_0_negra.jpg',
            'discount'      => '0.1',
            'promotion'     => '1',
            'offer'         => '1',
            'category_id'   => $carcasas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Zalman Z11 Plus USB 3.0 Azul',
            'price'         => '66',
            'image'         => 'img/carcasas/zalman_z11_plus_azul.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $carcasas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Tacens Mars Vulcano 750W',
            'price'         => '64.75',
            'image'         => 'img/fuentes/tacens_mars_gaming_mpu750.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $fuentes,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'L-Link Fuente 650W',
            'price'         => '22.95',
            'image'         => 'img/fuentes/l_link_fuente_de_alimentacion.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $fuentes,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Corsair CX750M 750W 80',
            'price'         => '99',
            'image'         => 'img/fuentes/corsair_cx750m_750w_80plus.jpg',
            'discount'      => '0.1',
            'promotion'     => '1',
            'offer'         => '0',
            'category_id'   => $fuentes,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'AeroCool Extreme 700W',
            'price'         => '95',
            'image'         => 'img/fuentes/aerocool_extreme_silence_700w.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $fuentes,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Corsair RM850 850W 80',
            'price'         => '149',
            'image'         => 'img/fuentes/corsair_rm850_850w_80.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $fuentes,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Enermax MaxPro 500W',
            'price'         => '54.95',
            'image'         => 'img/fuentes/enermax_maxpro_400w.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '1',
            'category_id'   => $fuentes,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Aerocool Strike-X 600W',
            'price'         => '80',
            'image'         => 'img/fuentes/aerocool_strike_x_600w.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $fuentes,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Enermax Revolution X´t 630W',
            'price'         => '95.95',
            'image'         => 'img/fuentes/enermax_revolucion_x__t_630w.jpg',
            'discount'      => '0.1',
            'promotion'     => '1',
            'offer'         => '1',
            'category_id'   => $fuentes,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Corsair RM650 650W',
            'price'         => '130',
            'image'         => 'img/fuentes/corsair_rm650_650w.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $fuentes,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'AeroCool Strike-X 1100W',
            'price'         => '155',
            'image'         => 'img/fuentes/aerocool_strike_x_power_800w.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $fuentes,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Seasonic S12II 430W',
            'price'         => '59.95',
            'image'         => 'img/fuentes/seasonic_s12ii_bronze.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '1',
            'category_id'   => $fuentes,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Nox CoolFan 120mm LED Azul',
            'price'         => '6.95',
            'image'         => 'img/ventilacion/nox_coolfan_120mm_led_azul.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '1',
            'category_id'   => $ventilacion,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Nox CoolFan 120mm LED Rojo',
            'price'         => '5.95',
            'image'         => 'img/ventilacion/nox_coolfan_120mm_led_rojo.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $ventilacion,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Nox CoolFan 120mm LED Azul',
            'price'         => '6.95',
            'image'         => 'img/ventilacion/nox_coolfan_120mm_led_azul.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $ventilacion,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Cooler Master V8 GTS V2',
            'price'         => '79',
            'image'         => 'img/ventilacion/cooler_master_v8_gts.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $ventilacion,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Enermax Liqmax II 240',
            'price'         => '72.95',
            'image'         => 'img/ventilacion/enermax_liqmax_ii_240.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $ventilacion,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Cryorig H5 Universal',
            'price'         => '49.90',
            'image'         => 'img/ventilacion/cryorig_h5_universal.jpg',
            'discount'      => '0.1',
            'promotion'     => '1',
            'offer'         => '1',
            'category_id'   => $ventilacion,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Microsoft Xbox 360 Controller',
            'price'         => '29.95',
            'image'         => 'img/perifericos/microsoft_xbox_360_controller.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $perifericos,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'NOX Kyus Auriculares Gaming',
            'price'         => '34.90',
            'image'         => 'img/perifericos/nox_kyus_auriculares_gaming.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $perifericos,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        \DB::table('product')->insert([
            'name'          => 'Newskill Atami Speed Alfombrilla',
            'price'         => '9.95',
            'image'         => 'img/perifericos/newskill_atami_speed_alfombrill.jpg',
            'discount'      => '0.1',
            'promotion'     => '0',
            'offer'         => '0',
            'category_id'   => $perifericos,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
    }
}

