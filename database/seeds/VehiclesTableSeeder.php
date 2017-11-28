<?php

use App\Vehicle;
use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();

        Vehicle::create([
            'company_id'            => 1,
            'registration_number'   => "BK1952ET",
            'status'                => 0,
            'active'                => 1,
        ]);

        Vehicle::create([
            'company_id'            => 1,
            'registration_number'   => "BK1800DU",
            'status'                => 0,
            'active'                => 1,
        ]);
        
        $this->enableForeignKeys();
    }
}
