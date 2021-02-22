<?php

use App\SmartPhone;
use Illuminate\Database\Seeder;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phones_list = [
            [
                'brand' => 'Apple',
                'model_name'=> 'iPhone 12 Mini',
                'os'=> 'iOS'
            ],
            [
                'brand' => 'Oneplus',
                'model_name'=> 'One Plus Nord',
                'os'=> 'Android 11'
            ],
            [
                'brand' => 'Motorola',
                'model_name'=> 'Edge',
                'os'=> 'Android 11'
            ],
            [
                'brand' => 'Oppo',
                'model_name'=> 'Reno 4',
                'os'=> 'Android 11'
            ]
        ];

        foreach ($phones_list as $phone) {
            $newPhone = new SmartPhone();
            $newPhone->brand =$phone['brand'];
            $newPhone->model_name =$phone['model_name'];
            $newPhone->os =$phone['os'];
            $newPhone->save();
        }
    }
}