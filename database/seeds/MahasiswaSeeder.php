<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            DB::table('mahasiswa')->insert([
                'nim' => $faker->randomNumber(8, true),
                'nama' => $faker->name(),
                'gender' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'prodi' => $faker->randomElement(['Sistem Informasi', 'Informatika', 'Management', 'Kedokteran', 'Akuntansi', 'Bioteknologi', 'Arsitektur', 'Desain Produk']),
                'minat' => $faker->randomElement(['Front End Developer', 'Data Analyst', 'Marketing', 'Desain', 'Audit', 'Perpajakan', 'UI/UX', 'Ahli Gizi', 'Ahli Bedah', 'Pengusaha', 'Arsitek']),
            ]);
        }
    }

}
