<?php

namespace Database\Seeders;

use App\Models\Toko;
use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // isi tokonya disini ikuti contoh
        $jam_buka = '08:00:00';
        $jam_tutup = '22:00:00';


        Toko::create([
            'x' => '-0.5750325', // latlang
            'y' => '117.192165', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Nusantara Barbershop',
            'pemilik' => 'Rian Hidayat',
            'no_hp' => '082122074447',
            'alamat' => 'Jl. Reformasi, Bukuan, Kec. Palaran, Kota Samarinda, Kalimantan Timur 75256'

        ]);

        Toko::create([
            'x' => '-0.5756347', // latlang
            'y' => '117.1543341', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Mister Tjoekoer Barbershop',
            'pemilik' => 'Nurhuda Pasuryan',
            'no_hp' => '085348443508',
            'alamat' => 'Jl. Ampera, Rw. Makmur, Kec. Palaran, Kota Samarinda, Kalimantan Timur 75256'
        ]);

        Toko::create([
            'x' => '-0.5649395', //latlang
            'y' => '117.154533', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'PUTRA DAERAH BARBERSHOP',
            'pemilik' => 'Nopyanto',
            'no_hp' => '085231660149',
            'alamat' => 'C5PC+2RF, RW.Rw, Rw. Makmur, Kec. Palaran, Kota Samarinda, Kalimantan Timur 75251'
        ]);


        Toko::create([
            'x' => '-0.5640677', //latlang
            'y' => '117.1699189', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Yoga BARBERSHOP',
            'pemilik' => 'Yoga',
            'no_hp' => '0821369903809',
            'alamat' => 'Jl. Trikora No.RT 08, Rw. Makmur, Kec. Palaran, Kota Samarinda, Kalimantan Timur 75243'
        ]);

        Toko::create([
            'x' => '-0.5643179', //latlang
            'y' => '117.1715161', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'M&J BARBERSHOP',
            'pemilik' => 'Rory Januari',
            'no_hp' => '081351764470',
            'alamat' => 'Jl. Trikora No.27, Rw. Makmur, Kec. Palaran, Kota Samarinda, Kalimantan Timur 75251'
        ]);

        Toko::create([
            'x' => '-0.5503765', //latlang
            'y' => '117.1429718', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Ponixcut BARBERSHOP',
            'pemilik' => 'Asnawi',
            'no_hp' => '082325283474',
            'alamat' => 'Jl. Ampera, Rw. Makmur, Kec. Palaran, Kota Samarinda, Kalimantan Timur 75251'
        ]);

        Toko::create([
            'x' => '-0.5392191', //latlang
            'y' => '117.1406544', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Eghe BARBERSHOP',
            'pemilik' => 'Aldiansyah',
            'no_hp' => '085246855833',
            'alamat' => 'F5P2+R34, Mesjid, Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.5181056', //latlang
            'y' => '117.1155918', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Bark BARBERSHOP',
            'pemilik' => 'firman',
            'no_hp' => '082157996011',
            'alamat' => 'JL.Harun Nafsi,Rapak Dalam,Kec, Kec, Rapak Dalam, Kec. Loa Janan Ilir, Kota Samarinda, Kalimantan Timur 75131'
        ]);

        Toko::create([
            'x' => '-0.5349277', //latlang
            'y' => '117.1366203', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => '23 BARBERSHOP',
            'pemilik' => 'Aslam',
            'no_hp' => '082334228639',
            'alamat' => 'Jl. Daeng Mangkona No.RT.17, Baqa, Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75131'
        ]);


        Toko::create([
            'x' => '-0.5264018', //latlang
            'y' => '117.0735187', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'DTJOEKOER BARBERSHOP',
            'pemilik' => 'Muhammad Rafisal',
            'no_hp' => '081350316661',
            'alamat' => 'Jl. Latsitarda II, Karang Asam Ulu, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243'
        ]);

        Toko::create([
            'x' => '-0.5178829', //latlang
            'y' => '117.0573481', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Barrack-Cut BARBERSHOP',
            'pemilik' => 'Galih Novialdi',
            'no_hp' => '081350204332',
            'alamat' => 'Jl. Jakarta, Loa Bakung, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243'
        ]);

        Toko::create([
            'x' => '-0.5011533', //latlang
            'y' => '117.0581956', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Awiers BARBERSHOP',
            'pemilik' => 'Awi',
            'no_hp' => '082288978898',
            'alamat' => 'Jl. Senyiur 2, Loa Bakung, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243'
        ]);

        Toko::create([
            'x' => '-0.5016683', //latlang
            'y' => '117.0748468', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Classics BARBERSHOP',
            'pemilik' => 'Andre',
            'no_hp' => '082144858888',
            'alamat' => 'Jl. Meranti No.31 RT 16, Karang Anyar, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75124'
        ]);

        Toko::create([
            'x' => '-0.4953656', //latlang
            'y' => '117.0888093', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Rock N Cut BARBERSHOP',
            'pemilik' => 'Rahman',
            'no_hp' => '085787801698',
            'alamat' => 'Jl. P Antasari No.51, Tlk. Lerong Ulu, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75126'
        ]);

        Toko::create([
            'x' => '-0.4852595', //latlang
            'y' => '117.0962485', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Bara BARBERSHOP',
            'pemilik' => 'Steven Alexander Grean Tekwan',
            'no_hp' => '085778882375',
            'alamat' => 'Jl. P Antasari No.51, Tlk. Lerong Ulu, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75126'

        ]);
        Toko::create([
            'x' => '-0.4852595', //latlang
            'y' => '117.0962485', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'BeJo BARBERSHOP',
            'pemilik' => 'RM Rohman',
            'no_hp' => '087810112930',
            'alamat' => 'Jl. P. Suryanata, Air Putih, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243'

        ]);
        Toko::create([
            'x' => '-0.4838023', //latlang
            'y' => '117.1197994', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Keluncum BARBERSHOP',
            'pemilik' => 'ery hardani',
            'no_hp' => '08125505653',
            'alamat' => 'jl. Ir. H. Juanda, Air Putih, Samarinda Ulu, Samarinda City, East Kalimantan 75243'
        ]);

        Toko::create([
            'x' => '-0.4968168', //latlang
            'y' => '117.1277936', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Bejo2 BARBERSHOP',
            'pemilik' => 'Hamdan',
            'no_hp' => '081254305471',
            'alamat' => 'Jl. Pasundan No.19, RT.37, Jawa, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243'
        ]);

        Toko::create([
            'x' => '-0.489073', //latlang
            'y' => '117.1375965', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'CORNERS BARBERSHOP',
            'pemilik' => 'Didik Purwanto',
            'no_hp' => '085346903383',
            'alamat' => 'Jl. Pahlawan No.7, Dadi Mulya, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.5009662', //latlang
            'y' => '117.1418923', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'GoodFellas BARBERSHOP',
            'pemilik' => 'GoodFellas',
            'no_hp' => '082168149000',
            'alamat' => 'Jl. Pulau Kalimantan No.14, Pelabuhan, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.4971751', //latlang
            'y' => '117.1375317', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'JORDAN HAIR STUDIO BARBERSHOP',
            'pemilik' => 'Cepot',
            'no_hp' => '0811584523',
            'alamat' => 'Jl. Imam Bonjol No.7, Pelabuhan, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.4969176', //latlang
            'y' => '117.1436686', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'JooxBox BARBERSHOP',
            'pemilik' => 'Wahid',
            'no_hp' => '08115832880',
            'alamat' => 'Jl. Danau Toba No.36, Sungai Pinang Luar, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75113'
        ]);

        Toko::create([
            'x' => '-0.5024174', //latlang
            'y' => '117.1566129', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Star BARBERSHOP',
            'pemilik' => 'Nesya nesa',
            'no_hp' => '08113542787',
            'alamat' => 'Jl. Pangeran Hidayatullah No.20, Karang Mumus, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.4897849', //latlang
            'y' => '117.1535891', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Outcast BARBERSHOP',
            'pemilik' => 'Irwan',
            'no_hp' => '085250162960',
            'alamat' => 'Jl. Urip Sumoharjo, No. 84, Sidomulyo, Kec. Samarinda Ilir, Sidomulyo, Kec. Samarinda Utara, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.4835628', //latlang
            'y' => '117.1549363', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Alaika BARBERSHOP',
            'pemilik' => 'juman mahkota',
            'no_hp' => '082250337778',
            'alamat' => 'Gg. 16 No.2a, Bandara, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.487017', //latlang
            'y' => '117.1365352', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'MERAH PUTIH BARBERSHOP',
            'pemilik' => 'Akbar',
            'no_hp' => '085102522099',
            'alamat' => 'Jl. Kemakmuran No.15, Sungai Pinang Dalam, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75117'
        ]);

        Toko::create([
            'x' => '-0.4815055', //latlang
            'y' => '117.1513263', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Bohemians BARBERSHOP',
            'pemilik' => 'Felix',
            'no_hp' => '085158880619',
            'alamat' => 'Jl. Camar No.81, Bandara, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75117'
        ]);

        Toko::create([
            'x' => '-0.4907095', //latlang
            'y' => '117.1288195', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Old Razors BARBERSHOP',
            'pemilik' => 'Reza',
            'no_hp' => '082297787856',
            'alamat' => 'Jl. Ruko Grand Mutiara Blk. AA No.5, Tlk. Lerong Ilir, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75128'
        ]);

        Toko::create([
            'x' => '-0.4907095', //latlang
            'y' => '117.1288195', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'TANGGA BARBERSHOP',
            'pemilik' => 'Alex Sun',
            'no_hp' => '0823936908811',
            'alamat' => 'Jl. Wijaya Kusuma XII No.12, Air Hitam, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243'
        ]);

        Toko::create([
            'x' => '-0.482293', //latlang
            'y' => '117.1152717', //latlang
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Bujang BARBERSHOP',
            'pemilik' => 'Alex Sun',
            'no_hp' => '0823936908811',
            'alamat' => 'Jl. Juanda 2 No.24, Air Hitam, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243'
        ]);
    }
}
