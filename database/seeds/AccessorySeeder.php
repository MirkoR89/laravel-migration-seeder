<?php

use App\Accessory;
use Illuminate\Database\Seeder;

class AccessorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accessories_list = config('accessories');

        foreach ($accessories_list as $accessory) {
            $newAccessory = new Accessory();
            $newAccessory->charger = $accessory['charger'];
            $newAccessory->cable = $accessory['cable'];
            $newAccessory->earphones = $accessory['earphones'];
            $newAccessory->save();
        }
    }
}
