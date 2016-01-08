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
        $placas = \DB::table('category')->insert([
            'name' => 'Placas Base',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        $procesadores = \DB::table('category')->insert([
            'name' => 'Procesadores',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        $discos = \DB::table('category')->insert([
            'name' => 'Discos Duros',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        $graficas = \DB::table('category')->insert([
            'name' => 'Tarjetas Gráficas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        $memorias = \DB::table('category')->insert([
            'name' => 'Memorias RAM',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        $sonido = \DB::table('category')->insert([
            'name' => 'Tarjetas de Sonido',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        $carcasas = \DB::table('category')->insert([
            'name' => 'Carcasas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        $ventilacion = \DB::table('category')->insert([
            'name' => 'Ventilación',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        $fuentes = \DB::table('category')->insert([
            'name' => 'Fuentes de Alimentación',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        $cables = \DB::table('category')->insert([
            'name' => 'Cables',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        $perifericos = \DB::table('category')->insert([
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
            'name'          => 'MSI Z170A PC Mate',
            'price'         => '114',
            'image'         => 'img/placas/msi_z170a_pc_mate.jpg',
            'discount'      => '0.1',
            'promotion'     => '1',
            'offer'         => '0',
            'category_id'   => $placas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
    }
}

/*
    \DB::table('product')->insert([
            'name'          => 'Gigabyte GA-H81M',
            'price'         => '',
            'image'         => 'img/placas/gygabite_ga_z97p.jpg',
            'discount'      => '',
            'promotion'     => '',
            'category_id'   => $placas,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);

 */