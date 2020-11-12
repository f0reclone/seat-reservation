<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dates')->insert(
            [
                [
                    'id' => 1,
                    'location' => 'Neuwied-Gladbach',
                    'description' => 'Samstag den 12. Dezember um 18 Uhr im Bethaus Gladbach',
                    'starts_at' => '2020-12-12 18:00',
                    'ends_at' => '2020-12-12 20:00',
                    'max_quantity' => '100'
                ],
                [
                    'id' => 2,
                    'location' => 'Anhausen',
                    'description' => 'Sonntag den 13. Dezember um 16 Uhr im Bethaus Anhausen',
                    'starts_at' => '2020-12-13 16:00',
                    'ends_at' => '2020-12-13 18:00',
                    'max_quantity' => '100'
                ],
                [
                    'id' => 3,
                    'location' => 'Bad-Ems',
                    'description' => 'Samstag den 20. Dezember um 18 Uhr im Bethaus Bad-Ems',
                    'starts_at' => '2020-12-20 18:00',
                    'ends_at' => '2020-12-20 20:00',
                    'max_quantity' => '40'
                ],[
                    'id' => 4,
                    'location' => 'Heimathaus Neuwied',
                    'description' => 'Sonntag den 20. Dezember um 17 Uhr im Heimathaus Neuwied',
                    'starts_at' => '2020-12-20 17:00',
                    'ends_at' => '2020-12-20 19:00',
                    'max_quantity' => '150'
                ],
            ]
        );
    }
}
