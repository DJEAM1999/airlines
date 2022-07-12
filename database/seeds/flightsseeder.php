<?php

use Illuminate\Database\Seeder;
use App\flights;
class flightsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=flights::creat([
            'Num_flight'=> '8U123',
            'From'=>'Libya',
            'To'=>'Tunis',
            'Partner' => 2,
            'Discreption'=>'this flight ',
            'Time'=>'19:05:00',
            'Date'=>'2022-05-31',
            'Price'=>500.00

        ]);
    }
}
