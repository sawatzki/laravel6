<?php

use Illuminate\Database\Seeder;
use App\Model\Appointment;
use Illuminate\Support\Facades\DB;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appointments[] = [
            'user_id' => 1,
            'title' => 'App: 1',
            'description' => 'Description ... 1',
        ];

        for ($i = 2; $i < 11; $i++) {
            $appointments[] = [
                'title' => 'App: ' . $i,
                'description' => 'Description ... ' . $i,
                'user_id' => rand(1, 3)
            ];
        }

        DB::table('appointments')->insert($appointments);
    }
}
